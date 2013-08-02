# OAuth and the 23 API
# flags=comments

[OAuth](http://oauth.net) is a secure, open protocol, which specifies a standard way to access protected data on different websites. Roughly, the protocol outlines 1) a method for letting users grant an application access to a web service API, and 2) how to communicate using these credentials.

[The 23 API](index) uses OAuth to authorize access for a few different reasons:

* It's [well-documented](http://oauth.net/documentation/).
* It's [open and secure](http://oauth.net/advisories/).
* It's used by Google, Yahoo, Twitter and multiple other web services. This means that developers may be able to re-use code, and that it's almost certain that they'll be able to re-use one of [the stable OAuth libraries available for most popular programming languages](http://oauth.net/code/).

The purpose of the document is not to introduce OAuth; for this there are [great beginner's guides](http://oauth.net/documentation/getting-started/). Instead this document outlines [how the API works with OAuth](#signing-and-making-requests); illustrates [the authorization flow](#using-oauth-step-by-step); and it lists some [sample scripts](#sample-scripts) to help you get started. 

---

## Signing and making requests

This section details the specifics of the OAuth implementation in the 23 API. For newcomers to OAuth, the following sections introduces some tricky parts of the protocol and gives an example of the authorization and communication flow.

The 23 API only supports [the 1.0a version](http://oauth.net/core/1.0a/) of the OAuth protocol, and `oauth_callback` is required when asking for a request token.

We only support the [the HMAC-SHA1 signature method](http://oauth.net/core/1.0a/#anchor15).

OAuth parameters and signatures may be included either in an HTTP `Authorization` header, in the post body of a POST request, or in the query string of a GET request. Please note, that you won't be able to include _any_ parameters in the URL query string during POST requests.



To get help testing your request signatures, check out [this wonderful tool](http://hueniverse.com/2008/10/beginners-guide-to-oauth-part-iv-signing-requests/).

#### Endpoints

When talking to the 23 API you'll be using these URLs:

<table>
  <tr>
    <td style="border-top:1px solid #ccc;"><b>Authorization</b></td>
    <td style="border-top:1px solid #ccc;">&nbsp;</td>
  </tr>
  <tr>
    <td>Request Token URL: &nbsp;</td>
    <td><i>http://api.visualplatform.net/oauth/request_token</i></td>
  </tr>
  <tr>
    <td>Access Token URL &nbsp;</td>
    <td><i>http://api.visualplatform.net/oauth/access_token</i></td>
  </tr>
  <tr>
    <td>Authorize URL: &nbsp;</td>
    <td><i>http://api.visualplatform.net/oauth/authorize</i></td>
  </tr>
  <tr>
    <td style="border-top:1px solid #ccc;"><b>Communication</b></td>
    <td style="border-top:1px solid #ccc;">&nbsp;</td>
  </tr>
  <tr>
    <td style="border-bottom:1px solid #ccc;">API endpoint &nbsp;</td>
    <td style="border-bottom:1px solid #ccc;"><i>http://&lt;your.domain.com&gt;/api/method</i><br/><small>(i.e. http://videos.example.com/api/photo/upload)</small></td>
  </tr>
</table>


#### Domains

It's clear from these URLs that you'll be changing domain context half-way through the process. This switch is handled by reading the response body from `access_token`:

    oauth_token=12-N9KNOy8ec3BWqCtR75HZ
      &oauth_token_secret=yndh3sxnlasykxpsmposzrjeyUptdumfwax0rjdobqimkytvsdkacztlFqzvyfgh
      &domain=videos.example.com
      &user_id=12345

Armed with this response, you'll know which domain (`domain`) to query and which user (`user_id`) has authorized your access.


#### Callbacks 

During the authorization stage, you can control your user's log-in flows by setting a callback when calling `request_token`. For example, set `oauth_callback=http://mysite.com/callback` to control how the user is redirected back to your application after authorizing your request token. When `oauth_callback` is omitted or set to `oob` (_out of band_), the end user is given a `oauth_verifier` which your application must manually ask for in order to exchange your request token for an access token. The callback process is [outlined in the OAuth docs](http://oauth.net/core/1.0a/#provider_redirects).

#### Multipart forms

In accordance with [the OAuth request normalization specification](http://oauth.net/core/1.0a/#rfc.section.9.1.1) the following parts of the request must be included in the signature:

* All parameters in the OAuth HTTP Authorization header except `realm` and `oauth_signature`.
* All parameters from the URLs in the query part of an HTTP GET.
* All parameters from the request body of a `application/x-www-form-urlencoded` HTTP POST request.

This probably seems like an excessively boring thing to iterate here, but it's important to note that the parameters of a `multipart/form-data` HTTP POST request are **not** included in the signature. This means, for example, that the content of a photo or video file uploaded via the API won't be included in the signature. 

#### Access token timeouts

When issued, access tokens and their secrets do not time out on their own. However, users are always able to revoke their authorization, so your application (or consumer) should be able to handle this case smoothly.


---

## Understanding OAuth keys and tokens

There are three key/secret pairs to be aware of in OAuth:

* A **consumer key** is used to identify the application, while its associated **consumer secret** is used to sign all requests and thus verify the identity of the application.
* A **request token** is retrieved by the application alone, and is used to ensure that an end user authorizes your application to submit API operations on the user's behalf. Its associated **request token secret** is used to sign requests during the authorization process.
* An **access token** is retrieved after the end user has authorized your application. Its associated **access token secret** is used to sign all requests on behalf of the user and thus verify the identity of both the application and the user.

The end-goal of the authorization process where the user grants application access is an access token and secret. Once this process is completed, only the consumer key/token and the access key/token is needed to make and assign requests.

Make absolutely sure that you never share either secret with an untrusted party. The OAuth protocol is set up to allow interactions without ever exchanging secrets or passwords, and the security of the communication hinges on secrets actually being secret.

---

## Setting up your application

To get a consumer key and a consumer secret, you'll need to create an application. Applications are set up by users of [23 Video](http://www.23video.com) or [Visualblog](http://www.visualblog.net). To create an application:

* Go to your site and log in.
* Go to _Your profile_ and click the _Manage applications_ link.
* Hit the _Create your own application_ button.
* Now, fill in and submit the form to get your consumer key and consumer secret. When you set up your application, you'll be able to select a [permission levels](index#permission-level) for the app. The level cannot be changed at a later stage.

Your new consumer key is only valid on your own site domain. If you need a generic consumer key/token, which can be used across sites, [contact 23](mailto:team@23company.com).

### Privileged credentials

Applications set up in this manner can only gain _read_, _write_, or _admin_ access. To gain [_super_-level access](index#permission-level) to a site, a special consumer key must be set up **by the site's owner**. 

These privileged credentials are set up under _Settings_ &rarr; _API and Applications_. 

The set of credentials includes both consumer key/secret and an access token/access token secret. Thus, when you're using privileged credentials to access the API, you won't need to go through the user authentication process. Even if this seems like a nice shortcut in many cases, we encourage that you only use privileged credentials when it is absolutely required by your application.


---

## Using OAuth step-by-step

This section takes you through the process of retrieving access credentials and then using those credentials.

In this sample, we have a consumer with:

    consumer_key = 571156-cuQla8tP5tzjf70znIwS
    consumer_secret = u5pHMUpV8wB7LxwieAnrexE8CkzoZTVs6G626KKqfPVqFp0TxT


### Step 1: Get a request token

Using your consumer credentials, retrieve a request token from the provider:

    GET http://api.visualplatform.net/oauth/request_token
    Authorization: OAuth realm="http://api.visualplatform.net/", 
      oauth_callback="http%3A%2F%2Fmy.example.com%2Fcallback", 
      oauth_consumer_key="571156-cuQla8tP5tzjf70znIwS", 
      oauth_nonce="48e12d7291d99b0416f3bb30a9d2ea72", 
      oauth_signature="ozL65XeaXv4LHnJ6y3Q8H%2F5tERI%3D", 
      oauth_signature_method="HMAC-SHA1", oauth_timestamp="1267547746", oauth_version="1.0"

Signature base string:

    GET&http%3A%2F%2Fapi.visualplatform.net%2Foauth%2Frequest_token&oauth_callback%3Dhttp%253A%252
    F%252Fmy.example.com%252Fcallback%26oauth_consumer_key%3D571156-cuQla8tP5tzjf70znIwS%26oauth_n
    once%3Deb6cf9e826b6a99e6c4998bb9605f994%26oauth_signature_method%3DHMAC-SHA1%26oauth_timestamp
    %3D1267547723%26oauth_version%3D1.0

The response to this request gets you both a request token and a related secret:

    oauth_token=12-8vr9EplGHHR8Ciem8SLu
      &oauth_token_secret=qQptayCQG1ZQYbS73FE6WdNz4wKjYJqcvLzI9DjGD1UKP9wruL
      &oauth_callback_confirmed=true


### Step 2: Have user authorize the token

Using the `request_token` from step 1, redirect your user to the following URL to authorize your request token:

     http://api.visualplatform.net/oauth/authorize?oauth_token=12-8vr9EplGHHR8Ciem8SLu

This will direct the user through the steps of authorizing your application's access. When the process is over, the user is redirected back to the URL specified in `oauth_callback` from step 1:

    http://my.example.com/callback?oauth_verifier=z3pjUoZU6KN8B5n4V2Fy
      &oauth_token=12%2deWOZMtDeAJMiFJoWxbDj


### Step 3: Exchange the request token for an access token (and get domain)

From the callback URL, you'll be able to exchange the now-authorized `request_token` for an `access_token`. Here, we're also using the `oauth_verifier` from step 3:

    GET http://api.visualplatform.net/oauth/access_token
    Authorization: OAuth realm="http://api.visualplatform.net/", 
      oauth_consumer_key="571156-cuQla8tP5tzjf70znIwS", 
      oauth_nonce="936dff7fa3d5674b1eb5c217ce6701b3", 
      oauth_signature="vFb0a6CGy6rtXeuEfZlhOHvjhjk%3D", oauth_signature_method="HMAC-SHA1", 
      oauth_timestamp="1267547767", oauth_token="12-8vr9EplGHHR8Ciem8SLu", 
      oauth_verifier="z3pjUoZU6KN8B5n4V2Fy", oauth_version="1.0"

Signature base string:

    GET&http%3A%2F%2Fapi.visualplatform.net%2Foauth%2Faccess_token&oauth_consumer_key%3D571156-cuQ
    la8tP5tzjf70znIwS%26oauth_nonce%3D936dff7fa3d5674b1eb5c217ce6701b3%26oauth_signature_method%3D
    HMAC-SHA1%26oauth_timestamp%3D1267547767%26oauth_token%3D12-8vr9EplGHHR8Ciem8SLu%26oauth_verif
    ier%3Dz3pjUoZU6KN8B5n4V2Fy%26oauth_version%3D1.0

The response includes your new access token and the related secret -- but you'll also get user information and, more importantly, the `domain` for the data you'll be accessing:

    oauth_token=3-gnS3NKP74AzcJsvbFi3Z
      &oauth_token_secret=83x7n5rR2eT1IV0zLNptvxxy1R3WFptGozka38tDtLZmSDYboW
      &domain=v.23video.com
      &user_id=455432


### Step 4: Talk to the 23 API

To talk to the API, you'll need to store `oauth_token`, `oauth_token_secret` and `domain` from step 3. Along with your consumer credentials, these are used to query the API. 

For example, to get a list of photos:

    POST http://v.23video.com/api/photo/list
    Authorization: OAuth realm="http://v.23video.com/", 
      oauth_consumer_key="571156-cuQla8tP5tzjf70znIwS", 
      oauth_nonce="a666b90c2339a866c8ed405e3e2821c3", 
      oauth_signature="R6etDqoM8JLzuXK%2B3BiVeXCEqRQ%3D", oauth_signature_method="HMAC-SHA1", 
      oauth_timestamp="1267547771", oauth_token="3-gnS3NKP74AzcJsvbFi3Z", oauth_version="1.0"
    Content-Type: application/x-www-form-urlencoded
    Content-Length: 10
    
    format=xml

Signature base string:

    POST&http%3A%2F%2Fv.23video.com%2Fapi%2Fphoto%2Flist&format%3Dxml%26oauth_consumer_key%3D57115
    6-cuQla8tP5tzjf70znIwS%26oauth_nonce%3Da666b90c2339a866c8ed405e3e2821c3%26oauth_signature_meth
    od%3DHMAC-SHA1%26oauth_timestamp%3D1267547771%26oauth_token%3D3-gnS3NKP74AzcJsvbFi3Z%26oauth_v
    ersion%3D1.0
    
... and you'll get something like this in response.

    <response status="ok" permission_level="admin" p="1" size="20" total_count="49" cached="0">
      <photo photo_id="1234" ...>
        (...)
      </photo>
      (...)  
    </response>


---



## Sample scripts

We've created a set of samples on how to authenticate your application and communicate with the 23 API:

* [PHP samples](http://github.com/23/DeveloperDocumentation/tree/master/lib/php/)
* [Ruby samples](http://github.com/23/DeveloperDocumentation/tree/master/lib/ruby/)


<script>createIndex('OAuth Flow', 'h2');</script>
