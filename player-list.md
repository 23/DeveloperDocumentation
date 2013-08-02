# API Method: /api/player/list
# flags=comments

List available video players.

### Parameters

There are no parameters available for this method apart from the ones used for [pagination](/api/#pagination).
    

### Permission level 

The minimum required [permission level](index#permission-level) is:

    read

### Example XML Response

    <response status="ok" permission_level="read" p="1" size="20" total_count="3" cached="0">
      <player player_id="333991" player_name="Standard" default_p="1"/>
      <player player_id="333996" player_name="Browse" default_p="0"/>
      <player player_id="333992" player_name="Plain" default_p="0"/>
    </response>


### Example JSON Response

    {
      "status": "ok", 
      "permission_level":"read",
      "cached":"0",
      "players":[
        {"player_id": "333991", "player_name": "Standard", "default_p": 1},
        {"player_id": "333996", "player_name": "Browse", "default_p": 0},
        {"player_id": "333992", "player_name": "Plain", "default_p": 0}
      ],
      "p": "1",
      "size": "20",
      "total_count": "3",
      "site": ...
      "endpoint": "/api/player/list"
    }
