# API Method: /api/photo/frame
# flags=comments

Extract a single frame of a video clip as a JPEG image.

Please note that this API method is subject to rate limiting and might be disabled entirely for a site or for a specific consumer key.

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr>
    <td>
      <tt>photo_id</tt>
    </td>
    <td>
      The ID of the video to fetch a frame for. If this parameter is given, <tt>token</tt> is required.
    </td>
  </tr>

  <tr>
    <td>
      <tt>token</tt>
    </td>
    <td>
      The corresponding token for the photo_id. If this parameter is given, <tt>photo_id</tt> is required.
    </td>
  </tr>

  <tr>
    <td>
      <tt>upload_token</tt>
    </td>
    <td>
      An upload token for a file uploaded through <a href="photo-get-upload-token">the token upload method</a>. You might want to include a <tt>filename</tt> along with this parameter.
    </td>
  </tr>

  <tr>
    <td>
      <tt>filename</tt>
    </td>
    <td>
      If you have uploaded multiple files with the same <tt>upload_token</tt> use the file's name to identify it.
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
