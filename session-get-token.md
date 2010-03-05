# API Method: /api/session/get-token

Get a session access token, which can in turn be used to sign a user's session using [/api/session/redeem-token](session-redeem-token). The return must be used within 15 minutes.

This procedure is designed to work alongside the _Authenticate visitors through API_ option in the site's security settings. When this option is selected, all visitors (not logged-in users) must be redirected to the site through this procedure in order to gain access to the site's content. This allows the developer full control of who is allowed in, and it is usually used for intranet sites or for sites behind a paywall.

A session times out when it hasn't been used for 20 minutes. After this, the user must have his or her session re-signed.

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td>return_url</td><td>The URL the user is redirected to after the session has been signed.</td></tr>
</table>

### Permission level 

The minimum required [permission level](index#permission-level) is:

    super

### Example XML Response

    <response status="ok" permission_level="super" 
      message="The session access token is ready to use" cached="0">
      <access_token>sdkjhflsd6f87aysdukgs87dfgkjsdfgkjshdkfjghskjldfg978sdhkgj</access_token>
      <return_url>/</return_url>
    </response>

### Example JSON Response

    {
      "status": "ok", 
      "message":"The session access token is ready to use",
      "permission_level":"admin",
      "cached":"0",
      "sessiontoken":{
        "access_token": "sdkjhflsd6f87aysdukgs87dfgkjsdfgkjshdkfjghskjldfg978sdhkgj", 
        "return_url": "/"
      },
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/session/get-token"
    }
