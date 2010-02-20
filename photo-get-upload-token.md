# API Method: /api/photo/get-upload-token

Prepare an upload directly from a user's web browser.

This method can be used to pre-authenticated uploads to a site without proxying them through your servers and the API. <a href="#flow">The flow</a> is described in detail below, but in general terms this method will return a token which can be included in a standard HTML form (or even a more advanced Flash uploader) to upload photos or videos directly to 23's servers.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>return_url</tt> <small>(required)</small></td><td>The URL where the user is return after both upload success and failure. See <a href="#flow">the Flow section</a> for more information.</td></tr>
  <tr><td><tt>user_id</tt></td><td>The user's ID. If no user ID is given, the objects will be uploaded anonymously. Requires <tt>super</tt>, otherwise files are uploaded using the authenticated user.</td></tr>
  <tr><td><tt>album_id</tt></td><td>A album (or channel) ID.</td></tr>
  <tr><td><tt>title</tt></td><td>A title for the upload. All HTML tags will be stripped away from the title.</td></tr>
  <tr><td><tt>description</tt></td><td>A description of upload. The value can include save HTML tags such as &lt;b&gt; or &lt;p&gt;; however, if any disallowed tags are included, all html with be stripped from the description.</td></tr>
  <tr><td><tt>tags</tt></td><td>Space-separated list of tags to attach to the uploaded file.</td></tr>
  <tr><td><tt>publish</tt></td><td>Should the file be published in the site immediately?<br/>Default is <tt>1</tt>.<br/><i>Valid values:</i> <tt>0</tt> or <tt>1</tt></td></tr>
  <tr><td><tt>valid_minutes</tt></td><td>How many minutes should the upload token be valid for. The default is <tt>180</tt> minutes (or 3 hours). The minimum value is 15 minutes and the maximum is 24 hours.</td></tr>
  <tr><td><tt>max_uploads</tt></td><td>How many files can be uploaded using the returned token. The default is <tt>1</tt> upload; the maximum is 10</td></tr>
</table>

    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write

### Example XML Response

    <response status="ok" permission_level="write" 
      message="The upload token is ready to use" cached="0">
      <upload_token>022fe6e3fb42758d6147c539727c5358af3524b1</upload_token>
      <title>A title for the new upload</title>
      <description>... and a prelimiary description</description>
      <publish>1</publish>
      <tags>product:1234, testemonial</tags>
      <user_id>17488</user_id>
      <album_id></album_id>
      <max_uploads>1</max_uploads>
      <valid_minutes>180</valid_minutes>
      <valid_until>1266711372</valid_until>
      <return_url>http://www.example.com/upload/callback?theme=green</return_url>
    </response>

### Example JSON Response

    {
      "status": "ok", 
      "message":"The upload token is ready to use",
      "permission_level":"write",
      "cached":"0",
      "uploadtoken":{
        "valid_minutes": "180", 
        "description": "... and a prelimiary description", 
        "upload_token": "022fe6e3fb42758d6147c539727c5358af3524b1", 
        "max_uploads": "1", 
        "album_id": "", 
        "return_url": "http://www.example.com/upload/callback?theme=green", 
        "title": "A title for the new upload", 
        "valid_until": "1266713254", 
        "publish": "1", 
        "tags": "product:1234, testemonial",
        "user_id": "17488"
      },
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/photo/get-upload-token"
    }


### Flow

TODO

The callback request to this URL will always take the form of a HTTP 301 redirect to a GET-style address. The request will always include the <tt>upload_token</tt> and <tt>domain</tt> as a parameter. If the upload succeeded, the parameters <tt>photo_id</tt>, <tt>token</tt>, <tt>tree_id</tt> will be included. On upload failure, the callback includes an <tt>error_message</tt> parameter.
