# Flickr API Plugin for CakePHP

## Installation

1. Clone/download the plugin to `plugins/flickr`
2. Clone/download the [apis plugin](https://github.com/ProLoser/CakePHP-Api-Datasources) to `plugins/apis`
3. Add your configuration to `database.php` and set it to the model

<pre><code>
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
</code></pre>

## Commands

There are a variety of options available to you, however some combinations are required (for example 'wiki' requires 'username' and 'project')
You can get an idea what's available to you by reading the [Codaset API Documentation](http://api.codaset.com/docs)


### Read: `find('all', $params)`

Conditions:

* username
* project

Fields: pass only one of these at a time as a string

* General
	* projects
* User specific (username required)
	* projects
	* collaborations
	* followers
	* followings
	* friends
	* bookmarks
* Project specific (username and project conditions required)
	* wiki
	* tickets
	* milestones
	* blog
		
**Example:**
<pre><code>
$data = $this->Model->find('all', array(
	'conditions' => array(
		'username' => 'codaset', 
		'project' => 'codaset'
	),
	'fields' => 'blog',
));
</code></pre>
		
### Update
Bold items are required

### Delete
Bold items are required

**Unfollow a user**

Fields:

* follow => username

### Create
Bold items are required

**Create Project**

Fields:

* **type** => project
* **username** => The username of the project owner.
* **title** => Title of the new project.
* description => Description of the project.
* state => The state of the project. Possible values are 'public' (default), 'semi-private' or 'private'.
* fork => A publicly accessible URL of an external Git repository that will be cloned to create this project. Example: git://external-domain.com/repository.git

**Follow a user**

Fields:

* **type** => follow
* **follow** => username
	