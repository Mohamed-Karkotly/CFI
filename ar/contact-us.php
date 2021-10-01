<html lang="ar" dir="rtl">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700&display=swap" rel="stylesheet">
	<link rel="icon" href="assets/images/favicon/favicon.ico">
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
			<?php include 'assets/css/newsletter.css'; ?>
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
	<title>اتصل بنا</title>

</head>

<body>
<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$sub=$_POST['subject'];
		$msg=$_POST['message'];

		$to='yooclp@gmail.com'; //Receiver Email ID
		$subject='تعبئة الفورم: '.$sub;
		$message="Name: ".$name."<br>"."Phone: ".$phone."<br>".":كتب لك التالي"."<br>".$msg;
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: <".$email.">" . "\r\n";
		$sent = mail($to,$subject,$message,$headers);

		if($sent){
			echo ("<header class=\"site-header\" id=\"header\">
			<h1 class=\"site-header__title\" data-lead-id=\"site-header-title\">شكراً لك!</h1>
		</header>
	
		<div class=\"main-content\">
			<i class=\"fa fa-check main-content__checkmark\" id=\"checkmark\"></i>
			<p class=\"main-content__body\" data-lead-id=\"main-content-body\">تم الإرسال بنجاح! شكراً لك "." ".$name."، سوف نقوم بالتواصل معك قريباً.</p>
			<hr>
			<a href=\"home.html\" class=\"main-filled-button3\">العودة للصفحة الرئيسية</a>
		</div>
	
		<footer class=\"site-footer\" id=\"footer\">
			<p class=\"site-footer__fineprint\" id=\"fineprint\">Copyright ©2020 | جميع الحقوق محفوظة</p>
		</footer>");
		}
		else{
			echo ("<header class=\"site-header\" id=\"header\">
			<h1 class=\"site-header__title\" data-lead-id=\"site-header-title\">عذراً!</h1>
		</header>
	
		<div class=\"main-content\">
			<i class=\"fa fa-times main-content__checkmark\" id=\"checkmark\"></i>
			<p>يبدو أن هناك خطأً حدث بشكل غير متعمد، يرجى الرجوع للصفحة السابقة وإعادة ملئ المعلومات وإرسال الرسالة مجدداً.</p>
			<a href=\"home.html\" class=\"main-filled-button3\">العودة للصفحة الرئيسية</a>
		</div>
	
		<footer class=\"site-footer\" id=\"footer\">
			<p class=\"site-footer__fineprint\" id=\"fineprint\">Copyright ©2020 | جميع الحقوق محفوظة</p>
		</footer>");
		}
	}
?>
</body>

</html>