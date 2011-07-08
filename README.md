# Flickr API Plugin for CakePHP

## Installation

1. Clone/download the plugin to `plugins/flickr`
2. Clone/download the [apis plugin](https://github.com/ProLoser/CakePHP-Api-Datasources) to `plugins/apis`
3. Add your configuration to `database.php` and set it to the model

```
:: database.php ::
var $codaset = array(
	'datasource' => 'Apis.Apis',
	'driver' => 'Flickr.Flickr',
	// These are only required for authenticated requests (write-access)
	'login' => '--Your API Key--',
	'password' => '--Your API Secret--',
);

:: my_model.php ::
var $useDbConfig = 'codaset';
```

## Commands

There are a variety of options available to you, however some combinations are required (for example 'wiki' requires 'username' and 'project')
You can get an idea what's available to you by reading the [Flickr API Documentation](http://www.flickr.com/services/api/)


### Read: `find('all', $params)`

Conditions:

* username
* find_email
* user_id
* photoset_id

Fields: pass only one of these at a time as a string

* people (requires username condition)
* sets (requires user_id condition)
* photos (requires photoset_id condition)
		
**Example:**
```
$data = $this->Model->find('all', array(
	'conditions' => array(
		'user_id' => $userId,
	),
	'fields' => 'sets',
));
```
		
### Update
Bold items are required

### Delete
Bold items are required

### Create
Bold items are required