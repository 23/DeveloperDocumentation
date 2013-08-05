# API Method: /api/live/create

Create a new live stream.

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>name</tt>  <small>(required)</small></td><td>The name of the live stream. All HTML tags will be stripped away from the name.</td></tr>
  <tr><td><tt>description</tt></td><td>Description of the live stream. The value can include save HTML tags such as &lt;b&gt; or &lt;p&gt;; however, if any disallowed tags are included, all html with be stripped from the description.</td></tr>
  <tr><td><tt>album_id</tt></td><td>An ID for the ID associated with the live stream.</td></tr>
  <tr><td><tt>private_p</tt></td><td>Specify if the live event is private or visible to users on your site.<br/>Default is <tt>1</tt><br/><i>Allowed values:</i> <tt>0</tt> or <tt>1</tt></td></tr>
  <tr><td><tt>promoted_p</tt></td><td>Promote this live stream.<br/>Default is <tt>0</tt><br/><i>Allowed values:</i> <tt>0</tt> or <tt>1</tt></td></tr>
  <tr><td><tt>auto_promote_p</tt></td><td>Automatically promote the live stream when it goes live.<br/>Default is <tt>0</tt><br/><i>Allowed values:</i> <tt>0</tt> or <tt>1</tt></td></tr>
  <tr><td><tt>auto_record_p</tt></td><td>Automatically record streams to the site's video archive.<br/>Default is <tt>0</tt><br/><i>Allowed values:</i> <tt>0</tt> or <tt>1</tt></td></tr>
  <tr><td><tt>publish_recordings_p</tt></td><td>Publish recordings to the site immediately.<br/>Default is <tt>0</tt><br/><i>Allowed values:</i> <tt>0</tt> or <tt>1</tt></td></tr>
    <tr><td><tt>show_countdown_p</tt></td><td>Show a count down to the next schedule stream in the video player.<br/>Default is <tt>1</tt><br/><i>Allowed values:</i> <tt>0</tt> or <tt>1</tt></td></tr>
</table>

    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write


### Example XML Response

    <response status="ok" permission_level="write" 
      message="The live stream was successfully created" cached="0">
      <live_id>123456</live_id>
      <token>hqzry7xaaekyavpjghpZkt1ykbelKjai</token>
    </response>

### Example JSON Response

    {
      "status": "ok", 
      "message":"The live event was successfully created",
      "permission_level":"write",
      "cached":"0",
      "liveevent":{"live_id": "123456", "token": "hqzry7xaaekyavpjghpZkt1ykbelKjai"},
      "p": "1",
      "size": "1",
      "site": { ...},
      "endpoint": "/api/live/create"
    }