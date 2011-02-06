# API Method: /api/distribution/ios/register-device
# flags=comments

Unregister an already [registered](distribution-iso-register-device) iOS subscription for push notications.

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>

  <tr>
    <td>
      <tt>device_token (required)</tt> 
    </td>
    <td>
      The unique device token from the iOS device.
    </td>
  </tr>
</table>



### Permission level 

The minimum required [permission level](index#permission-level) is:

    none


### Example XML Response

    <response status="ok" permission_level="super" 
      message="The device was successfully unregistered" cached="0"/>

### Example JSON Response

    {
      "status": "ok", 
      "message": "The device was successfully unregistered",
      "permission_level":"none",
      "cached":"0",
      "photo":{},
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/distribution/ios/unregister-device"
    }
