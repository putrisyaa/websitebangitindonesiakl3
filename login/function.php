<?php
    
    $con = mysqli_connect('localhost', 'root', '', 'bangkit_indonesia');
    
    function registrasi($data){
        global $con;


        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($con, $data["password"]);
        $password2 = mysqli_real_escape_string($con, $data["password2"]);

        //cek konfirmasi password
        if($password !==$password2){
            echo "<script>
            alert('Konformasi password tidak sesuai!')
            </script>";
            return false;

        }

        $password = password_hash($password, PASSWORD_DEFAULT);
        var_dump($password); die;

    }

?>