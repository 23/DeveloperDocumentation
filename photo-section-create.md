# API Method: /api/photo/section/create
# flags=comments

Create a section within a video.

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
      <tt>start_time</tt>
    </td>
    <td>
      The specific time in seconds where you want the section to begin. The timestamp must med 0 or higher -- and cannot exceed the length of the video.
    </td>
  </tr>

  <tr>
    <td>
      <tt>title (required)</tt>
    </td>
    <td>
      The title of the section.
    </td>
  </tr>

  <tr>
    <td>
      <tt>description (required)</tt>
    </td>
    <td>
      Description text for the section. 
    </td>
  </tr>
</table>    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write


### Example XML Response

    <response status="ok" permission_level="write" 
      message="The section was created" cached="0"/>

    
### Example JSON Response

    {
      "status": "ok", 
      "message":"The section was created",
      "permission_level":"write",
      "cached":"0",
      "photo":{},
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/photo/section/create"
    }

