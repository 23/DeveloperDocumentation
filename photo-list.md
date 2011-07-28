# API Method: /api/photo/list
# flags=comments

Return a list of photos or videos.

Note, that since the `photo_id` and `album_id` parameters might both be matched to the `token`, you won't be able to use `album_id` and `photo_id` together. If `album_id` is set, the `photo_id` parameter is ignored.

### Parameters


<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr>
    <td>
      <tt>album_id</tt>
    </td>
    <td>
      List content from a single album or channel. Also see <tt>token</tt>.
      <br/>
      If this parameter is set, `photo_id` is ignored.
    </td>
  </tr>

  <tr>
    <td>
      <tt>photo_id</tt>
    </td>
    <td>
      Limit to a single photo or video. Also see <tt>token</tt>.
      <br/>
      If `album_id` is set, this parameter is ignored.
    </td>
  </tr>

  <tr>
    <td>
      <tt>token</tt>
    </td>
    <td>
      The token for a specific video/photo or an album &minus; depending on whether <tt>photo_id</tt> or <tt>album_id</tt> is set.<br/>
      Specifying either an <tt>album_id/token</tt> or a <tt>photo_id/token</tt> will give the client access to information about the video/photo/album/channel irregardless of permission level. When requesting a single photo object, <a href="index#time-limited-tokens">tokens can be explicitly time-limited</a>.
    </td>
  </tr>

  <tr>
    <td>
      <tt>user_id</tt>
    </td>
    <td>
      Search for photos or videos uploaded by a specific users.
    </td>
  </tr>

  <tr>
    <td>
      <tt>player_id</tt>
    </td>
    <td>
      The identifier for a video player. Including the parameter will allow contextualization of the content for the specific player; for example by fitting the playflow (preroll, postroll, after text etc) based on the player.
    </td>
  </tr>

  <tr>
    <td>
      <tt>tags</tt>
    </td>
    <td>
      Search for one or more tags. 
      To search for multiple tags, separate tags with spaces. Multi-word tags can be quotes with <tt>"</t>.
    </td>
  </tr>

  <tr>
    <td>
      <tt>tag_mode</tt>
    </td>
    <td>
      Set the value <tt>and</tt> means that all tags must be present for a videos or photos to be included in the response.<br/>
      Specifying the value <tt>any</tt> will get you all videos or photos with just one of the tags.<br/>
      <i>Default:</i> <tt>and</tt>
    </td>
  </tr>

  <tr>
    <td>
      <tt>search</tt>
    </td>
    <td>
      Search photos and video for a specific term.
    </td>
  </tr>

  <tr>
    <td>
      <tt>year</tt>
    </td>
    <td>
      Only include content from a specific year in the response.
    </td>
  </tr>

  <tr>
    <td>
      <tt>month</tt>
    </td>
    <td>
      Only include content from a specific month in the response. Requires <tt>year</tt> to be set.
    </td>
  </tr>

  <tr>
    <td>
      <tt>day</tt>
    </td>
    <td>
      Only include content from a specific day in the response. Requires <tt>year</tt> and <tt>month</tt> to be set.
    </td>
  </tr>

  <tr>
    <td>
      <tt>video_p</tt>
    </td>
    <td>
      Limit to either video content or not video content.<br/>
      <i>Default:</i> <i>(empty)</i><br/>
      <i>Valid values:</i> <i>(empty)</i>, <tt>0</tt> or <tt>1</tt>
    </td>
  </tr>

  <tr>
    <td>
      <tt>audio_p</tt>
    </td>
    <td>
      Limit to either audio content or not audio content.<br/>
      <i>Default:</i> <i>(empty)</i><br/>
      <i>Valid values:</i> <i>(empty)</i>, <tt>0</tt> or <tt>1</tt>
    </td>
  </tr>

  <tr>
    <td>
      <tt>video_encoded_p</tt>
    </td>
    <td>
      Limit to either video, which has been transcoded or stuff waiting to be transcoder. Requires <tt>read</tt> permissions.<br/>
      <i>Default:</i> <i>(empty)</i><br/>
      <i>Valid values:</i> <i>(empty)</i>, <tt>0</tt> or <tt>1</tt>
    </td>
  </tr>

  <tr>
    <td>
      <tt>include_unpublished_p</tt>
    </td>
    <td>
      Include unpublished videos or photos in the response. Requires <tt>read</tt> permissions.<br/>
      <i>Default:</i> <tt>0</tt><br/>
      <i>Valid values:</i> <tt>0</tt> or <tt>1</tt>
    </td>
  </tr>

  <tr>
    <td>
      <tt>upload_token</tt>
    </td>
    <td>
      An <a href="photo-redeem-upload-token">upload token</a> from a <a href="browser-based-uploads">browser-based upload</a>.
    </td>
  </tr>

  <tr>
    <td>
      <tt>orderby</tt>
    </td>
    <td>
      Variable to order content by.<br/>
      <i>Default:</i> <tt>published</tt><br/>
      <i>Valid values:</i> <tt>views</tt>, <tt>comments</tt>, <tt>taken</tt>, <tt>title</tt>, <tt>words</tt>, <tt>rating</tt>, <tt>created</tt>, <tt>uploaded</tt>, <tt>published</tt>
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
      <tt>license_id</tt>
    </td>
    <td>
      The license associated with the content item. See [/api/license/list](license-list) for information on available values.
    </td>
  </tr>

  <tr>
    <td>
      <tt>liveevent_id</tt>
    </td>
    <td>
      The live event associated with the content item. See [/api/liveevent/list](license-list) for more information.
    </td>
  </tr>

  <tr>
    <td>
      <tt>liveevent_stream_id</tt>
    </td>
    <td>
      The live event video stream associated with the content item. See [/api/liveevent/stream/list](license-list) for more information.
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

    none

