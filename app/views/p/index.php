<div id="page-content"><!-- Needed for sticky footer-->
    <main role="main">


        <?php require APPROOT . '/views/inc/slider.php';
        $sep_title = str_replace(' | ', "<span class='sep_color'> | </span>", ' Explore | Dream | Discover ');
        ?>
<section>
    <div class="container-fluid">
        <h1 class="text-center text-uppercase mt-5 mb-0"><i class="fas fa-wave-square fa-rotate-180"></i> <?php echo SITENAME; ?> </h1>
        <h4 class="text-center p-0"><?php echo  $sep_title; ?><i class="fas fa-wave-square fa-rotate-260 color-orange-text"></i></h4>
        <?php //require APPROOT . '/views/inc/toDoList.php'; ?>

        <div class="row">

            <div class="col-sm-12 col-md-6 mb-5 mt-5">
                <img class="img-fluid" src="<?php echo URLROOT; ?>/all_img/img/cartoon-min.jpg">
            </div>

        <div class="col-sm-12 col-md-5 lead text-justify mb-5 mt-5">
                <p class="pl-3 pr-3">
                    <?php echo utf8_encode($data['siteDesc']); ?>
                   <br><br><strong class="lead font-weight-bold">Author:</strong> Janaina Fernanda Santos, São Paulo | Brazil
                </p>
         </div>

    </div>
</section>
    </main>
</div><!-- Page id ends sticky footer-->
