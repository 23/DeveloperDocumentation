# API Method: /api/live/schedule/list

List the upcoming streaming schedule.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>live_id</tt></td><td>Optionally, limit the listing to a single stream.</td></tr>
  <tr><td><tt>token</tt></td><td>Optional token for the stream listing is limited to.</td></tr>
  <tr>
    <td>
      <tt>include_private_p</tt> 
    </td>
    <td>
      Include private live events in the list. Requires <tt>read</tt> privileges, but may be overwritten by a combination of `live_id`/`token`.
    </td>
  </tr>
  <tr>
    <td>
      <tt>all_p</tt> 
    </td>
    <td>
      Include all schedules times, included past ones.
    </td>
  </tr>
</table>

    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    anonymous


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