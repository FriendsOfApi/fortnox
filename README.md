# FriendsOfApi Fortnox

[![Latest Version](https://img.shields.io/github/release/FriendsOfApi/fortnox.svg?style=flat-square)](https://github.com/FriendsOfApi/fortnox/releases)
[![Build Status](https://img.shields.io/travis/FriendsOfApi/fortnox.svg?style=flat-square)](https://travis-ci.org/FriendsOfApi/fortnox)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/FriendsOfApi/fortnox.svg?style=flat-square)](https://scrutinizer-ci.com/g/FriendsOfApi/fortnox)
[![Quality Score](https://img.shields.io/scrutinizer/g/FriendsOfApi/fortnox.svg?style=flat-square)](https://scrutinizer-ci.com/g/FriendsOfApi/fortnox)
[![Total Downloads](https://img.shields.io/packagist/dt/friendsofapi/fortnox.svg?style=flat-square)](https://packagist.org/packages/friendsofapi/fortnox)


## Install

Via Composer

``` bash
$ composer require friendsofapi/fortnox
```


## Usage

You need to follow the steps described on https://developer.fortnox.se/getting-started/ 
to get an access token. Once you got that token you can start playing with the API client. 

``` php
$apiClient = new ApiClient();
$total = $apiClient->stats()->total();
echo $total->getCount(); // 22;
```


## Example

This repository contains an example API client for FakeTwitter.
The API for FakeTwitter has the following endpoints.

| Method | URI | Parameters |
| ------ | --- | ---------- |
| GET | /v1/tweets | (string) hashtag |
| POST | /v1/tweets/new | (string) message, (string) location, (array) hashtags |
| GET | /v1/tweets/{id} | |
| PUT | /v1/tweets/{id}/edit | (string) message, (string) location, (array) hashtags |
| DELETE | /v1/tweets/{id}/delete | |
| GET | /v1/stats/{username} | (int) start, (int) end |
| GET | /v1/stats/total | (int) start, (int) end|


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


### Domain objects as parameters

If the API requires lots of parameters for a specific endpoint it could be tempting
to create a domain object and pass it as an argument to that endpoint.

``` php
public function create(string $username, Tweet $model) {
    // send the Tweet to Fake Twitter API
    // ...
}

$model = new Tweet();
$model->setMessage('foobar');
$model->addHashTag('stuff');
$model->addHashTag('test');
$model->setLocation('Stockhom/Sweden');
// ...
$api->create('foobar', $model);
```

This approach, however, is not preferred as the created Tweet object is an unnecessary
overhead. It could also conflict with the application developers' Tweet object.
Also, requests usually don't have the same parameters as responses, so using the
same object for both is impossible in most of the cases. Instead of forcing the
users to use your Tweet object you should use an array for passing parameters
to the request.

``` php
public function create(string $username, array $param) {
    // send the Tweet to Fake Twitter API
    // ...
}

$param['message' => 'foobar'];
$param['hashtags' => ['stuff', 'test']];
$param['location' => 'Stockhom/Sweden'];
// ...
$api->create('foobar', $param);
```

If your parameters are complex, you can provide a TweetBuilder. Since it's a builder,
fluent interface might be a good idea here. But be aware that
[fluent interfaces are evil](https://ocramius.github.io/blog/fluent-interfaces-are-evil/).

``` php
public function create(string $username, array $param) {
    // send the Tweet to Fake Twitter API
    // ...
}

$builder = (new TweetBuilder())
    ->setMessage('foobar');
    ->addHashTag('stuff');
    ->addHashTag('test');
    ->setLocation('Stockhom/Sweden')
;

// ...
$api->create('foobar', $builder->build());
```


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
