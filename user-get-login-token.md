# API Method: /api/user/get-login-token

Get a login token, which can in turn be used to log a user in to your site. The token is valid for 15 minutes.

This is the first of two steps in a single sign-on process. Here, you will get a `login_token`. Second, you'll need to [exchange the token for cookies](user-redeem-login-token).

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>user_id</tt> <small>(required)</small></td><td>The system ID for the user.</td></tr>
  <tr><td><tt>return_url</tt></td><td>The URL the user is redirected to after login.</td></tr>
</table>

### Permission level 

The minimum required [permission level](index#permission-level) is:

    super

### Example XML Response

    <response status="ok" permission_level="super" 
      message="The user login token is ready to use" cached="0">
      <login_token>sdjhfjlaskdf87asd6fg8s6dfg78sdioufgysdfg7</login_token>
      <return_url>/</return_url>
      <user_id>12345</user_id>
    </response>

### Example JSON Response

    {
      "status": "ok", 
      "message":"The user login token is ready to use",
      "permission_level":"super",
      "cached":"0",
      "logintoken":{
        "login_token": "sdjhfjlaskdf87asd6fg8s6dfg78sdioufgysdfg7", 
        "return_url": "/", 
        "user_id": "12345"
      },
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/user/get-login-token"
    }
