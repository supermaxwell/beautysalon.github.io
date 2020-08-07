<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '827276247452023');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=827276247452023&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
		<meta name="google-site-verification" content="gmtQfTt6x3ye-ol3mHPgLtzxbJxV56jVicUZRiT5rgM" />
		<meta name="robots" content="all">
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-5282668-14"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-5282668-14');
</script>

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

		<!-- Loading third party fonts -->
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/novecento-font/novecento-font.css" rel="stylesheet" type="text/css">

		<link href="https://fonts.googleapis.com/css?family=Oswald|Poiret+One|Roboto&amp;subset=cyrillic" rel="stylesheet">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">


		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->


<?php
$page = basename($_SERVER['SCRIPT_NAME'], '.php');
$page = str_replace('_', ' ', $page);
if ($page == 'index') {
	echo '
	<meta name="description" content="«Laser Studio Esthetic-салон красоты, Косметология лица и тела, коррекция фигуры, лазерная эпиляция,лазерная эпиляция Кривой Рог, профессиональная косметика, массаж, наращивание ресниц, парикмахерские услуги, лечение волос, маникюр, педикюр, наращивание ногтей">
	<meta name="keywords" content="лазерная эпиляция, александритовый лазер, фотоомоложение, удаление сосудов, удаление пигментации, лечение акне, чистка лица, лифтинг, массаж лица, альгинатные маски, термомаски, лечение проблемной кожи, пилинги">';
}
elseif ($page == 'portfolio-acryl') {
    echo '<meta name="keywords" content="Laser Studio Esthetic максистоун, акриловый камень, искусственный камень, столешницы, столешница для кухни, искусственные столешницы, столешница из камня, столешница из искусственного камня, мойдодыр, подоконник, подоконники из искусственного камня, отделка декоративным камнем, барная стойка, стойка администратора, стойка ресепшн">';
}

elseif ($page == 'portfolio-quartz') {
    echo '

	<meta name="keywords" content="Laser Studio Esthetic максистоун, изделия из кварца, изделия из кварцевого камня, подоконник, подоконники из искусственного камня, искусственные столешницы, столешница из камня, подоконник, подоконники из искусственного камня, отделка декоративным камнем, барная стойка, стойка администратора, стойка ресепшн">';
}

elseif ($page == 'portfolio-kitchen') {
    echo '<meta name="keywords" content="Laser Studio Esthetic максистоун,мебель на заказ, изготовление мебели, кухня, столешница для кухни">';
}

elseif ($page == 'portfolio-furniture') {
    echo '<meta name="keywords" content="Laser Studio Esthetic максистоун, корпусная мебель, мебель на заказ, изготовление мебели, кухня, шкафы-купе, детская мебель, мебель для прихожей, мебель для спальни, офисная мебель, барная стойка, стойка администратора, стойка ресепшн ">';
}

elseif ($page == 'acryl') {
    echo '
	<meta name="description" content="Laser Studio Esthetic (Кривой Рог, Украина). Изделия из акрилового камня. Столешницы, мойдодыры, подоконники, барные стойки.">
	<meta name="keywords" content="Laser Studio Esthetic максистоун, акриловый камень, искусственный камень, столешница для кухни, искусственные столешницы, столешница из камня, столешница из искусственного камня, мойдодыр, подоконник, подоконники из искусственного камня, отделка декоративным камнем, барная стойка, стойка администратора, ресепшн">';
}

elseif ($page == 'quartz') {
    echo '
	<meta name="description" content="Изделия из кварца. Столешницы, мойдодыры, подоконники, барные стойки, отделка лестниц и лестничных маршей.">
	<meta name="keywords" content="Laser Studio Esthetic максистоун,кварц, кварцевый камень, подоконник, подоконники из искусственного камня, изделия из кварца, изделия из кварцевого камня, столешница для кухни, столешница из камня, столешница, отделка декоративным камнем, барная стойка, стойка администратора, ресепшн">';
}

elseif ($page == 'furniture') {
    echo '
	<meta name="description" content="Корпусная мебель по индивидуальным проектам. Кухни, детские, спальные гарнитуры, прихожие, шкафы-купе.">
	<meta name="keywords" content="Laser Studio Esthetic максистоун,кварц, мебель на заказ, изготовление мебели, кухня,  изготовление мебели, кухня, шкафы-купе, детская мебель, мебель для прихожей, мебель для спальни, офисная мебель, барная стойка, стойка администратора, ресепшн">';
}

elseif ($page == 'portfolio') {
    echo '
	<meta name="description" content="Портфолио. Наши работы.">
	<meta name="keywords" content="Laser Studio Esthetic максистоун,кварц, мебель на заказ, изготовление мебели, кухня,  изготовление мебели, кухня, шкафы-купе, детская мебель, мебель для прихожей, мебель для спальни, офисная мебель, барная стойка, стойка администратора, ресепшн">';
}



