<?php 

    $conn = mysqli_connect("localhost", "root", "", "wad_modul4_magdalena");

    if(!$conn) {
        echo "<script>
                alert('Failed Connect into Database');
              </script>";
    }

    function regis($data){
        global $conn;

        $nama = $data['name'];
        $email = $data['email'];
        $nohp = $data['nohp'];
        $password = $data['password'];
        $konfirmasi = $data['konfirmasi'];

        $password = mysqli_real_escape_string($conn, $password);
        $konfirmasi = mysqli_real_escape_string($conn, $konfirmasi);

        //mengecek email
        $result = mysqli_query($conn, "SELECT email FROM user_magdalena WHERE email='$email'");
        
        if(mysqli_fetch_assoc($result)){
            echo "<script>
                    alert('email sudah terdaftar');
                <script>";
            
                return false;
        }

        //konfirmasi password
        if($password !== $konfirmasi){
            echo "<script>
                    alert('konfirmasi password tidak sesuai');
                </script>";
            return false;
        }

        // //enkripsi password
        // $password = password_hash($password, PASSWORD_DEFAULT);

        //insert data ke database
        $query = "INSERT INTO user_magdalena VALUES ('', '$nama', '$email', '$password', $nohp)";
        $insert = mysqli_query($conn, $query);

            return mysqli_affected_rows($conn);
    }

    function login($data){
        global $conn;

        $email = $data['email'];
        $password = $data['password'];

        $result = mysqli_query($conn, "SELECT * FROM user_magdalena WHERE email = '$email'");

        //cek usernames
        $baris = mysqli_num_rows($result);
        if ( $baris > 0 ){

            //cek password 
            $row = mysqli_fetch_assoc($result);
            // if(password_verify($password, $row['password'])){

            if($password == $row['password']){

                //set session
                $_SESSION['id'] = $row['id'];
                $_SESSION['nama'] = $row['nama'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['no_hp'] = $row['no_hp'];
                $_SESSION['login'] = true;

                //cookie
                if(isset($data['remember'])){

                    //set cookie
                    setcookie('email', "$email", time() +1200);
                    setcookie("sandi", "$password", time() +1200);
                }

                header('Location: Home1-Magdalena.php');
                return TRUE;
            }
        }
        echo "<script>
                alert('Gagal Login');
            </script>";
        
    }

    // function booking($data){

    // }
?>