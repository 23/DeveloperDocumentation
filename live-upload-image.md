# API Method: /api/live/upload-image

Upload a thumbnail or preview image for the live stream.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>live_id</tt> <small>(required)</small></td><td>The ID for the stream you're uploading an image for.</td></tr>
    <tr><td><tt>type</tt></td><td>Which type of image is being uploaded? Options are `thumbnail` and `preview` and the default is `thumbnail`</td></tr>
  <tr><td><tt>file</tt> <small>(required)</small></td><td>The file to upload. (Note that this parameter &minus; neither the filename nor the file content &minus; shouldn't be included in the api signature).</td></tr>
</table>


### Permission level 

The minimum required [permission level](index#permission-level) is:

    read


### Example XML Response

    <response status="ok" permission_level="write" 
      message="The image has been uploaded" cached="0">

### Example JSON Response

    {
      "status": "ok", 
      "message":"The image has been uploaded",
      "permission_level":"write",
      "cached":"0",
      "p": "1",
      "size": "1",
      "site": { ...},
      "endpoint": "/api/live/upload-image"
    }