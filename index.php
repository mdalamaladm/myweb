<?php 
include 'must_login.php' 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Alam's Blog</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id='body'>
	<div id='specific'></div>
	<header id="header">
			<?php include 'navigation.php' ?>
	</header>
	<main id="main">
		<h1>Alam's Blog</h1>
		
		<h2>Jelajahi Yang Kamu Inginkan!</h2>
		<p>Di website ini kamu bisa menjelajahi tiga hal:</p>
		<div class="flex-home-list">
			<a href="javascript:void(0);" id="pumum" class="pumum">
					<div id="pumum2">
							<h2>Pengetahuan Umum</h2>
							<p>Kita akan mempelajari segala macam
									pengetahuan yang ada di dunia ini.
									Ditinjau dari asal usulnya,
									sainsnya, dan lainnya.
							</p>
					</div>
			</a>
			<a href="javascript:void(0);" id="bahasa" class="bahasa">
					<div id="bahasa2">
							<h2>Bahasa</h2>
							<p>Mempelajari bahasa dari dasarnya,
									kaidahnya, kosakatanya dan lainnya.
									Bahasa yang akan dipelajari untuk saat
									ini ada tiga: bahasa Indonesia, bahasa Inggris,
									dan bahasa Arab.
							</p>
					</div>
			</a>
			<a href="javascript:void(0);" id="programming" class="programming">
					<div id="programming2">
							<h2>Programming</h2>
							<p>Membuat <i>Website</i>, <i>Software</i> dengan memahami
									bahasa pemrograman dan kawan-kawannya. Di sini
									kita akan mempelajari beberapa pembahasan Programming,
									dasarnya, permasalahannya, dan lainnya.
							</p>
					</div>
				</a>
			</div>
	</main>
	<script type='text/javascript' src="animation.js"></script>
	<?php include 'footer.php'
	?>
</body>
</html>