# API Method: /api/liveevent/stream/create
# flags=comments

Create a new live event video stream.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>name</tt> <small>(required)</small></td><td>The name of the live event. All HTML tags will be stripped away from the name.</td></tr>
  <tr><td><tt>liveevent_id</tt> <small>(required)</small></td><td>The ID of the live event for which you want the stream to be created.</td></tr>
  <tr><td><tt>record_p</tt></td><td>Should the stream be recorded to the video archive? Maximum recording length is three hours and the maximum size is 2 GB.<br/>Default is <tt>0</tt><br/><i>Allowed values:</i> <tt>0</tt> or <tt>1</tt></td></tr>
  <tr><td><tt>publish_recordings_p_p</tt></td><td>Should recording from this stream be published when put back to your video archive?<br/>Default is <tt>0</tt><br/><i>Allowed values:</i> <tt>0</tt> or <tt>1</tt></td></tr>
</table>

    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write


### Example XML Response

    <response status="ok" permission_level="write" 
      message="The live event was successfully created" cached="0">
      <liveevent_stream_id>123456</liveevent_stream_id>
      <token>hqzry7xaaekyavpjghpZkt1ykbelKjai</token>
    </response>

### Example JSON Response

    {
      "status": "ok", 
      "message":"The live event was successfully created",
      "permission_level":"write",
      "cached":"0",
      "stream":{"liveevent_stream_id": "123456", "token": "hqzry7xaaekyavpjghpZkt1ykbelKjai"},
      "p": "1",
      "size": "1",
      "site": { ...},
      "endpoint": "/api/liveevent/stream/create"
    }
