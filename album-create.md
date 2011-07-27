# API METHOD: /api/album/create
# flags=comments

Create a new album or channel.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>title</tt> <small>(required)</small></td><td>The album title. All HTML tags will be stripped away from the title.</td></tr>
  <tr><td><tt>description</tt></td><td>Description of the album. The value can include save HTML tags such as &lt;b&gt; or &lt;p&gt;; however, if any disallowed tags are included, all html with be stripped from the description.</td></tr>
  <tr><td><tt>hide_p</tt> <small>(deprecated)</small></td><td>Should the album/channel be hidden or not. (Only available on 23 Video.)<br/>Default is <tt>0</tt><br/><i>Allowed values:</i> <tt>0</tt> or <tt>1</tt></td></tr>
  <tr><td><tt>user_id</tt></td><td>The user's ID. If no user ID is given, the objects will be uploaded anonymously. Requires <tt>super</tt>, otherwise albums are created by the authenticated user.</td></tr>
</table>

    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write


### Example XML Response

    <response status="ok" permission_level="write" 
      message="The album was successfully created" cached="0">
      <album_id>123456</album_id>
      <token>hqzry7xaaekyavpjghpZkt1ykbelKjai</token>
    </response>

### Example JSON Response

    {
      "status": "ok", 
      "message":"The album was successfully created",
      "permission_level":"write",
      "cached":"0",
      "album":{"album_id": "123456", "token": "hqzry7xaaekyavpjghpZkt1ykbelKjai"},
      "p": "1",
      "size": "1",
      "site": { ...},
      "endpoint": "/api/album/create"
    }
