<p style="text-align:center;color:green;font-size:24px">Thêm danh mục sản phẩm</p>
<form  class="" action="">
    <table class="table table-bordered">
        <table class="table table-bordered">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Mã loại</th>
                    <th scope="col"> Ảnh</th>
                    <th scope="col">Tên loại</th>
                    <th scope="col">Thao tác</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    foreach($listCategory as $danhmuc){
                        extract($danhmuc);
                        $updateCategory="index.php?act=loadCategory&id_category=".$id_category;
                        $deleteCategory="index.php?act=deleteCategory&id_category=".$id_category;
                        echo '<tr>
                                <th scope="row">'.$id_category.'</th>
                                <td><img style="height: 25px" src="../../upload/category/'.$pic_category.'"></td>
                                <td>'.$name_category.'</td>                                                       
                                <td><a href="'.$updateCategory.'"><input type="button" value="Sửa"></a> <a href="'.$deleteCategory.'"><input type="button" value="Xóa"></a></td>
                              </tr>';
                    }
                ?>
                </tbody>
            </table>
        </table>
</form>
</div>