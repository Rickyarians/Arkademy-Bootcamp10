<?php 


//fungsi validasi username
    function username_valid($username) 
    {
     if ($username != null ) 
        {
            if(strlen($username) < 8 )
            {
                echo 'username minimal 8 karakter - ';
                return false;
            } elseif (strpos($username, '.') == null )
            {
                echo 'username sedikitnya harus menggunakan titik - ';
                return false;
            } elseif (preg_match('@[A-Z]@', $username) != null ) 
            {
                echo 'username harus menggunakan huruf kecil  - ';
                return false;
            } else {

                echo 'username diterima - ';
                return true;
            }
            
        } else {

            echo 'username tidak Boleh Kosong - ';
            return false;
        }
    }

    // fungsi validasi password
    function password_valid($password)
    {
        $pattern = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
        if ($password != null ) 
        {
            if(preg_match('@[A-Z]@', $password) == null && preg_match('@[a-z]@', $password) == null && preg_match('@[0-9]@', $password) == null && preg_match($pattern, $password) == null)
            {
                echo 'Password Sedikitnya harus mempunyai Huruf Besar,kecil, angka dan special karakter - ';
                return false;
            } else {
                echo 'Password Diterima - ';
                return false;
            }
        } else {

            echo 'password tidak Boleh Kosong - ';
            return false;

        }
    }

    // variabel penampung 
    $username = 'lontong.aku';
    $password = 'Lontsd@2^i1';

    //menjalankan fungsi
    username_valid($username);
    password_valid($password);

?>
