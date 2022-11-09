<?php
    include_once "db_module.php";
    include_once "Chitietdh.php";
    class ChitietdhModel
    {
        function Count($id)
        {
            $link=null;
            ConnectDatabase($link);
            $result = ExecuteQuery($link, "select Count(*) from tbl_chitietdh where id_dh = $id");
            $row = mysqli_fetch_row($result);
            return $row[0];
        }
        function GetList($id, $from, $size)
        {
            $link=null;
            ConnectDatabase($link);
            $result = ExecuteQuery($link, "select * from tbl_chitietdh where id_dh = $id limit $from, $size");
            $data = array();
            while($rows = mysqli_fetch_assoc($result))
            {
                $dh = new Chitietdh($rows['id_dh'], $rows['id_product'], $rows['price'], $rows['soluong']);
                array_push($data, $dh);
            }
            ClearMemory($link, $result);
            return $data;
        }
    }
?>