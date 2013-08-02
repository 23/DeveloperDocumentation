# API Method: /api/photo/coordinate/delete
# flags=comments

Delete a geographic coordinate associated with a photo or video.

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr>
    <td>
      <tt>photo_id (required)</tt>
    </td>
    <td>
      The ID of the video in which to delete a coordinate.
    </td>
  </tr>

  <tr>
    <td>
      <tt>latitude (required)</tt>
    </td>
    <td>
      The latitude of the coordinate to be deleted.
    </td>
  </tr>

  <tr>
    <td>
      <tt>longitude (required)</tt>
    </td>
    <td>
      The longitude of the coordinate to be deleted.
    </td>
  </tr>
</table>    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write


### Example XML Response

    <response status="ok" permission_level="write" 
      message="The coordinate was deleted" cached="0"/>

    
### Example JSON Response

    {
      "status": "ok", 
      "message":"The coordinate was deleted",
      "permission_level":"write",
      "cached":"0",
      "photo":{},
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/photo/coordinate/delete"
    }

