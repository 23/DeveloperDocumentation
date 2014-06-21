# API Method: /api/photo/get-ratings

Return a list of ratigs

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr>
    <td>
      <tt>photo_id</tt>
    </td>
    <td>
      The ID of the video to fetch ratings for.
    </td>
  </tr>

  <tr><th>Parameter</th><th>Description</th></tr>
  <tr>
    <td>
      <tt>user_id</tt>
    </td>
    <td>
      The user ID to fetch ratings for. If this parameter is given, "read" permissions are required.
    </td>
  </tr>
</table>    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    anonymous



### Example XML Response

    <response status="ok" permission_level="anonymous" p="1" size="15" total_count="15" cached="0">
      <rating rating="0.5" 
        user_id="17484" 
        ip_address="90.184.161.200" 
        photo_id="17507" 
        rating_time="2009-07-20 22:51:23.403443+02" 
        rating_time_epoch="1248123083"/>
        ...
    </response>

    
### Example JSON Response

    {
      "status": "ok", 
      "permission_level":"anonymous",
      "cached":"0",
      "ratings":[
        {"rating": "0.5", 
         "user_id": "17484", 
         "ip_address": "90.184.161.200", 
         "photo_id": "17507", 
         "rating_time": "2009-07-20 22:51:23.403443+02", 
         "rating_time_epoch": "1248123083"
       }, ...],
      "p": "1",
      "size": "15",
      "total_count": "15",
      "site": {....},
      "endpoint": "/api/photo/get-ratings"
    }