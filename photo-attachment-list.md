# API Method: /api/photo/attachment/list
# flags=comments

Return a list of files attached to a video.

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

  <tr>
    <td>
      <tt>token (required)</tt>
    </td>
    <td>
      The corresponding token for the photo_id.<br/>
      The token <a href="index#time-limited-tokens">may be explicitly time-limited</a> in which case <tt>expire</tt> becomes a required parameter.
    </td>
  </tr>
</table>    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    none

For non-public sites, the minimum level is:

    anonymous


### Example XML Response

    <response status="ok" permission_level="anonymous" total_count="2" cached="0">
      <attachment filename="23 video hosting setup.pdf" 
        size="43830" 
        url="/7340/.../file/23+video+hosting+setup%2epdf"/>
      <attachment filename="terms of service, 23 video enterprise (draft).pdf" 
        size="71155" 
        url="/7340/.../file/terms+of+service%2c+23+video+enterprise+%28draft%29%2epdf"/>
    </response>
    
### Example JSON Response


    {
      "status": "ok", 
      "permission_level":"anonymous",
      "cached":"0",
      "attachments":[
        {"filename": "23 video hosting setup.pdf", 
         "size": "43830", 
         "url": "/7340/.../file/23+video+hosting+setup%2epdf"
        },
        {"filename": "terms of service, 23 video enterprise (draft).pdf", 
         "size": "71155", 
         "url": "/7340/.../file/terms+of+service%2c+23+video+enterprise+%28draft%29%2epdf"
        }],
      "p": "1",
      "size": "1",
      "total_count": "2",
      "site": ...,
      "endpoint": "/api/photo/attachment/list"
y}
