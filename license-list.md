# API Method: /api/license/list
# flags=comments

List all available licenses.

### Permission level 

The minimum required [permission level](index#permission-level) is:

    anonymous


### Example XML Response

    <?xml version="1.0" encoding="UTF-8"?>
    <response status="ok" permission_level="anonymous" p="1" 
      size="8" total_count="8" cached="1" cache_time="1301566913">
      <license license_id="0" name="All Rights Reserved" url=""/>
      <license license_id="100" name="Public Domain" 
        url="http://creativecommons.org/licenses/publicdomain/"/>
      <license license_id="1" name="Attribution-NonCommercial-ShareAlike License" 
        url="http://creativecommons.org/licenses/by-nc-sa/3.0/"/>
      ...
    </response>

### Example JSON Response

    {
      "status": "ok", 
      "permission_level":"anonymous",
      "cached":"1",
      "cache_time":"1301567001",
      "licenses":[
        {"license_id": "0", "name": "All Rights Reserved", "url": ""},
        {"license_id": "100", "name": "Public Domain", 
          "url": "http://creativecommons.org/licenses/publicdomain/"},
        ...
      ],
      "p": "1",
      "size": "8",
      "total_count": "8",
      "site": ...
      "endpoint": "/api/license/list"
    }
