<?php
namespace Admin\Controller;
class ClassController extends BaseController {
    public function index(){

        $this->display();

    }
    public function input(){

    	$model=D('class');
    	if($model->create(I('post.'))){
            if($model->find()){
                    if ( $model->add(I('post.'))) {

                       $this->success('录入成功！');
                    } else {
                       $this->error('录入失败！'); 
                    }                   
                    exit;
            }else{
                    $this->error($model->getError());   
                 }

    	}else{
    		$this->error($model->getError());
    	}
    }
}