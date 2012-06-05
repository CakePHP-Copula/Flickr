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

    public function beforeRequest(&$model, $request) {
        $request['uri']['query']['api_key'] = $this->config['login'];
        if (!empty($request['uri']['path'])) {
            $request['uri']['query']['method'] = $request['uri']['path'];
            $request['uri']['path'] = '';
        }
        $request['uri']['query']['format'] = $this->options['format'];
        $request['uri']['query']['nojsoncallback'] = 1;
        if (!empty($this->config['oauth_token']))
            $request['uri']['query']['auth_token'] = $this->config['oauth_token'];
        $request['uri']['query']['api_sig'] = $this->generateSig($request['uri']['query']);
        return $request;
    }

    public function generateSig($params) {
        $sig = $this->config['password'];
        ksort($params);
        foreach ($params as $key => $value) {
            $sig .= $key . $value;
        }
        $sig = md5($sig);
        return $sig;
    }
}