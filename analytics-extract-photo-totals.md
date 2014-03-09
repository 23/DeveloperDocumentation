# API Method: /api/analytics/extract/photo-totals
# flags=comments

Extract a complete list of aggregated totals from one or more sites updated since a certain point in time.

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr>
    <td><tt>site_id</tt></td>
    <td>A comma-separated list of <tt>site_id</tt>s to include in the return value.</td>
  </tr>
  <tr>
    <td><tt>since</tt></td>
    <td>A UTC timestamp in the form of "%Y-%m-%d %H:%M:%S" before which totals will be capped. This should be used for continuous updates where the last update was run at "since".</td>
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
          },
          ..
        ]
      },
      "p": 1,
      "size": 256,
      "total_count": 256,
      "site": { ... },
      "endpoint": "/api/analytics/extract/photo-totals"
    }
