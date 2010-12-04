# API Method: /api/photo/subtitles
# flags=comments

Return a list of available subtitles for a video in a given format

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr>
    <td>
      <tt>photo_id (required)</tt>
    </td>
    <td>
      The ID of the video to fetch subtitles for.
    </td>
  </tr>

  <tr>
    <td>
      <tt>token (required)</tt>
    </td>
    <td>
      The corresponding token for the photo_id.
    </td>
  </tr>

  <tr>
    <td>
      <tt>stripped_p</tt>
    </td>
    <td>
      Returned a version stripped for additional markup.
      <i>Default:</i> <i>0</i><br/>
      <i>Valid values:</i> <tt>0</tt> or <tt>1</tt>
    </td>
  </tr>

  <tr>
    <td>
      <tt>subtitle_format</tt>
    </td>
    <td>
      Which format should the returned be in?
      <i>Default:</i> <i>websrt</i><br/>
      <i>Valid values:</i> <tt>websrt</tt> or <tt>json</tt>
    </td>
  </tr>
</table>    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    none

For non-public sites, the minimum level is:

    anonymous


### Example XML Response

    <response status="ok" permission_level="anonymous" total_count="0" 
      cached="1" cache_time="1291206586">
      <subtitles locale="en_US" 
        href="/7340/101353/f2181e8af8f55f306b3ad94087cdeac0/subtitles.en_US.websrt" 
        default_p="1"/>
      <subtitles locale="fi_FI" 
        href="/7340/101353/f2181e8af8f55f306b3ad94087cdeac0/subtitles.fi_FI.websrt" 
        default_p="0"/>
      <subtitles locale="fr_BE" 
        href="/7340/101353/f2181e8af8f55f306b3ad94087cdeac0/subtitles.fr_BE.websrt" 
        default_p="0"/>
    </response>
    
### Example JSON Response

    {
      "status": "ok", 
      "permission_level":"anonymous",
      "cached":"1",
      "cache_time":"1291206702",
      "subtitles":[
        {"locale": "en_US", 
         "href": "/7340/101353/f2181e8af8f55f306b3ad94087cdeac0/subtitles.en_US.websrt", 
         "default_p": 1},
        {"locale": "fi_FI", 
         "href": "/7340/101353/f2181e8af8f55f306b3ad94087cdeac0/subtitles.fi_FI.websrt", 
         "default_p": 0},
        {"locale": "fr_BE", 
         "href": "/7340/101353/f2181e8af8f55f306b3ad94087cdeac0/subtitles.fr_BE.websrt", 
         "default_p": 0}],
      "p": "1",
      "size": "1",
      "total_count": "0",
      "site": { ... },
      "endpoint": "/api/photo/subtitles"
    }
