# FriendsOfApi Fortnox

[![Latest Version](https://img.shields.io/github/release/FriendsOfApi/fortnox.svg?style=flat-square)](https://github.com/FriendsOfApi/fortnox/releases)
[![Build Status](https://img.shields.io/travis/FriendsOfApi/fortnox/master.svg?style=flat-square)](https://travis-ci.org/FriendsOfApi/fortnox)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/FriendsOfApi/fortnox.svg?style=flat-square)](https://scrutinizer-ci.com/g/FriendsOfApi/fortnox)
[![Quality Score](https://img.shields.io/scrutinizer/g/FriendsOfApi/fortnox.svg?style=flat-square)](https://scrutinizer-ci.com/g/FriendsOfApi/fortnox)
[![Total Downloads](https://img.shields.io/packagist/dt/friendsofapi/fortnox.svg?style=flat-square)](https://packagist.org/packages/friendsofapi/fortnox)


## Install

Via Composer

``` bash
composer require friendsofapi/fortnox
```

## Usage

You need to follow the steps described on https://developer.fortnox.se/getting-started/ 
to get an access token. Once you got that token you can start playing with the API client. 

``` php
$apiClient = new ApiClient();
$total = $apiClient->stats()->total();
echo $total->getCount(); // 22;
```


## Errors

See a list of error codes on [Fortnox](https://developer.fortnox.se/documentation/general/errors/).

## Develop

APIs are usually split into categories, called **Resources**.
In your implementation you should also reflect these categories, for example by having their own classes in `Api/`.
Let's take a look at `Api/Stats` in our case. The response of any call should be an object in `Model/Stats/X`,
like `Model/Stats/Total`.


### Hydrator

The end user chooses which hydrator to use. The default one should return domain objects.


### Request builder

The request builder creates a PSR-7 request with a multipart stream when necessary
If the API does not require multipart streams you should remove the `RequestBuilder`
and replace it with a `RequestFactory`.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
