<?php

// process the email
if (array_key_exists('send', $_POST)) {
  $to = 'supermaxwell@gmail.com'; // use your own email address
  $subject = 'Обратная связь с сайта  Laser Studio Esthetic ';
  $headers = "From: Laser Studio Esthetic<laser.studio@gmail.com>\r\n";
  $headers .= "Content-Type: text/plain; charset=utf-8";

  // list expected fields
  $expected = array('name', 'phone','email', 'comments');
  // set required fields
  $required = array('name', 'phone', 'comments');
  // create empty array for any missing fields
  $missing = array();

  // process the $_POST variables
  foreach ($_POST as $key => $value) {
    // assign to temporary variable and strip whitespace if not an array
    $temp = is_array($value) ? $value : trim($value);
	// if empty and required, add to $missing array
	if (empty($temp) && in_array($key, $required)) {
	  array_push($missing, $key);
	  }
	// otherwise, assign to a variable of the same name as $key
	elseif (in_array($key, $expected)) {
	  ${$key} = $temp;
	  }
	}

  // go ahead only if all required fields OK
  if (empty($missing)) {
    // build the message
    $message = "Имя: $name\n\n";
	$message .= "Телефон: $phone\n\n";
    $message .= "Email: $email\n\n";
    $message .= "Сообщение: $comments";

    // limit line length to 70 characters
    $message = wordwrap($message, 100);

    // send it
    $mailSent = mail($to, $subject, $message, $headers);
	if ($mailSent) {
	  // $missing is no longer needed if the email is sent, so unset it
	  unset($missing);
	  }
    }
  }
?>
<?php include ('include/head.php');?>


	<body>

		<div id="site-content">

			<?php include ('include/header.php');?>

			<main class="main-content">
				<div class="page">
					<div class="container">
<ul class="breadcrumb">
  <li><a href="/">Главная</a></li>
   <li>Контакты</li>
</ul>

						<div class="row">
							<div class="col-md-5">
								<form action=""  method="POST" class="contact-form">
									<?php
				if (isset($missing) && in_array('name', $missing)) { ?>
				    <p style="color:red; font-weight:normal">Пожалуйста введите Ваше имя</p>
			    <?php } ?>
									<input type="text" id="name" name="name" placeholder="Имя...">
									<?php
				if (isset($missing) && in_array('phone', $missing)) { ?>
				    <p  style="color:red; font-weight:normal">Пожалуйста укажите Ваш телефон</p>
			    <?php } ?>
									<input type="text" id="phone" name="phone" placeholder="Телефон...">

									<input type="text" id="email" name="email" placeholder="Email...">
<?php
				if (isset($missing) && in_array('comments', $missing)) { ?>
				<p style="color:red; font-weight:normal">Пожалуйста, введите сообщение</p><?php } ?>
									<textarea name="comments" id="message"  placeholder="Сообщение..."></textarea>
									<div class="text-right">
										<button class="button large"  name="send" type="submit">Отправить</button>
									</div>
								</form>
							</div>
							<div class="col-md-6 col-md-offset-1">
								<div class="map-container">
									<div class="map"><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1z_9_zyxRTgpMxXx84_rm6IUrHP0" width="640" height="480"></iframe></div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</main>

			<?php include ('include/footer.php');?>