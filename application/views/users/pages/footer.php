<!-- Page Footer-->
<footer class="main-footer">
    <div class="container-fluid">
        <div class="container-fluid font-weight-bold">
            <!-- Social icons -->    <!--Copyright-->
            <div class="footer-copyright py-3">
                <div class="float-left text-left">

                </div>
                <div class="text-right">

                    <small>Powered by <a href="https://digitafriza.congoagile.com">Digitafriza Teams</a>. Solutions informatiques !</small>
                    <br>
                    <small>
                        © 2020 -
                        <script>document.write(new Date().getFullYear());</script> | Shopiza et son logo sont des marques déposées de <a href="https://www.digitafriza.com">Digitafriza, Inc.</a>
                    </small>
                    <br><small>Validate and authorized by <a href="https://www.congoagile.com">Congo Agile Foundation.</a></small>
                </div>
            </div>
            <!--/.Copyright-->
        </div>
    </div>
</footer>
</div>
</div>
</div>
<?php
if (isset($output)) {
    foreach ($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach;
}else{ ?>
    <script src="<?= base_url('ressources/security/'); ?>vendor/jquery/jquery.min.js"></script>
<?php } ?>
<!-- JavaScript files-->

<script src="<?= base_url('ressources/security/'); ?>vendor/popper.js/umd/popper.min.js"></script>
<script src="<?= base_url('ressources/security/'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url('ressources/security/'); ?>vendor/jquery.cookie/jquery.cookie.js"></script>
<script src="<?= base_url('ressources/security/'); ?>vendor/chart.js/Chart.min.js"></script>
<script src="<?= base_url('ressources/security/'); ?>vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url('ressources/security/'); ?>js/charts-custom.js"></script>
<script src="<?= base_url('ressources/security/'); ?>js/charts-home.js"></script>
<!-- Main File-->
<script src="<?= base_url('ressources/security/'); ?>js/front.js"></script>
</body>
</html>