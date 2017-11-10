<div class="row justify-content-center">
  <div class="col-6">
    <h1><?php echo lang('login_heading');?></h1>

    <div id="infoMessage"><?php echo $message;?></div>

    <?php echo form_open("auth/login");?>

    <div class="form-group row">
      <div class="col-md-4">
        <?php echo lang('login_identity_label', 'identity');?>
      </div>
      <div class="col-md-6">
      <?php echo form_input($identity);?>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-4">
        <?php echo lang('login_password_label', 'password');?>
      </div>
      <div class="col-md-6">
        <?php echo form_input($password);?>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-6 col-md-offset-4">
        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
        <?php echo lang('login_remember_label', 'remember');?>
      </div>
    </div>


    <div class="form-group row">
      <div class="col-md-8 col-md-offset-4">
        <?php echo form_submit('submit', lang('login_submit_btn'));?>
      </div>
    </div>

    <?php echo form_close();?>

    <p><a href="forgot_password" class="btn-link"><?php echo lang('login_forgot_password');?></a></p>

    <a href="create_user"><button class="btn btn-primary"><?php echo lang('create_user_heading');?></button></a>  

  </div>
</div>
