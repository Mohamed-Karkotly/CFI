<html lang="tr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<link rel="icon" href="assets/images/favicon/favicon.ico">
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
			<?php include 'assets/css/newsletter.css'; ?>
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
	<title>Subscription</title>

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
		$subject='Form Submission:'.$sub;
		$message="Name: ".$name."<br>"."Phone: ".$phone."<br>"."Wrote the following from the turkish version: "."<br>".$msg;
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: <".$email.">" . "\r\n";
		$sent = mail($to,$subject,$message,$headers);

		if($sent){
			echo ("<header class=\"site-header\" id=\"header\">
			<h1 class=\"site-header__title\" data-lead-id=\"site-header-title\">TEŞEKKÜR EDERİM!</h1>
		</header>
	
		<div class=\"main-content\">
			<i class=\"fa fa-check main-content__checkmark\" id=\"checkmark\"></i>
			<p class=\"main-content__body\" data-lead-id=\"main-content-body\">Başarıyla gönderildi! teşekkür ederim"." ".$name.", Yakında sizinle iletişime geçeceğiz!</p>
			<hr>
			<a href=\"ev.html\" class=\"main-filled-button3\">Ana Sayfaya devam et</a>
		</div>
	
		<footer class=\"site-footer\" id=\"footer\">
			<p class=\"site-footer__fineprint\" id=\"fineprint\">Telif hakkı ©2020 | Her hakkı saklıdır</p>
		</footer>");
		}
		else{
			echo ("<header class=\"site-header\" id=\"header\">
			<h1 class=\"site-header__title\" data-lead-id=\"site-header-title\">Oops!</h1>
		</header>
	
		<div class=\"main-content\">
			<i class=\"fa fa-times main-content__checkmark\" id=\"checkmark\"></i>
			<p>Hmm .. Görünüşe göre bir şeyler ters gitti, lütfen geri dönün ve tekrar deneyin.</p>
			<a href=\"ev.html\" class=\"main-filled-button3\">Anasayfaya geri dön</a>
		</div>
	
		<footer class=\"site-footer\" id=\"footer\">
			<p class=\"site-footer__fineprint\" id=\"fineprint\">Telif hakkı ©2020 | Her hakkı saklıdır</p>
		</footer>");
		}
	}
?>
</body>

</html>