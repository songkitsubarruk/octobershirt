<?php
	

echo'	<div class="mo_wpns_support_layout">
			<h3>Support</h3>
			<p>Need any help? Just send us a query so we can help you.</p>
				<form name="f" method="post" action="">
					<input type="hidden" name="option" value="mo_wpns_send_query"/>
					<table class="mo_wpns_settings_table">
						<tr><td>
							<input type="email" class="mo_wpns_table_textbox" id="query_email" name="query_email" value="'.$email.'" placeholder="Enter your email" required />
							</td>
						</tr>
						<tr><td>
							<input type="text" class="mo_wpns_table_textbox" name="query_phone" id="query_phone" value="'.$phone.'" placeholder="Enter your phone"/>
							</td>
						</tr>
						<tr>
							<td>
								<textarea id="query" name="query" class="mo_wpns_settings_textarea" style="resize: vertical;width:100%" cols="52" rows="7" onkeyup="mo_wpns_valid(this)" onblur="mo_wpns_valid(this)" onkeypress="mo_wpns_valid(this)" placeholder="Write your query here"></textarea>
							</td>
						</tr>
					</table>
					<input type="submit" name="send_query" id="send_query" value="Submit Query" style="margin-bottom:3%;" class="button button-primary button-large" />
				</form>
				<br />			
		</div>

		<script>
			function moSharingSizeValidate(e){
				var t=parseInt(e.value.trim());t>60?e.value=60:10>t&&(e.value=10)
			}
			function moSharingSpaceValidate(e){
				var t=parseInt(e.value.trim());t>50?e.value=50:0>t&&(e.value=0)
			}
			function moLoginSizeValidate(e){
				var t=parseInt(e.value.trim());t>60?e.value=60:20>t&&(e.value=20)
			}
			function moLoginSpaceValidate(e){
				var t=parseInt(e.value.trim());t>60?e.value=60:0>t&&(e.value=0)
			}
			function moLoginWidthValidate(e){
				var t=parseInt(e.value.trim());t>1000?e.value=1000:140>t&&(e.value=140)
			}
			function moLoginHeightValidate(e){
				var t=parseInt(e.value.trim());t>50?e.value=50:35>t&&(e.value=35)
			}
		</script>';