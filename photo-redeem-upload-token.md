# API Method: /api/photo/redeem-upload-token
# flags=comments

Upload a photo or video using a [pre-authenticated upload token](photo-get-upload-token). 

See the documentation on [browser-based uploads](browser-based-uploads) for more information.


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
