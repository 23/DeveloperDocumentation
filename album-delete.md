# API Method: /api/album/delete
# flags=comments

Delete an album or channel.

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>album_id</tt> <small>(required)</small></td><td>The album or video to delete.</td></tr>
</table>


### Permission level 

The minimum required [permission level](index#permission-level) is:

    write

### Example XML Response

    <response status="ok" permission_level="write" 
      message="The album was deleted" cached="0"/>
    
### Example JSON Response

    {
      "status": "ok", 
      "message":"The album was deleted",
      "permission_level":"write",
      "cached":"0",
      "album":{},
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/album/delete"
    }
