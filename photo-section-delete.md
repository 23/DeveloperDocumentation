# API Method: /api/photo/section/delete
# flags=comments

Delete a section within a video.

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr>
    <td>
      <tt>photo_id (required)</tt>
    </td>
    <td>
      The ID of the video in which to delete a section.
    </td>
  </tr>

  <tr>
    <td>
      <tt>section_id (required)</tt>
    </td>
    <td>
      The ID of the section to be deleted.
    </td>
  </tr>
</table>    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write


### Example XML Response

    <response status="ok" permission_level="write" 
      message="The section was deleted cached="0"/>

    
### Example JSON Response

    {
      "status": "ok", 
      "message":"The section was deleted",
      "permission_level":"write",
      "cached":"0",
      "photo":{},
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/photo/section/delete"
    }

