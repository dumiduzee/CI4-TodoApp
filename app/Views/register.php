<?php $local_session = session(); ?>

<?=$this->extend('Layouts/base');?>


<?=$this->section('content');?>

<!-- Register -->
<div class="login-container">

    <?php if($local_session->getTempdata("signup_error")): ?>
        <div class="div alert alert-danger">
            <p><?=$local_session->getTempdata("signup_error")?></p>
        </div>
    <?php endif; ?>
       
        <div class="form-header">Register</div>
        <form method="post" action="">
        <div class="mb-4">
                <!-- <label for="name" class="form-label">Name</label> -->
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" value="<?=set_value('name')?>"  >
                <?php if($signup_error):?>
                    <pre class="text-danger"><?= validate_filed_erros($signup_error,'name') ?></pre>
                <?php endif; ?>

            </div>
            <div class="mb-4">
                <!-- <label for="email" class="form-label">Email</label> -->
                <input type="text" name="email" class="form-control" id="email" placeholder="Enter your email" value="<?=set_value('email')?>">
                <?php if($signup_error):?>
                    <pre class="text-danger"><?= validate_filed_erros($signup_error,'email') ?></pre>
                <?php endif; ?>
            </div>
            <div class="mb-4">
                <!-- <label for="password" class="form-label">Password</label> -->
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" value="<?=set_value('password')?>" >
                <?php if($signup_error):?>
                    <pre class="text-danger"><?= validate_filed_erros($signup_error,'password') ?></pre>
                <?php endif; ?>
            </div>
            <div class="mb-4">
                <!-- <label for="cpassword" class="form-label">Confirm Password</label> -->
                <input type="password" name="cpassword" class="form-control" id="cpassword" placeholder="Confirm your password" value="<?=set_value('cpassword')?>">
                <?php if($signup_error):?>
                    <pre class="text-danger"><?= validate_filed_erros($signup_error,'cpassword') ?></pre>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-custom">Register</button>
        </form>
    </div>

<?=$this->endsection('content');?>
