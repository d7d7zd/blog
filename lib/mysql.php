<?php
require_once "../config/mysql.config.php";
//var_dump(connect());  
//cnnect mysql
function connect(){
	$link = mysqli_connect('localhost', 'root', '123456', 'blog');
	mysqli_set_charset($link, "utf8");
	return $link;
}

//insert into data back id
function insert($table, $array){
	$link = connect();
	$keys =join(",", array_keys($array));
	$values = "'".join("','", array_values($array))."'";
	echo $values;
	$sql = "insert into {$table} ({$keys}) values($values)";
	$num = mysqli_query($link, $sql);
	mysqli_close($link);
	return $num;
}
//$num =  insert('article', array('title'=>'goodda', 'content'=>'onkdml\n fine'));
//var_dump($num);
//delete data
function delete($table, $where = null){
	$where = $where==null? null :" where ".$where;
	$link = connect();	
	$sql = "delete from {$table} {$where}";
	//echo $sql;
	$num = mysqli_query($link, $sql);
	mysqli_close($link);
	return $num;
}   

//select data
function select($table, $where=null, $isAll=false){
	$where =$where==null ? null : " where ".$where;
	$link = connect();
	$sql = "select *from {$table} {$where}";
	$res = mysqli_query($link, $sql);
	if($isAll == true){ 
		while($row =mysqli_fetch_assoc($res)){
			$rows[] = $row;
		}
		mysqli_close($link);
		return $rows;				
	}else {
		$row= mysqli_fetch_assoc($res);		
		mysqli_close($link);
		return $row;
	}
}

//select data all
function selectAll($table, $where=null){
	return select($table, $where, true);
}

//update data
function update($table, $array, $where=null){
	$where = $where ==null ? null : " where ".$where;
	$link = connect();
	$str = '';
	foreach($array as $key=>$value){
		if($str == ''){
			$step = '';
		} else {
			$step = ',';
		}
		$str = $step.$key."='".$value."'";
	}
	$sql = "update {$table} set {$str}".$where;
	echo $sql;
	$num = mysqli_query($link, $sql);
	mysqli_close($link);
	return $num; 
}

//测试代码
//var_dump(update("admin", array('password'=>'555'),"dname='root'"));
//var_dump(select("admin"));
//var_dump(selectAll("admin"));
//var_dump(delete("admin", "dname='root'"));
//var_dump($link = connect());
//$link = connect();
//if($link){
//	echo "get it";
//}
//echo insert("admin", array('dname'=>'zhang', 'password'=>'6063078'));
