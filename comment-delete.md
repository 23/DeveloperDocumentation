# API Method: /api/comment/delete
# flags=comments

Delete a comment.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>

  <tr>
    <td>
      <tt>comment_id <small>(required)</small></tt> 
    </td>
    <td>
      Identifier of the comment to be deleted.
    </td>
  </tr>
</table>



### Permission level 

The minimum required [permission level](index#permission-level) is:

    write


### Example XML Response

    <response status="ok" permission_level="write" 
      message="The comment was deleted" cached="0"/>

### Example JSON Response

    {
      "status": "ok", 
      "message":"The comment was deleted",
      "permission_level":"write",
      "cached":"0",
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/comment/delete"
    }
