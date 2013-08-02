# API Method: /api/analtics/extract/play-totals
# flags=comments

Extract total values from a site, a single photo or a series of photos from the analytics engine as daily and summed values.

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
    <td>
      <tt>photo_id</tt>
    </td>
    <td>
      Limits the extracted totals to one or more photo IDs. To limit to multiple photo IDs, separate photo IDs with commas.<br/>
      If no <tt>photo_id</tt> value is supplied, the default behavior is to extract totals from the entire site.
    </td>
  </tr>
</table>

### Permission level 

The minimum required [permission level](index#permission-level) is:

    read


### Example XML Response

Analytics extraction endpoints do not support XML output formatting.

### Example JSON Response

Notes on specific output values:

*   The <tt>date</tt> field of <tt>daily</tt> is the number of milliseconds since the UNIX epoch in the UTC timezone. This is chosen to leverage native in-browser JavaScript transformation of data.
*   The <tt>hourly</tt> array of <tt>absolute</tt> contains 24 objects describing an interval of one hour starting at 00:00-01:00 UTC
*   The <tt>playthrough</tt> array of <tt>absolute</tt> contains 101 decimal values describing the percentage of plays that have reached this given point

<br />

    {
      "status": "ok", 
      "permission_level": "read",
      "cached": "0",
      "analytics": {
        "daily": [
          {
            "date": 1241992800000,
            "totals": {
              "downloadedBytes": 2555070996.0,
              "downloads": 22.0,
              "events": {
                "load": 5.0
              },
              "finishes": 1.0,
              "loads": 22.0,
              "playEngagement": 116.26,
              "plays": 4.0,
              "playthroughAverage": 47.5
            }
          },
          {
            "date": 1242079200000,
            "totals": {
              "downloadedBytes": 899000228.0,
              "downloads": 40.0,
              "events": {
              },
              "finishes": 4.0,
              "loads": 46.0,
              "playEngagement": 3583.09,
              "plays": 15.0,
              "playthroughAverage": 34.07
            }
          },
          ..
        ],
        "absolute": {
          "hourly": [
            {
              "downloadedBytes": 4596349590.0,
              "downloads": 330.0,
              "finishes": 86.0,
              "loads": 461.0,
              "plays": 283.0
            },
            ..
          ],
          "playthrough": [
            100,
            100,
            ..
            38
          ],
          "totals" : {
            "downloadedBytes": 373387551299.0,
            "downloads": 15732.0,
            "events": {
              "fullscreen": 1.0,
              "load": 33.0
            },
            "finishes": 2467.0,
            "loads": 15925.0,
            "playEngagement": 1569539.40,
            "plays": 6556.0,
            "playthroughAverage": 56.88
          }
        }
      },
      "p": 1,
      "size": 1,
      "total_count": 1,
      "site": { ... },
      "endpoint": "/api/analytics/extract/play-totals"
    }
