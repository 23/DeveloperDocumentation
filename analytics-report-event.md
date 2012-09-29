# API Method: /api/analytics/report/play
# flags=comments

Report an event back to the analytics engine. 

The reporting methods are used to report additional contextual information about a playback session, but is not the exclusive source for data. This is why any reporting request must originate from the session that is handling the play. For example, if you have requested a list of videos and started playing one, your actions and playback have already been tracked. However, reporting back [a playback](analytics-report-play) or [an event](analytics-report-event) with allow futher information to be tracked.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>photo_id</tt> <small>(required)</small></td><td>The ID of the playing video.</td></tr>
  <tr><td><tt>event</tt> <small>(required)</small></td><td>The event identifier (see below).</td></tr>
  <tr><td><tt>user_player_type</tt></td><td>The type of player used by the client (should be <tt>flash</tt> or <tt>html5</tt>).</td></tr>
  <tr><td><tt>user_player_version</tt></td><td>The version of player used by the client.</td></tr>
  <tr><td><tt>user_player_resolution</tt></td><td>The resolution of the client's screen.</td></tr>
  <tr><td><tt>source</tt></td><td>
    A source for the request, designed to be used in analytics (normal options are <tt>admin</tt>, <tt>site</tt>, <tt>share</tt>, <tt>embed</tt>, <tt>podcast</tt>, <tt>download</tt>, <tt>search</tt> and <tt>facebook</tt> but you may choose your own source).
  </td></tr>
</table>

### Event types

Currently, the following event identifiers are supported:

* `load`: the player has been loaded
* `fullscreen`: fullscreen view has been toggled
* `preRollClose`: the user actively closed the pre-roll
* `preRollClick`: the user clicked the pre-roll
* `postRollClose`: the user actively closed the post-roll
* `postRollClick`: the user clicked the post-roll
* `callToActionClick`: the user clicked a "call to action" element
* `embedEngaged`: the user requested the embed code
* `shareEngaged`: the user requested the sharing options


### Permission level 

The minimum required [permission level](index#permission-level) is:

    none


### Example XML Response

    <response status="ok" permission_level="anonymous" 
      message="The event was reported" cached="0"/>

### Example JSON Response

    {
      "status": "ok", 
      "message":"The event was reported",
      "permission_level":"anonymous",
      "cached":"0",
      "report":{},
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/analytics/report/play"
    }
