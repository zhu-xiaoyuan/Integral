<?php
namespace Admin\Controller;
class ClassController extends BaseController {
    public function index(){
        $this->display();

    }
    public function input(){

    	$model=D('scoredetail');
        $arr=I('post.');
        $arr['sc_time']=strtotime(I('post.sc_time'));
    	if($model->create(I('post.'))){
            if($model->find()){
                    $model->add($arr);
                    $this->success('录入成功！'); 
                    exit;
            }else{
                    $this->error($model->getError());   
                 }


    	}else{
    		$this->error($model->getError());
    	}
    }
}