# API Method: /api/liveevent/update
# flags=comments

Update the meta data about a live event.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>liveevent_id</tt> <small>(required)</small></td><td>The ID for the live event you're updating.</td></tr>
  <tr><td><tt>name</tt></td><td>The name of the live event. All HTML tags will be stripped away from the name.</td></tr>
  <tr><td><tt>description</tt></td><td>Description of the live event. The value can include save HTML tags such as &lt;b&gt; or &lt;p&gt;; however, if any disallowed tags are included, all html with be stripped from the description.</td></tr>
  <tr><td><tt>album_id</tt></td><td>An ID for the ID associated with the live event.</td></tr>
  <tr><td><tt>visible_p</tt></td><td>Specify if the live event is published and visible to users on your videosite.<br/>Allowed values are <tt>0</tt> and <tt>1</tt>, but the parameter is optional is you want to leave the current setting unchanged.</td></tr>
</table>

    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write


### Example XML Response

    <response status="ok" permission_level="write" 
      message="The live event was updated" cached="0">

### Example JSON Response

    {
      "status": "ok", 
      "message":"The live event was updated",
      "permission_level":"write",
      "cached":"0",
      "p": "1",
      "size": "1",
      "site": { ...},
      "endpoint": "/api/liveevent/update"
    }
