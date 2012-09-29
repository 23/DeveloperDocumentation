# API Method: /api/analtics/extract/play-details
# flags=comments

Extract a details list of all photos on a specific site from the analytics engine.

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr>
    <td><tt>date_start</tt></td>
    <td>The starting date of the range from which to get photo details.</td>
  </tr>
  <tr>
    <td><tt>date_end</tt></td>
    <td>The ending date of the range from which to get photo details.</td>
  </tr>
  <tr>
    <td><tt>photo_id</tt></td>
    <td>A comma-separated list of <tt>photo_id</tt>s to include in the stats. When this parameter is omitted, all stats on the site are included.</td>
  </tr>
  <tr>
    <td><tt>exclude_deleted_p</tt></td>
    <td>
      Exclude stats for deleted objects.<br/>
      <i>Default:</i> <tt>0</tt>
    </td>
  </tr>
  <tr>
    <td>
      <tt>orderby</tt>
    </td>
    <td>
      Variable to order the listed photos by.<br/>
      <i>Default:</i> <tt>downloads</tt><br/>
      <i>Valid values:</i> <tt>downloads</tt>, <tt>playthrough_average</tt>, <tt>engagement</tt>, <tt>embeds</tt>
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

    read


### Example XML Response

Analytics extraction endpoints do not support XML output formatting.

### Example JSON Response

    {
      "status": "ok", 
      "permission_level": "read",
      "cached": "0",
      "analytics": {
        "photos": [
          {
            "photoId": "455471",
            "totals": {
              "playthroughAverage": 40.30,
              "plays": 1210.0,
              "finishes": 323.0,
              "downloadedBytes": 121656230731.0,
              "playEngagement": 339332.51,
              "loads": 3398.0,
              "downloads": 3365.0,
              "events": {
                "load": 3.0
              }
            }
          },
          ..
        ]
      },
      "p": 1,
      "size": 20,
      "total_count": 256,
      "site": { ... },
      "endpoint": "/api/analytics/extract/play-details"
    }
