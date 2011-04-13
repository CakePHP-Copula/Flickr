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
 * Used to create new records. The "C" CRUD.
 *
 * To-be-overridden in subclasses.
 *
 * @param Model $model The Model to be created.
 * @param array $fields An Array of fields to be saved.
 * @param array $values An Array of values to save.
 * @return boolean success
 * @access public
 */
	function create(&$model, $fields = null, $values = null) {
		return false;
	}

/**
 * Update a record(s) in the datasource.
 *
 * To-be-overridden in subclasses.
 *
 * @param Model $model Instance of the model class being updated
 * @param array $fields Array of fields to be updated
 * @param array $values Array of values to be update $fields to.
 * @return boolean Success
 * @access public
 */
	function update(&$model, $fields = null, $values = null) {
		return false;
	}

/**
 * Delete a record(s) in the datasource.
 *
 * To-be-overridden in subclasses.
 *
 * @param Model $model The model class having record(s) deleted
 * @param mixed $id Primary key of the model
 * @access public
 */
	function delete(&$model, $id = null) {
		if ($id == null) {
			$id = $model->id;
		}
	}
}