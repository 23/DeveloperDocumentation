# API Method: /api/album/list
# flags=comments

Get a list of albums or channels.

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>

  <tr>
    <td>
      <tt>album_id</tt> 
    </td>
    <td>
      Limit to a single album or channel.
    </td>
  </tr>

  <tr>
    <td>
      <tt>user_id</tt> 
    </td>
    <td>
      Albums or channels created by a specific user
    </td>
  </tr>

  <tr>
    <td>
      <tt>photo_id</tt> 
    </td>
    <td>
      List albums or channels from a specific video or photo.
    </td>
  </tr>

  <tr>
    <td>
      <tt>search</tt>
    </td>
    <td>
      Search albums for a specific term.
    </td>
  </tr>

  <tr>
    <td>
      <tt>include_hidden_p</tt>
    </td>
    <td>
      Include hidden albums in the response. Requires <tt>read</tt> privileges.
    </td>
  </tr>

  <tr>
    <td>
      <tt>orderby</tt>
    </td>
    <td>
      Variable to order albums by.<br/>
      <i>Default:</i> <tt>creation_date</tt><br/>
      <i>Valid values:</i> <tt>sortkey</tt>, <tt>title</tt>, <tt>editing_date</tt>, <tt>creation_date</tt>
    </td>
  </tr>

  <tr>
    <td>
      <tt>order</tt>
    </td>
    <td>
      Order of the objects in the response.<br/>
      <i>Default:</i> <tt>desc</tt><br/>
      <i>Valid values:</i> <tt>desc</tt> and <tt>asc</tt>
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

To list hidden albums or channels, and to retrieve `hide_p` and `token` the requirement is:

    read

### Example XML Response

    <response status="ok" permission_level="read" p="1" size="20" total_count="1" cached="0">
      <album album_id="12345" title="Screencasts" 
        pretty_date="May 11, 2009" pretty_time="08:21 AM" 
        one="/channel/49838/screencasts" creation_date_ansi="2009-05-11 08:21:02" 
        user_id="12323" display_name="Ernest Hemmingway" user_url="/user/ernest/" username="ernest"
        token="wUqrwbzagcepyzzrjja5ttns0omoMzon" hide_p="0">
        <content>About the channel</content>
        <content_text>About the channel</content_text>
      </album>
    </response>


### Example JSON Response

    {
      "status": "ok", 
      "permission_level":"read",
      "cached":"0",
      "albums":[{
        "album_id": "12345", "title": "Screencasts", "pretty_date": 
        "May 11, 2009", "pretty_time": "08:21 AM", "one": "/channel/49838/screencasts", 
        "creation_date_ansi": "2009-05-11 08:21:02", "user_id": "12323", 
        "display_name": "Ernest Hemmingway", "user_url": "/user/ernest/", "username": "ernest", 
        "token": "wUqrwbzagcepyzzrjja5ttns0omoMzon", "hide_p": 0, 
        "content": "About the channel", "content_text": "About the channel"}],
      "p": "1",
      "size": "20",
      "total_count": "1",
      "site": { ... },
      "endpoint": "/api/album/list"
    }