For non-public sites, the minimum level is:

    anonymous

To acces unpublished videos or content of hidden channels the client must provide a correct <tt>token</tt> for the object or be authenticated with:

    read


### Example XML Response

    <response status="ok" permission_level="super" p="1" size="20" total_count="407" cached="0">
      <photo photo_id="60433" title="" token="zoyZt0ugycplufdd4eiiaaJhwxgkpime" 
        published_p="1" one="/video/60433" creation_date_ansi="2010-02-16 18:13:32" 
        creation_date__date="February 16, 2010" creation_date__time="06:13 PM" 
        original_date_ansi="2010-02-16 17:13:32" original_date__date="February 16, 2010" 
        original_date__time="05:13 PM" view_count="0" number_of_comments="0" number_of_albums="0" 
        number_of_tags="0" photo_rating="" number_of_ratings="0" video_p="1" audio_p="0" video_encoded_p="1" 
        video_length="55.248" text_only_p="0" user_id="17488" username="__hidden" display_name="Hidden User" 
        user_url="/user/__hidden/" original_width="640" original_height="480" original_size="22124" 
        original_download="/7340/60433/zoyZt0ugycplufdd4eiiaaJhwxgkpime/original" 
        quad16_download="/7340/60433/zoyZt0ugycplufdd4eiiaaJhwxgkpime/quad16" quad50_width="50" 
        quad50_height="50" quad50_size="1252" quad50_download="/7340/60433/zoyZt0ugycplufdd4eiiaaJhwxgkpime/quad50" 
        quad75_width="75" quad75_height="75" quad75_size="1943" 
        quad75_download="/7340/60433/zoyZt0ugycplufdd4eiiaaJhwxgkpime/quad75" quad100_width="100" quad100_height="100" 
        quad100_size="2765" quad100_download="/7340/60433/zoyZt0ugycplufdd4eiiaaJhwxgkpime/quad100" small_width="200" 
        small_height="150" small_size="5931" small_download="/7340/60433/zoyZt0ugycplufdd4eiiaaJhwxgkpime/small" 
        medium_width="260" medium_height="195" medium_size="8908" 
        medium_download="/7340/60433/zoyZt0ugycplufdd4eiiaaJhwxgkpime/medium" portrait_width="300" portrait_height="225" 
        portrait_size="10916" portrait_download="/7340/60433/zoyZt0ugycplufdd4eiiaaJhwxgkpime/portrait" 
        standard_width="600" standard_height="450" standard_size="30278" 
        standard_download="/7340/60433/zoyZt0ugycplufdd4eiiaaJhwxgkpime/standard" large_width="640" large_height="480" 
        large_size="22124" large_download="/7340/60433/zoyZt0ugycplufdd4eiiaaJhwxgkpime/large" video_small_width="320" 
        video_small_height="240" video_small_size="739004" 
        video_small_download="/7340/60433/zoyZt0ugycplufdd4eiiaaJhwxgkpime/video_small/download-video.flv" 
        video_medium_width="640" video_medium_height="480" video_medium_size="1236274" 
        video_medium_download="/7340/60433/zoyZt0ugycplufdd4eiiaaJhwxgkpime/video_medium/download-video.mp4" 
        video_hd_width="640" video_hd_height="480" video_hd_size="1213503" 
        video_hd_download="/7340/60433/zoyZt0ugycplufdd4eiiaaJhwxgkpime/video_hd/download-video.mp4" 
        video_mobile_h263_amr_width="176" video_mobile_h263_amr_height="132" video_mobile_h263_amr_size="675277" 
        video_mobile_h263_amr_download="/7340/60433/zoyZt0ugycplufdd4eiiaaJhwxgkpime/video_mobile_h263_amr/download-video.3gp" 
        video_mobile_h263_aac_width="176" video_mobile_h263_aac_height="132" video_mobile_h263_aac_size="641341" 
        video_mobile_h263_aac_download="/7340/60433/zoyZt0ugycplufdd4eiiaaJhwxgkpime/video_mobile_h263_aac/download-video.3gp" 
        video_mobile_mpeg4_amr_width="176" video_mobile_mpeg4_amr_height="132" video_mobile_mpeg4_amr_size="659552" 
        video_mobile_mpeg4_amr_download="/7340/60433/zoyZt0ugycplufdd4eiiaaJhwxgkpime/video_mobile_mpeg4_amr/download-video.3gp" 
        audio_width="" audio_height="" audio_size="334545" 
        audio_download="/7340/60433/zoyZt0ugycplufdd4eiiaaJhwxgkpime/audio/download-audio.mp3">
          <content></content>
          <content_text></content_text>
          <before_download_type></before_download_type>
          <before_download_url></before_download_url>
          <after_download_type></after_download_type>
          <after_download_url></after_download_url>
          <after_text></after_text>
      </photo>

      (...)

    </response>

