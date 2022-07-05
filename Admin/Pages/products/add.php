<?php
if(isset($_POST['productsbtn'])){
    $data = $_POST['products'];
    $foldername = "products-".rand();
    
    $img = uploader('images','../img/products/',$foldername);
    addnewproducts($data,$img);
}


?>

<div id="set_title" data-set-title="افزودن محصول جدید" ></div>

<div class="pages-wrpper">
    <h2 class="titles">افزودن محصول جدید</h2>
    <div class="form-container">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="frm-ipt">
                <input type="text" name="products[title]" placeholder="عنوان محصول">
            </div>
            <div class="frm-ipt">
                <label for="text-area">
                    متن مربوط به محصول
                </label>
                <textarea name="products[text]" id="text-area" ></textarea>
            </div>
            <div class="frm-ipt">
                <select name="products[procat]" id="">
                    <?php
                        $rows_prodcat = showprodcats();
                        foreach ($rows_prodcat as $key) {
                            echo "<option value='$key[prodcat_id]'>$key[prodcat_title]</option>";
                        }
                    ?>
                </select>
            </div>
            
            <div class="frm-ipt">
                <input type="file" name="images" id="inpt-file">  
            </div>
            

            <div class="frm-ipt">
                <input type="submit" name="productsbtn" value="افزودن محصول جدید">
            </div>
            







        </form>
    </div>
</div>