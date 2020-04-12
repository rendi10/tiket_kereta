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
    <link rel="stylesheet" type="text/css" href="../../assets/skin/default_skin/css/theme.css">
    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="../../assets/admin-tools/admin-forms/css/admin-forms.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/img/favicon.ico">
</head>

<body class="external-page external-alt sb-l-c sb-r-c">
    <div id="main" class="animated fadeIn">
        <section id="content_wrapper">
            <section id="content">
                <!-- Registration 2 -->
                <div class="admin-form theme-danger tab-pane mw800" id="register2" role="tabpanel">
                                <div class="panel panel-danger heading-border">
                                <div class="panel-heading">
                                    <span class="panel-title">
                                    <i class="fa fa-pencil-square"></i>Registration form
                                    </span>
                                </div>
                                <!-- end .form-header section -->

                                <form method="post" action="/" id="form-register2">
                                    <div class="panel-body p25">
                                    <div class="section-divider mt10 mb40">
                                        <span>Set up your account</span>
                                    </div>
                                    <!-- .section-divider -->
                                
                                    <div class="section">
                                        <label for="email" class="field prepend-icon">
                                        <input type="email" name="email" id="email" class="gui-input" placeholder="Email address">
                                        <label for="email" class="field-icon">
                                            <i class="fa fa-envelope"></i>
                                        </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class="section">
                                        
                                        <label for="username" class="field prepend-icon">
                                            <input type="text" name="username" id="username" class="gui-input" placeholder="Choose your username">
                                            <label for="username" class="field-icon">
                                            <i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                        
                                    </div>
                                    <!-- end section -->
                                    <div class="section">
                                        <label for="password" class="field prepend-icon">
                                        <input type="text" name="password" id="password" class="gui-input" placeholder="Create a password">
                                        <label for="password" class="field-icon">
                                            <i class="fa fa-lock"></i>
                                        </label>
                                        </label>
                                    </div>
                                    <div class="section">
                                        
                                        <label for="name" class="field prepend-icon">
                                            <input type="text" name="name" id="name" class="gui-input" placeholder="Write your full name">
                                            <label for="name" class="field-icon">
                                            <i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                        
                                    </div>
                                    <!-- end section -->

                                    <div class="section">
                                        <label class="field select">
                                        <select id="gender" name="gender">
                                            <option value="laki-laki">Laki - laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                        <i class="arrow double"></i>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class="section">
                                        <label for="ttl" class="field prepend-icon">
                                        <input type="date" name="ttl" id="ttl" class="gui-input" placeholder="Choose your birthday">
                                        <label for="ttl" class="field-icon">
                                            <i class="fa fa-date"></i>
                                        </label>
                                        </label>
                                    </div>

                                    <div class="section">
                                        <label for="no_hp" class="field prepend-icon">
                                        <input type="text" name="no_hp" id="mobile" class="gui-input" placeholder="08XXXXXXXXXXX">
                                        <label for="no_hp" class="field-icon">
                                            <i class="fa fa-phone-square"></i>
                                        </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class="section">
                                        <label for="alamat" class="field prepend-icon">
                                        <input type="text" name="alamat" id="alamat" class="gui-input" placeholder="Write your address">
                                        <label for="alamat" class="field-icon">
                                            <i class="fa fa-home"></i>
                                        </label>
                                        </label>
                                    </div>
                                    <!-- end section -->


                                    <div class="section-divider mv40">
                                        <span>don't forget to check again!</span>
                                    </div>
                                    <!-- .section-divider -->

                                    <div class="section">
                                        <label class="option block mt10">
                                        <input type="checkbox" name="terms">
                                        <span class="checkbox mr10"></span>I agree to the
                                        <a href="#" class="theme-link"> terms of use. </a>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    </div>
                                    <!-- end .form-body section -->
                                    <div class="panel-footer">
                                    <button type="submit" class="button btn-primary">I Accept - Create Account</button>
                                    </div>
                                    <!-- end .form-footer section -->
                                </form>
                                </div>
                                <!-- end .admin-form section -->
                            </div>
                            <!-- end: .admin-form -->
            </section>
        </section>
    </div>
</body>
<?php

?>
</html>
