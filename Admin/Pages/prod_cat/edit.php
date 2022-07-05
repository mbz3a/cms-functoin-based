<?php
    $id = $_GET['id'];
    $row = prodcat_find_by_id($id);

    if(isset($_POST['prodcatbtn'])){
        $data = $_POST['prodcat'];
        editprodcat($data,$id);
    }
?>


<div id="set_title" data-set-title="ویرایش دسته بندی  جدید" ></div>

<div class="pages-wrpper">
    <h2 class="titles">ویرایش دسته بندی ی جدید</h2>
    <div class="form-container">
        <form action="" method="POST">
            <div class="frm-ipt">
                <input type="text" name="prodcat[title]" value="<?php 
                    echo $row['prodcat_title'];
                ?>" placeholder="عنوان دسته بندی " >
            </div>
            <h3>وضعیت نمایشس</h3>
            <div class="radio-container">

                <input type="radio" name="prodcat[status]"  
                <?php 
                    $set_s =$row['prodcat_statues'];
                    settype($set_s, "integer");
                    if($set_s==0){ echo 'checked' ;}
                ?> 
                id="prodcat-status1" value="0" />

                <label for="prodcat-status1"> غیر فعال</label>

            </div>
            <div class="radio-container">
                <input type="radio" name="prodcat[status]"  

                <?php 
                    $set_s2 =$row['prodcat_statues'];
                    settype($set_s2, "integer");
                    if($set_s2==1){ echo 'checked' ;}
                ?>

                id="prodcat-status2" value="1" />
                <label for="prodcat-status2">فعال</label>
            </div>
            <div class="frm-ipt">
                <input type="text" name="prodcat[sort]"
                value="<?php 
                    echo $row['prodcat_sort'];
                ?>"   placeholder="ترتیب بر اساس" >
            </div>
            <div class="frm-ipt">
                <input type="submit" name="prodcatbtn" value="ویرایش دسته بندی ی جدید" >
            </div>
        </form>
    </div>
</div>

