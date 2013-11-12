# API Method: /api/photo/attachment/upload

Upload an attachment to a photo object.

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr>
    <td>
      <tt>photo_id (required)</tt>
    </td>
    <td>
      The ID of the video to fetch attachments for.
    </td>
  </tr>

  <tr><td><tt>file</tt> <small>(required)</small></td><td>The file to upload. (Note that this parameter &minus; neither the filename nor the file content &minus; shouldn't be included in the api signature).</td></tr>
</table>    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write


### Example XML Response

    <?xml version="1.0" encoding="UTF-8"?>
    <response status="ok" permission_level="write" 
      message="The attachment was successfully uploaded" cached="0">
    </response>

### Example JSON Response

    {
      "status": "ok", 
      "message":"The attachment was successfully uploaded",
      "permission_level":"write",
      "cached":"0",
      "attachment":{},
      "p": "1",
      "size": "1",
      "site": { ...},
      "endpoint": "/api/photo/upload"
    }
