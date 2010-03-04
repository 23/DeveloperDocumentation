# API Method: /api/user/login

Log in a an existing user.

### OAuth

This is a special case of how the 23 API uses the OAuth protocol. Since you're redirecting your client to an API method, [your OAuth signature](oauth#signing-and-making-requests) (including keys, nonce, timestamp etc) must be included in the query string for a GET request.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>user_id</tt> <small>(required)</small></td><td>The system ID for the user.</td></tr>
  <tr><td><tt>return_url</tt></td><td>The URL the user is redirected to after login.</td></tr>
</table>

### Permission level 

The minimum required [permission level](index#permission-level) is:

    super

### Response

Client is logged in a the given user and redirected accordingly.
