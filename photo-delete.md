# API Method: /api/photo/delete


Delete a photo or video.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>photo_id</tt> <small>(required)</small></td><td>The photo or video to delete.</td></tr>
</table>


### Permission level 

The minimum required [permission level](index#permission-level) is:

    write

### Example XML Response

    <response status="ok" permission_level="write" 
      message="The photo/video was deleted" cached="0"/>

### Example JSON Response

    {
      "status": "ok", 
      "message":"The photo/video was deleted",
      "permission_level":"write",
      "cached":"0",
      "photo":{},
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/photo/delete"
    }
