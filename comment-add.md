# API Method: /api/comment/add
# flags=comments

Post a new comment.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>

  <tr>
    <td>
      <tt>object_id <small>(required)</small></tt> 
    </td>
    <td>
      Identifier of the object you want to add a comment to. This is almost always the <tt>photo_id</tt> of a photo or video object.
    </td>
  </tr>

  <tr>
    <td>
      <tt>object_type <small>(required)</small></tt> 
    </td>
    <td>
      The type of object for which you are adding a comment. The only allowed value it <tt>photo</tt> .
    </td>
  </tr>

  <tr>
    <td>
      <tt>name <small>(required)</small></tt> 
    </td>
    <td>
      The name of the poster of the comment.
    </td>
  </tr>

  <tr>
    <td>
      <tt>email <small>(required)</small></tt> 
    </td>
    <td>
      The email address of the poster of the comment.
    </td>
  </tr>

  <tr>
    <td>
      <tt>content <small>(required)</small></tt> 
    </td>
    <td>
      The content of the comment to be posted.
    </td>
  </tr>

  <tr>
    <td>
      <tt>url</tt> 
    </td>
    <td>
      A URL or web address to identify with the poster of the comment.
    </td>
  </tr>

  <tr>
    <td>
      <tt>ip_address</tt> 
    </td>
    <td>
      The IP address of the poster of the comment. This is used for spam protection and learning.
    </td>
  </tr>

  <tr>
    <td>
      <tt>ignore_spam_p</tt> 
    </td>
    <td>
      Specifies whether spam errors should be ignored. The default value is <tt>0</tt> meaning that comments flagged by the spam filters result in an <tt>comment_is_spam</tt> error being returned. If this option is set to <tt>1</tt>, spam filters are not applied.
    </td>
  </tr>

  <tr>
    <td>
      <tt>approved_p</tt> 
    </td>
    <td>
      If your site uses comment screening, you can set the comment to approved by setting this option to <tt>1</tt>. The default value is <tt>0</tt>.
    </td>
  </tr>
</table>



### Permission level 

The minimum required [permission level](index#permission-level) is:

    write


### Example XML Response

    <response status="ok" permission_level="write" 
      message="The comment was added" cached="0"/>

### Example JSON Response

    {
      "status": "ok", 
      "message":"The comment was added",
      "permission_level":"write",
      "cached":"0",
      "photo":{},
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/comment/delete"
    }
