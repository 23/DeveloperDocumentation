# API Method: /api/photo/redeem-replace-token



This method performs the same action as [/api/photo/replace](photo-replace), but authenticates the request through the token retrieved from [/api/photo/get-replace-token](photo-get-replace-token). This means that you can pre-authenticate a replacement upload of either a video, a thumbnail for a video or a photo -- and then allows the client to upload directly to 23's servers from a web browser. 

See the documentation on [browser-based uploads](browser-based-uploads) for more information.

Any extra parameters sent to this method will be repeated in the callback request to `return_url`.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>file</tt> <small>(required)</small></td><td>The file to upload.</td></tr>
  <tr><td><tt>replace_token</tt> <small>(required)</small></td><td>The token returned by a call to <a href="photo-get-replace-token">/api/photo/get-replace-token</a></td></tr>
</table>



### Permission level 

The minimum required [permission level](index#permission-level) is:

    anonymous


### Returns

A plain, unstyled error message if the `replace_token` is invalid, consumed or expired. 
Otherwise the client is redirected to `return_url` using the method specified in [the flow description](browser-based-uploads).

If `background_return_p` was set to `1` when [retrieving the upload token](photo-get-replace-token), the callback to `return_url` is made from the server-side and one of the following information sets is returned:

    ok <domain> <tree_id> <photo_id> <token> <callback_url>
    
Or:

    error <error_message>
