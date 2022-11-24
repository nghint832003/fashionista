<section>
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-4 gap-4 py-5">
            <?php
                $listProduct = loadall_product();
                foreach ($listProduct as $listProduct){
                    extract($listProduct);
                    echo '
                    <div>
                        <a href="index.php?act=productDetail&id_product='.$id_product.'"><img src="../upload/product/'.$pic1.'" alt=""></a>
                        <a href="">
                            <p class="hover:text-red-500">'.$name_product.'</p>
                        </a>
                        <p class="font-bold">'.$price_product.'đ</p>
                    </div>';
                }
            ?>
        </div>
    </div>
</section>
