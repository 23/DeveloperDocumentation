# API Method: /api/liveevent/stream/update
# flags=comments

Update the meta data about a live event video stream.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>liveevent_stream_id</tt> <small>(required)</small></td><td>The ID for the live event video stream to be updated.</td></tr>
  <tr><td><tt>name</tt></td><td>The name of the stream. All HTML tags will be stripped away from the name.</td></tr>
  <tr><td><tt>active_p</tt></td><td>Is the stream active to visitors of the site?<br/>Allowed values are <tt>0</tt> and <tt>1</tt>, but the parameter is optional is you want to leave the current setting unchanged.</td></tr>
  <tr><td><tt>publish_recordings_p_p</tt></td><td>Should recording from this stream be published when put back to your video archive?<br/>Allowed values are <tt>0</tt> and <tt>1</tt>, but the parameter is optional is you want to leave the current setting unchanged.</td></tr>
</table>

    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write


### Example XML Response

    <response status="ok" permission_level="stream" 
      message="The stream was updated" cached="0">

### Example JSON Response

    {
      "status": "ok", 
      "message":"The stream was updated",
      "permission_level":"write",
      "cached":"0",
      "p": "1",
      "size": "1",
      "site": { ...},
      "endpoint": "/api/liveevent/stream/update"
    }
