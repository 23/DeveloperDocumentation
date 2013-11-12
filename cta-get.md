# API Method: /api/cta/get

List all calls-to-action for an object.

A list can be retrieved either for a video using a combinatin of `photo_id`/`token` or for any relevant object using `object_id`. The first method doesn't require special signing or permissions, whereas the seconds requires `write` permissions.

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr>
    <td>
      <tt>photo_id</tt>
    </td>
    <td>
      The ID of the video to fetch CTA for.
    </td>
  </tr>

  <tr>
    <td>
      <tt>token</tt>
    </td>
    <td>
      The corresponding token for the <tt>photo_id</tt>.<br/>
      The token <a href="index#time-limited-tokens">may be explicitly time-limited</a> in which case <tt>expire</tt> becomes a required parameter.
    </td>
  </tr>

  <tr>
    <td>
      <tt>object_id</tt>
    </td>
    <td>
      The ID of the object to fetch CTA for. Using `object_id` requires `write` permissions.
    </td>
  </tr>

  <tr>
    <td>
      <tt>player_id</tt>
    </td>
    <td>
      When retrieving a list from a player, specify the playback context by sending along a `player_id`.
    </td>
  </tr>

</table>    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    none

For non-public sites, the minimum level is:

    anonymous

When looking up non-video objects, the minimun level is:

    write


### Example XML Response

    <response status="ok" permission_level="anonymous" 
      p="1" size="3" total_count="3" cached="1" 
      cache_time="1384295763">
        <cta cta_id="3526910" name="Test 1" type="ad" 
          start_time="before" exclude_objects="" end_time="after" 
          vast_url="http://yahoo.com/..."/>
        (...)
    </response>
    
### Example JSON Response

    {
      "status": "ok", 
      "permission_level":"anonymous",
      "cached":"1",
      "cache_time":"1384296443",
      "cta":[
        {"cta_id": "3526910", "name": "Test 1", "type": "ad", "start_time": "before", 
        "exclude_objects": "", "end_time": "after", "vast_url": "http://yahoo.com/..."},
        (...)
      ],
      "p": "1",
      "size": "3",
      "total_count": "3",
      "site": {...},
      "endpoint": "/api/photo/cta/get"
    }