# API Method: /api/photo/section/list
# flags=comments

List sections within for a video.

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr>
    <td>
      <tt>photo_id (required)</tt>
    </td>
    <td>
      The ID of the video to fetch sections for.
    </td>
  </tr>

  <tr>
    <td>
      <tt>token (required)</tt>
    </td>
    <td>
      The corresponding token for the <tt>photo_id</tt>.<br/>
      The token <a href="index#time-limited-tokens">may be explicitly time-limited</a> in which case <tt>expire</tt> becomes a required parameter.
    </td>
  </tr>
</table>    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    none

For non-public sites, the minimum level is:

    anonymous


### Example XML Response

    <response status="ok" permission_level="anonymous" 
      total_count="6" cached="1" cache_time="1296413456">
      <section section_id="7890" start_time="0" 
        title="It was the best of times" 
        link="/video/12345/7890/it-was-the-best-of-times" 
        thumbnail_photo_id="12345" thumbnail_tree_id="7340" 
        thumbnail_token="71a669eee625655a86cebcbad92e043" 
        quad100_download="/7340/12345/71a669eee625655a86cebcbad92e043/quad100" 
        quad50_download="/7340/12345/71a669eee625655a86cebcbad92e043/quad50" 
        standard_download="/7340/12345/71a669eee625655a86cebcbad92e043/standard" 
        portrait_download="/7340/12345/71a669eee625655a86cebcbad92e043/portrait" 
        medium_download="/7340/12345/71a669eee625655a86cebcbad92e043/medium" 
        small_download="/7340/12345/71a669eee625655a86cebcbad92e043/small" 
        quad16_download="/7340/12345/71a669eee625655a86cebcbad92e043/quad16" 
        large_download="/7340/12345/71a669eee625655a86cebcbad92e043/large" 
        quad75_download="/7340/12345/71a669eee625655a86cebcbad92e043/quad75">
        <description>A multi-
          line 
          description</description>
      </section>
      ...
    </response>

    
### Example JSON Response

    {
      "status": "ok", 
      "permission_level":"anonymous",
      "cached":"1",
      "cache_time":"1296413646",
      "sections":[
        {"section_id": "12345", "start_time": "0", 
         "title": "It was the best of times", 
         "link": "/video/12345/12345/it-was-the-best-of-times", 
         "thumbnail_photo_id": "12345", "thumbnail_tree_id": "7340", 
         "thumbnail_token": "71a669eee625655a86cebcbad92e043", 
         "quad100_download": "/7340/12345/71a669eee625655a86cebcbad92e043/quad100", 
         "quad50_download": "/7340/12345/71a669eee625655a86cebcbad92e043/quad50", 
         "standard_download": "/7340/12345/71a669eee625655a86cebcbad92e043/standard", 
         "portrait_download": "/7340/12345/71a669eee625655a86cebcbad92e043/portrait", 
         "medium_download": "/7340/12345/71a669eee625655a86cebcbad92e043/medium", 
         "small_download": "/7340/12345/71a669eee625655a86cebcbad92e043/small", 
         "quad16_download": "/7340/12345/71a669eee625655a86cebcbad92e043/quad16", 
         "large_download": "/7340/12345/71a669eee625655a86cebcbad92e043/large", 
         "quad75_download": "/7340/12345/71a669eee625655a86cebcbad92e043/quad75", 
         "description": "A multi-\nline \ndescription"
        }, ...],
      "p": "1",
      "size": "1",
      "total_count": "6",
      "site": {...},
      "endpoint": "/api/photo/section/list"
    }
