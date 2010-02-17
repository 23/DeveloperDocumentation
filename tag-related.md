# API Method: /api/tag/related

Get a list of related tags. 

This method does not support [pagination](index#pagination), but will return up to 100 related tags.

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>

  <tr>
    <td>
      <tt>tag</tt>
      <small>(required)
    </td>
    <td>
      The tag to return related tags for.
    </td>
  </tr>
</table>


### Permission level 

The minimum required [permission level](index#permission-level) is:

    anonymous


### Example XML Response

    <response status="ok" permission_level="read" total_count="6" cached="0">
      <relatedtag tag="screencast" url="/tag/screencast"/>
      <relatedtag tag="video" url="/tag/video"/>
      <relatedtag tag="analytics" url="/tag/analytics"/>
      <relatedtag tag="23" url="/tag/23"/>
      <relatedtag tag="statistics" url="/tag/statistics"/>
      <relatedtag tag="upload" url="/tag/upload"/>
    </response>


### Example JSON Response

    {
      "status": "ok", 
      "permission_level":"read",
      "cached":"0",
      "relatedtags":[
          {"tag": "screencast", "url": "/tag/screencast"},
          {"tag": "video", "url": "/tag/video"},
          {"tag": "analytics", "url": "/tag/analytics"},
          {"tag": "23", "url": "/tag/23"},
          {"tag": "statistics", "url": "/tag/statistics"},
          {"tag": "upload", "url": "/tag/upload"}
        ],
      "p": "1",
      "size": "1",
      "total_count": "6",
      "site": { ... },
      "endpoint": "/api/tag/related"
    }
