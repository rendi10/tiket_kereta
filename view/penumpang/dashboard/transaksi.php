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

                                <form method="POST" action="index.php?prib" id="form-register2">
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
                                    <!-- end section -->
                                        
                                    <div class="section">
                                        <label for="username" class="field prepend-icon">
                                        <input type="text" name="username" id="username" class="gui-input" placeholder="Write your username">
                                        <label for="username" class="field-icon">
                                            <i class="fa fa-people"></i>
                                        </label>
                                        </label>
                                    </div>
                                    <!-- end section -->


                                    <div class="section">
                                        <label for="tanggal_berangkat" class="field prepend-icon">
                                        <input type="date" name="tanggal_berangkat" id="tanggal_berangkat" class="gui-input" placeholder="Choose your date want to">
                                        <label for="tanggal_berangkat" class="field-icon">
                                            <i class="fa fa-date"></i>
                                        </label>
                                        </label>
                                    </div>

                                    
                                 


                                    <div class="section-divider mv40">
                                        <span>don't forget to check again!</span>
                                    </div>
                                    <!-- .section-divider -->

                                    <div class="section">
                                        <label class="option block mt10">
                                        <input type="checkbox" name="terms">
                                        <span class="checkbox mr10"></span>I agree to the
                                        <a href="index.php?prib" class="theme-link"> terms of use. </a>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    </div>
                                    <!-- end .form-body section -->
                                    <div class="panel-footer">
                                    <button type="submit" href="index.php?prib" name= "kirim" class="button btn-primary">Send</button>
                                    </div>
                                    <!-- end .form-footer section -->
                                </form>
                                </div>
                                <!-- end .admin-form section -->
                            </div>
                            <!-- end: .admin-form -->

<?php
include '../template/footer.php';
?>