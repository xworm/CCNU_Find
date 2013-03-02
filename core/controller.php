<?php defined('INDEX_PAGE') or die('no entrance');
/**
 * 主控制器
 * 建议继承此控制器，后期可能会写功能
 * 
 * filename:	controller.php
 * charset:		UTF-8
 * create date: 2012-5-25
 * 
 * @author Zhao Binyan <itbudaoweng@gmail.com>
 * @copyright 2011-2012 Zhao Binyan
 * @link http://yungbo.com
 * @link http://weibo.com/itbudaoweng
 */

abstract class Controller {
	public function index() {
		echo 'I am here to ensure it works well, man!';
	}
}
