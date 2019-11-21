	<?php
	
	echo'<div class="mo_wpns_divided_layout">
			<div class="mo_wpns_small_layout">';

		is_customer_valid();	
		
	echo'		<h3>Content Protection</h3>
				<form id="mo_wpns_content_protection" method="post" action="">
					<input type="hidden" name="option" value="mo_wpns_content_protection">
					<p><input type="checkbox" '.$disabled.' name="protect_wp_config" '.$protect_wp_config.'> <b>Protect your wp-config.php file</b> &nbsp;&nbsp;<a href="'.$wp_config.'" target="_blank" style="text-decoration:none">( Test it )</a></p>
					<p>Your WordPress wp-config.php file contains your information like database username and password and it\'s very important to prevent anyone to access contents of your wp-config.php file.</p>
					<p><input type="checkbox" '.$disabled.' name="prevent_directory_browsing" '.$protect_wp_uploads.'> <b>Prevent Directory Browsing</b> &nbsp;&nbsp; <span style="color:green;font-weight:bold;">(Recommended)</span> &nbsp;&nbsp; <a href="'.$wp_uploads.'" target="_blank" style="text-decoration:none">( Test it )</a></p>
					<p>Prevent access to user from browsing directory contents like images, pdf\'s and other data from URL e.g. http://website-name.com/wp-content/uploads</p>
					<p><input type="checkbox" '.$disabled.' name="disable_file_editing" '.$disable_file_editing.'> <b>Disable File Editing from WP Dashboard (Themes and plugins)</b> &nbsp;&nbsp;<a href="'.$plugin_editor.'" target="_blank" style="text-decoration:none">( Test it )</a></p>
					<p>The WordPress Dashboard by default allows administrators to edit PHP files, such as plugin and theme files. This is often the first tool an attacker will use if able to login, since it allows code execution.</p>
					<br><input type="submit" '.$disabled.' name="submit" style="width:100px;" value="Save" class="button button-primary button-large">
				</form>
			</div>';


	echo '
			<div class="mo_wpns_small_layout">
				<h3>Comment SPAM</h3>
				<p>This plugins prevents comment spam without requiring you to moderate any comments.</p>
				<form id="mo_wpns_enable_comment_spam_blocking" method="post" action="">
					<input type="hidden" name="option" value="mo_wpns_enable_comment_spam_blocking">
					<input type="checkbox" '.$disabled.' name="mo_wpns_enable_comment_spam_blocking" '.$comment_spam_protect.' onchange="document.getElementById(\'mo_wpns_enable_comment_spam_blocking\').submit();"> Enable comments SPAM blocking by robots or automated scripts. <span style="color:green;font-weight:bold;">(Recommended)</span>
				</form><br>
				<form id="mo_wpns_enable_comment_recaptcha" method="post" action="">
					<input type="hidden" name="option" value="mo_wpns_enable_comment_recaptcha">
					<input type="checkbox" '.$disabled.' name="mo_wpns_enable_comment_recaptcha" '.$enable_recaptcha.' onchange="document.getElementById(\'mo_wpns_enable_comment_recaptcha\').submit();"> Add google reCAPTCHA verification for comments <span style="color:green;font-weight:bold;">(Recommended)</span>
				</form><br>';
		
		if($enable_recaptcha)
		{ 
			echo'
			<p>Before you can use reCAPTCHA, you must need to <b>register your domain/webiste</b> <a href="https://www.google.com/recaptcha/admin#list">here</a>.</p>
			<p>Enter Site key and Secret key that you get after registration.</p>
			<form id="mo_wpns_comment_recaptcha_settings" method="post" action="">
				<input type="hidden" name="option" value="mo_wpns_comment_recaptcha_settings">
				<table class="mo_wpns_settings_table">
					<tr>
						<td style="width:30%">Site key  : </td>
						<td style="width:25%"><input class="mo_wpns_table_textbox" type="text" name="mo_wpns_recaptcha_site_key" required placeholder="site key" value="'.$captcha_site_key.'" /></td>
						<td style="width:25%"></td>
					</tr>
					<tr>
						<td>Secret key  : </td>
						<td><input class="mo_wpns_table_textbox" type="text"  name="mo_wpns_recaptcha_secret_key" required placeholder="secret key" value="'.$captcha_secret_key.'" /></td>
					</tr>
				</table>
				<input type="submit" value="Save Settings" class="button button-primary button-large" />
				<input type="button" value="Test reCAPTCHA Configuration" onclick="testRecaptchaConfiguration()" class="button button-primary button-large" />
			</form>';
		}

echo'	</div>
	</div>
	<script>
		function testRecaptchaConfiguration(){
			var myWindow = window.open("'.$test_recaptcha_url.'", "Test Google reCAPTCHA Configuration", "width=600, height=600");	
		}
	</script>';