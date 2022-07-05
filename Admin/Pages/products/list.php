
<div class="pages-wrpper">
    <h2 class="titles">لیست محصولات</h2>
    <div class="tbl-container">
        <table>
            <thead>
                <tr>
                    <th>عنوان محصول</th>
                    <th>متن</th>
                    <th>دسته بندی محصول</th>
                    <th>تاریخ</th>
                    <th>عکس</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
            </thead>
                <tbody>
                <?php
                    $rows = showproducts();
                    foreach ($rows as $key){   
                ?>
                    <tr>
                        <td><?php echo $key['products_title']; ?></td>
                        <td><?php echo $key['products_text']; ?></td>
                        <td><?php 
                            $id = $key['products_prodcat'];                
                            $results = showprodcat_list($id);
                            // vardump2($results);
                            echo $results['prodcat_title'];
                        ?></td>
                        <td class="dir-left" ><?php echo $key['products_date']; ?></td>
                        <td class="tbls-img" >
                            <img src="<?php echo $key['products_img']; ?>" data-loc="products" alt="image">
                        </td>
                        <td class="dir-left" >
                            <a href="
                                <?php 
                                    $dd = $key['products_id'] ;
                                    echo "dashboard.php?module=products&page=edit&id=".$dd; 
                                ?>"
                            >
                                ویرایش
                            </a>
                        </td>
                        <td class="dir-left" >
                            <a href="
                                <?php 
                                    $dd = $key['products_id'] ;
                                    echo "dashboard.php?module=products&page=delete&id=".$dd; 
                                ?>"
                            >
                                حذف
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
        </table>
    </div>
</div>


<div id="set_title" data-set-title="لیست دسته بندی ها" ></div>