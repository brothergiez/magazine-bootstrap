<?php 
	if(!$user->username) $string = $user->email;
	else $string = $user->username;
?>
<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3><?php echo lang('deactivate_heading');?></h3>
            <p><?php echo sprintf(lang('deactivate_subheading'), $string);?></p>
        </div>
        <?php $attributes = array("role" => "form") ?>
		<?php echo form_open("deactivate/".$user->id, $attributes);?>
			<div class="box-body">
                <div class="form-group">
				  	<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
				    <input type="radio" name="confirm" value="yes" checked="checked" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				    <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
				    <input type="radio" name="confirm" value="no" />
				  	<?php echo form_hidden($csrf); ?>
				  	<?php echo form_hidden(array('id'=>$user->id)); ?>
  				</div>
                <div class="form-group">
				  	<?php echo form_submit('submit', lang('deactivate_submit_btn'), array('class' => 'btn btn-primary'));?>
                </div>
            </div>
		<?php echo form_close();?>
	</div>
</div>