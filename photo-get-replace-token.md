# API Method: /api/photo/get-replace-token

Pre-authenticate a replacement upload of either a video, a thumbnail for a video or a photo. This allows the client to upload directly to 23's servers from a web browser. 

This method can be used to pre-authenticated uploads to a site without proxying them through your servers and the API. The flow is the same as the one described in detail in the <a href="browser-based-uploads">Browser-based uploads</a> section of the API documentation, but in general terms this method will return a token which can be included in a standard HTML form (or even a more advanced Flash uploader, see [cross-domain policies](crossdomain)) to upload files for replacement.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>return_url</tt></td><td>The URL where the user is return after both replacement success and failure.  The callback is a GET request when permitted (when the return data is less than 1500 chars) and a POST in all other cases; so your callback handler needs to accept both GET and POST. If <tt>return_url</tt> is empty or omitted, the request will return a simple HTTP 200 OK mesage. </td></tr>
  <tr><td><tt>background_return_p</tt></td><td>Return to the callback url in the background. If this parameter is set to <tt>1</tt> the replace request will not redirect the client directly back to <tt>return_url</tt>. Instead, a request is made to <tt>return_url</tt> from the 23 servers and <a href="photo-redeem-replace-token">a plain text document in returned</a> containing status information. This option is design for replacing through clients such as Adobe Flash, where a client-side redirected might not be honoured. (The background callback takes the form of a HTTP GET request with a maximum length of 1500 chars.)</td></tr> 
  <tr><td><tt>photo_id</tt></td><td>The photo object to be replaced.</td></tr>
  <tr><td><tt>valid_minutes</tt></td><td>How many minutes should the replace token be valid for. The default is <tt>180</tt> minutes (or 3 hours). The minimum value is 15 minutes and the maximum is 24 hours.</td></tr>
  <tr><td><tt>max_uploads</tt></td><td>How many files can be uploaded using the returned token. The default is <tt>1</tt> upload; the maximum is 100</td></tr>
</table>


### Permission level 

The minimum required [permission level](index#permission-level) is:

    write

### Example XML Response

    <response status="ok" permission_level="write" 
      message="The replace token is ready to use" cached="0">
      <replace_token>022fe6e3fb42758d6147c539727c5358af3524b1</replace_token>
      <photo_id>123456</photo_id>
      <max_uploads>1</max_uploads>
      <valid_minutes>180</valid_minutes>
      <valid_until>1266711372</valid_until>
      <return_url>http://www.example.com/upload/callback?theme=green</return_url>
    </response>

### Example JSON Response

    {
      "status": "ok", 
      "message":"The upload token is ready to use",
      "permission_level":"write",
      "cached":"0",
      "replacetoken":{
        "valid_minutes": "180", 
        "replace_token": "022fe6e3fb42758d6147c539727c5358af3524b1", 
        "max_uploads": "1", 
        "return_url": "http://www.example.com/upload/callback?theme=green", 
        "valid_until": "1266713254", 
        "photo_id": "123456"
      },
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/photo/get-replace-token"
    }
