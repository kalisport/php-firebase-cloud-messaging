<?php

namespace Kalisport\PhpFirebaseCloudMessaging;

use GuzzleHttp;

/**
 *
 * @author Kalisport
 *
 */
interface ClientInterface
{

    /**
     * add your server api key here
     * read how to obtain an api key here: https://firebase.google.com/docs/server/setup#prerequisites
     *
     * @param string $apiKey
     *
     * @return \Kalisport\PhpFirebaseCloudMessaging\Client
     */
    function setApiKey($apiKey);


    /**
     * people can overwrite the api url with a proxy server url of their own
     *
     * @param string $url
     *
     * @return \Kalisport\PhpFirebaseCloudMessaging\Client
     */
    function setProxyApiUrl($url);

    /**
     * sends your notification to the google servers and returns a guzzle repsonse object
     * containing their answer.
     *
     * @param Message $message
     *
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\RequestException
     */
    function send(Message $message);
}
