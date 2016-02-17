<?php

/**
 * 后台管理基础类
 */
class AdminBase extends SBaseController {

	public function init() {
		//parent::init();
		
		if (!Yii::app()->user->id){
			$this->redirect(array('/admin/public/login'));
		}

		//系统配置
		//$this->_conf = self::_config();
	}

	/**
	 * 实时获取系统配置
	 * @return [type] [description]
	 */
	public static function _config() {
		$model = Config::model()->findAll();
		if ($model) {
			foreach ($model as $key => $row)
				$config[$row['variable']] = $row['value'];
			return $config;
		}
	}
	
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	//public $layout='//layouts/column1';
	public $layout='//layouts/widgets';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

}

?>