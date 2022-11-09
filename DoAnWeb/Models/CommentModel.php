<?php
    include_once "Comment.php";
    include_once "db_module.php";

    class CommentModel
    {
        public function Count($id)
        {
            $link = null;
            ConnectDatabase($link);
            $result_count = ExecuteQuery($link, "select count(*) from tbl_comment where id_product = $id");
            $row = mysqli_fetch_row($result_count);
            return $row[0];
        }
        public function CreateComment($comment, $id)
        {
            $link = null;
            ConnectDatabase($link);
            ExecuteNonQuery($link, "insert into tbl_comment (username, msg, date, id_product) values ('$comment->username', '$comment->msg', '".$comment->date."', $id)");
        }
        public function GetListComments($id, $from, $size)
        {
            $link = null;
            ConnectDatabase($link);
            $result = ExecuteQuery($link, "select * from tbl_comment where id_product = $id limit $from, $size");
            $data = array();
            while($rows = mysqli_fetch_assoc($result))
            {
                $comment = new Comment($rows["username"], $rows["msg"], $rows["date"]);
                array_push($data, $comment);
            }
            ClearMemory($link, $result);
            return $data;
        }
    }
?>