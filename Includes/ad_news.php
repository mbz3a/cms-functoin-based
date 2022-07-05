<?php

function shownewscats(){
    $db = db_config();
    $sql = "SELECT * FROM newscat_tbl ";
    $sql_run =mysqli_query($db,$sql);
    $result = array();
    if($sql_run){
        while($res = mysqli_fetch_assoc($sql_run)){
            $result[] = $res;
        }
        return $result; 
    }
}

function addnew_news($news_data,$img){

    $db = db_config();
    $dates  = date("Y-m-d H:i:s");
    $instert_query ="INSERT INTO news_tbl 
    (news_title,news_text,news_newscat,news_date,news_img) 
    VALUES ('$news_data[title]','$news_data[text]',
    '$news_data[procat]','$dates','$img')";

    $runquery = mysqli_query($db,$instert_query);

    if($runquery){
        header("location:dashboard.php?module=news&page=add&add_m_err=no");
    }
    else{
        header("location:dashboard.php?module=news&page=add&add_m_err=yes");
    }
}

function shownews(){
    $databse = db_config();
    $sql_query = "SELECT * FROM news_tbl";
    $sql_run = mysqli_query($databse,$sql_query);
    $results = array();
    while($res=mysqli_fetch_assoc($sql_run)){
        $results[] = $res;
    }
    return $results;
}

function shownewscat_list($id){
    $db = db_config();
    $sql = "SELECT * FROM newscat_tbl WHERE newscat_id='$id' ";
    $sql_run =mysqli_query($db,$sql);
    $res = mysqli_fetch_assoc($sql_run);
    return $res; 
}

function delete_uploadedFile($id_del){

    $db = db_config();
    $sql = "SELECT * FROM news_tbl WHERE news_id='$id_del' ";
    $sql_run =mysqli_query($db,$sql);
    $res = mysqli_fetch_assoc($sql_run);
    $file_path = $res['news_img'];
    $file_path_arr = explode("/",$file_path);
    $indx = count($file_path_arr);

    $dir_name = "../".$file_path_arr[$indx-4]."/".$file_path_arr[$indx-3]."/".$file_path_arr[$indx-2];

    if(file_exists($file_path)){
        unlink($file_path);
    }
    if(file_exists($dir_name)){
        rmdir($dir_name);
    }
}

function news_delete_row($id){
    $db = db_config();
    $sql = "DELETE FROM news_tbl WHERE news_id='$id' ";
    delete_uploadedFile($id);    

    $sql_run =mysqli_query($db,$sql);

    return $sql_run; 
}

function showedit_data($id){
    $databse = db_config();
    $sql = "SELECT * FROM news_tbl WHERE news_id='$id' ";
    $sql_run = mysqli_query($databse,$sql);
    $res=mysqli_fetch_assoc($sql_run);
    return $res;
}

// // news_id INT AUTO_INCREMENT,
// // news_title VARCHAR(30),
// // news_text TEXT,
// // news_newscat INT,
// // news_date  DATETIME,
// // news_img VARCHAR(150),

function editnews($data,$img,$id){
    $databse = db_config();

    $sql_query = "UPDATE news_tbl SET 
    news_title='$data[title]' ,
    news_text='$data[text]',
    news_newscat ='$data[procat]',
    news_img='$img'
    WHERE news_id='$id' ";

    $sql_run = mysqli_query($databse,$sql_query);
    header('location:dashboard.php?module=news&page=list');

}

?>