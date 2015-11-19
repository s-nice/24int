<?php
/**
 * 控制器基类，前台控制器必须继承此类
 * 
 */

class FrontBase extends Controller
{
    public $layout = '';
    protected $_conf;
    
    protected $_seoTitle;
    protected $_seoKeyword;
    protected $_seoDes;
	protected $_seoTj;
	
	protected $pageNav;
    
    /**
	 * 初始化
	 * @see CController::init()
	 */
    public function init ()
    {
        parent::init();
       
		//$site = Site::model()->find();
		
        //系统配置
        /*
		$this->_seoTitle = $site->title;
        $this->_seoKeyword = $site->keyword;
        $this->_seoDes = $site->des;
		$this->_seoTj = $site->code;
        if($site->status == 0){
            self::_closed($site->remark);
		}
		*/
	}

    /**
     * 关闭状态
     */
    protected function _closed($remark){
        $this->render('/site/error', array('message'=>$remark));
        exit;
    }
}