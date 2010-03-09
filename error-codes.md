# API: Error codes and descriptions
# flags=comments

Whenever a request to the API fails, a response detailing the exception is returned. The response includes an error code and a detailed description of the error. 

The possible errors returned by the API are...

<table class="pretty">
  <tr><th>Code</th><th>Description</th></tr>
  <tr><td>couldnt_create_album</td><td>An error occurred while creating the album.</td></tr>
  <tr><td>couldnt_create_user</td><td>We were unable to create a user with the given information.</td></tr>
  <tr><td>couldnt_update_album</td><td>An error occurred while updating the album.</td></tr>
  <tr><td>error_processing_upload</td><td>An error occured while processing the uploaded file.</td></tr>
  <tr><td>invalid_album</td><td>The specified album is invalid.</td></tr>
  <tr><td>invalid_album_token</td><td>The specified token for accessing this album is invalid.</td></tr>
  <tr><td>invalid_input</td><td>Parameters are malformed.</td></tr>
  <tr><td>invalid_photo_token</td><td>The specified token for accessing this photo is invalid.</td></tr>
  <tr><td>invalid_signature</td><td>The given signature was invalid. See <a href="index#authentication">Authentication</a>.</td></tr>
  <tr><td>no_file</td><td>No file was included in the request.</td></tr>
  <tr><td>no_such_album</td><td>No album with the given id.</td></tr>
  <tr><td>no_such_photo</td><td>No photo/video with the given id.</td></tr>
  <tr><td>no_such_tag</td><td>This tag isn't being used on the site.</td></tr>
  <tr><td>no_such_user</td><td>No user with the given user id.</td></tr>
  <tr><td>permission_denied</td><td>You don't have the necessary permissions to perform this action (required level: 'level'). See <a href="index#permission-levels">Permission Levels</a>.</td></tr>
  <tr><td>token_required</td><td>Anonymous access to this site's content requires a combination of either album_id/token or photo_id/token.</td></tr>
  <tr><td>user_already_exists</td><td>The user with this information already exists.  
</table>
