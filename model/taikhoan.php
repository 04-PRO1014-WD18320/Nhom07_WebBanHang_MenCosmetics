<?php 
    function insert_taikhoan($user,$pass,$email){
        $sql= "insert into nguoidung(user, pass ,email) values( '$user','$pass','$email')";
        // echo $sql;
        // die();
        pdo_execute($sql);
    }

    function check_user($user,$pass){
        $sql = "select *  from nguoidung where user='".$user."'AND pass='".$pass."'";
        $sp = pdo_query_one($sql);
        return  $sp;
    }

    function check_email($email){
        $sql = "select *  from nguoidung where email='".$email."'";
        $sp = pdo_query_one($sql);
        return  $sp;
    }

?>