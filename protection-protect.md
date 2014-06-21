# API Method: /api/protection/protect

Protection a video or stream using one of the [built-in protection method](protection).

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>object_id</tt> <small>(required)</small></td><td>Which object should be protected?</td></tr>
  <tr><td><tt>protection_method</tt> <small>(required)</small></td><td>Which method should the object be protected with? Valid options are `password`, `geoblocking`, `custom` or `cleeng`.</td></tr>
  <tr><td><tt>countries</tt></td><td>A space-delimited list of country codes to be white-listed for geo-blocking. If this list is omitted with the `geoblocking` protection method, the site's standard list of countries will be used instead.</td></tr>
  <tr><td><tt>password</tt></td><td>The password to be used with the `password` protection method</td></tr>
  <tr><td><tt>endpoint</tt></td><td>The endpoint to be used with the `custom` protection method</td></tr>
  <tr><td><tt>cleeng_price</tt></td><td>The item price to be used with the `cleeng` protection method</td></tr>
  <tr><td><tt>cleeng_title</tt></td><td>Optional title of the object along with the `cleeng` protection method</td></tr>
  <tr><td><tt>cleeng_url</tt></td><td>Optional URL of the object along with the `cleeng` protection method</td></tr>
  <tr><td><tt>cleeng_tags</tt></td><td>Optional tags of the object along with the `cleeng` protection method</td></tr>
</table>

### Permission level 

The minimum required [permission level](index#permission-level) is:

    write

### Example XML Response

    <response status="ok" permission_level="write" message="The object was protected" cached="0">
      <object_id>1234567</object_id>
      <object_type>photo</object_type>
      <protection_method>password</protection_method>
      <protection_data>password mypassword</protection_data>
      <protected_token>abcdfe123456789</protected_token>
      <password>mypassword</password>
    </response>

### Example JSON Response

   {
     "status": "ok", 
     "message":"The object was protected",
     "permission_level":"write",
     "cached":"0",
     "protection":{
       "object_id": "1234567", 
       "object_type": "photo", 
       "protection_method": "password",    
       "protection_data": "password mypassword", 
       "protected_token": "abcdfe123456789", 
       "password": "mypassword"
     },
     "p": "1",
     "size": "1",
     "site": {...},
     "endpoint": "/api/protection/protect"
   }
