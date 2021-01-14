<!--Main layout-->
<main class="pt-5 mt-5">
    <div class="container-fluid">
        <!-- Page Header-->
        <header class="page-header-main mt-5">
            <div class="container-fluid">
                <h2 class="no-margin-bottom">Consultation prenatale Management</h2>
            </div>
        </header>
        <!-- Breadcrumb-->
        <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item font-weight-bold"><a href="<?php echo base_url('admin'); ?>">Accueil</a></li>
                <?php
                if ($this->uri->segment(3) != '') {
                    ?>
                    <li class="breadcrumb-item font-weight-bold">
                        <a href="<?= base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2); ?>"><?= $this->uri->segment(2) ?> </a>
                    </li>
                    <li class="breadcrumb-item disabled" disabled><?= $this->uri->segment(3) ?></li>
                <?php } else { ?>
                    <li class="breadcrumb-item disabled" disabled><?= $this->uri->segment(2) ?></li>
                <?php } ?>
            </ul>
        </div>

        <!-- page content -->
        <?php
        if ((isset($_SESSION['success'])) OR (isset($_SESSION['error']))) { ?>
            <div class="container">
                <h6 class="text-dark">
                    <?php include_once "application/views/alertes/alert-index.php"; ?>
                </h6>
            </div>
        <?php } ?>
        <!-- include the view -->
        <?php

        if (isset($view)) {
            $this->load->view($view);
        }
        if (isset($output)) { ?>
            <div style='height:20px;'></div>
            <div style="padding: 10px">
                <?php echo $output; ?>
            </div>
        <?php } ?>
    </div>
</main>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>