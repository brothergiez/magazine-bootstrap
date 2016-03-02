<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3><?php echo lang('edit_group_heading');?></h3>
            <p><?php echo lang('edit_group_subheading');?></p>
        </div>
        <?php $attributes = array("role" => "form") ?>
		<?php echo form_open(current_url(), $attributes);?>
			<div class="box-body">
                <?php if($message){ ?>
                    <div id="infoMessage" class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Warning!</strong> <?php echo $message;?>
                    </div>
                <?php } ?>
                <div class="form-group">
            		<?php echo lang('edit_group_name_label', 'group_name');?>
            		<?php echo form_input($group_name);?>
            	</div>
                <div class="form-group">
            		<?php echo lang('edit_group_desc_label', 'description');?> 
            		<?php echo form_input($group_description);?>
            	</div>
                <div class="form-group">
					<?php echo form_submit('submit', lang('edit_group_submit_btn'), array('class' => 'btn btn-primary'));?>
				</div>
			</div>
		<?php echo form_close();?>
	</div>
</div>