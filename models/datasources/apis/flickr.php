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

	/**
	 * Array containing the names of components this component uses. Component names
	 * should not contain the "Component" portion of the classname.
	 *
	 * @var array
	 * @access public
	 */
	var $config = array();
	
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
	
	/**
	 * Uses standard find conditions. Use find('all', $params). Since you cannot pull specific fields,
	 * we will instead use 'fields' to specify what table to pull from.
	 *
	 * @param string $model 
	 * @param string $queryData 
	 * @return void
	 */
	function read($model, $queryData = array()) {
		if ($queryData['fields'] == 'people' && !empty($queryData['conditions']['username'])) {
			$url = 'flickr.people.findByUsername&' . $this->_buildParams(array(
				'username',
			), $queryData, true);
		} elseif ($queryData['fields'] == 'sets') {
			$url = 'flickr.photosets.getList&' . $this->_buildParams(array(
				'user_id',
			), $queryData, true);
		} elseif ($queryData['fields'] == 'photos' && !empty($queryData['conditions']['photoset_id'])) {
			$url = 'flickr.photosets.getPhotos&' . $this->_buildParams(array(
				'photoset_id',
			), $queryData, true);
		}
		return $this->_request($url);
	}
}