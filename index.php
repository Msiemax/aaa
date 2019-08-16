<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Popraw napisy</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<meta name="viewport" content="width=device-width", initial-scale=1.0">
	<meta name="keywords" content="napisy, napisy do filmow, napisy do seriali, utf-8, windows 1252, konwerter, convert, popraw napisy">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <nav class="site-nav">
                <a href="index.php"><img src="img/logo.png" width="60%"></a>
                <button class="hamburger">
                        <span class="hamburger_label">otworz/zamknij menu</span>
                </button>
                <div class="site-menu">
                    <ul>
                         <li>O projekcie</li>
                         <li>O mnie</li>
                         <li>Jak to dziala?</li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="contect">
        <div class="up_file">
				<form action="upload.php" method="post" enctype="multipart/form-data">
					<label class="icon-btn add-btn">
						<div class="add-icon"></div>
						<input class="add-file" type="file" name="file">
					</label>
					<button class="popraw" type="submit" name="submit">popraw</button><br>
				</form>
				<p class="opis">Typ pliku: .txt/.srt</p>
			</div>
        </div>
    </div>
    <div class="container_two">
		<div class="bg">
			<div class="bg_text">
				<p class="napis"><span class="litera">O</span> PROJEKCIE</p>
			</div>
		</div>
		<div class="content_text">
			<div class="first_text">
				<p>Suspendisse cursus, nisl sed bibendum ullamcorper, enim urna tempor neque,
				in luctus erat mauris sed risus. Pellentesque ultricies cursus massa ut volutpat.</p>
			</div>
			<div class="second_text">
				<p>Aenean dictum elementum arcu, a ultrices arcu tincidunt et.</p>
			</div>
			<div class="third_text">
			<p>Duis vehicula turpis non porttitor fringilla.</p>
			</div>
		</div>
		<div class="content_icons">
			<img src="img/txtf.png" alt="" style="margin-right: 40px;">
			<img src="img/srtf.png" alt="">
			<img src="img/pdff.png" alt="" style="margin-left: 40px;">
		</div>
    </div>
    <div class="container_three">
		<div class="about">
			<h1>Hi, I'm Mikel</h1>
			<div class="photo">
				<img src="img/me.png" width="10%">
			</div>
			<div class="text">
				<h1>LOREM IPSUM</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non nisi bibendum,
				   congue est eget, porta risus. Vivamus <span>accumsan felis ac malesuada</span> vulputate.
				   Morbi in est et neque rhoncus efficitur a a ipsum. Curabitur sit amet sodales nulla,
				   vel congue massa. Duis lacinia ex mi. <span>Integer tincidunt ornare turpis a varius.</span>
				   Proin mollis lectus ac arcu semper viverra.<br /><br /> Curabitur blandit auctor magna, ut
				   tristique mauris suscipit non. Quisque luctus fermentum quam non accumsan.</p>
				<div class="social">
					<a href="http://facebook.pl"><img src="img/f.png" style="margin-right: 10px;"></a>
					<a href="mailto:kontakt@poprawnapisy.pl"><img src="img/m.png" style="margin-right: 10px;"></a>
					<a href="http://linkedid.pl"><img src="img/l.png"></a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>