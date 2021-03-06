<?php

// You can find the keys here : https://dev.twitter.com/

return array(
	'API_URL'             => 'api.twitter.com',
	'API_VERSION'         => '1.1',
	'USE_SSL'             => true,

	'CONSUMER_KEY'        => Config::get("twitter-data.key"),
	'CONSUMER_SECRET'     => Config::get("twitter-data.secret"),
	'ACCESS_TOKEN'        => Config::get("twitter-data.access-token"),
	'ACCESS_TOKEN_SECRET' => Config::get("twitter-data.access-secret"),
);
