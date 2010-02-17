# API Method: /api/user/login

Log in a an existing user.


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
