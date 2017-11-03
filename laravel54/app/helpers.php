<?php
//找子分类，递归方法
function getTreeData($res,$parent=0,$s=''){
    static $array = array();
    foreach($res as $k=>$v){
        if($v['cate_pid'] == $parent){
            $v['s'] = $s;
            $array[] = $v;
            getTreeData($res,$v['id'],$v['s'].'&nbsp;&nbsp;&nbsp;&nbsp;');
        }
    }
    return $array;
}