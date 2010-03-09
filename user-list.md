# API Method: /api/user/list
# flags=comments

Get a list of users

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>

  <tr>
    <td>
      <tt>user_id</tt> 
    </td>
    <td>
      Limit to a single user.
    </td>
  </tr>

  <tr>
    <td>
      <tt>search</tt>
    </td>
    <td>
      Search users for a specific term.
    </td>
  </tr>

  <tr>
    <td>
      <tt>orderby</tt>
    </td>
    <td>
      Variable to order users by.<br/>
      <i>Default:</i> <tt>display_name</tt><br/>
      <i>Valid values:</i> <tt>username</tt>, <tt>site_admin_p</tt>, <tt>email</tt>, <tt>creation_date</tt>, <tt>last_login</tt>, <tt>display_name</tt>
    </td>
  </tr>

  <tr>
    <td>
      <tt>order</tt>
    </td>
    <td>
      Order of the objects in the response.<br/>
      <i>Default:</i> <tt>desc</tt><br/>
      <i>Valid values:</i> <tt>desc</tt> and <tt>asc</tt>
    </td>
  </tr>

  <tr>
    <td>
      <tt>p</tt>
    </td>
    <td>
      Page offset for the request. See [pagination](index#pagination) for details.
    </td>
  </tr>

  <tr>
    <td>
      <tt>size</tt>
    </td>
    <td>
      Number of objects to include in the response. See [pagination](index#pagination) for details.
    </td>
  </tr>
</table>



### Permission level 

The minimum required [permission level](index#permission-level) is:

    anonymous

To get the properties `email`, `full_name` and `site_admin` the API requires:

    admin

### Example XML Response

    <response status="ok" permission_level="admin" p="1" size="20" total_count="18" cached="0">
      <user user_id="1234" username="ernest" display_name="Ernest" 
        url="/user/ernest/" full_name="Ernest Hemmingway" email="ernest@example.com" site_admin="f">
        <about_abstract>Something about the user...</about_abstract>
      </user>
      (...)
    </response>

### Example JSON Response

    {
      "status": "ok", 
      "permission_level":"anonymous",
      "cached":"0",
      "users":[
           {
             "user_id": "1234", 
             "username": "ernest", 
             "display_name": "Ernest", 
             "url": "/user/ernest/", 
             "about_abstract": "Something about the user"
           },
           ....],
      "p": "1",
      "size": "20",
      "total_count": "18",
      "site": {...},
      "endpoint": "/api/user/list"
    }
