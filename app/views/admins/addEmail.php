<div id="page-content"><!-- Needed for sticky footer-->
    <main role="main">
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9 mx-auto">
                        <div class="card card-body bg-light">
                            <?php
                            flash('resume_message');
                            flash('mail_error');
                            ?>
                            <h2>Add <span class="text-info">email</span></h2>
                            <p>Please fill in all fields with <sub>*</sub></p>
                            <form class="icon-form" action="<?php echo URLROOT; ?>/admins/addEmail"
                                  method="post">
                                <div class="form-group">
                                    <label for="email"><p><i class="fas fa-at formIcons"></i> Email <sub>*</sub></p></label>
                                    <input type="text" name="email"
                                           class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
                                           value="<?php echo $data['email']; ?>" required>
                                    <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-outline-success btn-block"><i
                                                    class="fas fa-sign-in-alt"></i> Add
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <?php require APPROOT . '/views/admins/inc/listEmails.php'; ?>
            </div>

        </section>
    </main>
</div>


