# API Method: /api/session/sign

Sign a visitor session. This method is designed to work alongside the "Authenticate visitors through API" option in the site's security settings. When this option is selected, all visitors (not logged-in users) must be redirected to the site through this method in order to gain access to the site's content. This allows the developer full control of who is allowed in, and it is usually used for intranet sites or for sites behind a paywall.

A session times out when it hasn't been used for 20 minutes. After this, the user must have his or her session re-signed.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td>return_url</td><td>The URL the user is redirected to after the session has been signed.</td></tr>
</table>

### Permission level 

The minimum required [permission level](index#permission-level) is:

    super

### Response

The client session is signed and redirected accordingly.
