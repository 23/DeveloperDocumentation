# API Method: /api/user/redeem-login-token
# flags=comments

Log in a user using a [pre-authenticated user login token](user-get-login-token). 

This is the second step of a single sign-on process. If you have `login_token=abcdef12345`, redirect the client you was to be logged in to this URL:

    http://videos.example.com/api/user/redeem-login-token?login_token=abcdef12345


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>login_token</tt> <small>(required)</small></td><td>The user login token.</td></tr>
</table>

    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    none


### Returns

A plain, unstyled error message if the `login_token` is invalid, consumed or expired. <br/>
Otherwise the client is redirected to the `return_url` you specified when the token was created.
