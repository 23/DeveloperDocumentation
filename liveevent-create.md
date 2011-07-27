# API Method: /api/liveevent/create
# flags=comments

Create a new live event.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>name</tt>  <small>(required)</small></td><td>The name of the live event. All HTML tags will be stripped away from the name.</td></tr>
  <tr><td><tt>description</tt></td><td>Description of the live event. The value can include save HTML tags such as &lt;b&gt; or &lt;p&gt;; however, if any disallowed tags are included, all html with be stripped from the description.</td></tr>
  <tr><td><tt>album_id</tt></td><td>An ID for the ID associated with the live event.<br/>Default is not to match the live event to an album.</td></tr>
  <tr><td><tt>visible_p</tt></td><td>Specify if the live event is published and visible to users on your videosite.<br/>Default is <tt>0</tt><br/><i>Allowed values:</i> <tt>0</tt> or <tt>1</tt></td></tr>
</table>

    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write


### Example XML Response

    <response status="ok" permission_level="write" 
      message="The live event was successfully created" cached="0">
      <liveevent_id>123456</liveevent_id>
      <token>hqzry7xaaekyavpjghpZkt1ykbelKjai</token>
    </response>

### Example JSON Response

    {
      "status": "ok", 
      "message":"The live event was successfully created",
      "permission_level":"write",
      "cached":"0",
      "liveevent":{"liveevent_id": "123456", "token": "hqzry7xaaekyavpjghpZkt1ykbelKjai"},
      "p": "1",
      "size": "1",
      "site": { ...},
      "endpoint": "/api/liveevent/create"
    }
