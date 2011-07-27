# API Method: /api/livevent/list
# flags=comments

Get a list of live events.

### Parameters


<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>

  <tr>
    <td>
      <tt>liveevent_id</tt> 
    </td>
    <td>
      Limit to a single live event.
    </td>
  </tr>

  <tr>
    <td>
      <tt>token</tt> 
    </td>
    <td>
      List details about a private/invisible event by including its private token.
    </td>
  </tr>

  <tr>
    <td>
      <tt>include_invisible_p</tt> 
    </td>
    <td>
      Include private/invisible live events in the list. Requires <tt>read</tt> privileges.
    </td>
  </tr>

  <tr>
    <td>
      <tt>featured_p</tt>
    </td>
    <td>
      Filter live events by whether they're featured or not.
    </td>
  </tr>

  <tr>
    <td>
      <tt>album_id</tt>
    </td>
    <td>
      Include only live events matched to a specific album.
    </td>
  </tr>

  <tr>
    <td>
      <tt>ordering</tt>
    </td>
    <td>
      Sort the returned list of events.<br/>
      <i>Default:</i> <tt>name</tt><br/>
      <i>Valid values:</i> <tt>name</tt>, <tt>visible_p</tt>, <tt>creation_date</tt>
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

To list private live events, and to retrieve `visible_p` and `token` the requirement is:

    read

### Example XML Response

    <response status="ok" permission_level="anonymous" p="1" 
      size="20" total_count="1" cached="1" cache_time="1311768686">
      <liveevent liveevent_id="797777" name="Awesome Conference 2011" album_id="123456" 
        creation_date="2011-06-05 13:57:45" creation_date__date="June 05, 2011" 
        updated_date="2011-07-27 12:11:18" updated_date__date="July 27, 2011">
        <description>This is an awesome conference.</description>
        <description_html>This is an awesome conference.</description_html>
        <description_text>This is an awesome conference.</description_text>
      </liveevent>
    </response>


### Example JSON Response

    {
      "status": "ok", 
      "permission_level":"anonymous",
      "cached":"1",
      "cache_time":"1311774441",
      "liveevents":[
         {"liveevent_id": "888330", "name": "Awesome Conference 2011", "album_id": "123456", 
          "creation_date": "2011-06-27 13:09:47", "creation_date__date": "June 27, 2011", 
          "updated_date": "2011-06-27 13:10:01", "updated_date__date": "June 27, 2011", 
          "description": "This is an awesome conference.", 
          "description_html": "This is an awesome conference.", 
          '"description_text": "This is an awesome conference."}
        ],
      "p": "1",
      "size": "20",
      "total_count": "1",
      "site": { ... },
      "endpoint": "/api/liveevent/list"
    }
