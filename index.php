<!DOCTYPE html>
<html>
<head>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" >
    <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <title></title>
</head>
<body>
<div class="container-fluid">
    <H1  class="text-center mt-5"> SISTEM MONITORING SANTRI SMK UBP NURUL ISLAM </H1>
    <h3 class="text-center mt-3 mb-3" > Halaman Login Admin  </h3>

    <div class="row">
        <div class="col-md-4 mt-4 mx-auto">
            <div class="card">
                <div class="card-body">
                    <?php
                    if(isset($_GET['pesan'])){
                        if($_GET['pesan']=="gagal"){
                            echo"<div class='alert alert-danger text-center'> Password dan username salah! </div>";
                        } else if ($_GET['pesan']=="logout") {
                            echo"<div class='alert alert-success text-center'> Anda telah berhasil logout </div>";
                        } else if ($_GET['pesan']=="belumlogin") {
                            echo"<div class='alert alert-warning text-center'> Anda belum login</div>";
                        }
                    }
                    ?>
                    <form action="login.php" method="post">
                        <div class="form-group mx-auto ">

                            <label>Username</label>
                            <input type="text" name="username" required="required" class="form-control" placeholder="Masukkan Username..">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" required="required" class="form-control" placeholder="Masukkan Password">
                        </div>
                        <td><input type="submit" name="submit" value="LOGIN" class="btn btn-primary text-black btn-block mb-3" ></td>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


