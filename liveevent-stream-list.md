# API Method: /api/livevent/stream/list
# flags=comments

Get a list of live events video streams.

### Parameters


<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>

  <tr>
    <td>
      <tt>liveevent_stream_id</tt> 
    </td>
    <td>
      Limit to a single live event video stream.
    </td>
  </tr>

  <tr>
    <td>
      <tt>liveevent_id</tt> 
    </td>
    <td>
      Filter to streams coupled to a single live event.
    </td>
  </tr>

  <tr>
    <td>
      <tt>token</tt> 
    </td>
    <td>
      List details about an in active or private events or video stream by including a private token.
      <br/>
     <b>Note:</b> This token may be either the token matched to <i>liveevent_id</i> or the one matched to <i>liveevent_stream_id</i>. In either case, the relevant parameter must also be included in the request.
    </td>
  </tr>

  <tr>
    <td>
      <tt>featured_p</tt> 
    </td>
    <td>
      Filter between streams from featured or un-featured live events.
    </td>
  </tr>

  <tr>
    <td>
      <tt>include_inactive_p</tt> 
    </td>
    <td>
      Include streams marked at in-active in the list. Requires <tt>read</tt> privileges or a relavant <tt>token</tt>.
    </td>
  </tr>

  <tr>
    <td>
      <tt>include_invisible_liveevents</tt> 
    </td>
    <td>
      Include streams from private/invisible live events. Requires <tt>read</tt> privileges or a relavant <tt>token</tt>.
    </td>
  </tr>


  <tr>
    <td>
      <tt>ordering</tt>
    </td>
    <td>
      Sort the returned list of streams.<br/>
      <i>Default:</i> <tt>name</tt><br/>
      <i>Valid values:</i> <tt>sortkey</tt>, <tt>name</tt>, <tt>active_p</tt>, <tt>creation_date</tt>
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

To list inactive live streams, to list any stream from an invisible/private live event, or to retrieve `publish_server`, `publish_server`, `active_p` and `token` the requirement is:

    read

### Example XML Response

    <response status="ok" permission_level="anonymous" p="1" size="20" 
      total_count="1" cached="1" cache_time="1311777832">
      <stream liveevent_stream_id="888331" liveevent_id="888330" 
       name="My stream" recording_p="0" publish_recordings_p="1" 
       live_viewers="0" rtmp_url="/stream/888331/c9cb6643cb91554dc54afd7d247bfc90/rtmp" 
       rtmp_stream="rtmp://server.com/stream.mp4" 
       creation_date="2011-06-27 13:09:47.121217+00" 
       updated_date="2011-06-27 13:09:47.121217+00"/>
    </response>


### Example JSON Response

    {
      "status": "ok", 
      "permission_level":"anonymous",
      "cached":"1",
      "cache_time":"1311777948",
      "streams":[
        {"liveevent_stream_id": "888331", "liveevent_id": "888330", "name": "My stream", 
         "recording_p": 0, "publish_recordings_p": 1, "live_viewers": "0", 
         "rtmp_url": "/stream/888331/c9cb6643cb91554dc54afd7d247bfc90/rtmp", 
         "rtmp_stream": "rtmp://server.com/stream.mp4", 
         "creation_date": "2011-06-27 13:09:47.121217+00", 
         "updated_date": "2011-06-27 13:09:47.121217+00"
        }
      ],
      "p": "1",
      "size": "20",
      "total_count": "1",
      "site": { ... },
      "endpoint": "/api/liveevent/stream/list"
    }
