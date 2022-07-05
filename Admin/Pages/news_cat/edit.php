<?php
$id = $_GET['id'];
$newcat = prodcat_find_by_id($id);
if(isset($_POST['newscatbtn'])){
    updatenewscat($_POST['newscat'],$id);
}


?>

<div id="set_title" data-set-title="افزودن دسته بندی  جدید" ></div>

<div class="pages-wrpper">
    <h2 class="titles">ویرایش دسته بندی <?php 
        echo $newcat['newscat_title'];
    ?></h2>
    <div class="form-container">
        <form action="" method="POST">
        <div class="frm-ipt">
                <input type="text" name="newscat[title]" placeholder="عنوان دسته بندی جدید" value="<?php 
                    echo $newcat['newscat_title'];
                ?>" >
            </div>
        
            <div class="frm-ipt">
                <input type="submit" name="newscatbtn" value="ویرایش دسته بندی" >
            </div>
        </form>
    </div>
</div>

<!-- <div id="ad_modal-con" class="modal" 
data-err="
<?php
/*
    if(isset($_GET['add_m_err'])){
        $add_res = $_GET['add_m_err'];
        echo "$add_res";
    }
    else{
        echo "modal-off";
    }
    */
?>" > -->

    <!-- <div class="box" id="ad_modal-box">
        <img id="ad_err_img" src="img/error.png" alt="">
        <p id="ad_err_msg">
            prodcat is not added
        </p>
    </div> -->
</div>
