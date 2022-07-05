<?php
if(isset($_POST['newscatbtn'])){
    addnewscat($_POST['newscat']);
}


?>

<div id="set_title" data-set-title="افزودن دسته بندی  جدید" ></div>

<div class="pages-wrpper">
    <h2 class="titles">  افزودن دسته بندی ی جدید خبر</h2>
    <div class="form-container">
        <form action="" method="POST">
        <div class="frm-ipt">
                <input type="text" name="newscat[title]" placeholder="عنوان دسته بندی جدید" >
            </div>
        
            <div class="frm-ipt">
                <input type="submit" name="newscatbtn" value="افزودن دسته بندی ی جدید" >
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
