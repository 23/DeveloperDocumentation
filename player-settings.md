# API Method: /api/player/settings
# flags=comments

Request specific player settings.

Site administrators are able to control a number of player behaviour and design settings for their video players. If you are designing a custom player, you can choose which (if any) of these settings to honour. Refer to [Embeddng: Modifying the video player without writing code](/design/player-embed) or even [the source code for the standard player](https://github.com/23/videoplayer/blob/master/src/AppProperties.as) for a list of available options.

Only specifically chosen settings are included in the returned list, and players are expected to keep their own list of default options. Again, refer to [the standard implementation](https://github.com/23/videoplayer/blob/master/src/AppProperties.as).

### The `player_id`

Settings are requested by their associated `player_id`. If you make use of our built-in embedding options, this identifier is an integer included in the embedded URL. In select cases, `v.swf` or `v.ihtml` is used to reference the [default video player](player-list).

The URL pattern can be one of the following:

     http://video.domain.com/12345.swf
     http://video.domain.com/12345.ihtml
     http://video.domain.com/12345.html
     http://video.domain.com/v.swf
     http://video.domain.com/v.ihtml
     http://video.domain.com/v.html

To get `player_id` in ActionScript/Flex:

    var testCustomPlayer:Array = 
      new RegExp('/([0-9]+)\.[a-z]$').exec(FlexGlobals.topLevelApplication.url);
    var player_id:String = 
      (testCustomPlayer && testCustomPlayer.length>1 ? testCustomPlayer[1] : '');
    
To get `player_id` in JavaScript:
    
    var testCustomPlayer = 
      new RegExp('/([0-9]+)\.[a-z]$').exec(location.href);
    var player_id = 
      (testCustomPlayer && testCustomPlayer.length>1 ? testCustomPlayer[1] : '');

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>
  <tr>
    <td>
      <tt>player_id</tt>
    </td>
    <td>
      The ID of the player being used. If this parameter is empty or omitted, the selected default video player is chosen. See also above.
    </td>
  </tr>
  <tr>
    <td>
      <tt>parameters</tt>
    </td>
    <td>
      A query-string encoded list of embed parameters. This is used to return a situated embed code for sharing within the video player.
    </td>
  </tr>
</table>

    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    none

### Reponse values

In addition to the custom settings chosen by the user, a set of additional information is returned. This mostly serves a helpful information to allow sharing within custom video players:

* `player_id`: An integer uniquely identifying the player. Even if you have omitted the `player_id` parameter above, this value will be populated correctly.
* `showShare`: A boolean controlling whether sharing options such as embedding, social networks or subscriptions should be included within the player. This is controlled by the site admin, but will usually be `1` on open sites and `0` on closed ones.
* `socialSharing`: A boolean signifying whether social sharing such as podcasts, subscriptions, Facebook posting etc. is available from the site at all. See also `showShare`.
* `embedCode`: A suggested embed code to share the video player.
* `logoSource`: URL to a logo for the site.
* `rssLink`: Link to an RSS feed for the embedded content.
* `podcastLink`: Link to a podcast feed for the embedded content.


### Example XML Response

    <response status="ok" permission_level="anonymous" cached="0">
      <trayBackgroundColor>red</trayBackgroundColor>
      <showBrowse>0</showBrowse>
      <socialSharing>0</socialSharing>
      <showShare>0</showShare>
      <player_id>333991</player_id>
      <embedCode>&lt;iframe src="http://reference.dev.visualtube.net/v.ihtml?" 
        width="625" height="469" frameborder="0" border="0" 
        scrolling="no"&gt;&lt;/iframe&gt;</embedCode>
    </response>


### Example JSON Response

    {
      "status": "ok", 
      "permission_level":"anonymous",
      "cached":"0",
      "settings":{
        "trayBackgroundColor": "red", 
        "showBrowse": "0", 
        "socialSharing": "0", 
        "showShare": "0", 
        "player_id": "333991", 
        "embedCode": "<iframe src=\"http://reference.dev.visualtube.net/v.ihtml?\" 
          width=\"625\" height=\"469\" frameborder=\"0\" border=\"0\" 
          scrolling=\"no\"></iframe>"
      },
      "p": "1",
      "size": "1",
      "site": ...
      "endpoint": "/api/player/settings"
    }
