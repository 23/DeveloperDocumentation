# API Method: /api/liveevent/delete
# flags=comments

Delete a live event.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>liveevent_id</tt> <small>(required)</small></td><td>The ID for the live event to be deleted.</td></tr>
</table>

    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write


### Example XML Response

    <response status="ok" permission_level="write" 
      message="The live event was deleted" cached="0">

### Example JSON Response

    {
      "status": "ok", 
      "message":"The live event was deleted",
      "permission_level":"write",
      "cached":"0",
      "p": "1",
      "size": "1",
      "site": { ...},
      "endpoint": "/api/liveevent/update"
    }
