<?php
	
	class MoWpnsMessages
	{
		// ip-blocking messages
		const INVALID_IP						= "Please enter a valid IP address.";
		const IP_ALREADY_BLOCKED				= "IP Address is already Blocked";
		const IP_PERMANENTLY_BLOCKED			= "IP Address is blocked permanently.";
		const IP_ALREADY_WHITELISTED			= "IP Address is already Whitelisted.";
		const IP_IN_WHITELISTED					= "IP Address is Whitelisted. Please remove it from the whitelisted list.";
		const IP_UNBLOCKED						= "IP has been unblocked successfully";
		const IP_WHITELISTED					= "IP has been whitelisted successfully";
		const IP_UNWHITELISTED					= "IP has been removed from the whitelisted list successfully";

		//login-security messages
		const BRUTE_FORCE_ENABLED				= "Brute force protection is enabled.";
		const BRUTE_FORCE_DISABLED				= "Brute force protection is disabled.";
		const DOS_ENABLED						= "DOS protection enabled.";
		const DOS_DISABLED						= "DOS protection disabled.";
		const TWOFA_ENABLED						= "Two Factor protection has been enabled.";
		const TWOFA_DISABLED					= "Two Factor protection has been disabled.";
		const RBA_ENABLED						= "Mobile Authentication and Risk based access is Enabled.";						
		const RBA_DISABLED						= "Risk based access is Disabled.";
		const RECAPTCHA_ENABLED					= "Google reCAPTCHA configuration is enabled.";
		const RECAPTCHA_DISABLED				= "Google reCAPTCHA configuration is disabled.";
		const STRONG_PASS_ENABLED				= "Strong Password has been enabled for your users.";
		const STRONG_PASS_DISABLED				= "Strong Password has been disabled for your users.";		

		//notification messages
		const NOTIFY_ON_IP_BLOCKED				= "Email notification is enabled for Admin.";
		const DONOT_NOTIFY_ON_IP_BLOCKED		= "Email notification is disabled for Admin.";
		const NOTIFY_ON_UNUSUAL_ACTIVITY		= "Email notification is enabled for user for unusual activities.";
		const DONOT_NOTIFY_ON_UNUSUAL_ACTIVITY  = "Email notification is disabled for user for unusual activities.";

		//registration security
		const DOMAIN_BLOCKING_ENABLED			= "Blocking fake user registrations is Enabled.";
		const DOMAIN_BLOCKING_DISABLED			= "Blocking fake user registration is disabled";
		const ENFORCE_STRONG_PASSWORD			= "Strong password enforcement is Enabled.";
		const ENFORCE_STRONG_PASS_DISABLED		= "Strong password enforcement is Disabled.";
		const ENABLE_ADVANCED_USER_VERIFY		= "Advanced user verification is Enabled.";
		const DISABLE_ADVANCED_USER_VERIFY		= "Advanced user verification is Disable.";
		const ENABLE_SOCIAL_LOGIN				= "Social Login Integration is Enabled.";
		const DISABLE_SOCIAL_LOGIN				= "Social Login Integration is Disabled.";

		//Advanced security
		const HTACCESS_ENABLED					= "htaccess security has been enabled";
		const HTACCESS_DISABLED					= "htaccess security has been disabled";
		const USER_AGENT_BLOCK_ENABLED			= "User Agent has block been enabled";
		const USER_AGENT_BLOCK_DISABLED			= "User Agent has block been disabled";

		//content protection
		const CONTENT_PROTECTION_ENABLED		= "Your configuration for Content Protection has been saved.";
		const CONTENT_SPAM_BLOCKING				= "Protection for Comment SPAM has been enabled.";
		const CONTENT_RECAPTCHA					= "reCAPTCHA has been enabled for Comments.";
		const CONTENT_SPAM_BLOCKING_DISABLED	= "Protection for Comment SPAM has been disabled.";
		const CONTENT_RECAPTCHA_DISABLED		= "reCAPTCHA has been disabled for Comments.";

		//support form 
		const SUPPORT_FORM_VALUES				= "Please submit your query along with email.";
		const SUPPORT_FORM_SENT					= "Thanks for getting in touch! We shall get back to you shortly.";
		const SUPPORT_FORM_ERROR				= "Your query could not be submitted. Please try again.";

		//common messages
		const UNKNOWN_ERROR						= "Error processing your request. Please try again.";
		const CONFIG_SAVED						= "Configuration saved successfully.";
		const REQUIRED_FIELDS					= "Please enter all the required fields";
		const RESET_PASS						= "You password has been reset successfully and sent to your registered email. Please check your mailbox.";
		const TEMPLATE_SAVED					= "Email template saved.";
		const FEEDBACK							= "<div class='custom-notice notice notice-warning feedback-notice'><p><p class='notice-message'>Looking for a feature? Help us make the plugin better. Send us your feedback using the Support Form below.</p><button class='feedback notice-button'><i>Dismiss</i></button></p></div>";
		const WHITELIST_SELF					= "<div class='custom-notice notice notice-warning whitelistself-notice'><p><p class='notice-message'>It looks like you have not whitelisted your IP. Whitelist your IP as you can get blocked from your site.</p><button class='whitelist_self notice-button'><i>WhiteList</i></button></p></div>";

		//registration messages
		const PASS_LENGTH						= "Choose a password with minimum length 6.";
		const ERR_OTP_EMAIL						= "There was an error in sending email. Please click on Resend OTP to try again.";
		const OTP_SENT							= 'A passcode is sent to {{method}}. Please enter the otp below.';
		const REG_SUCCESS						= 'Your account has been retrieved successfully.';
		const ACCOUNT_EXISTS					= 'You already have an account with miniOrange. Please enter a valid password.';
		const INVALID_CRED						= 'Invalid username or password. Please try again.';
		const REQUIRED_OTP 						= 'Please enter a value in OTP field.';
		const INVALID_OTP 						= 'Invalid one time passcode. Please enter a valid passcode.';
		const INVALID_PHONE						= 'Please enter the phone number in the following format: <b>+##country code## ##phone number##';
		const PASS_MISMATCH						= 'Password and Confirm Password do not match.';


		public static function showMessage($message , $data=array())
		{
			$message = constant( "self::".$message );
		    foreach($data as $key => $value)
		    {
		        $message = str_replace("{{" . $key . "}}", $value , $message);
		    }
		    return $message;
		}

	}

?>