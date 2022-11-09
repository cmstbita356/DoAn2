<?php
        session_start();
        if(isset($_SESSION['username']))
        {
            $str = 
            "
                <button id='dang_binhluan' type='button' onclick='TaoComment()' class='btn-binhluan btn btn-success ml-5' style='font-size: 20px; border-radius: 10px;'>
                    Đăng
                </button>
            ";
        }
        else
        {
            $str = 
            "
                <button id='dang_binhluan' type='button' onclick='TaoComment()' class='btn-binhluan btn btn-success ml-5' style='font-size: 20px; border-radius: 10px;' disabled>
                    Đăng
                    <span class='tooltiptext'>Vui lòng đăng nhập</span>
                </button>
            ";
        }
        foreach ($ListComment as $comment)
        {
            echo
            "
                <div class='media'>
                    <img src='../../images/user.png' alt='img' class='p-3 ml-2 rounded-circle' style='width:80px'>
                    <div class='media-body p-3' style='font-size: 20px;'>
                        <h3> <strong>$comment->username</strong> <small> <em>$comment->date</em></small></h3>
                        <p>$comment->msg</p>
                    </div>
                </div>
            ";
        }
        echo 
        "
            <form>
                <img src='../../images/user.png' alt='img' class='p-3 ml-2 rounded-circle' style='width:80px; display: inline-block'>
                <input id ='msg_binhluan' type='text' placeholder='Bình luận' name='comment'>
                $str
            </form>
        ";
        echo "
    <div style='display: inline-flex; background-color: #A3A2A0; font-size: 20px; margin-left: 45%; margin-top: 10px;'>
    Page: ";
    for($i = 1; $i <= $total; $i++)
    {
        echo
        "
            <a type='button' style='color: black; margin-left: 5px;' onclick='XemComment($i)'>$i</a>|
        ";
    }
    echo "</div>"
?>