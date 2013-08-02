# API Method: /api/user/create
# flags=comments

Set up a new user in the site.

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr>
    <td>
      <tt>email</tt> 
      <small>(required)</small>
    </td>
    <td>
      The email address of the user to be created.
    </td>
  </tr>
  <tr>
    <td>
      <tt>username</tt>
    </td>
    <td>
      The user's username.
    </td>
  </tr>
  <tr>
    <td>
      <tt>password</tt>
    </td>
    <td>
      The user's password.
    </td>
  </tr>
  <tr>
    <td>
      <tt>full_name</tt>
    </td>
    <td>
      The user's full name.
    </td>
  </tr>
  <tr>
    <td>
      <tt>timezone</tt>
    </td>
    <td>
      The user's timezone.
    </td>
  </tr>
  <tr>
    <td>
      <tt>site_admin</tt>
    </td>
    <td>
      Is the user to be an administrator?<br/>
      <i>Valid values:</i> <tt>0</tt> or <tt>1</tt>
    </td>
  </tr>
</table>

### Permission level 

The minimum required [permission level](index#permission-level) is:

    admin

### Example XML Response

    <response status="ok" permission_level="super" 
      message="The user has been created" cached="0">
      <user_id>60434</user_id>
      <email>clinton@example.com</email>
      <username>clinton</username>
      <full_name>Bill Clinton</full_name>
      <site_admin>0</site_admin>
      <timezone>Europe/Copenhagen</timezone>
    </response>

### Example JSON Response

    {
      "status": "ok", 
      "message":"The file was successfully uploaded",
      "permission_level":"super",
      "cached":"0",
      "user":{"user_id": "60434", "email": "clinton@example.com", "username": "clinton", 
        "full_name": "Bill Clinton", "site_admin": "0", "timezone": "Europe/Copenhagen"},
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/photo/upload"
    }
