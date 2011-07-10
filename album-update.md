# API Method: /api/album/update
# flags=comments

Update the meta data for a channels


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>album_id</tt> <small>(required)</small></td><td>The album or video to update.</td></tr>
  <tr><td><tt>title</tt></td><td>The album title. All HTML tags will be stripped away from the title.</td></tr>
  <tr><td><tt>description</tt></td><td>Description of the album. The value can include save HTML tags such as &lt;b&gt; or &lt;p&gt;; however, if any disallowed tags are included, all html with be stripped from the description.</td></tr>
  <tr><td><tt>hide_p</tt> <small>(deprecated)</small></td><td>Should the album/channel be hidden or not. (Only available on 23 Video.)<br/>Default is <tt>0</tt><br/><i>Allowed values:</i> <tt>0</tt> or <tt>1</tt></td></tr>
</table>

    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write


### Example XML Response

    <response status="ok" permission_level="write" 
      message="The album was successfully updated" cached="0">

### Example JSON Response

    {
      "status": "ok", 
      "message":"The album was successfully updated",
      "permission_level":"write",
      "cached":"0",
      "album":{},
      "p": "1",
      "size": "1",
      "site": { ...},
      "endpoint": "/api/album/create"
    }
