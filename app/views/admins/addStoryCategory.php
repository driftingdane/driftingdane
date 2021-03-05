<div id="page-content"><!-- Needed for sticky footer-->
    <main role="main">
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-9 mx-auto">
                        <div class="card card-body bg-light mb-5">
                            <?php echo flash('resume_message'); ?>
                            <h2>Add Category</h2>
                            <?php echo flash_error('resume_errors'); ?>
                            <p>Please fill in all fields with <sub>*</sub></p>
                            <form action="<?php echo URLROOT; ?>/admins/addStoryCategory" class="icon-form process" enctype="multipart/form-data" method="post" novalidate>
                                <input type="hidden" name="token" value="<?php echo createToken(); ?>">
                                <input type="hidden" name="glFolder" id="hiddenInput">

                                <div class="col-md-12 mb-3">
                                    <label for="glTitle"><i class="fas fa-heading formIcons"></i>
                                        <span class="inline-span"> Title: <sub>*</sub></span></label>
                                    <input id="glTitle" maxlength="100"
                                           class="form-control form-control-lg <?php echo (!empty($data['glTitle_err'])) ? 'is-invalid' : ''; ?>"
                                           name="glTitle"
                                           required
                                           type="text" value="<?php echo $data['glTitle']; ?>">
                                    <span class="invalid-feedback"><?php echo $data['glTitle_err']; ?></span>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="glDesc"><i class="fas fa-user-secret formIcons"></i>
                                        <span class="inline-span eppMe"> Description: </span></label>
                                    <textarea id="glDesc" name="glDesc"
                                              class="form-control form-control-lg profile_form_bio"><?php echo $data['glDesc']; ?></textarea>
                                </div>

                                <div class="form-group mt-4 mb-3">
                                    <input type="submit" value="Add" class="btn btn-primary btn-block">
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
                <?php require APPROOT . '/views/admins/inc/listStoryCategories.php'; ?>
            </div>
</div>
</section>

</main>
</div><!-- Page id ends sticky footer-->
