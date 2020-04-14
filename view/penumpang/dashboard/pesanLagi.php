<?php
include '../template/header.php';

include '../template/sidebar.php';


?>


<section id="content_wrapper">
    <section id="content" class="animated fadeIn">
        <div class="admin-form theme-danger tab-pane mw800" id="register2" role="tabpanel">
            <div class="panel panel-danger heading-border">
                <div class="panel-heading">
                    <span class="panel-title">
                        <i class="fa fa-pencil-square">Transaction</i>
                    </span>
                </div>
                <!-- end .form-header section -->

                <form method="POST" action="" id="form-register2">
                    <div class="panel-body p25">
                        <div class="section-divider mt10 mb40">
                            <span>Wanto buy again? <a href="index.php?" class="theme-link">click this</a> </span>

                        </div>
                        <!-- .section-divider -->
                        <div class="panel-body p25">
                            <div class="section-divider mt10 mb40">
                                <span>fill your form</span>
                            </div>
                            <!-- .section-divider -->
                            <div class="section">
                                <label for="id_jadwal" class="field prepend-icon">
                                    <input type="text" name="id_jadwal" id="id_jadwal" class="gui-input" placeholder="Write your ID Jadwal want to buy">
                                    <label for="id_jadwal" class="field-icon">
                                        <i class="fa fa-home"></i>
                                    </label>
                                </label>
                            </div>
                            <div class="section">
                                <label for="tanggal_berangkat" class="field prepend-icon">
                                    <input type="date" name="tanggal_berangkat" id="tanggal_berangkat" class="gui-input" placeholder="Choose your date want to">
                                    <label for="tanggal_berangkat" class="field-icon">
                                        <i class="fa fa-date"></i>
                                    </label>
                                </label>
                            </div>
                            <!-- end section -->
                            <div class="section">

                                <label for="nama_penumpang" class="field prepend-icon">
                                    <input type="text" name="nama_penumpang" id="nama_penumpang" class="gui-input" placeholder="Write your full name">
                                    <label for="nama_penumpang" class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </label>
                                </label>

                            </div>
                            <!-- end section -->

                            <div class="section">
                                <label class="field select">
                                    <select id="jk" name="jk">
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
                                    <a href="index.php" class="theme-link"> terms of use. </a>
                                </label>
                            </div>
                            <!-- end section -->

                        </div>
                        <!-- end .form-body section -->
                        <div class="panel-footer">
                            <button type="submit" href="" name="submit" class="button btn-primary">Create Account</button>
                        </div>
                        <!-- end .form-footer section -->
                </form>
                <?php
                include '../../../controller/transaksiControl.php';
                $main = new transaksiControl();
                if (isset($_POST['submit'])) {
                    //$main->insertOthers();
                    $main->insertOther();

                    echo '<script language="javascript">
                                        alert ("Berhasil");
                                        window.location="index.php";
                                        </script>';
                }


                ?>
            </div>
            <!-- end .admin-form section -->
        </div>
        <!-- end: .admin-form -->
        <?php
        include '../template/footer.php';
        ?>