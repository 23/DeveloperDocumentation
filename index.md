# The 23 API
# flags=comments

This document describes the REST API for Visualplatform, [23 Video](http://www.23video.com) and  [Visualblog](http://www.visualblog.net). Please note that access to the API depends on your product and subscription -- and that it may not be available to you. [Contact us](#any-questions) if you have questions in this regard.

This API is designed to be used in an array of different contexts: Browser- and JavaScript-based mashups with 23's products; customized video players in Adobe Flash or Adobe Flex; selecting and embedding content into a content management system; single sign-on or paywall-based access to 23 Video; or full-fledged video or community sites using 23 Video as their backend. 

---

## Terminology

For legacy reasons all 23 APIs reference the object type `photo`. However, depending on the service the API is used with, the `photo` object type is interchangeable with text posts (on <a href="http://visualblog.net">Visualblog</a>), with photos (on <a href="http://visualblog.net">Visualblog</a>), and with videos (on <a href="http://www.23video.com">23 Video</a> and <a href="http://visualblog.net">Visualblog</a>).

_The API_ or _The 23 API_ in this document refers to a set of methods made available on the 23 platform in a well-defined manner and enabling programmers to retrieve data from and write data back to the system. _The Client_ in the documentation can refer either to a browser, to the person using the browser, or generally to the program accessing the API.

The examples below refer to `http://videos.examples.com`. In the real world, the domain should be replaced with the domain for the site you're querying.

---

## Requests

The API is based on HTTP, and any request is made to the site's address (i.e. `http://videos.examples.com`) followed by the API method name (i.e. `/api/user/create` or `/api/tag/related`). 

Both GET and POST requests are allowed, but note that the GET-style query string parameters (i.e. `/api/tag/related?tag=mytag`) are not used on POST requests.

For example, using the [related tags method](tag-related) a request could look like this:

    http://videos.example.com/api/tag/related?tag=demo
    
And [return](#response-formats) something like this:

    <response status="ok" permission_level="anonymous" total_count="2" cached="0">
      <relatedtag tag="screencast" url="/tag/screencast"/>
      <relatedtag tag="video" url="/tag/video"/>
    </response>

The API expects UTF-8 formatted input and will return in UTF-8 as well.

The API is accessible via Adobe Flash and Adobe Flex. If you need to access it from a foreign domain, have a look at [our cross-domain acces policies](crossdomain).

The next section describes [how to authenticate your requests](#authentication), and you should also have a look at the limits and possibilities of [anonymous access to the api](#anonymous-access).

---


## Authentication

The 23 API uses the [OAuth 1.0a](http://oauth.net) protocol for user authorization and application identification.

Generally, some requests can be [made anonymously](#anonymous-access), but whenever your application needs to read unpublished data or update or add new data, authentication is required. This is done by setting up `consumer key` and a `consumer secret` for you application, and then by having an existing user authorize your access. When this is done, you'll have an additional `access token` and am `access token secret` which will be used alongside your consumer credentials to sign all requests.

All interaction with the OAuth authentication process in done through a generic domain, `http://api.visualplatform.net/oauth/*`, or through your site's own domain, `http://videos.example.com/oauth/*`. 

We encourage you to use the generic domain, since this will handle domain changes gracefully and will allow you to reuse code. Requests to `http://api.visualplatform.net/oauth/access_token` will return the `domain` to use for all subsequent requests to the API ([more](oauth#domain)).

<table>
  <tr>
    <td>Request Token URL &nbsp;</td>
    <td><i>http://api.visualplatform.net/oauth/request_token</i></td>
  </tr>
  <tr>
    <td>Access Token URL &nbsp;</td>
    <td><i>http://api.visualplatform.net/oauth/access_token</i></td>
  </tr>
  <tr>
    <td>Authorize URL &nbsp;</td>
    <td><i>http://api.visualplatform.net/oauth/authorize</i></td>
  </tr>
  <tr>
    <td>Signing mechanism &nbsp;</td>
    <td><i>HMAC-SHA1</i></td>
  </tr>
</table>

<br/>

<b>You can find more information on how to use OAuth 1.0a with the 23 API in the [OAuth set-up and flow](oauth) document.</b>

At first glance, the OAuth process might seem intimidating, but it has a major upside: It's used by Google, Yahoo, Twitter and tons of other services, which means that most web-programming languages already has one or more implementations to handle all necessary communication including both the authentication process and all request to the 23 API. You can check out which libraries are available to you at the [OAuth Code](http://oauth.net/code/) page.

We've also created a set of samples on how to authenticate your application and communicate with the 23 API in [PHP samples](http://github.com/23/DeveloperDocumentation/tree/master/lib/php/)

---


## Responses

By default responses from the API come in the form of a `<response>` XML element (see [response formats](#response-formats) for more information). The root element will always have a `status` attribute detailing if the request was `ok` or `error`. Both success and failure responses are returned with the HTTP status code 200.

### Success
Successful requests will return XML formatted like this (or [as JSON](#response-formats)):

    <response status="ok" message="The user exists">
      <user_id>13579</user_id>
      <email>ernest@hemmingway.com</email>
      <username>ernest</username>
      <full_name>Ernest Hemmingway</full_name>
      <site_admin>1</site_admin>
      <timezone>Europe/Copenhagen</timezone>
    </response>


### Failure

Whenever a request to the API fails, a response detailing the exception is returned. The response includes an `error_code` and a detailed error description ([see all error codes](error-codes)).

    <response status="error" code="invalid_signature" message="The API signature is invalid."/>

---

## Methods

### Albums or channels

Methods for creating and managing albums and channels.

* [/api/album/create](album-create): Create a new channel or album
* [/api/album/delete](album-delete): Delete a channel or album
* [/api/album/list](album-list): List and search through channels or albums
* [/api/album/update](album-update): Update the meta data of a channel or album

### Comments

Methods for listing and managing comments.

* [/api/comment/list](comment-list): List comments

### Photos and videos

Methods for uploading and managing videos and photos.

* [/api/photo/delete](photo-delete): Delete a photo or video
* [/api/photo/get-upload-token](photo-get-upload-token): Get a token for browser-based and non-authenticated uploading.
* [/api/photo/list](photo-list): List and search through photos and videos
* [/api/photo/redeem-upload-token](photo-redeem-upload-token): Upload a video or photo using an  [upload token](photo-get-upload-token).
* [/api/photo/replace](photo-replace): Replace a photo or update the thumbnail of a video.
* [/api/photo/update](photo-update): Update the meta data of a photo or video
* [/api/photo/upload](photo-upload): Upload a new photo or video.

### Sessions

Methods controlling access to a closed site and for implementing single sign-on.

* [/api/session/get-token](session-get-token): Get a token for authorizing a visitor's access to a site.
* [/api/session/redeem-token](session-redeem-token): Get access to a site through a [session token](session-get-token).

### Site

Methods for querying meta data about sites.

* [/api/site/get](site-get): Get information about the site.

### Tags

Methods for searching tags.

* [/api/tag/list](tag-list): List or search through tags
* [/api/tag/related](tag-related): List related tags

### Testing

Methods for testing communication with the API

* [/api/echo](echo): Mirrors parameters in return

### Users

Methods for managing users.

* [/api/user/create](user-create): Create a new user account
* [/api/user/get-login-token](user-get-login-token): Get a token for logging in a user.
* [/api/user/list](user-list): List users
* [/api/user/redeem-login-token](user-redeem-login-token): Log in a user using a [login token](user-get-login-token).

<div style="display:none;">
### Video player

Methods for listing and embedding video players

* [/api/player/list](player-list): List available video players.
* [/api/player/embed](player-embed): Get a video embed code for a specific player.
</div>



---

## Response formats

The API response is available in two formats: XML and JSON. By default, the API will respond in XML, but you can force the format using the format parameter:

    http://videos.example.com/api/tag/list?format=xml
    http://videos.example.com/api/tag/list?format=json

As detailed above the XML responses will be wrapped in a `<response>` root node with a number of attributes (such as [`status`](#responses), [`permission_level`](#permission-levels) and [`cached`](#caching)) describing the returned data. The content of the root node varies depending on the method invoked and is described in [the individual method documentation](#methods).

The JSON return format will return the same data as the XML format, but it will be formatted differently and the response will also include information about the site being queried. A request to `http://videos.example.com/api/tag/list?size=2&format=json` might yield:

    var visual = {
      "status": "ok", 
      "permission_level":"read",
      "cached":"0",
      "tags":[
        {"tag": "23", "count": "4", "url": "/tag/23"},
        {"tag": "3gpp", "count": "1", "url": "/tag/3gpp"}
      ],
      "p": "1",
      "size": "2",
      "total_count": "69",
      "site": {
        "domain": "videos.example.com", 
        "product_key": "tube", 
        "site_id": "123456", 
        "site_name": "Example Video Site"
      },
      "endpoint": "/api/tag/list"
    }

As you can see, the `site` object contains the name, id and product identifier of your site.

The variable name can be controlled by setting `varname`. For example, requesting `http://videos.example.com/api/tag/list?format=json&varname=tags` would return:

    var tags = {
      "status": "ok", 
      tags:[...]
      ...
    }

The response is also available as a [JSONP-style callback](http://en.wikipedia.org/wiki/JSON#JSONP) using the `callback` parameter. Requesting the same data with `http://videos.example.com/api/tag/list?format=json&callback=updateTags` gets you:

    updateTags({
      "status": "ok", 
      tags:[...]
      ...
    });

This is valuable for cross-domain scripting in a browser:

    <script>
      function updateTags(o) {
        for (i in o.tags) {
          doEvilStuffWithTag(o.tags[i].tag);
        }
      }
    </script>
    <script src="http://videos.example.com/api/tag/list?format=json&callback=updateTags"></script>
    
Finally, you can get raw JSON data without any unnecessary syntactic sugar using `raw`. Asking for `http://videos.example.com/api/tag/list?format=json&raw` would answer:

    {
      "status": "ok", 
      tags:[...]
      ...
    }

---



## Pagination

A number of API methods (including for example [/api/photo/list](photo-list), [/api/user/list](user-list) and [/api/tag/list](tag-list)) returns a list of objects. These lists will often only return a subset of the data, and the programmer will need to handle pagination explicitly. This is done using `p` and `size`:

* `size`: Number of items to return with each request. Where nothing else is stated, the default value for `size` is *20* and the maximum value is *100*.
* `p`: The page number to return. The default value is *1* and given a size of *20*, `p=2` will return items *21* through *40*, and `p=5` will yield items *81* through *100*.

Any request offering pagination will include the `p` and `size` parameters in their responses, and in addition a third property is included:
 
* `total_count`: The total number of object available through the request.

For example, you might query `http://videos.example.com/api/tag/list`:

    <response status="ok" permission_level="anonymous" p="1" size="20" total_count="69" cached="0">
      ( ... 20 tag objects ... )
    </response>

Based on the response, we know that there are _69 tags_ distributed along ceil(69/20) = _4 pages_. Armed with this information we can make a few additional requests ending with  `http://videos.example.com/api/tag/list?size=20&p=4`:

    <response status="ok" permission_level="anonymous" p="4" size="20" total_count="69" cached="0">
      ( ... 9 tag objects ... )
    </response>

---


## Anonymous access

A number of [the API methods](#methods) allow anonymous access to the public data from public sites. For example, a request to _http://videos.example.com/api/photo/list_ will yield a list of published videos of the site including information on how to play and embed these videos. 

Of course, unpublished content on public sites and any content on non-public sites will not be available to anonymous API calls. For more information about access and permission levels, refer to [the next section](#permission-levels).

---

## Permission levels

The API operates with a set of different permission levels. At each level, some actions are allowed and some are prohibited:

* _Permission level `none`_: You are given no access to the API. At this level, you will need specific information such as <tt>album_id</tt> or <tt>photo_id</tt> plus a secret <tt>token</tt> to access data. This level is usually only applied when a sites is closed to the public and the client hasn't been authenticated in any way.
* _Permission level `anonymous`_: The client has access to publicly available data. The is the default access level on a public site. On a non-public site, the permission level is only given to clients logged in through the standard cookie login mechanism (which isn't part of the API).
* _Permission level `read`_: Access at this level can be granted through the [OAuth authentication process](#authentication). At this level, both public and private data is available through the API.
* _Permission level `write`_: Access at this level can be granted through the [OAuth authentication process](#authentication) and will allow the API to both add new objects (i.e. uploading video) and delete existing ones.
* _Permission level `admin`_: Access at this level can be granted through the [OAuth authentication process](#authentication) and will allow the API to perform administration actions such as creating new users.
* _Permission level `super`_: Access at this level can only be obtained by keys and tokens specifically assigned to the site owner in a site's backend. Using these credentials, the API will be able to log in users and sign client sessions.

The levels are listed in ascending order, meaning that `super` authentication will give access to all lesser levels as well, and a client with `read` will also have `anonymous` and `none` rights.

How these rules are applied to methods is detailed under the individual method documentation. Whenever a request is denied due to lack of permissions, an error message is return detailing both the client's actual level and the level necessary:

    <response status="error" permission_level="none" code="permission_denied" 
      message="You don't have the necessary permissions to 
      perform this action (required level: 'admin')"/>
      ...
    </response>

Or in JSON speak:

    {
      "status": "error", 
      "message":"You don't have the necessary permissions to 
        perform this action (required level: 'admin')",
      "code":"permission_denied",
      "permission_level":"none",
      "endpoint": "/api/user/create"
    }

Any request to the API will also list the client's permission level in the response attributes. For example:

    <response status="ok" permission_level="read" p="1" size="20" total_count="16" cached="0">


---

## Caching

Anonymous requests to the API are subject to caching. This means that responses can be cached for a period of up to _30 minutes_. [Signed requests](#authentication) to the API are never cached.

Cached responses will have `cached=1` set in the response. For example in XML responses:

    <response status="ok" p="1" size="20" total_count="1" cached="1" cache_time="1266304557">
      ...
    </response>

Or in the JSON response:

    {
      "status": "ok", 
      "cached":"1",
      "cache_time":"1266304557",
      ....
    }
    
The extra property `cache_time` notes when the content of the response was originally cached in seconds since epoch. For example, these responses were originally cached on February 16th 2010 at 08:15am.

For performance reasons, we ask you to use the cached version of any request, but you will be able to ask for a non-cached version of a response either by signing your requests or by adding a `?time=<current_timestamp>` parameter to your request.

---

## Pingbacks

You can have the API notify you of object changes on 23 Video through pingback notifications. This is done by configuring you OAuth consumer with a `Pingback URL`. A common usage for this approach is to both listen for new uploads to a site and to track the transcoding of an uploaded video.

For example, you might use `http://backend.example.com/visual-pingback` and whenever a photo's or video's title, description, tags, albums, channels or encoding status changes, a HTTP POST request is sent back to the specified URL:

    http://backend.example.com/visual-pingback?type=photo&photo_id=12345
    
Using this information, you will be able to track changes in the 23 Video backend. The pingback itself only identifies the changed object; you will need to query [/api/photo/list](photo-list) for updated information about the object.

Only [`photo`](#terminology) objects are subject to pingback notifications.
    


---


## Browser-based uploads

Browser-based uploading is designed to allow API consumers to pre-authenticate uploads to their 23 sites -- and enables applications to let users upload photos and videos to 23 using browser-based uploading. This scheme allows you to accept uploads from users without ever having to proxy or host the files from you server. You should opt for this approach to uploading if you do not want to host or store the uploaded files.

The entire flow is described [here](browser-based-uploads).

---


## Libraries and sample implementations

The 23 API is designed to be generic and accessible in just about any programming language. We are making a number of implementations and libraries available to make the interaction easier:

* [.NET API for 23 Video](http://github.com/23/23-api-dotnet)
* [PHP sample implementation](http://github.com/23/DeveloperDocumentation/tree/master/lib/php/)
* [Ruby sample implementation](http://github.com/23/DeveloperDocumentation/tree/master/lib/ruby/)
* [SharePoint Web Part for 23 Video](http://github.com/23/23-video-for-sharepoint)
* [All sample scripts](http://github.com/23/DeveloperDocumentation/tree/master/lib/)

---


## Any questions?

As noted in the beginning of this document, the 23 API is designed to be used in a multitude of different contexts. If you find it comes up short and have suggestions for improvements -- or if you have questions on how to use the API -- feel free to post a message in out [Developer Community](/community/forum-view?forum_id=850) or send an e-mail directly to [steffen@23company.com](mailto:steffen@23company.com)


<script>createIndex('The API', 'h2');</script>
