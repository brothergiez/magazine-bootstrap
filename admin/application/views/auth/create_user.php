<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3><?php echo lang('create_user_heading');?></h3>
            <p><?php echo lang('create_user_subheading');?></p>
        </div>
        <?php $attributes = array("role" => "form") ?>
        <?php echo form_open("create-user", $attributes);?>
            <div class="box-body">
                 <?php if($message){ ?>
                    <div id="infoMessage" class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Warning!</strong> <?php echo $message;?>
                    </div>
                <?php } ?>
                <div class="form-group">
                    <?php echo lang('create_user_fname_label', 'first_name');?>
                    <?php echo form_input($first_name);?>
                </div>
                <div class="form-group">
                    <?php echo lang('create_user_lname_label', 'last_name');?> <br />
                    <?php echo form_input($last_name);?>
                </div>
                <div class="form-group">
                  <?php
                  if($identity_column!=='email') {
                      echo '<p>';
                      echo lang('create_user_identity_label', 'identity');
                      echo '<br />';
                      echo form_error('identity');
                      echo form_input($identity);
                      echo '</p>';
                  }
                  ?>
                </div>
                <div class="form-group">
                    <?php echo lang('create_user_company_label', 'company');?> 
                    <?php echo form_input($company);?>
                </div>
                <div class="form-group">
                    <?php echo lang('create_user_email_label', 'email');?> 
                    <?php echo form_input($email);?>
                </div>
                <div class="form-group">
                    <?php echo lang('create_user_phone_label', 'phone');?> 
                    <?php echo form_input($phone);?>
                </div>
                <div class="form-group">
                    <?php echo lang('create_user_password_label', 'password');?> 
                    <?php echo form_input($password);?>
                </div>
                <div class="form-group">
                    <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> 
                    <?php echo form_input($password_confirm);?>
                </div>
                <div class="form-group">
                    <?php echo form_submit('submit', lang('create_user_submit_btn'), array('class' => 'btn btn-primary'));?>
                </div>
            </div>
        <?php echo form_close();?>
    </div>
</div>