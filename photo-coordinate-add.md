# API Method: /api/photo/coordinate/add
# flags=comments

Add a new geographic coordinate to a photo or video, usually in order to place it on a map. You can add multiple coordinates to any single photo or video object.

Once a coordiate has been added, it's is listed in [/api/photo/list](photo-list).

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr>
    <td>
      <tt>photo_id (required)</tt>
    </td>
    <td>
      The ID of the photo object to attach to a coordinates
    </td>
  </tr>

  <tr>
    <td>
      <tt>search_string</tt>
    </td>
    <td>
      A search string for a coordinate to attach to the photo or video. Behind the scenes we're using <a href="http://code.google.com/apis/maps/">Google Maps API</a> to perform the lookup, and we will attach only the best match as a coordinate. If the search string doesn't yield any matches, a <tt>no_such_coodinate</tt> error is returned. If you wish for more flexibility in which coordinate is chosen, use <tt>latitude</tt> and <tt>longitude</tt> to specify the locations.
    </td>
  </tr>

  <tr>
    <td>
      <tt>latitude</tt>
    </td>
    <td>
      A latitude to attach to the photo or video. This parameter must be used along with <tt>longitude</tt>.
    </td>
  </tr>

  <tr>
    <td>
      <tt>longitude</tt>
    </td>
    <td>
      A longitude to attach to the photo or video. This parameter must be used along with <tt>latitude</tt>.
    </td>
  </tr>
</table>    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write


### Example XML Response

    <response status="ok" permission_level="write" 
      message="The coordinate was added"/>

    
### Example JSON Response

    {
      "status": "ok", 
      "message":"The coordinate was added",
      "permission_level":"write",
      "cached":"0",
      "photo":{},
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/photo/coordinate/add"
    }

