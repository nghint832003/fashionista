<p style="text-align:center;color:green;font-size:24px">Chi tiết sản phẩm</p>
<form  class="" action="">
    <table class="table table-bordered">
        <table class="table table-bordered">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Mã chi tiết sản phẩm</th>
                    <th scope="col"> Mã sản phẩm</th>
                    <th scope="col">Màu sản phẩm</th>
                    <th scope="col">Kích cỡ sản phẩm</th>
                    <th scope="col">Số lượng sản phẩm</th>
                    <th scope="col">Thao tác</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($listProductDetail as $ProductDetail){
                    extract($ProductDetail);
                    $updateProductDetail="index.php?act=loadProductDetail&id_pd=".$id_pd;
                    $deleteProductDetail="index.php?act=deleteProductDetail&id_pd=".$id_pd;
//                    $deleteCategory="index.php?act=deleteCategory&id_category=".$id_category;
                    echo '<tr>
                                <th scope="row">'.$id_pd.'</th>
                                
                                <td>'.$id_product.'</td>   
                                <td>'.$color_product.'</td>                                                       
                                <td>'.$size_product.'</td>                                                       
                                <td>'.$quantity_product.'</td>                                                                                                                                           
                                <td><a href="'.$updateProductDetail.'"><input type="button" value="Sửa"></a> <a href="'.$deleteProductDetail.'"><input type="button" value="Xóa"></a></td>
                              </tr>';
                }
                ?>
                </tbody>
            </table>
        </table>
</form>
</div>