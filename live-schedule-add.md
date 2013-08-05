# API Method: /api/live/schedule/add

Add a time to the streaming schedule.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>live_id</tt> <small>(required)</small></td><td>The ID of the stream.</td></tr>
  <tr><td><tt>start_time</tt> <small>(required)</small></td><td>Start time for the schedule.</td></tr>
  <tr><td><tt>end_time</tt></td><td>Optional end time for the schedule.</td></tr>
</table>

    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    read


### Example XML Response

    <response status="ok" permission_level="write" 
      message="The time has been added to the schedule" cached="0">

### Example JSON Response

    {
      "status": "ok", 
      "message":"The time has been added to the schedule",
      "permission_level":"write",
      "cached":"0",
      "p": "1",
      "size": "1",
      "site": { ...},
      "endpoint": "/api/live/start-recording"
    }