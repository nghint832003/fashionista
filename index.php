<?php
include "dao/pdo.php";
include "dao/account.php";
include "dao/category.php";
include "dao/comment.php";
include "dao/product.php";
include "./site/header.php";
$listProduct = loadall_product();
if(isset($_GET['act']) && ($_GET['act']) != ""){
    $act = $_GET['act'];
    switch ($act){
        case 'product':
            $listProduct = loadall_product();
            include './site/product.php';
            break;

        case 'productDetail':
            if(isset($_GET['id_product'])){
                $id_product = $_GET['id_product'];
                $product = loadone_product($id_product);
                $product_detail = loadone_product_detail($id_product);
                extract($product);
                $category = $id_category;
                $load_product_category = load_products_category($id_product,$category);
            }
            include 'site/product_detail.php';
            break;
        default:
            include 'site/index.php';
            break;
    }

}else {
    include 'site/home.php';
}
include 'site/footer.php';
?>