?>





<?php
$title = basename($_SERVER['SCRIPT_NAME'], '.php');
$title = str_replace('_', ' ', $title);

if ($title == 'index') {
	$title = 'Салон красоты - Laser Studio Esthetic';
}
elseif ($title == 'service') {
    $title = 'Салон красоты - Laser Studio Esthetic | Услуги';
}
elseif ($title == 'contact') {
    $title = 'Салон красоты - Laser Studio Esthetic | Контакты';
}
elseif ($title == 'gallery') {
    $title = 'Салон красоты - Laser Studio Esthetic | Фотогалерея';
}
elseif ($title == 'about') {
    $title = 'Салон красоты - Laser Studio Esthetic | О нас';
}
elseif ($title == 'udalenie-pigmentnyh-pyaten') {
    $title = 'Салон красоты - Laser Studio Esthetic | Удаление пигментных пятен';
}
elseif ($title == 'udalenie-papilom') {
    $title = 'Салон красоты - Laser Studio Esthetic | Удаление паппилом';
}
elseif ($title == 'solariy') {
    $title = 'Салон красоты - Laser Studio Esthetic | Солярий';
}
elseif ($title == 'photoyouth.php') {
    $title = 'Салон красоты - Laser Studio Esthetic | Фотоомоложение';
}
elseif ($title == 'photo-epil') {
    $title = 'Салон красоты - Laser Studio Esthetic | Фотоэпиляция';
}
elseif ($title == 'miostimulyaciya') {
    $title = 'Laser Studio Esthetic | Миостимуляция';
}
elseif ($title == 'mezoterapiya-lica-i-tela') {
    $title = 'Салон красоты - Laser Studio Esthetic | Мезотерапия лица и тела';
}
elseif ($title == 'lasernaya-epilyaciya') {
    $title = 'Салон красоты - Laser Studio Esthetic | Лазерная эпиляция';
}
elseif ($title == 'konturnaya-plastika') {
    $title = 'Салон красоты - Laser Studio Esthetic | Контурная пластика';
}
elseif ($title == 'fotoudalenie-sosudov') {
    $title = 'Салон красоты - Laser Studio Esthetic | Фотоудаление сосудов';
}
elseif ($title == 'chistka-lica') {
    $title = 'Салон красоты - Laser Studio Esthetic | Чистка лица';
}
elseif ($title == 'botox') {
    $title = 'Салон красоты - Laser Studio Esthetic | Инъекции ботокса, диспорта';
}
elseif ($title == 'biovitarilizaciya') {
    $title = 'Салон красоты - Laser Studio Esthetic | Биовитарилизация';
}
elseif ($title == 'apparatnaya-kosmetologiya') {
    $title = 'Салон красоты - Laser Studio Esthetic | Аппаратная косметология';
}
elseif ($title == 'akne') {
    $title = 'Салон красоты - Laser Studio Esthetic | Фотолечение акне';
}
elseif ($title == 'pillingi') {
    $title = 'Салон красоты - Laser Studio Esthetic | Пиллинги';
}
		elseif ($title == 'procedury-po-telu') {
    $title = 'Салон красоты - Laser Studio Esthetic | Процедуры по телу';
}
$title = ucwords($title);
?>
    <title><?php echo  $title; ?></title>

<?php

// This function will take $_SERVER['REQUEST_URI'] and build a breadcrumb based on the user's current path
function breadcrumbs($separator = ' &raquo; ', $home = 'Главная') {
    // This gets the REQUEST_URI (/path/to/file.php), splits the string (using '/') into an array, and then filters out any empty values
    $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));

    // This will build our "base URL" ... Also accounts for HTTPS :)
    $base = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

    // Initialize a temporary array with our breadcrumbs. (starting with our home page, which I'm assuming will be the base URL)
    $breadcrumbs = Array("<a href=\"$base\">$home</a>");

    // Find out the index for the last value in our path array
    $last = end(array_keys($path));

    // Build the rest of the breadcrumbs
    foreach ($path AS $x => $crumb) {
        // Our "title" is the text that will be displayed (strip out .php and turn '_' into a space)
        $title = ucwords(str_replace(Array('.php', '_'), Array('', ' '), $crumb));

        // If we are not on the last index, then display an <a> tag
        if ($x != $last)
            $breadcrumbs[] = "<a href=\"$base$crumb\">$title</a>";
        // Otherwise, just display the title (minus)
        else
            $breadcrumbs[] = $title;
    }

    // Build our temporary array (pieces of bread) into one big string :)
    return implode($separator, $breadcrumbs);
}

?>




    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>