### Example JSON Response


    {
      "status": "ok", 
      "permission_level":"super",
      "cached":"0",
      "photos":[{
        "photo_id": "60433", "title": "", "token": "5622160c758c5d18423d31153458b5f7", 
        "published_p": 1, "one": "/video/60433", "creation_date_ansi": "2010-02-16 18:13:32", 
        "creation_date__date": "February 16, 2010", "creation_date__time": "06:13 PM", 
        "original_date_ansi": "2010-02-16 17:13:32", "original_date__date": "February 16, 2010", 
        "original_date__time": "05:13 PM", "view_count": "0", "number_of_comments": "0", 
        "number_of_albums": "0", "number_of_tags": "0", "photo_rating": "", 
        "number_of_ratings": "0", "video_p": 1, "audio_p": 0, "video_encoded_p": 1, "video_length": "55.248", 
        "text_only_p": 0, "user_id": "17488", "username": "__hidden", "display_name": "Hidden User", 
        "user_url": "/user/__hidden/", "original_width": "640", "original_height": "480", 
        "original_size": "22124", "original_download": "/7340/60433/5622160c758c5d18423d31153458b5f7/original", 
        "quad16_download": "/7340/60433/5622160c758c5d18423d31153458b5f7/quad16", "quad50_width": "50", 
        "quad50_height": "50", "quad50_size": "1252", 
        "quad50_download": "/7340/60433/5622160c758c5d18423d31153458b5f7/quad50", 
        "quad75_width": "75", "quad75_height": "75", "quad75_size": "1943", 
        "quad75_download": "/7340/60433/5622160c758c5d18423d31153458b5f7/quad75", 
        "quad100_width": "100", "quad100_height": "100", "quad100_size": "2765", 
        "quad100_download": "/7340/60433/5622160c758c5d18423d31153458b5f7/quad100", 
        "small_width": "200", "small_height": "150", "small_size": "5931", 
        "small_download": "/7340/60433/5622160c758c5d18423d31153458b5f7/small", 
        "medium_width": "260", "medium_height": "195", "medium_size": "8908", 
        "medium_download": "/7340/60433/5622160c758c5d18423d31153458b5f7/medium", 
        "portrait_width": "300", "portrait_height": "225", "portrait_size": "10916", 
        "portrait_download": "/7340/60433/5622160c758c5d18423d31153458b5f7/portrait", 
        "standard_width": "600", "standard_height": "450", "standard_size": "30278", 
        "standard_download": "/7340/60433/5622160c758c5d18423d31153458b5f7/standard", 
        "large_width": "640", "large_height": "480", "large_size": "22124", 
        "large_download": "/7340/60433/5622160c758c5d18423d31153458b5f7/large", 
        "video_small_width": "320", "video_small_height": "240", "video_small_size": "739004", 
        "video_small_download": "/7340/60433/5622160c758c5d18423d31153458b5f7/video_small/download-video.flv", 
        "video_medium_width": "640", "video_medium_height": "480", "video_medium_size": "1236274", 
        "video_medium_download": "/7340/60433/5622160c758c5d18423d31153458b5f7/video_medium/download-video.mp4", 
        "video_hd_width": "640", "video_hd_height": "480", "video_hd_size": "1213503", 
        "video_hd_download": "/7340/60433/5622160c758c5d18423d31153458b5f7/video_hd/download-video.mp4", 
        "video_mobile_h263_amr_width": "176", "video_mobile_h263_amr_height": "132", 
        "video_mobile_h263_amr_size": "675277", 
        "video_mobile_h263_amr_download": "/7340/60433/5622160c758c5d18423d31153458b5f7/video_mobile_h263_amr/download-video.3gp", 
        "video_mobile_h263_aac_width": "176", "video_mobile_h263_aac_height": "132", "video_mobile_h263_aac_size": "641341", 
        "video_mobile_h263_aac_download": "/7340/60433/5622160c758c5d18423d31153458b5f7/video_mobile_h263_aac/download-video.3gp", 
        "video_mobile_mpeg4_amr_width": "176", "video_mobile_mpeg4_amr_height": "132", 
        "video_mobile_mpeg4_amr_size": "659552", 
        "video_mobile_mpeg4_amr_download": "/7340/60433/5622160c758c5d18423d31153458b5f7/video_mobile_mpeg4_amr/download-video.3gp", 
        "audio_width": "", "audio_height": "", "audio_size": "334545", 
        "audio_download": "/7340/60433/5622160c758c5d18423d31153458b5f7/audio/download-audio.mp3", "content": "", 
        "content_text": "", "before_download_type": "", "before_download_url": "", "after_download_type": "", 
        "after_download_url": "", "after_text": "My site"
      }, ...],
      "p": "1",
      "size": "20",
      "total_count": "407",
      "site": { ... },
      "endpoint": "/api/photo/list"
    }
