<?php
$id = $_GET['id'];
$sh_data = showedit_data($id);


if(isset($_POST['productsbtn'])){

    $data = $_POST['products'];

    if($_FILES['images']['name']){
        $img_path = $sh_data['products_img'];
        $im_p_arr = explode("/",$img_path);
        $idx = count($im_p_arr);
        $maindir = $im_p_arr[$idx-2];
        unlink($img_path);
        $img = uploader("images",'../img/products/',$maindir);
    }
    else{
        $img =$sh_data['products_img'];
    }
    editproducts($data,$img,$id);
}
?>

<div id="set_title" data-set-title="افزودن محصول جدید" ></div>
<div class="pages-wrpper">
    <h2 class="titles">ویرایش محصول<?php echo " ".$sh_data['products_title'];  ?></h2>
    <div class="form-container">
        <form action="" method="POST" enctype="multipart/form-data">

            <div class="frm-ipt">
                <input type="text" name="products[title]" placeholder="عنوان محصول" value="<?php
                    echo  $sh_data['products_title']; 
                ?>">
            </div>

            <div class="frm-ipt">
                <label for="text-area">
                    متن مربوط به محصول
                </label>
                <textarea name="products[text]" id="text-area" ><?php
                    echo  $sh_data['products_text']; 
                ?></textarea>
            </div>

            <div class="frm-ipt">
                <select name="products[procat]" id="">
                    <?php
                        $rows_prodcat = showprodcats();
                        foreach ($rows_prodcat as $key) {
                            echo "<option value='$key[prodcat_id]'  " ;
                            if($key['prodcat_id']==$sh_data['products_prodcat']){
                                echo "  "." selected >";
                            }
                            else{
                                echo " >";
                            }
                            echo $key['prodcat_title']."</option>";
                        }
                    ?>
                </select>
            </div>
            
            <div class="frm-ipt">
                <img  src="<?php
                    echo $sh_data['products_img'];
                ?>" data-loc="products" alt="">
                <input type="file" name="images" id="inpt-file">  
            </div>

            <div class="frm-ipt">
                <input type="submit" name="productsbtn" value="افزودن محصول جدید">
            </div>
        </form>
    </div>
</div>