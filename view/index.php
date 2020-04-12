<?php
session_start();

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    // menyeleksi data user dengan username dan password yang sesuai
    $query = "select * from tbl_user where username='$username' and password='$password'";
    $login = $this->model->execute($query);

    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($login);
    // cek apakah username dan password di temukan pada database
    if ($cek > 0) {
        $data = mysqli_fetch_assoc($login);
        // cek jika user login sebagai admin
        if ($data['level'] == "admin") {

            // buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "admin";
            // alihkan ke halaman dashboard admin
            header("location:view/admin/index.php");

            // cek jika user login sebagai pegawai
        } else if ($data['level'] == "pengunjung") {
            // buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "pengunjung";
            // alihkan ke halaman dashboard pegawai
            header("location:view/penumpang/index.php");
        } else {
            // alihkan ke halaman login kembali
            header("location:index.php?pesan=gagal");
        }
    } else {
        header("location:index.php?pesan=gagal");
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>Halaman Admin</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">
    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
</head>

<body class="external-page external-alt sb-l-c sb-r-c">
    <div id="main" class="animated fadeIn">
        <section id="content_wrapper">
            <section id="content">
                <div class="admin-form theme-info mw500" id="login">
                    <!-- Login Logo -->
                    <div class="row table-layout">
                        <a href="" title="Return to Dashboard">
                            <img src="assets/img/logos/logo_kai.jpg" title="Logo KAI" class="center-block img-responsive" style="max-width: 500px;">
                        </a>
                    </div>
                    <!-- Login Panel/Form -->
                    <div class="panel mt30 mb25">
                        <form method="post" action="" id="contact">
                            <div class="panel-body bg-light p25 pb15">
                                <!-- Username Input -->
                                <div class="section">
                                    <label for="username" class="field-label text-muted fs18 mb10">Username</label>
                                    <label for="username" class="field prepend-icon">
                                        <input type="text" name="username" id="username" class="gui-input" placeholder="Enter username">
                                        <label for="username" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- Password Input -->
                                <div class="section">
                                    <label for="username" class="field-label text-muted fs18 mb10">Password</label>
                                    <label for="password" class="field prepend-icon">
                                        <input type="password" name="password" id="password" class="gui-input" placeholder="Enter password">
                                        <label for="password" class="field-icon">
                                            <i class="fa fa-lock"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>
                            <div class="panel-footer clearfix">
                                <input type="submit" name="submit" class="button btn-primary mr10 pull-right">Sign In</input>
                            </div>
                        </form>
                    </div>
                    <!-- Registration Links -->
                    <div class="login-links">
                        <p>Belum punya akun?
                            <a href="daftar/index.php" title="Sign In">Daftar disini!</a>
                        </p>
                    </div>
                    <!-- Registration Links(alt) -->
                    <div class="login-links hidden">
                        <a href="pages_register(alt).html" class="" title="Register">Register</a>
                    </div>
                </div>
            </section>
        </section>
    </div>
</body>

</html>