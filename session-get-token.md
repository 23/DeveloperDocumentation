# API Method: /api/session/get-token
# flags=comments

Get a session access token, which can in turn be used to sign a user's session using [/api/session-redeem-token](session-redeem-token). The return token must be used within 15 minutes.

This procedure is designed to work alongside the _Single sign-on or Paywall_ option in the site's security settings. When this option is selected, all visitors (not logged-in users) must be redirected to the site through this procedure in order to gain access to the site's content. This allows the developer full control of who is allowed in, and it is usually used for intranet sites or for sites behind a paywall.

A session expires when it hasn't been used for 30 minutes. After this, the user must have his or her session re-signed. 

Whenever possible, you should make sure to include `email` and `full_name` in your request. 

You can configure remote log-in and log-out pages when enabling the SSO option in the 23 Video backend, specifically if you you want to redirect un-authenticated users to a certain login page. This page should be designed to log in and authenticate users through your prefered identity system − and then delegate access to the client through the get-token/[redeem-token](session-redeem-token) chain. Similarly, you can define a link where the user is redirected to when logging out.

By default, this method only gains the redirected user access to the site's front-end with published content from the site. In configuring SSO though, you can choose to *Allow back-end login* as well. This means that clients being authenticated with an e-mail address already set up with a full user account will also be logged in to the back-end through SSO. 

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td>return_url</td><td>The URL the user is redirected to after the session has been signed.</td></tr>
    <tr>
    <td>
      <tt>email</tt> 
    </td>
    <td>
      The e-mail address of the user being granted session access (optional).
    </td>
  </tr>
  <tr>
    <td>
      <tt>full_name</tt>
    </td>
    <td>
      The person's full name (optional).
    </td>
  </tr>

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
