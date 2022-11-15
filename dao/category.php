<?php
function insert_category($name_category, $pic_category){
    $sql="insert into category(name_category,pic_category) values('$name_category', '$pic_category')";
    pdo_execute($sql);
}

function delete_category($id_category){
    $sql="delete from category where id_category=".$id_category;
    pdo_query($sql);
}

function loadall_category(){
    $sql="select * from category order by id_category desc";
    $list_category=pdo_query($sql);
    return $list_category;
}

function loadone_category($id_category){
    $sql="select * from loai where ma_loai=".$id_category;
    $category=pdo_query_one($sql);
    return $category;
}

function update_category($id_category,$name_category,$pic_category){
    $sql="update category set name_category='".$name_category."', pic_category ='".$pic_category."' where ma_loai=".$ma_loai;
    pdo_execute($sql);
}
?>