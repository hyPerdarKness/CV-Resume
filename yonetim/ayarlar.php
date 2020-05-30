<?php session_start(); if(isset($_SESSION['cvresume'])){ define("include",true); include("../assets/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="robots" content="noindex,nofollow,nosnippet,noodp,noarchive,noimageindex">
	<meta name="author" content="hyPerdarKness - github.com/hyPerdarKness">
	
    <title><?php echo $print['siteadi']; ?> Yönetim Paneli</title>
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/pages/dashboard.css" rel="stylesheet">
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
</head>
<body>

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="home.php"><?php echo $print['siteadi']; ?> Yönetim Paneli</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
		<li><a href="../index.php" target="_blank">Siteyi Görüntüle <i class="icon-chevron-right"></i></a></li>		
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> <?php echo $_SESSION['username']; ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="yonetim.php?id=<?php echo $_SESSION['cvresume']; ?>">Şifre Değiştir</a></li>
              <li><a href="logout.php">Çıkış Yap</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php include("plug/menu.php"); ?>

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
          <div class="widget">
            <div class="widget-header"><i class="icon-cog"></i>
              <h3>Ayarlar</h3>
            </div>
            <div class="widget-content">
<?php if(isset($_POST['kaydet'])){ if($_POST['password']==""){ $parola = ""; }else{ $password = htmlclean($_POST['password']); $parola = md5(sha1(sha1(md5($password)))); }

if($_POST['siteadi']==""){ echo '<div class="alert alert-danger">Site Adı alanını boş bırakmayın! Gerisi not matters..</div>'; }else{

$kayit = $db->prepare("update settings set siteadi=?,renk=?,password=?,analytics=?,adsoyad=?,text=?,email=?,telefon=?,web_link=?,web_ad=?,linkedin_link=?,linkedin_ad=?,github_link=?,github_ad=?,facebook_link=?,facebook_ad=?,twitter_link=?,twitter_ad=?,instagram_link=?,instagram_ad=?,youtube_link=?,youtube_ad=?"); 
$kayit->execute(array($_POST['siteadi'], $_POST['renk'], $parola, $_POST['analytics'], $_POST['adsoyad'], $_POST['text'], $_POST['email'], $_POST['telefon'], $_POST['web_link'], $_POST['web_ad'], $_POST['linkedin_link'], $_POST['linkedin_ad'], $_POST['github_link'], $_POST['github_ad'], $_POST['facebook_link'], $_POST['facebook_ad'], $_POST['twitter_link'], $_POST['twitter_ad'], $_POST['instagram_link'], $_POST['instagram_ad'], $_POST['youtube_link'], $_POST['youtube_ad']));
echo '<div class="alert alert-success">Düzenleme kaydedildi...</div>'; echo '<meta http-equiv="refresh" content="2">'; } } ?>
	<form method="post">
<?php if($print['password']!=""){ echo '<div class="alert alert-warning">Şifreli giriş aktif! <br>Bu sayfada yapacağınız düzenlemelerde şifre alanına daha önceden belirlediğiniz şifreyi yazmayı unutmayın yada yeni şifre belirleyin. Boş bırakırsanız şifreli giriş pasif olacaktır.</div>'; } ?>
	<div class="span5" style="float:left;">
	
		<div class="control-group">											
			<label class="control-label">Site Adı</label>
			<div class="controls">
			<input type="text" class="span5" name="siteadi" value="<?php echo $print['siteadi']; ?>">
			</div>				
		</div>
		
		<div class="control-group">											
			<label class="control-label">Renk</label>
			<div class="controls">
			<input type="radio" name="renk" value="1"<?php if($print['renk']=="1"){ echo ' checked'; } ?>> <img src="img/renk1.jpg">
			<input type="radio" name="renk" value="2"<?php if($print['renk']=="2"){ echo ' checked'; } ?>> <img src="img/renk2.jpg">
			<input type="radio" name="renk" value="3"<?php if($print['renk']=="3"){ echo ' checked'; } ?>> <img src="img/renk3.jpg">
			<input type="radio" name="renk" value="4"<?php if($print['renk']=="4"){ echo ' checked'; } ?>> <img src="img/renk4.jpg">
			<input type="radio" name="renk" value="5"<?php if($print['renk']=="5"){ echo ' checked'; } ?>> <img src="img/renk5.jpg">
			<input type="radio" name="renk" value="6"<?php if($print['renk']=="6"){ echo ' checked'; } ?>> <img src="img/renk6.jpg">
			</div>				
		</div>				
		
		<div class="control-group">											
			<label class="control-label">Şifre</label>
			<div class="controls">
			<input type="text" class="span5" name="password">
			<p class="help-block">Sayfaya şifreli erişim vermek isterseniz istediğiniz şifreyi buraya yazın. Şifreler MD5 ile veritabanına kaydedilir.
			Ayarlar sayfasında farklı bilgileri değiştirirken bu alana geçerli şifrenizi yazın. Eğer şifreli erişim istemiyorsanız boş bırakın.</p>			
			</div>				
		</div>	
		
		<div class="control-group" style="float:left; margin-right:30px;">											
			<label class="control-label">İnternet Sitesi Adı</label>
			<div class="controls">
			<input type="text" class="span2" name="web_ad" value="<?php echo $print['web_ad']; ?>">
			</div>				
		</div>		
		
		<div class="control-group">											
			<label class="control-label">İnternet Sitesi URL</label>
			<div class="controls">
			<input type="text" class="span3" name="web_link" value="<?php echo $print['web_link']; ?>">
			</div>				
		</div>	

		<div class="control-group" style="float:left; margin-right:30px;">											
			<label class="control-label">Github Hesap Adı</label>
			<div class="controls">
			<input type="text" class="span2" name="github_ad" value="<?php echo $print['github_ad']; ?>">
			</div>				
		</div>		
		
		<div class="control-group">											
			<label class="control-label">Github URL</label>
			<div class="controls">
			<input type="text" class="span3" name="github_link" value="<?php echo $print['github_link']; ?>">
			</div>				
		</div>	
		
		<div class="control-group" style="float:left; margin-right:30px;">											
			<label class="control-label">Linkedin Hesap Adı</label>
			<div class="controls">
			<input type="text" class="span2" name="linkedin_ad" value="<?php echo $print['linkedin_ad']; ?>">
			</div>				
		</div>		
		
		<div class="control-group">											
			<label class="control-label">Linkedin URL</label>
			<div class="controls">
			<input type="text" class="span3" name="linkedin_link" value="<?php echo $print['linkedin_link']; ?>">
			</div>				
		</div>		

		<div class="control-group" style="float:left; margin-right:30px;">											
			<label class="control-label">Facebook Hesap Adı</label>
			<div class="controls">
			<input type="text" class="span2" name="facebook_ad" value="<?php echo $print['facebook_ad']; ?>">
			</div>				
		</div>		
		
		<div class="control-group">											
			<label class="control-label">Facebook URL</label>
			<div class="controls">
			<input type="text" class="span3" name="facebook_link" value="<?php echo $print['facebook_link']; ?>">
			</div>				
		</div>	

		<div class="control-group" style="float:left; margin-right:30px;">											
			<label class="control-label">Instagram Hesap Adı</label>
			<div class="controls">
			<input type="text" class="span2" name="instagram_ad" value="<?php echo $print['instagram_ad']; ?>">
			</div>				
		</div>		
		
		<div class="control-group">											
			<label class="control-label">Instagram URL</label>
			<div class="controls">
			<input type="text" class="span3" name="instagram_link" value="<?php echo $print['instagram_link']; ?>">
			</div>				
		</div>		

	</div>
	
	<div class="span6" style="float:right;">
	
		<div class="control-group">											
			<label class="control-label">Sayaç Kodu</label>
			<div class="controls">
			<textarea class="span5" name="analytics"><?php echo $print['analytics']; ?></textarea>
			<p class="help-block">analytics, metrica vb.</p>			
			</div>				
		</div>	
	
		<div class="control-group">											
			<label class="control-label">Ad Soyad</label>
			<div class="controls">
			<input type="text" class="span5" name="adsoyad" value="<?php echo $print['adsoyad']; ?>">
			</div>				
		</div>

		<div class="control-group">											
			<label class="control-label">Kısa Yazı (ad soyad altına)</label>
			<div class="controls">
			<input type="text" class="span5" name="text" value="<?php echo $print['text']; ?>">
			</div>				
		</div>

		<div class="control-group">											
			<label class="control-label">E-Mail</label>
			<div class="controls">
			<input type="text" class="span5" name="email" value="<?php echo $print['email']; ?>">
			</div>				
		</div>

		<div class="control-group">											
			<label class="control-label">Telefon</label>
			<div class="controls">
			<input type="text" class="span5" name="telefon" value="<?php echo $print['telefon']; ?>">
			</div>				
		</div>		

		<div class="control-group" style="float:left; margin-right:30px;">											
			<label class="control-label">Twitter Hesap Adı</label>
			<div class="controls">
			<input type="text" class="span2" name="twitter_ad" value="<?php echo $print['twitter_ad']; ?>">
			</div>				
		</div>		
		
		<div class="control-group">											
			<label class="control-label">Twitter URL</label>
			<div class="controls">
			<input type="text" class="span3" name="twitter_link" value="<?php echo $print['twitter_link']; ?>">
			</div>				
		</div>

		<div class="control-group" style="float:left; margin-right:30px;">											
			<label class="control-label">Youtube Hesap Adı</label>
			<div class="controls">
			<input type="text" class="span2" name="youtube_ad" value="<?php echo $print['youtube_ad']; ?>">
			</div>				
		</div>		
		
		<div class="control-group">											
			<label class="control-label">Youtube URL</label>
			<div class="controls">
			<input type="text" class="span3" name="youtube_link" value="<?php echo $print['youtube_link']; ?>">
			</div>				
		</div>		
	
	</div>

		<div class="span11 form-actions">
			<button type="submit" name="kaydet" class="btn btn-primary"><i class="icon-save"></i> Kaydet</button> 
			<a class="btn btn-danger" href="home.php"><i class="icon-remove-circle"></i> İptal</a>
		</div> 		
	</form>

            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="footer" align="center">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> Tasarım: <a href="http://www.egrappler.com" target="_blank">Bootstrap Responsive Admin Template</a> <# --- #> PHP Kodlama: <a href="https://github.com/hyPerdarKness" target="_blank">hyPerdarKness</a></div>
      </div>
    </div>
  </div>
</div>

	<script src="js/jquery-1.7.2.min.js"></script> 
	<script src="js/bootstrap.js"></script>
	<script src="js/base.js"></script> 
	
</body>
</html>
<?php }else{ echo '<meta http-equiv="refresh" content="0;URL=../index.php">'; } ?>