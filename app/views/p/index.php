<div id="page-content"><!-- Needed for sticky footer-->
    <main role="main">


        <?php require APPROOT . '/views/inc/slider.php'; ?>


<section>
    <div class="container-fluid">
        <h1 class="text-center text-uppercase mt-5 mb-5"><i class="fas fa-wave-square fa-rotate-180"></i> <?php echo SITENAME; ?> <i class="fas fa-wave-square fa-rotate-260 color-orange-text"></i></h1>
        <div class="row">
            <div class="col-sm-6 mb-5">
                <img class="img-fluid" src="<?php echo URLROOT; ?>/all_img/img/cartoon-min.png">
            </div>
        <div class="col-sm-5 lead text-justify mb-5">
                <p>
                    <?php echo $data['siteDesc']; ?>
                   <br><br><strong class="lead font-weight-bold">Author:</strong> Janaina Noerregaard Santos.
                </p>
         </div>

    </div>
</section>
    </main>
</div><!-- Page id ends sticky footer-->
