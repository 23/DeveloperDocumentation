# API Method: /api/action/delete

Delete a call-to-action.

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr>
    <td>
      <tt>action_id (required)</tt>
    </td>
    <td>
      The ID of the call-to-action to be deleted.
    </td>
  </tr>
</table>    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write


### Example XML Response

    <response status="ok" permission_level="write" 
      message="The action was deleted" cached="0"/>

    
### Example JSON Response

    {
      "status": "ok", 
      "message":"The action was deleted",
      "permission_level":"write",
      "cached":"0",
      "action":{},
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/action/delete"
    }

