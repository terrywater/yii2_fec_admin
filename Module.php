<?php
namespace fecadmin;
use Yii;
class Module extends \fec\AdminModule
{
   
    public function init()
    {
		# 以下代码必须指定
        $this->controllerNamespace 	= 	__NAMESPACE__ . '\\controllers';
		$this->_currentDir			= 	__DIR__ ;
		$this->_currentNameSpace	=   __NAMESPACE__;
		
		# 指定默认的man文件
		$this->layout = "main_ajax.php";
		parent::init();  
		
    }
}
