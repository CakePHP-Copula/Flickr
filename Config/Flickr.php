<?php
/**
 * A Flickr API Method Map
 *
 * Refer to the apis plugin for how to build a method map
 * https://github.com/ProLoser/CakePHP-Api-Datasources
 *
 */
$config['Apis']['Flickr']['hosts'] = array(
	'oauth' => 'www.flickr.com/services/oauth',
	'rest' => 'api.flickr.com/services/rest',
);
$config['Apis']['Flickr']['oauth'] = array(
	'version' => '1.0',
	'scheme' => 'http',
	// http://www.flickr.com/services/api/auth.howto.web.html
	'login' => '?api_key=:login&perms=:permissions&api_sig=:token',
	// http://www.flickr.com/services/api/auth.oauth.html
	'request' => 'request_token',
	'authorize' => 'authorize',
	'access' => 'access_token',
);
$config['Apis']['Flickr']['read'] = array(
	// field
	'people' => array(
		// api url
		'flickr.people.getInfo' => array(
			// required conditions
			'user_id',
			// optional conditions the api call can take
			'optional' => array(),
		),
		'flickr.people.findByUsername' => array(
			'username',
		),
		'flickr.people.findByEmail' => array(
			'find_email',
		),
		'flickr.photos.people.getList' => array(
			'photo_id',
		),
		'flickr.test.login' => array(),
	),
	'sets' => array(
		'flickr.photosets.getInfo' => array(
			'photoset_id',
		),
		'flickr.photosets.getContext' => array(
			'photoset_id',
			'photo_id',
		),
		'flickr.photosets.getList' => array(
			'optional' => array(
				'user_id',
			),
		),
	),
	'photos' => array(
		'flickr.photosets.getPhotos' => array(
			'photoset_id',
		),
		'flickr.photos.getNotInSet' => array(

		),
	),
	'comments' => array(
		'flickr.photos.comments.getList' => array(
			'photo_id',
		),
	),
);

$config['Apis']['Flickr']['write'] = array(
);

$config['Apis']['Flickr']['update'] = array(
);

$config['Apis']['Flickr']['delete'] = array(
);