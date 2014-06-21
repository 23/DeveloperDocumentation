# API Method: /api/live/update

Update the meta data about a live stream.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>live_id</tt> <small>(required)</small></td><td>The ID for the live stream you're updating.</td></tr>
  <tr><td><tt>name</tt></td><td>The name of the live stream. All HTML tags will be stripped away from the name.</td></tr>
  <tr><td><tt>description</tt></td><td>Description of the live stream. The value can include save HTML tags such as &lt;b&gt; or &lt;p&gt;; however, if any disallowed tags are included, all html with be stripped from the description.</td></tr>
  <tr><td><tt>album_id</tt></td><td>An ID for the ID associated with recordings of the live stream.</td></tr>
  <tr><td><tt>private_p</tt></td><td>Specify if the live event is private or visible to users on your site.<br/><i>Allowed values:</i> <tt>0</tt> or <tt>1</tt></td></tr>
  <tr><td><tt>promoted_p</tt></td><td>Promote this live stream.<br/><i>Allowed values:</i> <tt>0</tt> or <tt>1</tt></td></tr>
  <tr><td><tt>auto_promote_p</tt></td><td>Automatically promote the live stream when it goes live.<br/><i>Allowed values:</i> <tt>0</tt> or <tt>1</tt></td></tr>
  <tr><td><tt>auto_record_p</tt></td><td>Automatically record streams to the site's video archive.<br/><i>Allowed values:</i> <tt>0</tt> or <tt>1</tt></td></tr>
  <tr><td><tt>publish_recordings_p</tt></td><td>Publish recordings to the site immediately.<br/><i>Allowed values:</i> <tt>0</tt> or <tt>1</tt></td></tr>
    <tr><td><tt>show_countdown_p</tt></td><td>Show a count down to the next schedule stream in the video player.<br/><i>Allowed values:</i> <tt>0</tt> or <tt>1</tt></td></tr>
    <tr><td><tt>broadcasting_p</tt></td><td>Mark whether the stream is live broadcasting or not.<br/><i>Allowed values:</i> <tt>0</tt> or <tt>1</tt></td></tr>
</table>

    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write


### Example XML Response

    <response status="ok" permission_level="write" 
      message="The live steram was updated" cached="0">

### Example JSON Response

    {
      "status": "ok", 
      "message":"The live stream was updated",
      "permission_level":"write",
      "cached":"0",
      "p": "1",
      "size": "1",
      "site": { ...},
      "endpoint": "/api/live/update"
    }