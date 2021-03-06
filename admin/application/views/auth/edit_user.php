<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3><?php echo lang('edit_user_heading');?></h3>
            <p><?php echo lang('edit_user_subheading');?></p>
        </div>
        <?php $attributes = array("role" => "form") ?>
        <?php echo form_open(uri_string(), $attributes);?>
            <div class="box-body">
                <?php if($message){ ?>
                    <div id="infoMessage" class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Warning!</strong> <?php echo $message;?>
                    </div>
                <?php } ?>
                <div class="form-group">
                    <?php echo lang('edit_user_fname_label', 'first_name');?>
                    <?php echo form_input($first_name);?>
                </div>
                <div class="form-group">
                    <?php echo lang('edit_user_lname_label', 'last_name');?>
                    <?php echo form_input($last_name);?>
                </div>
                <div class="form-group">
                    <?php echo lang('edit_user_company_label', 'company');?> 
                    <?php echo form_input($company);?>
                </div>
                <div class="form-group">
                    <?php echo lang('edit_user_phone_label', 'phone');?> 
                    <?php echo form_input($phone);?>
                </div>
                <div class="form-group">
                    <?php echo lang('edit_user_password_label', 'password');?> 
                    <?php echo form_input($password);?>
                </div>
                <div class="form-group">
                    <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?>
                    <?php echo form_input($password_confirm);?> 
                </div>
                <div class="form-group">
                    <h3><?php echo lang('edit_user_groups_heading');?></h3>
                    <div style="margin-left:20px; ">
                        <?php if ($this->ion_auth->is_admin()): ?>
                            <?php foreach ($groups as $group):?>
                                <label class="checkbox">
                                    <?php
                                        $gID=$group['id'];
                                        $checked = null;
                                        $item = null;
                                        foreach($currentGroups as $grp) {
                                            if ($gID == $grp->id) {
                                                $checked= ' checked="checked"';
                                                break;
                                            }
                                        }
                                    ?>
                                    <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                                    <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                                </label>
                            <?php endforeach?>
                        <?php endif ?>
                        <?php echo form_hidden('id', $user->id);?>
                        <?php echo form_hidden($csrf); ?>
                    </div>
                </div>
                <div class="form-group">
                    <?php echo form_submit('submit', lang('edit_user_submit_btn'), array('class' => 'btn btn-primary'));?>
                </div>
            </div>
        <?php echo form_close();?>
    </div>
</div>