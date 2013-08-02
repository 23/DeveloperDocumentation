# API Method: /api/site/get
# flags=comments

Get information about the current site.


### Parameters

_No parameters_

### Permission level 

The minimum required [permission level](index#permission-level) is:

    anonymous


### Example XML Response

    <response status="ok" permission_level="anonymous" cached="0">
      <site_id>12345</site_id>
      <site_name>Your Video Site</site_name>
      <product_key>tube</product_key>
      <allow_signup_p>f</allow_signup_p>
      <site_key>yourvideosite</site_key>
      <license_id>0</license_id>
      <domain>videos.example.com</domain>
    </response>

### Example JSON Response

    {
      "status": "ok", 
      "permission_level":"anonymous",
      "cached":"0",
      "site":{
        "site_id": "12345", 
        "site_name": "Your Video Site",
        "product_key": "tube", 
        "allow_signup_p": 0, 
        "site_key": "yourvideosite", 
        "license_id": "0", 
        "domain": "videos.example.com"
      },
      "p": "1",
      "size": "1",
      "endpoint": "/api/site/get"
    }
