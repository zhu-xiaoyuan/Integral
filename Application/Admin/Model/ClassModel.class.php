<?php 
namespace Admin\Model;
use Think\Model;
class ClassModel  extends Model{
	protected $_validate =array(
		array('c_id','require','班级编号不能为空'),
		array('c_name','require','班级名称不能为空！'), 
	);	
}