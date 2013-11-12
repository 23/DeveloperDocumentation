# API Method: /api/live/recording/status

Get the current status of a live recording


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>live_id</tt> <small>(required)</small></td><td>The ID for the stream you want to retrieve status for.</td></tr>
</table>

    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write


### Example XML Response

    <response status="ok" permission_level="write" cached="0">
      <status>recording</status>
      <upload_token>live-678j35g34jh54309</status>
    </response>

### Example JSON Response

    {
      "status": "ok", 
      "message":"The stream has stopped recording",
      "permission_level":"write",
      "cached":"0",
      "p": "1",
      "size": "1",
      "live":{"status": "recording", "upload_token": "live-678j35g34jh54309"},
      "site": { ...},
      "endpoint": "/api/live/stop-recording"
    }