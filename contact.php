<?php
$mail_config = array(
	'protocol' => 'smtp',
	'smtp_host' => 'smtp.163.com',
	'smtp_user' => 'bencode',
	'smtp_pass' => 'qazwsxedc123',
	'smtp_port' => 25
);
$from = 'bencode@163.com';
$to = 'bencode@163.com';

/**
 * do contact post
 */

$is_send = false;
if (!empty($_POST['email'])) {
	require_once dirname(__FILE__) . '/email.php';
	
	$subject = get_contact_field('subject');
	$realname = get_contact_field('realname');
	$email = get_contact_field('email');
	$message = get_contact_field('message');
	
	$mail = new CI_Email($mail_config);
	$mail->from($from);
	$mail->to($to);
	$mail->subject($realname . '(' . $email . ')' . $subject);
	$mail->message($message);
	
	$mail->send();

	$is_send = true;
}

function get_contact_field($name) {
	if (!empty($_POST[$name])) {
		return $_POST[$name];
	}
	return '';
}

/**
 * index file
 */

get_header(); ?>
			<div class="mod-content">
				<div id="footer">
					<h3 class="commontitle">Contact Us</h3>
					<div class="division" style="margin:20px 0 35px 0;"></div>
					<div class="contact-post">
						<p>
							We are specialized in the production of rhinestone motifs. You can select from the thousands of stock designs we have or we can custom design the motif for you. From your concept to the final product, we can get it to your hands in as little as 7-10 days.<br/>
							With no setup fee and a minimum of only 12 pieces for custom designs, we will provide a layout within 24 hours. In 7-10 days, the final product will be delivered to your hand after your approval of the layout.
						</p>
					</div>
					<div class="contactlist clr">
						<ul>
							<li><h3>CHINA</h3></li>
							<li><b>TEL</b><span>86-571-85333051</span></li>
							<li><b>FAX</b><span>86-571-85333052</span></li>
							<li><b>E-MAIL</b><span>info@cstarintl.com</span></li>
							<li><b>MSN</b><span>swasky@swasky.com</span></li>
							<li><b>HOURS</b><br/><span>Monday-Saturday 9:00 a.m-6:00 p.m China Time</span></li>
							<li><b>OFFICE ADDRESS(in China)</b><br/><span>15/F,Dongguan Building ,No.4288 Jiangnan Road,Binjiang District,Hangzhou, China</span></li>
							<li><b>MAP</b><br/>
								<a title="click to view location in googlemap" class="googlemap" target="_blank" href="http://maps.google.com/maps?q=30.183859,120.153187&amp;hl=en&amp;sll=30.197915,120.185585&amp;sspn=0.038821,0.09201&amp;num=1&amp;z=19">
									<img alt="address of china" src="<?php echo get_template_directory_uri() ?>/style/img/page/map-china.png">
								</a>
							</li>
						</ul>
						<div class="division2"></div>
						<ul>
							<li><h3>U.S.A</h3></li>
							<li><b>TEL</b><span>86-571-85333051</span></li>
							<li><b>FAX</b><span>86-571-85333052</span></li>
							<li><b>E-MAIL</b><span>info@cstarintl.com</span></li>
							<li><b>MSN</b><span>swasky@swasky.com</span></li>
							<li><b>HOURS</b><br/><span>Monday-Saturday 9:00 a.m-6:00 p.m China Time</span></li>
							<li><b>OFFICE ADDRESS(in China)</b><br/><span>15/F,Dongguan Building ,No.4288 Jiangnan Road,Binjiang District,Hangzhou, China</span></li>
							<li><b>MAP</b><br/>
								<a title="click to view location in googlemap" class="googlemap" target="_blank" href="http://maps.google.com/maps?q=1520+South+Mary+Ave+Sunnyvale,+CA+94087&hl=en&sll=37.0625,-95.677068&sspn=37.735377,78.662109&z=16">
									<img alt="address of usa" src="<?php echo get_template_directory_uri() ?>/style/img/page/map-usa.png">
								</a>
							</li>
						</ul>
					</div>
					<div id="contactmail" class="contactmail">
						<h3>Fill out our contact form below and we'll get back to you as soon as possible.</h3>
						<form class="contact-form" action="" method="post">
							<ul class="emaillist clr">
								<li class="tarea">
									<label>Message:</label>
									<textarea name="message"></textarea>
								</li>
								<li><label>Your Name:</label><input name="realname" value="" /></li>
								<li><label>Your Email:</label><input name="email" value="" /></li>
								<li><label>Subject:</label><input name="subject" value="" /></li>
								<li class="clr" style="width:614px;clear:both;">
									<div class="emailbut">
										<button type="submit">Send</button>
									</div>
									<div class="favpiclist">
										<label>I like:</label>
										<ul class="likearea">
										</ul>
									</div>
								</li>
							</ul>
						</form>
					</div>	
					<div class="supportpic"></div>
				</div>	
			</div>
		</div>

<?php if ($is_send): ?>
<script>
alert("send success, and we'll get back to you as soon as possible");
</script>
<?php endif ?>
<script src="<?php echo get_template_directory_uri() . '/style/js/page/contact.js' ?>"></script>

	</body>
</html>
