# API Method: /api/analtics/report/play
# flags=comments

Report a playback event back to the analytics engine. 

This method should be called both when starting and stopping playback.

The reporting methods are used to report additional contextual information about a playback session, but is not the exclusive source for data. This is why any reporting request must originate from the session that is handling the play. For example, if you have requested a list of videos and started playing one, your actions and playback have already been tracked. However, reporting back [a playback](analytics-report-play) or [an event](analytics-report-event) with allow futher information to be tracked.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>photo_id</tt> <small>(required)</small></td><td>The ID of the playing video.</td></tr>
  <tr><td><tt>time_start</tt> <small>(required)</small></td><td>The start time in seconds of the current playback.</td></tr>
  <tr><td><tt>time_end</tt></td><td>The end time in seconds of the current playback.</td></tr>
  <tr><td><tt>user_player_type</tt></td><td>The type of player used by the client (should be <tt>flash</tt> or <tt>html5</tt>).</td></tr>
  <tr><td><tt>user_player_version</tt></td><td>The version of player used by the client.</td></tr>
  <tr><td><tt>user_player_resolution</tt></td><td>The resolution of the client's screen.</td></tr>
</table>

### Permission level 

The minimum required [permission level](index#permission-level) is:

    none


### Example XML Response

    <response status="ok" permission_level="anonymous" 
      message="The play was reported" cached="0"/>

### Example JSON Response

    {
      "status": "ok", 
      "message":"The play was reported",
      "permission_level":"anonymous",
      "cached":"0",
      "report":{},
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/analytics/report/play"
    }
