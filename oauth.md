# OAuth set-up and flow

[OAuth](http://oauth.net) is a secure, open protocol, which specifies a standard way to access protected data on different websites. Roughly, the protocol outlines 1) a method for letting users grant an application access to a web service API, and 2) how to communicate using these credentials.

[The 23 API](index) uses OAuth to authorize access for a few different reasons:

* It's [well-documented](http://oauth.net/documentation/).
* It's [open and secure](http://oauth.net/advisories/).
* It's used by Google, Yahoo, Twitter and multiple other web services. This means that developers may be able to re-use code, and that it's almost certain that they'll be able to re-use one of [the stable OAuth libraries available for most popular programming languages](http://oauth.net/code/).

The purpose of the document is not to introduce OAuth; for this there are [great beginner's guides](http://oauth.net/documentation/getting-started/). Instead this document outlines [how the API works with OAuth](#signing-and-making-requests); illustrates [the authorization flow](#using-oauth-step-by-step); and it lists some [sample scripts](#sample-scripts) to help you get started. 

---

## Understanding OAuth keys and tokens

There are three key/secret pairs to be aware of in OAuth:

* A **consumer key** is used to identify the application, while its associated **consumer secret** is used to sign all requests and thus verify the identity of the application.
* A **request token** is retrieved by the application alone, and is used to ensure that an end user authorizes your application to submit API operations on the user's behalf. Its associated **request token secret** is used to sign requests during the authorization process.
* An **access token** is retrieved after the end user has authorized your application. Its associated **access token secret** is used to sign all requests on behalf of the user and thus verify the identity of both the application and the user.

The end-goal of the authorization process where user grant application access is an access token and secret. Once this process is completed, only the consumer key/token and the access key/token is needed to make and asign requests.

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

The set of credentials includes both consumer key/secret and an access token/access token secret. Thus, when you're using privileged credentials to access the API, you won't need to go through the user authentication process. Even if this seems like a nice shortcut in many cases, we encourage that you only use priviled credentials when it is required by your application.

---

## Signing and making requests

* Only 1.0a
* only headers
* only HMAC-SHA1
* callbacks
* endpoints
* multipart
* signature base string
* No timeout
* domain

---

## Using OAuth step-by-step

This section takes you through the process of retrieving access credentials and then using those credentials.

### Step 1: Get a request token

### Step 2: Have user authorize the token

### Step 3: Exchange the request token for an access token

`domain`

### Step 4: Talk to the 23 API

---



## Sample scripts

We've created a set of samples on how to authenticate your application and communicate with the 23 API:

* [PHP samples](http://github.com/23/DeveloperDocumentation/tree/master/lib/php/)
* [Python samples](http://github.com/23/DeveloperDocumentation/tree/master/lib/python/)
* [Ruby samples](http://github.com/23/DeveloperDocumentation/tree/master/lib/ruby/)

---



<script>createIndex('OAuth Flow', 'h2');</script>
