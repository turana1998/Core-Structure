<?php
if (isset($_POST["edit_sub_cat"])) {
       $date = date('Y-m-d H:i:s');
       $column = '
         title=:title,
         updated_at=:updated_at
       ';
        $whr="where id=:id";
        $arr = [
            "title" => $_POST["title"],
            "id"=>$_POST["id"],
            "updated_at"=>$date
        ];
        $CRUD->UPDATE("subcategory",$column,$whr,$arr) ?
            header("Location:index.php?link=subcategory-list&status=ok"):
            header("Location:index.php?link=subcategory-list&status=no");


}
