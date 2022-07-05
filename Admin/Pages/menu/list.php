
<div class="pages-wrpper">
    <h2 class="titles">لیست منو ها</h2>
    <div class="tbl-container">
        <table>
            <thead>
                <tr>
                    <th>عنوان منو</th>
                    <th>سرگروه</th>
                    <th>لینک</th>
                    <th>ترتیب</th>
                    <th>وضعیت</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
            </thead>
                <tbody>
                    <?php
                        $all_menu = menulist();
                        foreach ($all_menu as $menu) {
                        ?>
                        <tr>
                            <td><?php echo "$menu[menu_title]"; ?></td>
                            <td><?php
                                @$get_title = menu_find_by_id($menu['menu_chid']);

                                if($menu['menu_chid']==0){
                                    echo  "ندارد";
                                }
                                else if(@$get_title['menu_title']==null){
                                    echo  "یافت نشد";
                                }
                                else{ 
                                    echo $get_title['menu_title'];
                                }
                                
                            ?></td>
                            <td><?php echo "$menu[menu_url]"; ?></td>
                            <td><?php echo "$menu[menu_sort]"; ?></td>
                            <td><?php
                                if($menu['menu_statues']==0){
                                    echo "غیر فعال" ;
                                }
                                else{
                                    
                                    echo "فعال" ;
                                }
                            ?></td>
                            <td>
                                <a href="
                                <?php 
                                    $dd = $menu['menu_id'] ;
                                    echo "dashboard.php?module=menu&page=edit&id=".$dd; ?>" >
                                    ویرایش
                                </a>
                            </td>
                            <td>
                                <a href="
                                <?php 
                                    $dd = $menu['menu_id'] ;
                                    echo "dashboard.php?module=menu&page=delete&id=".$dd; ?>
                                ">
                                    حذف
                                </a>
                            </td>
                        </tr>
                    <?php }  ?>
                </tbody>
        </table>
    </div>
</div>


<div id="set_title" data-set-title="لیست منوی جدید" ></div>