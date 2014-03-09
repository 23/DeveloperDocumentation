# API Method: /api/action/exclude

Exclude a call-to-action item for a specific object.

### Parameters


<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr>
    <td>
      <tt>action_id (required)</tt>
    </td>
    <td>
      The ID of the call to action to be excluded.
    </td>
  </tr>

  <tr>
    <td>
      <tt>object_id (required)</tt>
    </td>
    <td>
      The ID of the object for which the action is to be excluded or re-included.
    </td>
  </tr>

  <tr>
    <td>
      <tt>remove_exclusion_p</tt>
    </td>
    <td>
      Remove this exclusion after having added it before? Default is `0`.
    </td>
  </tr>
</table>    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write


### Example XML Response

    <response status="ok" permission_level="write" 
      message="The exclusion for this action was update" cached="0"/>

    
### Example JSON Response

    {
      "status": "ok", 
      "message":"The exclusion for this action was update",
      "permission_level":"write",
      "cached":"0",
      "action":{},
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/action/exclude"
    }

