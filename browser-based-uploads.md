# API: Browser-based uploads
# flags=comments

Browser-based uploading consists of two API methods:

* [/api/photo/get-upload-token](photo-get-upload-token) to predefine meta-data, specify a callback URL and retrieve an `upload_token`
* [/api/photo/redeem-upload-token](photo-redeem-upload-token) to actually upload a video or photo using the token.<br/><br/>


This approach is designed to allow API consumers to pre-authenticate uploads to their 23 sites -- and enables applications to let users upload photos and videos to 23 using browser-based uploading. This scheme allows you to accept uploads from users without ever having to proxy or host the files from you server. You should opt for this approach to uploading if you do not want to host or store the uploaded files.

---

## 1. Post upload meta data to 23

Start by [posting](photo-get-upload-token) title, description, album, tags and publish status to the API alongside a `return_url` where the user is returned after uploading the actual file:

    http://videos.examples.com/api/photo/get-upload-token?
      title=My+title&
      album_id=12345&
      return_url=http://www.example.com/upload/callback?theme=green
      
This will return you an `upload_token` plus information about the exact meta data, about the expiration of the token and about how many times the token can be used:

    <response status="ok" permission_level="write" 
      message="The upload token is ready to use" cached="0">
      <upload_token>022fe6e3fb42758d6147c539727c5358af3524b1</upload_token>
      <title>A title for the new upload</title>
      <description>... and a prelimiary description</description>
      <publish>1</publish>
      <tags>product:1234, testemonial</tags>
      <user_id>17488</user_id>
      <album_id></album_id>
      <max_uploads>1</max_uploads>
      <valid_minutes>180</valid_minutes>
      <valid_until>1266711372</valid_until>
      <return_url>http://www.example.com/upload/callback?theme=green</return_url>
    </response>

In this example, you're getting a token valid for one upload and for 3 hours.


---

## 2. Get the `upload_token` 

From this returned information you will need to extract the `upload_token`. In this case, the token is:

    022fe6e3fb42758d6147c539727c5358af3524b1


---

## 3. Build the HTML form using the `upload_token`

Using this token you can now build a simple HTML form for the user.

    <form action="http://videos.example.com/api/photo/redeem-upload-token" 
      method="post" enctype="multipart/form-data">
      <input type="hidden" name="upload_token" value="022fe6e3fb42758d6147c539727c5358af3524b1" />
      <input type="file" name="file" />
      <input type="submit" value="Upload video" />
    </form>

Of course, if you set the [`max_uploads`](photo-get-upload-token) parameter, you can also [more advanced upload methods](http://www.plupload.com/) for uploading multiple files at once.


---

## 4a. Handle the call-back after the upload completes.

The callback URL is defined by the [`return_url`](photo-get-upload-token) parameter, and the callback request will always take the form of a HTTP 301 redirect to a GET-style address. 

The request will always include the <tt>upload_token</tt> and <tt>domain</tt> as a parameter. If the upload succeeded, the parameters <tt>photo_id</tt>, <tt>token</tt>, <tt>tree_id</tt> will be included:

    http://www.example.com/upload/callback?
      theme=green&
      domain=videos.example.com&
      upload_token=022fe6e3fb42758d6147c539727c5358af3524b1&
      photo_id=12345&
      tree_id=97531&
      token=mhpDudicFtdjz1isvidhnzsgqv3kaske

---

## 4b. Handle the call-back on upload errors

On upload failure, the user is sent to the same callback page. The request includes an <tt>error_message</tt> parameter alongside <tt>upload_token</tt> and <tt>domain</tt>. For example:

    http://www.example.com/upload/callback?
      theme=green&
      domain=videos.example.com&
      upload_token=022fe6e3fb42758d6147c539727c5358af3524b1&
      error_message=The+file+type+isn't+supported

