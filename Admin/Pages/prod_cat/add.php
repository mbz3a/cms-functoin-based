<?php
if(isset($_POST['prodcatbtn'])){
    addprodcat($_POST['prodcat']);
}


?>

<div id="set_title" data-set-title="افزودن دسته بندی  جدید" ></div>

<div class="pages-wrpper">
    <h2 class="titles">افزودن دسته بندی ی جدید</h2>
    <div class="form-container">
        <form action="" method="POST">
            <div class="frm-ipt">
                <input type="text" name="prodcat[title]" placeholder="عنوان دسته بندی " >
            </div>
            <h3>وضعیت نمایشس</h3>
            <div class="radio-container">
                <input type="radio" name="prodcat[status]" id="prodcat-status1" value="0">
                <label for="prodcat-status1"> غیر فعال</label>
            </div>
            <div class="radio-container">
                <input type="radio" name="prodcat[status]" id="prodcat-status2" value="1">
                <label for="prodcat-status2">فعال</label>
            </div>
            <div class="frm-ipt">
                <input type="text" name="prodcat[sort]" placeholder="ترتیب بر اساس" >
            </div>
            <div class="frm-ipt">
                <input type="submit" name="prodcatbtn" value="افزودن دسته بندی ی جدید" >
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
