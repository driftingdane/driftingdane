<section class="bg-light p-2 mb-5 mt-5 ">
    <div class="container">
        <div class="text-center"><?php echo flash('success'); ?></div>
<p class="p-1 text-center text-black-50 lead">Get story updates! Subscribe.</p>
<div class="row justify-content-center">
    <form action="<?php echo URLROOT; ?>/p/subscribe" method="post">
        <input type="text" name="subEmail" placeholder="mylovelymail@" class="form-control mb-2 mr-sm-2 form-control-lg <?php echo (!empty($data['subEmail_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>" required>
        <span class="invalid-feedback m-3"><?php echo $data['subEmail_err']; ?></span>
        <p></p>
        <button id="subscribe" type="submit" class="btn btn-primary mb-2 btn-block rounded"><i class="fas fa-sign-in-alt"></i> Subscribe</button>
    </form>
</div>
    </div>
</section>
