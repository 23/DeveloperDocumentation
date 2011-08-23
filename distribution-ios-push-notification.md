# API Method: /api/distribution/ios/push-notification
# flags=comments

Send push notifications to all registered iOS devices.

The ecosystem for for iOS push notifications is fairly complex, and this method aim to make custom push notification slightly easier when devices are registered through the services such as [23 Video](http://www.23video.com). Still, it's a good idea to read through [Apple's documentation](http://developer.apple.com/library/ios/#documentation/NetworkingInternet/Conceptual/RemoteNotificationsPG/ApplePushService/ApplePushService.html) and [this guide from Boxed Ice](http://blog.boxedice.com/2009/07/10/how-to-build-an-apple-push-notification-provider-server-tutorial/) on how pushing actually works.

A call to this method can either specify a simple text `message` parameter for push, or can include [a full `payload` specification](http://developer.apple.com/library/ios/documentation/NetworkingInternet/Conceptual/RemoteNotificationsPG/ApplePushService/ApplePushService.html#//apple_ref/doc/uid/TP40008194-CH100-SW1) for full control of the data push to subscribing devices.


### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>

  <tr>
    <td>
      <tt>payload</tt> 
    </td>
    <td>
      A properly formated JSON dictiorary matching <a href="http://developer.apple.com/library/ios/documentation/NetworkingInternet/Conceptual/RemoteNotificationsPG/ApplePushService/ApplePushService.html#//apple_ref/doc/uid/TP40008194-CH100-SW1">Apple's specifications</a>. The maximum size allowed for a notification <tt>payload</tt> is 256 bytes. Whenever this parameter is used, all other parameters are ignored.
    </td>
  </tr>

  <tr>
    <td>
      <tt>message</tt> 
    </td>
    <td>
      A text message to be sent to the subscribing iOS devices. The maximum size allowed for <tt>message</tt> is 200 characters.
    </td>
  </tr>

  <tr>
    <td>
      <tt>badge</tt> 
    </td>
    <td>
      The `badge` parameter to pass on in the payload. See <a href="http://developer.apple.com/library/ios/documentation/NetworkingInternet/Conceptual/RemoteNotificationsPG/ApplePushService/ApplePushService.html#//apple_ref/doc/uid/TP40008194-CH100-SW1">the official documentation</a> for more detail.
    </td>
  </tr>

  <tr>
    <td>
      <tt>sound</tt> 
    </td>
    <td>
      The `sound` parameter to pass on in the payload. See <a href="http://developer.apple.com/library/ios/documentation/NetworkingInternet/Conceptual/RemoteNotificationsPG/ApplePushService/ApplePushService.html#//apple_ref/doc/uid/TP40008194-CH100-SW1">the official documentation</a> for more detail.
    </td>
  </tr>

  <tr>
    <td>
      <tt>photo_id</tt> 
    </td>
    <td>
      Send a specific <tt>photo_id</tt> wrapped in a <tt>visual</tt> object in the payload. Can be used to go to a specific object in the application when a notification has been engaged.
    </td>
  </tr>

  <tr>
    <td>
      <tt>album_id</tt> 
    </td>
    <td>
      Send a specific <tt>album_id</tt> wrapped in a <tt>visual</tt> object in the payload. Can be used to go to a specific object in the application when a notification has been engaged.
    </td>
  </tr>

  <tr>
    <td>
      <tt>liveevent_id</tt> 
    </td>
    <td>
      Send a specific <tt>liveevent_id</tt> wrapped in a <tt>visual</tt> object in the payload. Can be used to go to a specific object in the application when a notification has been engaged.
    </td>
  </tr>
</table>



### Permission level 

The minimum required [permission level](index#permission-level) is:

    super


### Example XML Response

    <response status="ok" permission_level="super" 
      message="The push notification was successfully to all registered iOS devices" cached="0"/>

### Example JSON Response

    {
      "status": "ok", 
      "message": "The push notification was successfully to all registered iOS devices",
      "permission_level":"super",
      "cached":"0",
      "photo":{},
      "p": "1",
      "size": "1",
      "site": { ... },
      "endpoint": "/api/distribution/ios/push-notification"
    }
