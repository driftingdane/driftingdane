<div id="page-content"><!-- Needed for sticky footer-->
    <main role="main">
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9 mx-auto">
                        <div class="card card-body bg-light mb-5">
                            <?php echo flash('resume_message'); ?>
                            <h2>Add image(s)</h2>
                            <p>Please fill in all fields with <sub>*</sub></p>
                            <form action="<?php echo URLROOT; ?>/admins/addImages" onSubmit="return check_cat(this)" class="icon-form process" enctype="multipart/form-data" method="post">
                                <input type="hidden" name="token" value="<?php echo createToken(); ?>">
                                <input type="hidden" name="glFolder" id="hiddenInput" />
                                <div class="col-md-12 mb-3"><?php echo flash_error('cat_errors'); ?>
                                    <label for="glCat"><i class="far fa-flag formIcons"></i> Category: <sub>*</sub></label>
                                    <select onchange="changeHiddenInput(this)" id="glCat" name="glCat" class="custom-select custom-select-lg mb-3 <?php echo (!empty($data['glCat_err'])) ? 'is-invalid' : ''; ?>" required>
                                        <option value="" selected>Select category</option>
                                        <?php
                                        if(is_array($data['categories'])) :
                                            foreach ($data['categories'] as $cat) : ?>
                                                <option value="<?php echo $cat->gl_cat_id; ?>"><?php echo $cat->gl_cat_title; ?></option>
                                            <?php endforeach;
                                        endif;
                                        ?>
                                    </select>
                                    <span class="invalid-feedback"><?php echo $data['glCat_err']; ?></span>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="progress" style="visibility:hidden;">
                                        <div id="progress" class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="progress" style="width:0%">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3"><?php echo flash_error('img_errors'); ?></div>
                                <div class="form-group file-area border text-center">
                                    <label class="mt-3 mt-5" for="glImg"><i class="fas fa-upload fa-3x formIcons"></i>
                                        <span class="inline-span eppMe"> Upload images: </span></label>
                                    <input type="file" name="glImg[]" id="glImg" multiple="multiple" class="form-control form-control-lg <?php echo (!empty($data['glImg_err'])) ? 'is-invalid' : ''; ?>" required>
                                    <div class="file-dummy">
                                        <div class="success">Great, your files are selected. Keep on.</div>
                                        <div class="default text-black">Select files or drag & drop</div>
                                    </div>
                                </div>

                                <div class="form-group mt-4 mb-3">
                                    <input type="submit" value="Upload" class="btn btn-primary btn-block">
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
                <?php require APPROOT . '/views/admins/inc/listImages.php'; ?>
            </div>
</div>
</section>


</main>
</div><!-- Page id ends sticky footer-->

