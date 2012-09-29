# API Method: /api/photo/subtitle/list
# flags=comments

Return the raw data (usually in JSON or WebSRT) to show subtitles, but required subsequent parsing.

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

  <tr>
    <td>
      <tt>subtitle_format</tt>
    </td>
    <td>
      Which format should the returned be in?
      <i>Default:</i> <i>websrt</i><br/>
      <i>Valid values:</i> <tt>websrt</tt> or <tt>json</tt>
    </td>
  </tr>

  <tr>
    <td>
      <tt>locale</tt>
    </td>
    <td>
      Locale to fecth the specific subtitle for.
    </td>
  </tr>
</table>    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    none

For non-public sites, the minimum level is:

    anonymous


### Example XML Response

    <response status="ok" permission_level="anonymous" total_count="0" 
      cached="1" cache_time="1291206586">
      <json>
        {"subtitles":[{"timestamp_begin":2.414, ...
      </json>
    </response>

    <response status="ok" permission_level="anonymous" total_count="0" 
      cached="1" cache_time="1291206586">
      <websrt>1
      00:00:02,414 --&gt; 00:00:09,294
      First subtitle ...
      </websrt>
    </response>
    
### Example JSON Response

    {
      "status": "ok", 
      "permission_level":"anonymous",
      "cached":"1",
      "cache_time":"1291206702",
      "data":{"json": "{\"subtitles\":[{\"timestamp_begin  ...."},
      "p": "1",
      "size": "1",
      "total_count": "0",
      "site": { ... },
      "endpoint": "/api/photo/subtitle/list"
    }
