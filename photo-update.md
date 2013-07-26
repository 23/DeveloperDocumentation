# API Method: /api/photo/update
# flags=comments

Update the meta data -- including title, description, tags, channel/album and publish status -- of a photo or video.

The only required parameter is <tt>photo_id</tt>. Whenever parameters are omitted, the current value is retained. 


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr>
    <td>
      <tt>photo_id</tt>
      <small>(required)</small>
    </td>
    <td>
      ID of the photo or video.
    </td>
  </tr>
  <tr>
    <td>
      <tt>album_id</tt>
    </td>
    <td>
      An album (or channel) ID. Multiple values should be comma-separated.
    </td>
  </tr>
  <tr>
    <td>
      <tt>title</tt>
    </td>
    <td>
      The title for the photo or video.
    </td>
  </tr>
  <tr>
    <td>
      <tt>description</tt>
    </td>
    <td>
      A description for the object. The value can include save HTML tags such as &lt;b&gt; or &lt;p&gt;; however, if any disallowed tags are included, all html with be stripped from the description.
    </td>
  </tr>
  <tr>
    <td>
      <tt>tags</tt>
    </td>
    <td>
      Space-separated list of tags to attach to the object. If this parameter is omitted, existing tags are left unchanged. If the paramter is specified, all existing tags will be overwritten with the new value.
    </td>
  </tr>
  <tr>
    <td>
      <tt>published_p</tt>
    </td>
    <td>
      Is the video published?<br/>
      <i>Allowed values:</i> <tt>0</tt> or <tt>1</tt>
    </td>
  </tr>
</table>

    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write

### Example XML Response

    <response status="ok" permission_level="write" 
      message="The photo/video was updated" cached="0"/>

### Example JSON Response

    {
      "status": "ok", 
      "message":"The photo/video was updated",
      "permission_level":"write",
      "cached":"0",
      "photo":{},
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/photo/update"
    }
