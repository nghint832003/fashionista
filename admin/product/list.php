<p style="text-align:center;color:green;font-size:24px">Danh sách sản phẩm</p>
<form  class="" action="">
    <table class="table table-bordered">
        <table class="table table-bordered">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Mã sản phẩm</th>
                    <th scope="col">Mã loại</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col"> Ảnh</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Lượt xem</th>
                    <th scope="col">Giá sản phẩm</th>
                    <th scope="col">Thao tác</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($listProduct as $product){
                    extract($product);
                    $updateProduct="index.php?act=loadProduct&id_product=".$id_product;
                    $deleteProduct="index.php?act=deleteProduct&id_product=".$id_product;
                    $listProductDetail = "index.php?act=listDetailProduct&id_product=".$id_product;
                    echo '<tr>
                                <th scope="row">'.$id_product.'</th>
                                <th scope="row">'.$id_category.'</th>
                                <th scope="row">'.$name_product.'</th>
                                <td><img src=/upload/product/"'.$pic1.'"></td>
                                <th scope="row">'.$des_product.'</th>
                                <th scope="row">'.$view_product.'</th>
                                <th scope="row">'.$price_product.'</th>                                                    
                                <td><a href="'.$listProductDetail.'"><input type="button" name="listDetailPro" value="Chi tiết"></a>
                                <a href="'.$updateProduct.'"><input type="button" value="Sửa"></a>
                                <a href="'.$deleteProduct.'"><input type="button" value="Xóa"></a></td>
                              </tr>';
                }
                ?>
                </tbody>
            </table>
        </table>
</form>
</div>