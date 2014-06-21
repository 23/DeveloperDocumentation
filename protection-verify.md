# API Method: /api/protection/verify

Verify access to a video or stream which is protected with one of the [built-in protection method](protection).

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>object_id</tt> <small>(required)</small></td><td>Which object should be verified?</td></tr>
  <tr><td><tt>protection_method</tt> <small>(required)</small></td><td>Which method is the object currently protected with?</td></tr>
  <tr><td><tt>verification_data</tt></td><td>Optionally, any extra string or data that is need to authenticate access. For example, when the protection method is `password`, this parameter should include the correct password for the object.</td></tr>
</table>

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write

### Example XML Response

    <response status="ok" permission_level="write" message="You have access to the resource" cached="0">
      <object_id>1234567</object_id>
      <object_type>live</object_type>
      <protected_token>abcfe123456abce</protected_token>
    </response>

### Example JSON Response

    {
      "status": "ok", 
      "message":"You have access to the resource",
      "permission_level":"write",
      "cached":"0",
      "protectedtoken":{
          "object_id": "1234567", 
          "object_type": "live", 
          "protected_token": "abcfe123456abce"
      },
      "p": "1",
      "size": "1",
      "site": {...},
      "endpoint": "/api/protection/verify"
    }
