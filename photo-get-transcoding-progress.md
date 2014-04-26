# API Method: /api/photo/get-transcoding-progress

Get the transcoding progress of a specific video. This method lists the status of all formats and tasks related to the video in question.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr><td><tt>photo_id</tt></td><td>The ID of the video being queries.</td></tr>
  <tr><td><tt>percentage_formated_p</tt></td><td>Format the status of each format a percentage strings instead of as a number from 0 to 1 indicating the progress.</td></tr>
</table>


### Permission level 

The minimum required [permission level](index#permission-level) is:

    read

### Example XML Response

    <response status="ok" permission_level="read" cached="0">
        <audio>1</audio>
        <video_original>1</video_original>
        <video_mobile_h263_aac>1</video_mobile_h263_aac>
        <video_mobile_high>0</video_mobile_high>
        <video_1080p>1</video_1080p>
        <all>1</all>
        <video_mobile_mpeg4_amr>1</video_mobile_mpeg4_amr>
        <video_webm_360p>1</video_webm_360p>
        <video_webm_720p>.56</video_webm_720p>
        <video_hd>0.89</video_hd>
        <video_frames>0</video_frames>
        <video_mobile_h263_amr>1</video_mobile_h263_amr>
        <video_medium>1</video_medium>
    </response>


### Example JSON Response

    {
      "status": "ok", 
      "permission_level":"read",
      "cached":"0",
      "progress":{"audio": "0", "video_original": "1", "video_mobile_h263_aac": "1", "video_mobile_high": "0", "video_1080p": "1", "all": "1", "video_mobile_mpeg4_amr": "1", "video_webm_360p": "0", "video_webm_720p": "0", "video_hd": "0", "video_frames": "0", "video_mobile_h263_amr": "1", "video_medium": "1"},
      "p": "1",
      "size": "1",
      "site": ...,
      "endpoint": "/api/photo/get-transcoding-progress"
    }