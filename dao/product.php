<?php
function insert_product($name_product, $id_category, $pic1, $pic2, $pic3, $pic4, $des_product, $date_product,$price_product)
{
    $sql = "insert into products(name_product, id_category, pic1, pic2, pic3, pic4, des_product, date_product,price_product)
     values('$name_product','$id_category','$pic1','$pic2','$pic3','$pic4','$des_product','$date_product','$price_product')";
    pdo_execute($sql);
}

function insert_product_detail($id_product,$color_product,$size_product,$quantity_product)
{
    $sql = "insert into product_detail(id_product,color_product,size_product,quantity_product)
     values('$id_product','$color_product','$size_product','$quantity_product')";
    pdo_execute($sql);
}

function delete_products($id)
{
    $sql = "delete from products where id_product=" . $id;
    $sql1 = "delete from product_detail where id_product=" . $id;
    pdo_query($sql);
    pdo_query($sql1);
}

function delete_products_detail($id)
{
    $sql = "delete from product_detail where id_product=" . $id;
    pdo_query($sql);
}

function loadall_products()
{
    $sql = "select * from products";
    $listproducts = pdo_query($sql);
    return $listproducts;
}

function loadall_product_detail()
{
    $sql = "select * from product_detail";
    $listproductsDetail = pdo_query($sql);
    return $listproductsDetail;
}

function search_products($name_product, $id_categoryy)
{
    $sql = "select * from products where 1";
    if ($name_product != "") {
        $sql .= " and name_product like '%" . $name_product . "%'";
    }
    if ($category > 0) {
        $sql .= " and id_category = '" . $id_category . "'";
    }
    $sql .= " order by id_category desc";
    $listproduct = pdo_query($sql);
    return $listproduct;
}

function loadone_product($id)
{
    $sql = "select * from products where id_product=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}

function loadone_product_detail($id)
{
    $sql = "select * from product_detail where id_product=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}

function load_products_category($id_product, $id_category)
{
    $sql = "select * from san_pham where ma_loai='" . $id_category . "' AND ma_sp <> " . $id_product;
    $listproduct = pdo_query($sql);
    return $listproduct;
}
?>