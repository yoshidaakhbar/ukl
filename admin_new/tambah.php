<html>
    <head>
        <title>daftar game baru</title>
    </head>

<body>
    <div class="container">
        <h1>tambahkan game anda</h1>
        <form method="post" name="form" action="tambah.php">
            <table>
                <tr>
                    <td>Nama game</td>
                    <td><input type="text" name="nama_game" required></td>
                </tr>
                <tr> 
                    <td>genre</td>
                    <td>
                        <select name="genre" id="level" required>
                        <option disabled selected> pilih </option>
                        <option value="anak anak">anak anak</option>
                        <option value="dewasa">dewasa</option>
                        <option value="edukasi">edukasi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>link</td>
                    <td><input type="text" name="link" required></td>
                </tr>
                <tr>
                    <!-- <td>foto</td>
                    <td>
                        <input type="file" name="image" id="image">
                    </td> -->
                </tr>
                <tr>
                 <tr>
                        <td></td>
                        <td><button class="btn" type="submit" name="Submit" value="Register">tambah game</button></td>



            <?php
               include("../koneksi.php");
                        //check if form subtitted, insert from data into users table.
                if(isset($_POST['Submit'])) {
                    $nama_game= $_POST['nama_game']; 
                    $genre = $_POST['genre'];
                    $link = $_POST['link'];
                    //echo{$judul};
                    // include database connection file

                    //insert user data info table 
                    $result = mysqli_query($mysqli,"INSERT INTO daftar_game(nama_game,genre,link) VALUE ('$nama_game','$genre','$link')");

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


<script type="text/javascript">
$(document).ready(function(){
  var img, ext, btn, size, imgChange, name
  img = $("#image")
  btn = $("#submit")
  imgChange = $("#imgChange")
  img.on("change", function(){
    ext = img[0]['files'][0]['type']
    name = img[0]['files'][0]['name']
    size = img[0]['files'][0]['size']
    console.log(size)
    if(ext !== 'image/jpeg' && ext !== 'image/png'){
      alert('File not allowed')
      img[0].value = ""
    }
    if(size > 976562500){
      alert('Ukuran file maksimal 1 MB')
      img[0].value = ""
    }

  })
});
</script>
</body>
</html>