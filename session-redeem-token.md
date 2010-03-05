# API Method: /api/session/redeem-token

Grant access to a site using a [pre-authenticated session access token](session-get-token). 

This is the second step of the session authorization procedure. If you have `session_token=abcdef12345`, redirect the client you was to be logged in to this URL:

    http://videos.example.com/api/session/redeem-token?session_token=abcdef12345


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>session_token</tt> <small>(required)</small></td><td>The session access token.</td></tr>
</table>

    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    none


### Returns

A plain, unstyled error message if the `session_token` is invalid, consumed or expired. <br/>
Otherwise the client is redirected to the `return_url` you specified when the session token was created.
