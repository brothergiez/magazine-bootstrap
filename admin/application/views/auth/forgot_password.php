<?php $this->load->view('layout/login_header') ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
        	<?php $attributes = array("class" => "form-signin"); ?>
			<?php echo form_open("auth/forgot_password", $attributes);?>
				<?php if($message){ ?>
	            <div id="infoMessage" class="alert alert-warning alert-dismissible" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <strong>Warning!</strong> <?php echo $message;?>
	            </div>
	            <?php } ?>
	            <center>
					<h1 class="form-signin-heading"><?php echo lang('forgot_password_heading');?></h1>
					<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>
            	</center>
			    <p>
			      	<label for="identity">
			      		<?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?>
			      	</label>
			      	<?php echo form_input($identity);?>
			    </p>

			    <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'), "class='btn btn-primary btn-block'");?></p>

			<?php echo form_close();?>
		</div>
	</div>
</div>
<?php $this->load->view('layout/login_footer') ?>
