<div id="page-content"><!-- Needed for sticky footer-->
    <main role="main">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="card card-body bg-light mb-5">
                            <?php echo flash('resume_message'); ?>
                            <h2>Edit slide</h2>
                            <?php echo flash_error('resume_errors'); ?>
                            <p>Please fill in all fields with <sub>*</sub></p>
                            <form action="<?php echo URLROOT . '/admins/editSlide/' . $data['slideById']->sl_id; ?>" class="icon-form process" enctype="multipart/form-data" method="post" novalidate>
                                <input type="hidden" name="token" value="<?php echo createToken(); ?>">
                                <div class="col-md-12 mb-3">
                                    <label for="slTitle"><i class="fas fa-heading formIcons"></i>
                                        <span class="inline-span"> Title: </span></label>
                                    <input id="slTitle" maxlength="100"
                                           class="form-control form-control-lg"
                                           name="slTitle" type="text" value="<?php echo $data['slideById']->sl_title; ?>">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="slDesc"><i class="fas fa-signature formIcons"></i>
                                        <span class="inline-span"> Description: </span></label>
                                    <textarea id="slDesc" maxlength="100"
                                              class="form-control form-control-lg profile_form_bio"
                                              name="slDesc"
                                              type="text"><?php echo $data['slideById']->sl_desc; ?></textarea>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="slData"><i class="fas fa-code formIcons"></i>
                                        <span class="inline-span"> Html data: </span></label>
                                    <textarea id="slData"
                                              class="form-control form-control-lg profile_form_bio" name="slData"
                                              type="text" ><?php echo $data['slideById']->sl_data; ?></textarea>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="sameFile"><i class="fab fa-wordpress formIcons mt-3"></i> <span class="inline-span">Image: </span></label>
                                    <div class="userAvatar mt-3">
                                        <img class="img-fluid mx-auto d-block" src="<?php echo URLROOT; ?>/sliderImg/mobile/<?php echo $data['slideById']->sl_img; ?>">
                                    </div>
                                </div>


                                <div class="col-md-12 mb-3">
                                    <div class="custom-file form-control-lg mb-2" id="customFile" lang="en">
                                        <label class="custom-file-label" for="exampleInputFile"><i class="far fa-image formIcons"></i> <span class="inline-span"> <sub>*</sub></span>
                                            <small><?php echo $data['slideById']->sl_img; ?></small>
                                        </label>
                                        <input name="slImg" type="file"
                                               class="custom-file-input <?php echo (!empty($data['slImg_err'])) ? 'is-invalid' : ''; ?>"
                                               aria-describedby="fileHelp">
                                        <span class="invalid-feedback"><?php echo $data['slImg_err']; ?></span>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <div class="form-group mt-4 mb-3">
                                            <input type="submit" value="Add" class="btn btn-primary btn-block">
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php require APPROOT . '/views/admins/inc/listSlides.php'; ?>
            </div>
        </section>

    </main>
</div><!-- Page id ends sticky footer-->

