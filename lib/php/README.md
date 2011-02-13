# PHP sample for 23's Visualplatform API

This is a sample on how to authenticate your application for and integration it with 23's Visualplatform API available at http://community.23video.com/api/.

The sample is available through...

* [API documentation and samples on Github](http://github.com/23/DeveloperDocumentation)
* [All php sample scripts](http://github.com/23/DeveloperDocumentation/tree/master/lib/php/)



## Requirements

These scripts require PHP and the `oauth` pear package, which can easily be installed:

    pear install HTTP_OAuth-alpha

(There are a number of PHP libraries for OAuth, all with their own pros and cons. We've gone for the pear script in this sample since it's easy to install, but you should have a look at [the library list](http://oauth.net/code/) to see which one suits you best.)


## Important change in PEAR library 

### Between versions 0.1.17 and 0.2.1

The library is easy to install and fairly mature; unfortunately it doesn't handle file upload well. So if you're going to be using the `/api/photo/upload` or `/api/photo/replace` methods, you'll need to make a very small change after having installed the library: 

Find your PEAR folder and in `HTTP/OAuth/Consumer/Request.php`. In this file, lines 215 through 219 should be replaced with the following piece of code:

    $request_headers = $this->getHTTPRequest2()->getHeaders();
    if ($this->getMethod() == 'POST' && $request_headers['content-type']=='application/x-www-form-urlencoded') {
        $body = $this->getHTTPRequest2()->getBody();
        $body = str_replace('+', '%20', $body);
        $this->getHTTPRequest2()->setBody($body);
    }

A bug report describing the problem is available here: https://pear.php.net/bugs/bug.php?id=17653

### Version 0.1.16 and earlier

If you're using an earlier version of the OAuth library, another change will be necessary. In your PEAR folder, locate `HTTP/OAuth/Consumer/Request.php` and remove the following line (it's probably line 259)...

    $this->setHeader('Content-Type', 'application/x-www-form-urlencoded');


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
