<?php
/**
 * A Flickr API Method Map
 *
 * Refer to the apis plugin for how to build a method map
 * https://github.com/ProLoser/CakePHP-Api-Datasources
 *
 */
$config['Apis']['Flickr']['read'] = array(
	// field
	'people' => array(
		// api url
		'flickr.people.getInfo' => array(
			// required conditions
			'user_id'
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
	),
	'sets' => array(
		'flickr.photosets.getInfo' => array(
			'photoset_id',
		),
		'flickr.photosets.getList' => array(
			'user_id',
		),
		'flickr.photosets.getContext' => array(
			'photoset_id',
			'photo_id',
		),
	),
	'photos' => array(
		'flickr.photosets.getPhotos' => array(
			'photoset_id',
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