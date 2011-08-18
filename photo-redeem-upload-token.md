# API Method: /api/photo/redeem-upload-token
# flags=comments

Upload a photo or video using a [pre-authenticated upload token](photo-get-upload-token). 

See the documentation on [browser-based uploads](browser-based-uploads) for more information.

Any extra parameters sent to this method will be repeated in the callback request to `return_url`.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>file</tt> <small>(required)</small></td><td>The file to upload.</td></tr>
  <tr><td><tt>upload_token</tt> <small>(required)</small></td><td>The token returned by a call to <a href="photo-get-upload-token">/api/photo/get-upload-token</a></td></tr>
</table>

### Parameters for Resumable.js

This API methods support an extra set of parameters designed to work with [Resumable.js](https://github.com/23/Resumable.js), an [open sourced](http://www.23developer.com/opensource) JavaScript library for providing multiple simultaneous, stable, fault-tolerant and resumable uploads via the HTML5 File API released by 23.

To handle the state of upload chunks, a number of extra parameters are sent along with such requests:

* `resumableChunkNumber`: The index of chunk in the current upload. First chunk is 1 (no base-0 counting here).
* `resumableChunkSize`: The chunk size in bytes.
* `resumableTotalSize`: The total file size in bytes.
* `resumableIdentifier`: A unique identifier for the file contained in the request.

API methods expect all chunks of a file to be uploaded before the video is added to the archive. When the last chunk's upload completes, the messages listed in the *Returns* section applies. For all other chunk, HTTP status codes control the flow:

* `200`: The chunk was accepted and correct. No need to re-upload.
* `500`: The file for which the chunk was uploaded is not supported, cancel the entire upload.
* _Anything else_: Something went wrong, but try reuploading the file.


### Permission level 

The minimum required [permission level](index#permission-level) is:

    anonymous


### Returns

A plain, unstyled error message if the `upload_token` is invalid, consumed or expired. 
Otherwise the client is redirected to `return_url` using the method specified in [the flow description](browser-based-uploads).

If `background_return_p` was set to `1` when [retrieving the upload token](photo-get-upload-token), the callback to `return_url` is made from the server-side and one of the following information sets is returned:

    ok <domain> <tree_id> <photo_id> <token> <callback_url>
    
Or:

    error <error_message>
