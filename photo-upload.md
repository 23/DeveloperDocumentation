# API Method: /api/photo/upload
# flags=comments

Upload a new file to the site.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>file</tt> <small>(required)</small></td><td>The file to upload. (Note that this parameter &minus; neither the filename nor the file content &minus; shouldn't be included in the api signature).</td></tr>
  <tr><td><tt>user_id</tt></td><td>The user's ID. If no user ID is given, the objects will be uploaded anonymously. Requires <tt>super</tt>, otherwise files are uploaded using the authenticated user.</td></tr>
  <tr><td><tt>album_id</tt></td><td>A album (or channel) ID.</td></tr>
  <tr><td><tt>title</tt></td><td>A title for the upload. All HTML tags will be stripped away from the title.</td></tr>
  <tr><td><tt>description</tt></td><td>A description of upload. The value can include save HTML tags such as &lt;b&gt; or &lt;p&gt;; however, if any disallowed tags are included, all html with be stripped from the description.</td></tr>
  <tr><td><tt>tags</tt></td><td>Space-separated list of tags to attach to the uploaded file.</td></tr>
  <tr><td><tt>publish</tt></td><td>Should the file be published in the site immediately? Default is <tt>1</tt> (<tt>0</tt> or <tt>1</tt>)</td></tr>
  <tr><td><tt>publish_date</tt></td><td>Specific publish date of the photo or video, either past or future.</td></tr>
  <tr><td><tt>absolute_url</tt></td><td>If the uploaded photo or video is to be associated with a different canonical URI from the on assigned by default, set it here.</td></tr>
</table>

In addition to the standard parameters, any custom variable configured for `photo` objects can be set using the variable `key` as a parameter.
    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write

### Example XML Response

    <?xml version="1.0" encoding="UTF-8"?>
    <response status="ok" permission_level="write" 
      message="The file was successfully uploaded" cached="0">
      <photo_id>60432</photo_id>
      <tree_id>7340</tree_id>
      <token>7aguzmVuqpwjshwprfegm2swfdcnaWrj</token>
    </response>

### Example JSON Response

    {
      "status": "ok", 
      "message":"The file was successfully uploaded",
      "permission_level":"write",
      "cached":"0",
      "upload":{"photo_id": "60433", "tree_id": "7340", 
        "token": "7aguzmVuqpwjshwprfegm2swfdcnaWrj"},
      "p": "1",
      "size": "1",
      "site": { ...},
      "endpoint": "/api/photo/upload"
    }
