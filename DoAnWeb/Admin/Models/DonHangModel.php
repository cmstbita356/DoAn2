<?php
    include_once "db_module.php";
    include_once "DonHang.php";
    class DonHangModel
    {
        function CountAll()
        {
            $link=null;
            ConnectDatabase($link);
            $result = ExecuteQuery($link, "select Count(*) from tbl_donhang");
            $row = mysqli_fetch_row($result);
            return $row[0];
        }
        function GetList($from, $size)
        {
            $link=null;
            ConnectDatabase($link);
            $result = ExecuteQuery($link, "select * from tbl_donhang where status = 1 limit $from, $size");
            $data = array();
            while($rows = mysqli_fetch_assoc($result))
            {
                $dh = new DonHang($rows["id"], $rows["id_user"], $rows["thanhtien"], $rows["date"]);
                array_push($data, $dh);
            }
            ClearMemory($link, $result);
            return $data;
        }
        function ChangeStatus($id)
        {
            $link=null;
            ConnectDatabase($link);
            ExecuteQuery($link, "update tbl_donhang set status = 0 where id = $id");
        }
    }
?>