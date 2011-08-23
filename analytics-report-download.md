# API Method: /api/analytics/report/play
# flags=comments

Report a video download or stream event back to the analytics engine. 

This method should be called after the download or stream has concluded and include the total number of bytes transfered along with a `session_id` from 23 Video. This might retrieved either from a cookie or is included in the requesting URL as a GET parameter named `session_id`. If `session_id` is provided, `photo_id` is too.

The reporting methods are used to report additional contextual information about a playback session, but is not the exclusive source for data. This is why any reporting request must originate from the session that is handling the play. For example, if you have requested a list of videos and started playing one, your actions and playback have already been tracked. However, reporting back [a playback](analytics-report-play) or [an event](analytics-report-event) with allow futher information to be tracked.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>photo_id</tt> <small>(required)</small></td><td>The ID of the playing video.</td></tr>
  <tr><td><tt>seesion_id</tt> <small>(required if not in cookie)</small></td><td>The ID of the playing video.</td></tr>
  <tr><td><tt>bytes_total</tt> <small>(required)</small></td><td>The total bytes transfered during the stream or download..</td></tr>
  <tr><td><tt>skip</tt></td><td>Indicated whether this download or stream session was the result of the user scrubbing an existing playback session rather than starting a new one. Valid values are <tt>0</tt> and <tt>1</tt>.</td></tr>
  <tr><td><tt>user_player_type</tt></td><td>The type of player used by the client (should be <tt>flash</tt> or <tt>html5</tt>).</td></tr>
  <tr><td><tt>user_player_version</tt></td><td>The version of player used by the client.</td></tr>
  <tr><td><tt>user_player_resolution</tt></td><td>The resolution of the client's screen.</td></tr>
</table>

### Permission level 

This method is only available from whitelisted servers. After whitelisting, a server may call the method on specifically allowed domains and do so anonymously. 

### Example XML Response

    <response status="ok" permission_level="anonymous" 
      message="The download was reported" cached="0"/>

### Example JSON Response

    {
      "status": "ok", 
      "message":"The download was reported",
      "permission_level":"anonymous",
      "cached":"0",
      "report":{},
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/analytics/report/download"
    }
