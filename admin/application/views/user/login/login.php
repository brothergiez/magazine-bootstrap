<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
	<div class="container">
		<div class="row">
			<?php if (validation_errors()) : ?>
				<div class="col-md-12">
					<div class="alert alert-danger" role="alert">
						<?php echo validation_errors() ?>
					</div>
				</div>
			<?php endif; ?>
			<?php if (isset($error)) : ?>
				<div class="col-md-12">
					<div class="alert alert-danger" role="alert">
						<?php echo $error ?>
					</div>
				</div>
			<?php endif; ?>		
			<div class="col-md-12 col-sm-12">
				<?php 
				$attributes = array('class' => 'form-signin');
				echo form_open('user/login', $attributes);
				?>
			        <center><h2 class="form-signin-heading">Silahkan Login</h2></center>
			        <label for="username" class="sr-only">Username</label>
			        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required autofocus>
			        <label for="password" class="sr-only">Password</label>
			        <input type="password" class="form-control" id="password" name="password" placeholder="Your password">
			        <div class="checkbox">
			          <label>
			            <input type="checkbox" value="remember-me"> Ingat Saya
			          </label>
			        </div>
			        <input type="submit" class="btn btn-primary btn-block" value="Login"><br>
			        Belum punya akun? <a href="<?php echo base_url('user/register')?>">Klik disini untuk buat akun.</a> 
			     </form>
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