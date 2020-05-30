<?php session_start(); if(isset($_SESSION['view']) && $_SESSION['view']=="true"){ define("include",true); include("assets/config.php"); ?>
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
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img class="profile" src="assets/images/profile.png" alt="avatar" />
                <h1 class="name"><?php echo $print['adsoyad']; ?></h1>
                <h3 class="tagline"><?php echo $print['text']; ?></h3>
            </div>
            
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
<?php if($print['email']==""){ }else{ ?><li class="email"><i class="fa fa-envelope"></i><a href="mailto: <?php echo $print['email']; ?>"><?php echo $print['email']; ?></a></li><?php } ?>
<?php if($print['telefon']==""){ }else{ ?><li class="phone"><i class="fa fa-phone"></i><a href="tel:<?php echo $print['telefon']; ?>"><?php echo $print['telefon']; ?></a></li><?php } ?>
<?php if($print['web_ad']==""){ }else{ ?><li class="website"><i class="fa fa-globe"></i><a href="<?php echo $print['web_link']; ?>" target="_blank"><?php echo $print['web_ad']; ?></a></li><?php } ?>
<?php if($print['linkedin_ad']==""){ }else{ ?><li class="linkedin"><i class="fa fa-linkedin"></i><a href="<?php echo $print['linkedin_link']; ?>" target="_blank"><?php echo $print['linkedin_ad']; ?></a></li><?php } ?>
<?php if($print['github_ad']==""){ }else{ ?><li class="github"><i class="fa fa-github"></i><a href="<?php echo $print['github_link']; ?>" target="_blank"><?php echo $print['github_ad']; ?></a></li><?php } ?>
<?php if($print['facebook_ad']==""){ }else{ ?><li class="facebook"><i class="fa fa-facebook"></i><a href="<?php echo $print['facebook_link']; ?>" target="_blank"><?php echo $print['facebook_ad']; ?></a></li><?php } ?>
<?php if($print['twitter_ad']==""){ }else{ ?><li class="twitter"><i class="fa fa-twitter"></i><a href="<?php echo $print['twitter_link']; ?>" target="_blank"><?php echo $print['twitter_ad']; ?></a></li><?php } ?>
<?php if($print['instagram_ad']==""){ }else{ ?><li class="instagram"><i class="fa fa-instagram"></i><a href="<?php echo $print['instagram_link']; ?>" target="_blank"><?php echo $print['instagram_ad']; ?></a></li><?php } ?>
<?php if($print['youtube_ad']==""){ }else{ ?><li class="youtube"><i class="fa fa-youtube"></i><a href="<?php echo $print['youtube_link']; ?>" target="_blank"><?php echo $print['youtube_ad']; ?></a></li><?php } ?>
                </ul>
            </div>
    <?php $aa1 = $db->prepare("select * from education order by sira asc"); $aa1->execute(); if($aa1->rowCount()=="0"){ }else{ ?> 			
            <div class="education-container container-block">
                <h2 class="container-block-title">Eğitim Bilgisi</h2>
	<?php foreach($aa1 as $aa2){ ?>
                <div class="item">
                    <h4 class="degree"><?php echo $aa2['okul_adi']; ?></h4>
                    <h5 class="meta"><?php echo $aa2['bolum']; ?></h5>
                    <div class="time"><?php echo $aa2['tarih']; ?></div>
                </div>
	<?php } ?>
            </div>
    <?php } $bb1 = $db->prepare("select * from language order by sira asc"); $bb1->execute(); if($bb1->rowCount()=="0"){ }else{ ?>             
            <div class="languages-container container-block">
                <h2 class="container-block-title">Dil Bilgisi</h2>
                <ul class="list-unstyled interests-list">
	<?php foreach($bb1 as $bb2){ ?>				
					<li><?php echo $bb2['dil_adi']; ?> <span class="lang-desc">(<?php echo $bb2['seviye']; ?>)</span></li>
	<?php } ?>
                </ul>
            </div>
    <?php } $cc1 = $db->prepare("select * from ability order by sira asc"); $cc1->execute(); if($cc1->rowCount()=="0"){ }else{ ?>              
            <div class="interests-container container-block">
                <h2 class="container-block-title">Hobiler/Yetenekler</h2>
                <ul class="list-unstyled interests-list">
	<?php foreach($cc1 as $cc2){ ?>				
                    <li><?php echo $cc2['baslik']; ?></li>
	<?php } ?>
                </ul>
            </div>
	<?php } ?>
        </div>
        
        <div class="main-wrapper">           
            <section class="section summary-section">
                <h2 class="section-title"><i class="fa fa-user"></i>Ön Yazı/Özet Bilgi</h2>
                <div class="summary">
                <?php echo $print['on_yazi']; ?>
                </div>
            </section>
    <?php $dd1 = $db->prepare("select * from deneyimler order by sira asc"); $dd1->execute(); if($dd1->rowCount()=="0"){ }else{ ?>          
            <section class="section experiences-section">
                <h2 class="section-title"><i class="fa fa-briefcase"></i>Deneyimler</h2>
	<?php foreach($dd1 as $dd2){ ?>               
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title"><?php echo $dd2['gorev']; ?></h3>
                            <div class="time"><?php echo $dd2['bas_tarih']; ?> - <?php if($dd2['bit_tarih']==""){ echo 'Hala çalışıyorum'; }else{ echo $dd2['bit_tarih']; } ?></div>
                        </div>
                        <div class="company"><?php echo $dd2['company']; ?></div>
                    </div>
                    <div class="details">
					<?php echo $dd2['text']; ?>
                    </div>
                </div>
	<?php } ?>                
            </section>
    <?php } $ee1 = $db->prepare("select * from projeler order by sira asc"); $ee1->execute(); if($ee1->rowCount()=="0"){ }else{ ?>            
            <section class="section projects-section">
                <h2 class="section-title"><i class="fa fa-archive"></i>Projeler</h2>
	<?php foreach($ee1 as $ee2){ ?>				
                <div class="item">
                    <span class="project-title"><b><?php echo $ee2['baslik']; ?></b></span> <span class="project-tagline"><?php echo $ee2['text']; ?></span>
                </div>
	<?php } ?>
            </section>
    <?php } $ff1 = $db->prepare("select * from programlar order by sira asc"); $ff1->execute(); if($ff1->rowCount()=="0"){ }else{ ?>
            <section class="skills-section section">
                <h2 class="section-title"><i class="fa fa-rocket"></i> Programlar</h2>
                <div class="skillset">   
	<?php foreach($ff1 as $ff2){ ?>				
                    <div class="item">
                        <h3 class="level-title"><?php echo $ff2['baslik']; ?></h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="<?php echo $ff2['seviye']; ?>%">
                            </div>                                      
                        </div>                                
                    </div>
	<?php } ?>                    
                </div>  
            </section>
	<?php } ?>
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
<?php }else{ echo '<meta http-equiv="refresh" content="0;URL=index.php">'; } ?>