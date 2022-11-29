<section>
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-4 gap-4 py-5">
            <?php
            $listProduct = loadall_product();
            foreach ($listProduct as $listProduct){
                extract($listProduct);
                $link = "index.php?act=productDetail&id_product=".$id_product;
//                echo '
//                    <div>
//                        <a href="'.$link.'"><img src="../upload/product/'.$pic1.'" alt=""></a>
//                        <a href="">
//                            <p class="hover:text-red-500">'.$name_product.'</p>
//                        </a>
//                        <p class="font-bold">'.$price_product.'đ</p>
//                    </div>';
                echo '
                <div class="block">
                    <a href="'.$link.'"><img src="../upload/product/'.$pic1.'" class="" alt=""></a>
                    <div class="hidden ">
                        <div class="grid grid-cols-2 gap-1 ">
                            <div class="bg-red-600 flex px-3 py-2">
                                <a href="'.$link.'"><i class="fa fa-cart-plus px-1"></i></a>
                                <a href="">
                                    <p class="text-white px-2">Đặt hàng</p>
                                </a>
                            </div>
                            <div class="bg-red-600 flex px-1 py-2">
                                <a href="'.$link.'"><i class="fa fa-eye px-1"></i></a>
                                <a href="'.$link.'">
                                    <p class="text-white px-2">Xem chi tiết</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="z-10">
                            <a href="">
                                <p class="hover:text-red-500">'.$name_product.'</p>
                            </a>
                            <p class="font-bold">'.$price_product.'đ</p>
                        </div>
                    </div>
                
                </div>';
            }
            ?>
        </div>
    </div>
</section>
