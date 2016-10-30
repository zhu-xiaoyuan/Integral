<?php
namespace Admin\Controller;
class ImportController extends BaseController {
    public function index(){
        $this->display();

    } 

    public function student(){
        $filetmpname = "G:/AMP/Apache24/htdocs/Integral/Public/data/jk166.xlsx";
        Vendor('Classes.PHPExcel');
        $objPHPExcel = \PHPExcel_IOFactory::load($filetmpname);
        $arrExcel = $objPHPExcel->getSheet(0)->toArray();
        //删除不要的表头部分
        array_shift($arrExcel);
        //查询数据库的字段
        $m = M('student');
        $fieldarr = $m->query("describe tp_student");
        foreach($fieldarr as $v){
            $field[] = $v['Field'];
        }
        dump($field);
        //array_shift($field);//删除自动增长的ID        
        //循环给数据字段赋值
        foreach($arrExcel as $v){
            $fields[] = array_combine($field,$v);//将excel的一行数据赋值给表的字段
        } 
         dump($fields);
        //循环录入
        foreach($fields as $k){
            $m->add($k);
        } 
    }

    public function score(){
        $filetmpname = "C:/Users/blackshh/Desktop/jk166.xlsx";
        Vendor('Classes.PHPExcel');
        $objPHPExcel = \PHPExcel_IOFactory::load($filetmpname);
        $arrExcel = $objPHPExcel->getSheet(0)->toArray();
        //删除不要的表头部分
        array_shift($arrExcel);
        dump($arrExcel);
        //查询数据库的字段
        $m = M('scoredetail');
        $fieldarr = $m->query("describe tp_scoredetail");
        dump();
        foreach($fieldarr as $v){
            $field[] = $v['Field'];
        }
        dump($field);
        //array_shift($field);//删除自动增长的ID        
        //循环给数据字段赋值
        foreach($arrExcel as $v){
            $v[3]=floatval($v[3]);
            $v[5]=intval($v[5]);
            $fields[] = array_combine($field,$v);//将excel的一行数据赋值给表的字段
        } 
         dump($fields);
        //循环录入
        foreach($fields as $k){
            $m->add($k);
        } 
    }
}