<?php
include("koneksi.php");
                        //check if form subtitted, insert from data into users table.
                if(isset($_POST['Submit'])) {
                    $nama= $_POST['nama'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $level = $_POST['level'];
                    //echo{$judul};
                    // include database connection file

                    //insert user data info table 
                    $result = mysqli_query($mysqli,"INSERT INTO user(nama,username,password,level) VALUES ('$nama','$username','$password','$level')");

                    // show messeage when user added 
                    // echo "data added succesfully. <a href='index.php'>View Data Buku</as";
                    header("location:index.php");
                }
            ?>