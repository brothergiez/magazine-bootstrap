<?php $this->load->view('layout/login_header') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
        <?php 
            $attributes = array("class" => "form-signin");
            echo form_open("auth/login", $attributes);?>
            <?php if($message){ ?>
            <div id="infoMessage" class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Warning!</strong> <?php echo $message;?>
            </div>
            <?php } ?>
            <center>
                <h1 class="form-signin-heading"><?php echo lang('login_heading');?></h1>
                <p><?php echo lang('login_subheading');?></p>
            </center>

            <p>
                <?php echo lang('login_identity_label', 'identity');?>
                <?php echo form_input($identity);?>
            </p>

            <p>
                <?php echo lang('login_password_label', 'password');?>
                <?php echo form_input($password);?>
            </p>

            <p>
                <?php echo lang('login_remember_label', 'remember');?>
                <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
            </p>


            <p><?php echo form_submit('submit', lang('login_submit_btn'), "class='btn btn-primary btn-block'");?></p>

            <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
        <?php echo form_close();?>

            <div class="ads-slot">
                <script type='text/javascript'>
                <!--//<![CDATA[
                    var m3_u = (location.protocol=='https:'?'https://a01.uadexchange.com/www/delivery/ajs.php':'http://a01.uadexchange.com/www/delivery/ajs.php');
                    var m3_r = Math.floor(Math.random()*99999999999);
                    if (!document.MAX_used) document.MAX_used = ',';
                    document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
                    document.write ("?zoneid=162");
                    document.write ('&amp;cb=' + m3_r);
                    if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
                    document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
                    document.write ("&amp;loc=" + escape(window.location));
                    if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
                    if (document.context) document.write ("&context=" + escape(document.context));
                    if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
                    document.write ("'><\/scr"+"ipt>");
                //]]>-->
                </script><noscript><a href='http://a01.uadexchange.com/www/delivery/ck.php?n=aac0bb79&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://a01.uadexchange.com/www/delivery/avw.php?zoneid=162&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=aac0bb79' border='0' alt='' /></a></noscript>
            </div>                  
        </div>
    </div>
</div>
<?php $this->load->view('layout/login_footer') ?>