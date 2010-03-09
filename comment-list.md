# API Method: /api/comment/list
# flags=comments

Get a list of comments.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>

  <tr>
    <td>
      <tt>object_id</tt> 
    </td>
    <td>
      Comments to specific object. This will usually be a <tt>photo_id</tt>, but can also be an <tt>album_id</tt>.
    </td>
  </tr>


  <tr>
    <td>
      <tt>object_type</tt> 
    </td>
    <td>
      Comments to specific object type.<br/>
      <i>Default</i>: <i>(empty)</i><br/>
      <i>Valid value:</i> <i>(empty)</i>, <tt>photo</tt>, <tt>album</tt>
    </td>
  </tr>

  <tr>
    <td>
      <tt>comment_id</tt> 
    </td>
    <td>
      Limit to a specific comment.
    </td>
  </tr>

  <tr>
    <td>
      <tt>object_user_id</tt> 
    </td>
    <td>
      List comments to a specific user's channels, album, photos and videos.
    </td>
  </tr>

  <tr>
    <td>
      <tt>comment_user_id</tt> 
    </td>
    <td>
      List comments by a specific user.
    </td>
  </tr>

  <tr>
    <td>
      <tt>replies_to_user_id</tt> 
    </td>
    <td>
      List comment replies to a specific user.
    </td>
  </tr>

  <tr>
    <td>
      <tt>cover_photo_format</tt> 
    </td>
    <td>
      Format/size of the photo or video thumbnail returned for the comments.<br/>
      <i>Default:</i> <tt>quad50</tt>
    </td>
  </tr>

  <tr>
    <td>
      <tt>search</tt>
    </td>
    <td>
      Search through comments.
    </td>
  </tr>

  <tr>
    <td>
      <tt>order</tt>
    </td>
    <td>
      Order of the comments in the response (comments are always ordered by creation date).<br/>
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

To get the `email` property associated with a comment the required [permission level](index#permission-level) is:

    read


### Example XML Response

    <?xml version="1.0" encoding="UTF-8"?>
    <response status="ok" permission_level="read" p="1" size="1" 
      total_count="120" cached="0">

      <comment comment_id="417329" object_id="417254" object_type="photo" 
        user_id="" name="Ernest Hemmingway" email="ernest@example.com" 
        pretty_date="February 26, 2009" pretty_time="08:02 PM" short_date="26. Feb" 
        truncated_name="Ernest Hemmingway" creation_date_ansi="2009-02-26 20:02:06" 
        object_url="/photo/417254" object_title="Kylling med pasta, gorgonzola og bacon" 
        cover_photo_id="417254" cover_photo_download="/792/417254/bkrPunr6agkdxl2netsrTvlypehdeuvz/quad50" 
        within_edit_timeframe_p="0">
            <content_text> (plain text version of the comment) </content_text>
            <content> (html version of the comment) </content>
            <truncated_content> (truncated version of the content) </truncated_content>
            <object_content> (content of the object matched to the comment) </object_content>
            <object_content_text> 
              (plain text version of the content of the object matched to the comment) 
            </object_content>
        </comment>
    </response>

### Example JSON Response

    {
      "status": "ok", 
      "permission_level":"read",
      "cached":"0",
      "comments":
        [{
         "comment_id": "417285", "object_id": "417254", 
         "object_type": "photo", "user_id": "", "name": "Lasse", 
         "email": "Lasse@24by7.dk", "pretty_date": "February 26, 2009", 
         "pretty_time": "04:00 PM", "short_date": "26. Feb", 
         "truncated_name": "Lasse", "creation_date_ansi": "2009-02-26 16:00:58", 
         "object_url": "/photo/417254", 
         "object_title": "Kylling med pasta, gorgonzola og bacon", 
         "cover_photo_id": "417254", 
         "cover_photo_download": "/792/417254/bkrPunr6agkdxl2netsrTvlypehdeuvz/quad50", 
         "within_edit_timeframe_p": 0, 
         "content_text": " (plain text version of the comment) ", 
         "content": " (html version of the comment) ", 
         "truncated_content": " (truncated version of the content) ", 
         "object_content": " (content of the object matched to the comment) ", 
         "object_content_text": " (plain text version of the object content) "
        }],
      "p": "1",
      "size": "1",
      "total_count": "120",
      "site": { ... },
      "endpoint": "/api/comment/list"
    }
