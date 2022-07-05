<?php
function addmenu($menu_data){
    $db = db_config();
    $instert_query ="INSERT INTO menu_tbl 
    (menu_title,menu_url,menu_sort,menu_statues,menu_chid) 
    VALUES ('$menu_data[title]','$menu_data[url]',
    '$menu_data[sort]','$menu_data[status]','$menu_data[chid]')";
    $runquery = mysqli_query($db,$instert_query);

    if($runquery){
        header("location:dashboard.php?module=menu&page=add&add_m_err=no");
    }
    else{
        header("location:dashboard.php?module=menu&page=add&add_m_err=yes");
    }
}

function chid_menu_sub(){
    $databse = db_config();
    $sql_query = "SELECT * FROM menu_tbl WHERE menu_chid='0' ";
    $sql_run = mysqli_query($databse,$sql_query);
    $results = array();

    while($res=mysqli_fetch_assoc($sql_run)){
        $results[] = $res;
    }
    return $results;
}

function menulist(){
    $databse = db_config();
    $sql_query = "SELECT * FROM menu_tbl ";
    $sql_run = mysqli_query($databse,$sql_query);
    $results = array();

    while($res=mysqli_fetch_assoc($sql_run)){
        $results[] = $res;
    }
    return $results;
}

function menu_find_by_id($id){
    $databse = db_config();
    $sql_query = "SELECT * FROM menu_tbl WHERE menu_id='$id' ";
    $sql_run = mysqli_query($databse,$sql_query);
    $res=mysqli_fetch_assoc($sql_run);
    return $res;
}

function menu_delete_row($id){
    $databse = db_config();
    $sql_query = "DELETE FROM menu_tbl WHERE menu_id='$id' ";
    $sql_run = mysqli_query($databse,$sql_query);
    return $sql_run;
}

function editmenu($data,$id){
    $databse = db_config();

    $sql_query = "UPDATE menu_tbl SET 
    menu_title='$data[title]' ,
    menu_url='$data[url]',
    menu_sort ='$data[sort]',
    menu_statues='$data[status]',
    menu_chid='$data[chid]'
    WHERE menu_id='$id' ";

    $sql_run = mysqli_query($databse,$sql_query);
    header('location:dashboard.php?module=menu&page=list');
    // echo $id;die;

}

function main_menulist(){
    $databse = db_config();
    $sql_query = "SELECT * FROM menu_tbl  WHERE menu_chid='0' AND menu_statues='1' ";
    $sql_run = mysqli_query($databse,$sql_query);
    $results = array();

    while($res=mysqli_fetch_assoc($sql_run)){
        $results[] = $res;
    }
    return $results;
}

function sub_menulist($id){

    $databse = db_config();
    $sql_query = "SELECT * FROM menu_tbl  WHERE menu_chid='$id' AND menu_statues='1' ";
    $sql_run = mysqli_query($databse,$sql_query);
    $results = array();

    if(mysqli_num_rows($sql_run)>0){
        while($res=mysqli_fetch_assoc($sql_run)){
            $results[] = $res;
        }
        return $results;
    }
    else{
        return 0;
    }
}

?>