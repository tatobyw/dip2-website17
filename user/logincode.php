<?php session_start(); ?>
<?php include("../admin/config/dbcon.php");?>
<?php
    if(isset($_POST['login_btn'])){
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $password = mysqli_real_escape_string($con,$_POST['password']);

        $login_query ="SELECT * FROM users WHERE email='$email' AND password='$password' ";
        $login_query_run = mysqli_query($con,$login_query);

        if(mysqli_num_rows($login_query_run)>0){
            foreach($login_query_run as $data){
                $user_id = $data['id'];
                $user_fname = $data['fname'];
                $user_lname = $data['lname'];
                $user_name = $user_fname." ".$user_lname;
                $user_email = $data['email'];
                $role_as=$data['role_as'];
            }
            $_SESSION['auth'] = true;
            $_SESSION['auth_role'] = "$role_as"; //1=admin
            $_SESSION['user_name'] = $user_name; 
            $_SESSION['auth_user'] = [
                'user_id'=>$user_id,
                'user_name'=>$user_name,
                'user_email'=>$user_email,
            ];
            if($_SESSION['auth_role'] == '1'){ 
                $_SESSION['message'] = "ยินดีเข้าสู่ผู้ดูแลระบบ"; //1=admin
                header("Location: ../admin/index.php");
                exit(0);
            }
            elseif($_SESSION['auth_role'] == '2'){
                $_SESSION['message'] = "ยินดีเข้าสู่ระบบสมาชิก"; //2=user
                header("Location: index.php");
                exit(0);
            }
            else{
                $_SESSION['message'] = "อีเมล์หรือรหัสผ่านของคุณไม่สามารถเข้าสู่ระบบได้2"; //2=user
                header("Location: login.php");
                exit(0);
            }
        }
        else{
            $_SESSION['message'] = "อีเมล์หรือรหัสผ่านของคุณไม่สามารถเข้าสู่ระบบได้";
            header("Location:login.php");
            exit(0);
        }
    }
    else{
        $_SESSION['message'] = "คุณไม่สามารถเข้าสู่ระบบได้";
        header("Location:login.php");
        exit(0);
    }

?>