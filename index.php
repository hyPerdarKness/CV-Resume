<?php session_start(); define("include",true); include("assets/config.php"); 
if($print['password']==""){ $_SESSION['view']="true"; header("Location: home.php"); }else{
if(isset($_SESSION['view']) && $_SESSION['view']=="true"){ header("Location: home.php"); }else{ ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex,nofollow,nosnippet,noodp,noarchive,noimageindex">
	<meta name="author" content="hyPerdarKness - github.com/hyPerdarKness">	

    <title><?php echo $print['siteadi']; ?></title>
	
	<link rel="shortcut icon" href="assets/images/favicon.png">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link id="theme-style" rel="stylesheet" href="assets/css/styles-<?php echo $print['renk']; ?>.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php echo $print['analytics']; ?>
</head> 
<body>

    <div class="wrapper">
        <div class="sidebar-wrapper-index">
            <div class="profile-container">
                <img class="profile" src="assets/images/profile.png" alt="avatar" />
                <h1 class="name"><?php echo $print['adsoyad']; ?></h1>
                <h3 class="tagline"><?php echo $print['text']; ?></h3>
            </div>
        </div>
        
        <div class="main-wrapper">           
            <section class="section summary-section">
                <h2 class="section-title"><i class="fa fa-lock"></i>Şifreli Giriş</h2>
                <div class="summary">
                <p>İçeriği görüntüleyebilmek için gereken şifreyi aşağıdaki alana yazın. Şifreyi bilmiyorsanız, öğrenmek için <a href="mailto:<?php echo $print['email']; ?>"><?php echo $print['email']; ?></a> adresine mail gönderebilirsiniz.</p>
				<br>
				<?php if(isset($_POST['checkpass'])){ $password = htmlclean($_POST['password']); $parola = md5(sha1(sha1(md5($password))));
				if($password==""){ echo '<div class="alert alert-danger">Boş geçmeye çalışmak biraz mantıksızca değil mi? Şifreyi gir!!</div>'; }else{
				if($parola!=$print['password']){ echo '<div class="alert alert-warning">Şifreyi yanlış yazıyorsun.. Kontrol ederek tekrar deneyebilirsin.</div>'; }else{
				echo '<div class="alert alert-success">Şifre doğru! Yönlendiriliyorsun...</div>'; $_SESSION['view']="true"; echo '<meta http-equiv="refresh" content="2;URL=home.php">'; } } } ?>
				<form method="post">
				<input type="password" name="password" class="form-control" placeholder="Şifreyi bu alana yazın..."><br>
				<button type="submit" name="checkpass" class="btn btn-danger pull-right"><i class="fa fa-unlock"></i> Şifreyi Doğrula</button>
				</form>
                </div>
            </section>
        </div>
    </div>
 
    <footer class="footer">
        <div class="text-center">
                <small class="copyright">Tasarım: <a href="http://themes.3rdwavemedia.com" target="_blank" rel="nofollow">Xiaoying Riley</a> <# --- #> PHP Kodlama: <a href="https://github.com/hyPerdarKness" target="_blank" rel="nofollow">hyPerdarKness</a></small>
        </div>
    </footer>
	
    <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="assets/js/main.js"></script>
	
</body>
</html>
<?php } } ?>