# API Method: /api/photo/section/set-thumbnail
# flags=comments

Set the thumbnail for a specified section within a video.

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr>
    <td>
      <tt>photo_id (required)</tt>
    </td>
    <td>
      The ID of the video with the section.
    </td>
  </tr>

  <tr>
    <td>
      <tt>section_id (required)</tt>
    </td>
    <td>
      The ID of the section to be updated.
    </td>
  </tr>

  <tr>
    <td>
      <tt>file (required)</tt>
    </td>
    <td>
      The photo file to use for thumbnails for the section.
    </td>
  </tr>
</table>    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write


### Example XML Response

    <response status="ok" permission_level="write" 
      message="The thumbnail for the section was changed" cached="0"/>

    
### Example JSON Response

    {
      "status": "ok", 
      "message":"The thumbnail for the section was changed",
      "permission_level":"write",
      "cached":"0",
      "photo":{},
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/photo/section/set-thumbnail"
    }

