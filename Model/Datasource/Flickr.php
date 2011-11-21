<?php
/**
 * Flickr DataSource
 * 
 * [Short Description]
 *
 * @package default
 * @author Dean Sofer
 **/
App::uses('ApisSource', 'Apis.Model/Datasource');
class Flickr extends ApisSource {
	
	// TODO: Relocate to a dedicated schema file
	var $_schema = array();
	
    public $options = array(
        'protocol'   			=> 'http',
        'format'     			=> 'json',
        'user_agent' 			=> 'CakePHP Flickr Datasource',
        'http_port'  			=> 80,
        'timeout'    			=> 10,
        'login'      			=> null,
        'token'      			=> null,
        'param_separator'		=> '&',
        'key_value_separator'	=> '=',
		'permissions'			=> 'read', // read, write, delete
    );
    
    protected $url = ':protocol://api.flickr.com/services/rest/?api_key=:login&method=:path&format=:format';
}