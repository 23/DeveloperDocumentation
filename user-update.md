# API Method: /api/user/update
# flags=comments

Update the information about a user.

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr>
    <td>
      <tt>user_id</tt> 
      <small>(required)</small>
    </td>
    <td>
      The ID of the user to be updated.
    </td>
  </tr>
  <tr>
    <td>
      <tt>email</tt> 
      <small></small>
    </td>
    <td>
      Update the e-mail address.
    </td>
  </tr>
  <tr>
    <td>
      <tt>username</tt>
    </td>
    <td>
      Update the username.
    </td>
  </tr>
  <tr>
    <td>
      <tt>password</tt>
    </td>
    <td>
      Update the password.
    </td>
  </tr>
  <tr>
    <td>
      <tt>full_name</tt>
    </td>
    <td>
      Update the name of the user.
    </td>
  </tr>
  <tr>
    <td>
      <tt>timezone</tt>
    </td>
    <td>
      Update the user's time zone.
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

The minimum required [permission level](index#permission-level) if you are authorized at the user being updated:

    admin

Otherwise the required level is:

    super

### Example XML Response

    <response status="ok" permission_level="admin" 
      message="The user was updated" cached="0"/>

### Example JSON Response

    {
      "status": "ok", 
      "message":"The user was updated",
      "permission_level":"admin",
      "cached":"0",
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/user/update"
    }
