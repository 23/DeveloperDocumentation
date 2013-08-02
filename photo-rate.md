# API Method: /api/photo/rate
# flags=comments

Rate a photo or video.

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr>
    <td>
      <tt>photo_id (required)</tt>
    </td>
    <td>
      The ID of the video to rate.
    </td>
  </tr>

  <tr>
    <td>
      <tt>rating (required)</tt>
    </td>
    <td>
      The rating normalized to a float value between 0 and 5. You will be in charge of converting the internal 0-1 value to match your site's rating scheme. For example, in a 5-star rating system, 0 stars will convert to a <tt>0</tt> rating, 1 star is <tt>0.25</tt> and so on up to 5 stars and <tt>1</tt>.
    </td>
  </tr>
</table>    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    anonymous


### Example XML Response

    <response status="ok" permission_level="anonymous" cached="0">
      <rating>0.5</rating>
    </response>

### Example JSON Response

    {
      "status": "ok", 
      "permission_level":"anonymous",
      "cached":"0",
      "rating":{"rating": "0.5"},
      "p": "1",
      "size": "1",
      "site": ...,
      "endpoint": "/api/photo/rate"
    }
