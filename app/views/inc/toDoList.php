 <!-- Grid column -->
    <div class="col-md-4 mx-auto m-3">
        <!--Panel-->
        <div class="card text-center">
        <div class=" card-header success-color white-text">
            Featured
        </div>
            <?php
            foreach ($data['todo'] as $do) : ?>
        <div class="card-body">
            <h4 class="card-title"><?php echo $do->do_title; ?></h4>
            <p class="card-text"><?php echo $do->do_desc; ?></p>
            <a class="btn btn-success btn-sm">Go somewhere</a>
        </div>
        <div class="card-footer text-muted success-color white-text">
            <p class="mb-0"><?php echo friendlyDate($do->do_updated); ?></p>
        </div>
            <?php endforeach; ?>
    </div>
    <!--/.Panel-->

</div>
<!-- Grid column -->






