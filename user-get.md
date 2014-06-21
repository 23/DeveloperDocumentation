# API Method: /api/user/get
# flags=comments

Get information about an existing user.


### Parameters
<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>user_id</tt></td><td>The system ID for the user. If this parameter is omitted, information about the currently logged in user is returned.</td></tr>
</table>


### Permission level 

The minimum required [permission level](index#permission-level) is:

    anonymous

To get the properties `email`, `full_name` and `site_admin` the API requires:

    admin

### Example XML Response

    <response status="ok" permission_level="super" cached="0">
      <user_id>17484</user_id>
      <username>ernest</username>
      <url>/user/ernest/</url>
      <timezone>Europe/Copenhagen</timezone>
      <about_abstract></about_abstract>
      <full_name>Ernest Hemmingway</full_name>
      <email>ernest@example.com</email>
      <site_admin>t</site_admin>
    </response>

### Example JSON Response

    {
      "status": "ok", 
      "permission_level":"super",
      "cached":"0",
      "user":{"user_id": "17484", "username": "ernest", "url": "/user/ernest/", 
        "timezone": "Europe/Copenhagen", "about_abstract": "", "full_name": "Ernest Hemmingway", 
        "email": "ernest@example.com", "site_admin": "1"},
      "p": "1",
      "size": "1",
      "site": {...},
      "endpoint": "/api/user/get"
    }
