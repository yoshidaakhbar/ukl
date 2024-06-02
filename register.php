<html>
    <head>
        <title>daftar baru</title>
    </head>

<body>
    <div class="container">
        <h1>Register</h1>
        <form method="post" name="form">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>username</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="text" name="password" required></td>
                </tr>
                <tr>
                    <td>level</td>
                    <td>
                        <select name="level" id="level" required>
                        <option disabled selected> pilih </option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                        </select>
                    </td>
                </tr>
                <tr>
                 <tr>
                        <td></td>
                        <td><button class="btn" type="submit" name="Submit" value="Register">register</button></td>

           <?php
               include("koneksi.php");
                        //check if form subtitted, insert from data into users table.
                if(isset($_POST['Submit'])) {
                    $nama= $_POST['nama'];
                    $username = $_POST['username'];
                    $password =   $_POST['password'];
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
            </table>

                </tr>
                </tr>
            </table>
        </form>
           
    </div>
</body>
</html>