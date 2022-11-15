<?php
function insert_comment($id_customer, $id_product, $content_comment, $date_comment);
{
    $sql = "insert into comments(id_customer, id_product, content_comment, date_comment) values('$id_customer','$id_product','$content_comment','$date_comment')";
    pdo_execute($sql);
}

function loadall_comment($id_product)
{
    $sql = "select * from comment where 1";
    if ($id_product > 0) $sql .= " AND id_product='" . $id_product . "'";
    $sql .= " order by id_comment desc";
    $listcomment = pdo_query($sql);
    return $listcomment;
}

function delete_comment($id_comment)
{
    $sql = "delete from comments where id_comment=" . $id_comment;
    pdo_query($sql);
}
?>