<?php

function showprodcats(){
    $db = db_config();
    $sql = "SELECT * FROM prodcat_tbl WHERE prodcat_statues='1' ";
    $sql_run =mysqli_query($db,$sql);
    $result = array();
    if($sql_run){
        while($res = mysqli_fetch_assoc($sql_run)){
            $result[] = $res;
        }
        return $result; 
    }
}

function addnewproducts($products_data,$img){
    $db = db_config();
    $dates  = date("Y-m-d H:i:s");

    $instert_query ="INSERT INTO products_tbl 
    (products_title,products_text,products_prodcat,products_date,products_img) 
    VALUES ('$products_data[title]','$products_data[text]',
    '$products_data[procat]','$dates','$img')";

    $runquery = mysqli_query($db,$instert_query);

    if($runquery){
        header("location:dashboard.php?module=products&page=add&add_m_err=no");
    }
    else{
        header("location:dashboard.php?module=products&page=add&add_m_err=yes");
    }
}

function showproducts(){
    $databse = db_config();
    $sql_query = "SELECT * FROM products_tbl";
    $sql_run = mysqli_query($databse,$sql_query);
    $results = array();
    while($res=mysqli_fetch_assoc($sql_run)){
        $results[] = $res;
    }
    return $results;
}

function showprodcat_list($id){
    $db = db_config();
    $sql = "SELECT * FROM prodcat_tbl WHERE prodcat_id='$id' ";
    $sql_run =mysqli_query($db,$sql);
    $res = mysqli_fetch_assoc($sql_run);
    return $res; 
}

function delete_uploadedFile($id_del){
    $db = db_config();
    $sql = "SELECT * FROM products_tbl WHERE products_id='$id_del' ";
    $sql_run =mysqli_query($db,$sql);
    $res = mysqli_fetch_assoc($sql_run);
    $file_path = $res['products_img'];
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

function products_delete_row($id){
    $db = db_config();
    $sql = "DELETE FROM products_tbl WHERE products_id='$id' ";
    delete_uploadedFile($id);    

    $sql_run =mysqli_query($db,$sql);
    return $sql_run; 
}

function showedit_data($id){
    $databse = db_config();
    $sql = "SELECT * FROM products_tbl WHERE products_id='$id' ";
    $sql_run = mysqli_query($databse,$sql);
    $res=mysqli_fetch_assoc($sql_run);
    return $res;
}

// products_id INT AUTO_INCREMENT,
// products_title VARCHAR(30),
// products_text TEXT,
// products_prodcat INT,
// products_date  DATETIME,
// products_img VARCHAR(150),

function editproducts($data,$img,$id){
    $databse = db_config();

    $sql_query = "UPDATE products_tbl SET 
    products_title='$data[title]' ,
    products_text='$data[text]',
    products_prodcat ='$data[procat]',
    products_img='$img'
    WHERE products_id='$id' ";

    $sql_run = mysqli_query($databse,$sql_query);
    header('location:dashboard.php?module=products&page=list');

}

?>