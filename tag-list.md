# API Method: /api/tag/list
# flags=comments

Get a list of tags.

### Parameters

<table class="pretty">
  <tr><th>Parameter</th><th>Description</th></tr>

  <tr>
    <td>
      <tt>search</tt>
    </td>
    <td>
      Search tags.
    </td>
  </tr>

  <tr>
    <td>
      <tt>reformat_tags_p</tt>
    </td>
    <td>
      Prettify tags to make them more humanly legiable. For example, change <i>people:Santa-Claus</i> to <i>Santa Claus</i>.<br/>
      <i>Default:</i> <tt>0</tt><br/>
      <i>Valid values:</i> <tt>1</tt> and <tt>0</tt>
    </td>
  </tr>

  <tr>
    <td>
      <tt>exclude_machine_tags_p</tt>
    </td>
    <td>
      Exclude machine tags from the response.<br/>
      <i>Default:</i> <tt>0</tt><br/>
      <i>Valid values:</i> <tt>1</tt> and <tt>0</tt>
    </td>
  </tr>

  <tr>
    <td>
      <tt>orderby</tt>
    </td>
    <td>
      Variable to order tags by.<br/>
      <i>Default:</i> <tt>tag</tt><br/>
      <i>Valid values:</i> <tt>tag</tt>, <tt>count</tt>
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


### Example XML Response

    <response status="ok" permission_level="anonymous" p="1" size="20" total_count="77" cached="1">
      <tag tag="23" count="4" url="/tag/23"/>
      <tag tag="3gpp" count="1" url="/tag/3gpp"/>
      <tag tag="a" count="1" url="/tag/a"/>
      ( ...)
    </response>


### Example JSON Response

    {
      "status": "ok", 
      "permission_level":"anonymous",
      "cached":"1",
      "tags":[
        {"tag": "23", "count": "4", "url": "/tag/23"},
        {"tag": "3gpp", "count": "1", "url": "/tag/3gpp"},
        {"tag": "a", "count": "1", "url": "/tag/a"},
        (...)
        ],
      "p": "1",
      "size": "20",
      "total_count": "77",
      "site": { ... },
      "endpoint": "/api/tag/list"
    }
