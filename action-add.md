# API Method: /api/action/add

Add a new call-to-action, with the default values set for the action type. If you want to set custom action data, use [/api/action/update](action-update) after calling this method.

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr>
    <td>
      <tt>type (required)</tt>
    </td>
    <td>
      The type of the call to action.
    </td>
  </tr>

  <tr>
    <td>
      <tt>object_id (required)</tt>
    </td>
    <td>
      The object ID the call to action is connected to. This may be a `photo` object, an `album` object, a `site` or a `player`.
    </td>
  </tr>
</table>    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write


### Example XML Response

    <response status="ok" permission_level="write" 
      message="The action was created" cached="0"/>

    
### Example JSON Response

    {
      "status": "ok", 
      "message":"The action was created",
      "permission_level":"write",
      "cached":"0",
      "action":{},
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/action/add"
    }

