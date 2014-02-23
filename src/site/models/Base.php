<?php
namespace com_vaudevillian\Models;

defined( '_JEXEC' ) or die( 'Restricted access' );

abstract class Base extends \JModelBase
{
	private $__state_set = null;
	protected $_total = null;
	protected $_pagination = null;
	protected $_db = null;
	public $id = null;
	 
	function __construct()
	{
		parent::__construct();
		$this->_db = \JFactory::getDBO();
	 
		$app = \JFactory::getApplication();
		$ids = $app->input->get("cids",null,'array');
	 
		$id = $app->input->get("id");
		if ( $id && $id > 0 ){
			$this->id = $id;
		}else if ( count($ids) == 1 ){
			$this->id = $ids[0];
		}else{
			$this->id = $ids;
		}
	}
} 