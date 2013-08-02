# API Method: /api/livevent/list
# flags=comments

Get a list of live events.

### Parameters


<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>

  <tr>
    <td>
      <tt>live_id</tt> 
    </td>
    <td>
      Limit to a single live stream.
    </td>
  </tr>

  <tr>
    <td>
      <tt>token</tt> 
    </td>
    <td>
      List details about a private/invisible stream by including its private token.
    </td>
  </tr>

  <tr>
    <td>
      <tt>include_private_p</tt> 
    </td>
    <td>
      Include privatelive events in the list. Requires <tt>read</tt> privileges, but may be overwritten by a combination of `live_id`/`token`.
    </td>
  </tr>

  <tr>
    <td>
      <tt>promoted_p</tt>
    </td>
    <td>
      Filter live streams by whether they're promoted or not.
    </td>
  </tr>

  <tr>
    <td>
      <tt>album_id</tt>
    </td>
    <td>
      Include only live streams matched to a specific album.
    </td>
  </tr>

  <tr>
    <td>
      <tt>ordering</tt>
    </td>
    <td>
      Sort the returned list of events.<br/>
      <i>Default:</i> <tt>name</tt><br/>
      <i>Valid values:</i> <tt>name</tt>, <tt>private</tt>, <tt>promoted</tt>, <tt>streaming</tt>, <tt>creation_date</tt>
    </td>
  </tr>

  <tr>
    <td>
      <tt>p</tt>
    </td>
    <td>
      Page offset for the request. See [pagination](index#pagination) for details.
    </td>
  </tr>

  <tr>
    <td>
      <tt>size</tt>
    </td>
    <td>
      Number of objects to include in the response. See [pagination](index#pagination) for details.
    </td>
  </tr>
</table>



### Permission level 

The minimum required [permission level](index#permission-level) is:

    anonymous

To list private live events, and to retrieve `publish_server`, `publish_stream`, `private_p`, `auto_promote_p`, `auto_record_p` and `publish_recordings_p` the requirement is:

    read

### Example XML Response

    <response status="ok" permission_level="anonymous" p="1" size="20" total_count="1" cached="0">
      <live live_id="123456" token="abcdfe23456789" 
       name="Stream name" album_id="" 
       creation_date="2013-08-01 16:19:58.492688+02" creation_date__date="August 01, 2013" 
       updated_date="2013-08-01 16:19:58.492688+02" updated_date__date="August 01, 2013" 
       link="/live/1830496" short_link="/live/1830496" promoted_p="0" streaming_p="0" show_countdown_p="1" 
       thumbnail_photo_id="1234578" thumbnail_tree_id="7340" thumbnail_token="abcdfe23456789" 
       preview_photo_id="1234578" preview_tree_id="7340" preview_token="abcdfe23456789" 
       current_viewers="0" 
       hds_stream="http://cdn.live.visualplatform.net/live/mp4:dev-123456-abcdfe23456789.mp4/manifest.f4m" 
       hls_stream="http://cdn.live.visualplatform.net/live/mp4:dev-123456-abcdfe23456789.mp4/playlist.m3u8">
        <description></description>
        <description_html></description_html>
        <description_text></description_text>
      </live>
    </response>


### Example JSON Response

    {
      "status": "ok", 
      "permission_level":"anonymous",
      "cached":"0",
      "live":[{"live_id": "123456", "token": "abcdef123456", "name": "Stream name", "album_id": "", 
         "creation_date": "2013-08-01 16:19:58.492688+02", "creation_date__date": "August 01, 2013", 
         "updated_date": "2013-08-01 16:19:58.492688+02", "updated_date__date": "August 01, 2013", 
         "link": "/live/123456", "short_link": "/live/123456", "promoted_p": 0, "streaming_p": 0, "show_countdown_p": 1, 
         "thumbnail_photo_id": "124578", "thumbnail_tree_id": "7340", "thumbnail_token": "abcdfefge456789", 
         "preview_photo_id": "124578", "preview_tree_id": "7340", "preview_token": "abcdfefge456789", 
         "current_viewers": "0", "hds_stream": "http://cdn.live.visualplatform.net/live/mp4:dev-123456-abcdef123456.mp4/manifest.f4m", 
         "hls_stream": "http://cdn.live.visualplatform.net/live/mp4:dev-123456-abcdef123456.mp4/playlist.m3u8", 
         "description": "", "description_html": "", "description_text": ""}],
      "p": "1",
      "size": "20",
      "total_count": "1",
      "site": { ... },
      "endpoint": "/api/live/list"
    }   
