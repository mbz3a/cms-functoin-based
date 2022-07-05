<?php

function addnewscat($newscat_data){
    $db = db_config();
    $instert_query ="INSERT INTO newscat_tbl ( newscat_title) 
    VALUES ('$newscat_data[title]')";

    $runquery = mysqli_query($db,$instert_query);

    if($runquery){
        header("location:dashboard.php?module=news_cat&page=add&add_prodcat_err=no");
    }
    else{
        header("location:dashboard.php?module=news_cat&page=add&add_prodcat_err=yes");
    }
}


function newscatlist(){
    $databse = db_config();
    $sql_query = "SELECT * FROM newscat_tbl";
    $sql_run = mysqli_query($databse,$sql_query);
    $results = array();

    while($res=mysqli_fetch_assoc($sql_run)){
        $results[] = $res;
    }
    return $results;
}

function newscat_delete_row($id){
    $databse = db_config();
    $sql_query = "DELETE FROM newscat_tbl WHERE newscat_id='$id' ";
    $sql_run = mysqli_query($databse,$sql_query);
    return $sql_run;
}

function prodcat_find_by_id($id){
    $databse = db_config();
    $sql_query = "SELECT * FROM newscat_tbl WHERE newscat_id='$id' ";
    $sql_run = mysqli_query($databse,$sql_query);
    $res=mysqli_fetch_assoc($sql_run);
    return $res;
}
function updatenewscat($data,$id){

    $databse = db_config();

    $sql_query = "UPDATE newscat_tbl SET 
    newscat_title='$data[title]' 
    WHERE newscat_id='$id' ";

    $sql_run = mysqli_query($databse,$sql_query);
    header('location:dashboard.php?module=news_cat&page=list');
}
?>