# Protecting videos and streams

## Normal access of content in 23 Video
In 23 Video, every video or stream has an ID (`photo_id` or `live_id`) and a matching token (`token`) that can be used to look up information about the item in the API -- and ultimately also play the video in a player. This information is used with the embed code, with the API and in many case also on the video website.

The rules for accessing videos and streams in 23 Video are simple: 

* **Access with ID only:** If a video or stream is published on a site you can access, you can look up the item with only the relevant ID (`live_id` or `photo_id`), and an item will appear in listings in the API and on the video website. This also applies to embed code, where such published content can be embedded without a token.
* **Access with ID and token:**: An object can always be looked up and played with a combination of an ID (again, `live_id` or `photo_id`) and its token (`token`). This goes for published and unpublished content alike, and it means that an embed code combining ID and token will play the content even if it isn't publically available.

## Protected content
The only exception to these rules is when a video or a stream is "protected": In those cases, you can still embed content and find its meta data using the API -- but to actually play the video or stream, the user needs to be authenticated further. 

The cases for using this are many, but a few examples include:

* **Paywalls and subscription services:** Before playback starts, you want to ensure that the users is logged and has paid for the content.
* **Geo-blocking:** Before playback start, you want to ensure that the user is located in a specific part of the world.
* **Password protection:** Before playback start, the user must authenticated using a pre-defined password.

A number of these features are included out-of-the-box in 23 Video, but we also offer the ability to have the player query a custom endpoint or web address to gain access to any video or stream.

Behind the scenes, this feature works by:

* The video or stream is marked as *protected* in the admin interface or [through the API](protection-protect) -- and is set up with a protection method with relevant data. For example, a video can be protected with the `password` method with the protection data `{password: 'abcd1234'}`.
* This will assign a second token (`protected_token`) to the object, and this token must be used in order to play back the object. (The normal token can still be used to embed or read out meta data.)
* Any API request for the video or stream will be marked with the context `{protected_p:true, protection_method:'method'}`
* During normal playback, the player will detect that the video is protected and try to verify access using the (`/api/protection/verify`](protection-verify) method.
* If verification is confirmed, the method will return the correct `protection_token` -- which in turn is used to begin playback.

## Custom endpoints
23 Video supports verification through custom off-site endpoint, which can be useful if you want to verify, for example, that a users is logged in and has paid for a subscription -- or indeed that the person meets any kind of custom criteria needed by your workflow.

Specifically in these cases, the player sends a [JSON-P formed request](http://en.wikipedia.org/wiki/JSONP) with a `callback` parameter to the endpoint. For example:

    http://my.server-comverify?callback=somefunction&protection_method=password&object_type=photo&object_id=3079141

In return it expects a JSON response wrapped in a function for cross-domain communication. The response must include the correct `protected_token` for the object:

    somefunc({
      "status": "ok", 
      "protectedtoken":{"object_id": "3079141", "object_type": "photo", "protected_token": "abcedf12345689"}
    });

The correct `protected_token` is available through an [OAuth-signed](ouath) call to [`/api/photo/list`](photo-list) with `read` permissions or higher. It is also returned from when an item is protected through the API. In either case and for performance reasons, it's important that this information is pre-fetched and cached for delivery.

If the user does not have access to the ressource, return an error in the same JSON-P format while honouring the `callback` parameter:

    somefunc({
      "status": "error", 
      "message":"The password is not correct."
    })