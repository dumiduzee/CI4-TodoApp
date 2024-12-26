<?=$this->extend('Layouts/base');?>


<?=$this->section('content');?>
<?php $local_session = session(); ?>

<!-- Login Form -->
    <div class="login-container">
        <div class="form-header">Login</div>

        <!-- credentials wrong message -->
        <?php
        if($local_session->getTempdata('login_error')):?>
            <p class="d-flex justify-content-center text-success"><?=$local_session->getTempdata('login_error')?>
        
        <?php endif;?>

        <!-- //account create and login message -->
        <?php
        if($local_session->getTempdata('success')):?>
            <p class="d-flex justify-content-center text-success"><?=$local_session->getTempdata('success')?></p>
        <?php endif;?>
        <form method="post" action="">
            <div class="mb-3">
                <!-- <label for="email" class="form-label">Email</label> -->
                <input type="text" class="form-control" id="email" placeholder="Enter your email" name="email">
            </div>
            <div class="mb-4">
                <!-- <label for="password" class="form-label">Password</label> -->
                <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password">
            </div>
            <button type="submit" class="btn btn-custom">Login</button>
        </form>
    </div>

<?=$this->endsection('content');?>
