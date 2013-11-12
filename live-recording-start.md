# API Method: /api/live/recording/start

Start recording from a live stream.

The call returns an `upload_token` which can later be used with [`/api/photo/list`](photo-list) to retrieve one or more recordings. If a recording is split between starting and stopping the recording, all clips will share the same `upload_token`.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>live_id</tt> <small>(required)</small></td><td>The ID for the stream for which you want to record.</td></tr>
</table>

    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write


### Example XML Response

    <response status="ok" permission_level="write" 
      message="The stream has started recording" cached="0"
      <upload_token>live-678j35g34jh54309</status>
    </response>

### Example JSON Response

    {
      "status": "ok", 
      "message":"The stream has started recording",
      "permission_level":"write",
      "cached":"0",
      "live":{"upload_token": "live-678j35g34jh54309"},
      "p": "1",
      "size": "1",
      "site": { ...},
      "endpoint": "/api/live/start-recording"
    }