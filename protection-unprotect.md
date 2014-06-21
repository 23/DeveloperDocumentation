# API Method: /api/protection/unprotect

Remove proteciton from a video or stream using one of the [built-in protection method](protection).

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>object_id</tt> <small>(required)</small></td><td>Which object should protection be removed for?</td></tr>
</table>

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write

### Example XML Response

    <response status="ok" permission_level="write" message="The protection was removed" cached="0"/>

### Example JSON Response

    {
      "status": "ok", 
      "message":"The protection was removed",
      "permission_level":"write",
      "cached":"0",
      "protection":{},
      "p": "1",
      "size": "1",
      "site": {...},
      "endpoint": "/api/protection/unprotect"
    }