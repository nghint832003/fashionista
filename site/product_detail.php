<div class="container">
    <div class="sanpham">
        <form method="post" enctype="multipart/form-data" action="../../fashinista/index.php?act=cart">
        <div class="sanpham_left">
            <div class="sanpham_left_top">
                <?php
                extract($product)

                ?>
                <a href="#"><img id="topmain" src="../upload/product/<?= $pic1?>" alt=""></a>
                <input type="hidden" value="<?= $id_product?>" name="id_product">
                <input type="hidden" value="<?= $pic1?>" name="pic1">
            </div>
            <div class="sanpham_left_bottom">
                <img class="img" id="demo" onclick="function1();" src="../upload/product/<?= $pic1?>" alt="">
                <img class="img" id="demo1"  onclick="function2();" src="../upload/product/<?= $pic2?>" >
                <img class="img" id="demo2"  onclick="function3();" src="\../upload/product/<?= $pic3?>" alt="">
                <img class="img" id="demo3"  onclick="function4();" src="../upload/product/<?= $pic4?>" alt="">
            </div>
        </div>
        <div class="sanpham_right">
            <div class="sanpham_right_textstar">
                <a href=""><h2 class="text"><?= $name_product ?></h2></a>
                <input name="name_product" value="<?= $name_product?>" type="hidden">
                <div class="sanpham_right_star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
            </div>
            <div class="sanpham_right_price">
                <h2><?= $price_product ?></h2>
                <input type="hidden" name="price_product" value="<?= $price_product?>">
            </div>
            <div class="sanpham_right_main">

                <div class="sanpham_right_main_text01">
                    <h2><?= $des_product ?></h2>
                </div>
            </div>
            <div class="sanpham_right_bottom">
                <div class="sanpham_right_bottom_color">
<!--                    <div class="sanpham_right_bottom_color_text">-->
                        <h2>Chọn màu: </h2>
<!--                    </div>-->
                    <div class="sanpham_right_bottom_color_button">
                        <?php
                        foreach ($product_detail as $detail){
                            extract($detail); ?>
                                <input type="radio" id="<?= $color_product?>" name="color_product" value="<?= $color_product?>">
                                <label for="<?= $color_product?>"><?= $color_product?></label>
                        <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="sanpham_right_bottom_size">
                        <h2>Chọn size: </h2>
                    <div class="sanpham_right_bottom_color_button">
                            <?php
                            foreach ($product_detail as $detail){
                                extract($detail); ?>
                                <input type="radio" id="<?= $size_product?>" name="size_product" value="<?= $size_product?>">
                                <label for="<?= $size_product?>"><?= $size_product?></label>
                                <?php
                            }
                            ?>
                    </div>
                </div>

                <div class="sanpham_right_bottom_size">
                    <h2>Số lượng </h2>
                    <input type="number" name="quantity" value="1" min="1">
                </div>
                <div class="sanpham_right_bottom_dathang">

                        <input class="sanpham_right_bottom_dathang_dathang_nek" name="addtoCart" type="submit" value="THÊM VÀO GIỎ HÀNG">

                    <a href=""> <div class="sanpham_right_bottom_dathang_dathang_nekk"><h2>Mua tại cửa hàng FASHIONISTA </h2></div></a>
                </div>
            </div>
        </div>
        </form>

        <!--  -->
        <div class="cothethick">
            <h1 class="text1">Có thể bạn sẽ thích</h1>
            <div class="spnew">
                <?php
                    foreach ($load_product_category as $product){
                        extract($product);
                        echo '
                            <div class="sp01">
                                <div class="imgnek">
                                    <a href=""> <img src="../upload/product/'.$pic1.'"alt=""></a>
                                </div>
                                <a href=""><h2 class="text">'.$name_product.'</h2></a>
                                <h3>'.$price_product.'đ</h3>
                                <button type="button" class="btn btn-outline-primary">Mua hàng</button>
                            </div>
                        ';
                    }
                ?>
            </div>

        </div>
        <div class="binhluan">
            <div class="hienthibl">
                <h4 class="textbl">Bình luận(0)</h4>
                <div class="box">
                <?php
                    $listComment = loadall_comment($_GET['id_product']);
                    foreach ($listComment as $comment){
                        extract($comment);
                        echo '
                        <div class="conment">
                            <div class="conment_header">
                                <div class="avatar">
                                    <img src="../../fashinista/upload/user/'.$pic.'" alt="">
                                </div>
                                <div class="name">
                                    <h2>'.$name_customer.'</h2><br>
                                    <h6>'.$date_comment.'</h6>
                                </div>
                            </div>
                            <div class="comment_bottom">
                                <p>'.$content_comment.'</p>
                            </div>
                        </div>    
                        ';
                    }
                ?>
                </div>
            </div>
            <div class="vietbl">
                <h4>Ý kiến sản phẩm</h4>
                <form action="../../fashinista/index.php?act=sendComment" method="post" enctype="application/x-www-form-urlencoded">
                    <input type="hidden" name="id_customer" value="<?=$_SESSION['user']['id_customer'] ?>">
                    <input type="hidden" name="id_product" value="<?= $_GET['id_product']?>">
                    <textarea style="width: 100%;" name="content_comment" id="" cols="" rows="3" placeholder="Bình luận ..."></textarea>
                    <input type="submit" name="sendComment"  value="Gửi bình luận">
                </form>
            </div>
        </div>
    </div>
