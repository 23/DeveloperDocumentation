# API Method: /api/live/schedule/remove

Remove a time from the streaming schedule.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>live_schedule_id</tt> <small>(required)</small></td><td>The ID of the schedule item.</td></tr>
</table>

    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    read


### Example XML Response

    <response status="ok" permission_level="write" 
      message="The time has been removed from the schedule" cached="0">

### Example JSON Response

    {
      "status": "ok", 
      "message":"The time has been removed from the schedule",
      "permission_level":"write",
      "cached":"0",
      "p": "1",
      "size": "1",
      "site": { ...},
      "endpoint": "/api/live/schedule/remove"
    }