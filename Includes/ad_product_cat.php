<?php

function addprodcat($prodcat_data){

$db = db_config();
$instert_query ="INSERT INTO prodcat_tbl 
(prodcat_title,prodcat_sort,prodcat_statues) 
VALUES ('$prodcat_data[title]','$prodcat_data[sort]','$prodcat_data[status]')";
$runquery = mysqli_query($db,$instert_query);

if($runquery){
    header("location:dashboard.php?module=prod_cat&page=add&add_prodcat_err=no");
}
else{
    header("location:dashboard.php?module=prod_cat&page=add&add_prodcat_err=yes");
}
}

function prodcatlist(){
$databse = db_config();
$sql_query = "SELECT * FROM prodcat_tbl";
$sql_run = mysqli_query($databse,$sql_query);
$results = array();

while($res=mysqli_fetch_assoc($sql_run)){
    $results[] = $res;
}
return $results;
}
function prodcat_delete_row($id){
$databse = db_config();
$sql_query = "DELETE FROM prodcat_tbl WHERE prodcat_id='$id' ";
$sql_run = mysqli_query($databse,$sql_query);
return $sql_run;
}
function prodcat_find_by_id($id){
$databse = db_config();
$sql_query = "SELECT * FROM prodcat_tbl WHERE prodcat_id='$id' ";
$sql_run = mysqli_query($databse,$sql_query);
$res=mysqli_fetch_assoc($sql_run);
return $res;
}
function editprodcat($data,$id){
$databse = db_config();
$sql_query = "UPDATE prodcat_tbl SET 

prodcat_title='$data[title]' ,
prodcat_sort ='$data[sort]',
prodcat_statues='$data[status]'
WHERE prodcat_id='$id' ";

$sql_run = mysqli_query($databse,$sql_query);
header('location:dashboard.php?module=prod_cat&page=list');
}


?>