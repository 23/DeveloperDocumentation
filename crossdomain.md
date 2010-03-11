# Cross-domain access in Adobe Flash and Adobe Flex
# flags=comments

You can access data from 23 Video site via Flash, but the access is limited by [our cross-domain policies](http://www.adobe.com/devnet/flashplayer/articles/cross_domain_policy.html). This means that `.swf`files hosted on a different domain from the target site will need to be aware of the restrictions.

The master policy file in the root folder (`/crossdomain.xml`) does not grant explicit access to anything. However, specific policy files are located in the folders `/js`, `/api` and `/<tree_id>` to obtain access to data in a structured fashion. In some case, Flash will locate these files for you -- but usually you will need to load the policy files explicitly in your Flash or Flex code:

    // Obtain access to load JSON files in the /js/ folder
    Security.loadPolicyFile('http://videos.example.com/js/crossdomain.xml');

    // Obtain access to all API methods
    Security.loadPolicyFile('http://videos.example.com/api/crossdomain.xml');

    // Only obtain access to user-specific API-methods
    Security.loadPolicyFile('http://videos.example.com/api/user/crossdomain.xml');

    // Obtain access to any photos or videos hosted in the tree with id=7340
    Security.loadPolicyFile('http://videos.example.com/7340/crossdomain.xml');

    // Obtain access to photo with id=59167 in tree_id=7340
    Security.loadPolicyFile('http://videos.example.com/7340/59167/crossdomain.xml');


If you have administrator's access to the 23 Video site, you can overcome these cross-domain issues by hosting the `.swf` on the 23 Video site. This is done by uploading the file under `Design` &rarr; `Files`.
