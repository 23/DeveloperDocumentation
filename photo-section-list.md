# API Method: /api/photo/section/list
# flags=comments

List sections within for a video.

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr>
    <td>
      <tt>photo_id (required)</tt>
    </td>
    <td>
      The ID of the video to fetch subtitles for.
    </td>
  </tr>

  <tr>
    <td>
      <tt>token (required)</tt>
    </td>
    <td>
      The corresponding token for the photo_id.<br/>
      The token <a href="index#time-limited-tokens">may be explicitly time-limited</a> in which case <tt>expire</tt> becomes a required parameter.
    </td>
  </tr>
</table>    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    none

For non-public sites, the minimum level is:

    anonymous


### Example XML Response


    <response status="ok" permission_level="anonymous" 
      total_count="3" cached="1" cache_time="1291469279">
      <section section_id="101674" start_time="0" title="Earth" 
        description="" link="/video/101353/101674/earth" />
      <section section_id="102000" start_time="180" title="Wind" 
        description="" link="/video/101353/102000/wind" />
      <section section_id="101661" start_time="381" title="... and Fire" 
        description="" link="/video/101353/101661/and-fire" />
    </response>
    
### Example JSON Response

    {
      "status": "ok", 
      "permission_level":"anonymous",
      "cached":"1",
      "cache_time":"1291469615",
      "sections":[
        {"section_id": "101674", "start_time": "0", "title": "Earth", 
         "description": "", "link": "/video/101353/101674/earth"},
        {"section_id": "102000", "start_time": "180", "title": "Wind", 
         "description": "", "link": "/video/101353/102000/wind"},
        {"section_id": "101661", "start_time": "381", "title": "... and Fire", 
         "description": "", "link": "/video/101353/101661/and-fire"}],
      "p": "1",
      "size": "1",
      "total_count": "3",
      "site": { ... },
      "endpoint": "/api/photo/section/list"
    }
