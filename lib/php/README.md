# Ruby sample for 23's Visualplatform API

This is a sample on how to authenticate your application for and integration it with 23's Visualplatform API available at http://community.23video.com/api/.

The sample is available through...

* [API documentation and samples on Github](http://github.com/23/DeveloperDocumentation)
* [All ruby sample scripts](http://github.com/23/DeveloperDocumentation/tree/master/lib/ruby/)



## Requirements

These scripts require PHP and the `oauth` pear package, which can easily be installed:

    pear install HTTP_OAuth-alpha

(There are a number of PHP libraries for OAuth, all with their own pros and cons. We've gone for the pear script in this sample since it's easy to install, but you should have a look at [the library list](http://oauth.net/code/) to see which one suits you best.)


## Authentication

The API uses an OAuth-based authentication scheme for granting application access and for signing request. See [oauth.net](http://oauth.net) for further details.

To prepare authentication, first following the documented steps to set up a consumer key and a consumer secret with 23, and then run this command.

    ./visualplatform-authenticate.php <consumer_key> <consumer_secret> 

After you've completed the step prescribed in the script, you'll find a new file (`visualplatform.config.php`) in your working directory containing your secret credentials -- including an access key and an access token.


## Usage

After authenticating your application, you can invoke an API method from the command-line by running:

    ./visualplatform-command.php <endpoint> <param1> <value1> <param2> <value2> ...

The script also handles the special case of getting data in a native PHP data structure by parsing JSON data from the API:

    ./visualplatform-command.php <endpoint> <param1> <value1> ... format php
    
For example

    ./visualplatform-command.rb /api/echo iam here title "My title"


This sample also shows how to build multipart requests and upload files to 23 Video through PHP.
