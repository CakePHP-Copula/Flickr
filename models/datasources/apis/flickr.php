<?php
/**
 * Flickr DataSource
 * 
 * [Short Description]
 *
 * @package default
 * @author Dean Sofer
 **/
class Flickr extends ApisSource {
	
	// TODO: Relocate to a dedicated schema file
	var $_schema = array();
	
    protected $options = array(
        'protocol'   			=> 'http',
        'format'     			=> 'json',
        'user_agent' 			=> 'cakephp flickr datasource',
        'http_port'  			=> 80,
        'timeout'    			=> 10,
        'login'      			=> null,
        'token'      			=> null,
        'param_separator'		=> '&',
        'key_value_separator'	=> '=',
    );
    
    protected $url = ':protocol://api.flickr.com/services/rest/?api_key=:login&method=:path&format=:format';
}