# API Method: /api/photo/update-upload-token
# flags=comments

Update a photo or video. which has previously been or is in the process of being uploaded to the site.

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>upload_token</tt> <small>(required)</small></td><td>The upload token being used.</td></tr>
  <tr><td><tt>filename</tt></td><td>If you have uploaded multiple files with the same <tt>upload_token</tt> use the file's name to identify it.</td></tr>
  <tr><td><tt>album_id</tt></td><td>A album (or channel) ID.</td></tr>
  <tr><td><tt>title</tt></td><td>A title for the upload. All HTML tags will be stripped away from the title.</td></tr>
  <tr><td><tt>description</tt></td><td>A description of upload. The value can include save HTML tags such as &lt;b&gt; or &lt;p&gt;; however, if any disallowed tags are included, all html with be stripped from the description.</td></tr>
  <tr><td><tt>tags</tt></td><td>Space-separated list of tags to attach to the uploaded file.</td></tr>
  <tr><td><tt>publish</tt></td><td>Should the file be published in the site immediately?<br/>Default is <tt>1</tt>.<br/><i>Valid values:</i> <tt>0</tt> or <tt>1</tt></td></tr>
</table>

### Permission level 

The minimum required [permission level](index#permission-level) is:

    none

For non-public sites, the minimum level is:

    anonymous

### Example XML Response

    <response status="ok" permission_level="write" 
      message="The token information was updated" cached="0"/>

### Example JSON Response

    {
      "status": "ok", 
      "message":"The token information was updated",
      "permission_level":"write",
      "cached":"0",
      "photo":{},
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/photo/delete"
    }
