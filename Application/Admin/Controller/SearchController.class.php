<?php
/**
 * Created by PhpStorm.
 * User: feifei
 * Date: 2016/10/24
 * Time: 下午1:14
 */
namespace Admin\Controller;
use       Think\Controller;
header('ManegeController.class.php');
class SearchController extends  BaseController{

    function _empty($id){

        $is_num = is_numeric($id);
        if($is_num){
            echo $id;
            $info = $this->get_score_by_id($id);
            dump($info);
        }else{
            echo '非数字';
        }
    }
    function get_score_by_id($id){
    	$manage = new ManageController();

    	$model = M('scoredetail');
    	if (!empty($id)) {
    		if ($manage->student_is_exist($id)) {
    			$info = $model->where('s_id='.'"'.$id.'"')->select();
    			
    			return $info;
    		} 
    	}

    }
}
