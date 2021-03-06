<?php
namespace Admin\Controller;
class InputController extends BaseController {
    public function index(){
        $name=session('o_name');
        $this->assign('name',$name);
        $this->display();

    }
    public function input(){

    	$model=D('scoredetail');

    	if($model->create()){
            if($model->find()){
                    $model->add(I('post'));
                    $this->success('录入成功！'); 
                    exit;
            }else{
                    $this->error($model->getError());   
            }
    	}else{
    		$this->error($model->getError());
    	}
    }

    public function upload($table){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->autoSub=false;
        //$upload->maxSize   =     3145728 ;// 设置附件上传大小
        //$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './uploads/'; // 设置附件上传根目录
        //$upload->savePath  =     $dir.'/'; // 设置附件上传（子）目录
        // 上传文件 
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功

            $url='uploads/'.$info['file']['savepath'].$info['file']['savename'];
            $str=$this->score($table,$url);
            
            if ($str=='数据类型错误！') {
                   $this->error($str);
              } else {
                   $this->success($str);
              }



        }
    }
    
    //录入操作
    private function score($table,$url){

        Vendor('Classes.PHPExcel');
        $objPHPExcel = \PHPExcel_IOFactory::load($url);
        $arrExcel = $objPHPExcel->getSheet(0)->toArray();
        unlink($url);//删除上传的文件 
        $m = M($table);  
        //表头部分处理
        
        if ($table=='scoredetail') {

            foreach ($arrExcel[0] as $key) {

                $field[] = $this->order($key);
               
            }
            if (sizeof($field) < 8){
                $field[0]='xxx';
            }
                $field[8]='sc_who';
            array_shift($arrExcel);
            foreach($arrExcel as $v){
                $v[8] = session('o_name');
                $fields[] = array_combine($field,$v);//将excel的一行数据赋值给表的字段
            } 
        }else{
            foreach ($arrExcel[0] as $key) {

                $field[] = $this->order($key);
            }
                $field[3]='s_psd';
            array_shift($arrExcel);

            foreach($arrExcel as $v){
                $v[3]=$v[0];
                $fields[] = array_combine($field,$v);//将excel的一行数据赋值给表的字段
            }
        }

        //循环录入
        $str= '共'.sizeof($fields).'条数据！';
        $sum=0;
        foreach($fields as $k){
        
            if($m->add($k))
                $sum++;
        } 
        return $str.'成功添加'.$sum.'条数据！数据缺失或重复录入！';        


    }

    public function order($str){
        switch ($str) {
            //积分表字段匹配
            case '部室':
                return 'sc_union';
            case '班级':
                return 'c_name';
            case '姓名':
                return 's_name';
            case '积分事件':
                return 'sc_reason';
            case '时间':
                return 'sc_time';
            case '日常积分':
                return 'sc_number';
            case '学号':
                return 's_id';
            case '入学年份':
                return 's_matri';
            case '班级编号':
                return 'c_id';
             case '学期':
                 return 'sc_term';                                   
            default:
                # code...
                break;
        }

    } 
}