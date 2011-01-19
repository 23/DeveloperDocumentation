# API Method: /api/photo/frame
# flags=comments

Extract a single frame of a video clip as a JPEG image.

Please note that this API method is subject to rate limiting and might be disabled entirely for a site or for a specific consumer key.

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr>
    <td>
      <tt>photo_id (required)</tt>
    </td>
    <td>
      The ID of the video to fetch a frame for.
    </td>
  </tr>

  <tr>
    <td>
      <tt>token (required)</tt>
    </td>
    <td>
      The corresponding token for the photo_id.
    </td>
  </tr>

  <tr>
    <td>
      <tt>time (required)</tt>
    </td>
    <td>
      The timestamp in seconds of the frame to extract (i.e. <tt>40.2</tt>)
    </td>
  </tr>

  <tr>
    <td>
      <tt>size</tt>
    </td>
    <td>
      The size of the frame (i.e. <tt>160x90</tt>). If this parameter is omitted, a suitable size is chosen.
    </td>
  </tr>
</table>    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    none

For non-public sites, the minimum level is:

    anonymous


### Response

If the request is successful, an image is returned with the content type `image/jpeg`.
