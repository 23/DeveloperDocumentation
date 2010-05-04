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
