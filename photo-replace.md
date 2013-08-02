# API Method: /api/photo/replace
# flags=comments

Replace a photo, replace a video or update the thumbnail of a video. 


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>photo_id</tt> <small>(required)</small></td><td>The photo or video to replace.</td></tr>
  <tr><td><tt>file</tt></small></td><td>The photo file to replace a photo with, or to use as a thumbnail for a video.</td></tr>
  <tr>
    <td>
      <tt>time</tt>
    </td>
    <td>
      When replacing the thumbnail of a video, you can extract the thumb from a specific part of the video (i.e. <tt>40.2</tt>). Also, have a look at <a href="photo-frame">/api/photo/frame</a>.
    </td>
  </tr>
  <tr>
    <td>
      <tt><tt>crop_p</tt></tt>
    </td>
    <td>
      Specify whether or not to crop the uploaded photo to fit the size of the existing photo or video.
    </td>
  </tr>
</table>

    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write

### Example XML Response

    <response status="ok" permission_level="wrte" 
      message="The photo was successfully replaced" cached="0">
      <photo_id>60281</photo_id>
      <tree_id>7340</tree_id>
      <token>7aguzmVuqpwjshwprfegm2swfdcnaWrj</token>
    </response>

### Example JSON Response

    {
      "status": "ok", 
      "message":"The photo was successfully replaced",
      "permission_level":"write",
      "cached":"0",
      "photo":{"photo_id": "60433", "tree_id": "7340", 
        "token": "7aguzmVuqpwjshwprfegm2swfdcnaWrj"},
      "p": "1",
      "size": "1",
      "site": { ...},
      "endpoint": "/api/photo/replace"
    }
