# API Method: /api/cta/update

Update a call-to-action item.

### Parameters


<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr>
    <td>
      <tt>cta_id (required)</tt>
    </td>
    <td>
      The ID of the CTA to be updated.
    </td>
  </tr>

  <tr>
    <td>
      <tt>name (required)</tt>
    </td>
    <td>
      The name of the CTA.
    </td>
  </tr>

  <tr>
    <td>
      <tt>data (required)</tt>
    </td>
    <td>
      Data for the CTA.
    </td>
  </tr>

    <tr>
    <td>
      <tt>start_time (required)</tt>
    </td>
    <td>
      The relative start time of the CTA. This can be `before`, `after` or any decimal number between 0 and 1, both included.
    </td>
  </tr>

    <tr>
    <td>
      <tt>end_time (required)</tt>
    </td>
    <td>
      The relative end time of the CTA. This can be `before`, `after` or any decimal number between 0 and 1, both included.
    </td>
  </tr>
</table>    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write


### Example XML Response

    <response status="ok" permission_level="write" 
      message="The CTA was updated" cached="0"/>

    
### Example JSON Response

    {
      "status": "ok", 
      "message":"The CTA was updated",
      "permission_level":"write",
      "cached":"0",
      "photo":{},
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/cta/update"
    }

