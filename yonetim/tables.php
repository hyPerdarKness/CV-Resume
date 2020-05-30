<?php session_start(); if(isset($_SESSION['cvresume'])){ define("include",true); include("../assets/config.php");  $id = htmlclean($_GET['id']); $icon = htmlclean($_GET['icon']); ?>
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
            <div class="widget-header"><i class="icon-<?php echo $icon; ?>"></i>
              <h3><?php echo $id; ?></h3>
            </div>
            <div class="widget-content">
<?php 

if(isset($_GET['sil'])){
	
switch ($id){
   case "Deneyimler": $db->query("delete from deneyimler where id='".intval($_GET['sil'])."'"); echo '<div class="alert alert-warning">Kayıt silindi...</div> <meta http-equiv="refresh" content="2;URL=tables.php?id=Deneyimler&icon=suitcase">'; break;
   case "Projeler": $db->query("delete from projeler where id='".intval($_GET['sil'])."'"); echo '<div class="alert alert-warning">Kayıt silindi...</div> <meta http-equiv="refresh" content="2;URL=tables.php?id=Projeler&icon=archive">'; break;
   case "Programlar": $db->query("delete from programlar where id='".intval($_GET['sil'])."'"); echo '<div class="alert alert-warning">Kayıt silindi...</div> <meta http-equiv="refresh" content="2;URL=tables.php?id=Programlar&icon=rocket">'; break;
   case "Eğitimler": $db->query("delete from education where id='".intval($_GET['sil'])."'"); echo '<div class="alert alert-warning">Kayıt silindi...</div> <meta http-equiv="refresh" content="2;URL=tables.php?id=Eğitimler&icon=trophy">'; break;
   case "Diller": $db->query("delete from language where id='".intval($_GET['sil'])."'"); echo '<div class="alert alert-warning">Kayıt silindi...</div> <meta http-equiv="refresh" content="2;URL=tables.php?id=Diller&icon=globe">'; break;
   case "Hobiler/Yetenekler": $db->query("delete from ability where id='".intval($_GET['sil'])."'"); echo '<div class="alert alert-warning">Kayıt silindi...</div> <meta http-equiv="refresh" content="2;URL=tables.php?id=Hobiler/Yetenekler&icon=asterisk">'; break;
   default: echo '<meta http-equiv="refresh" content="0;URL=home.php">'; exit;
}

}


switch ($id){
   case "Deneyimler": $sql = $db->query("select * from deneyimler order by sira asc"); $djadja = "Deneyim"; echo '<a href="add.php?table='.$djadja.'" class="btn btn-success"><i class="icon-plus"></i> Deneyim Ekle</a><br><br>'; break;
   case "Projeler": $sql = $db->query("select * from projeler order by sira asc"); $djadja = "Proje"; echo '<a href="add.php?table='.$djadja.'" class="btn btn-success"><i class="icon-plus"></i> Proje Ekle</a><br><br>'; break;
   case "Programlar": $sql = $db->query("select * from programlar order by sira asc"); $djadja = "Program"; echo '<a href="add.php?table='.$djadja.'" class="btn btn-success"><i class="icon-plus"></i> Program Ekle</a><br><br>'; break;
   case "Eğitimler": $sql = $db->query("select * from education order by sira asc"); $djadja = "Eğitim"; echo '<a href="add.php?table='.$djadja.'" class="btn btn-success"><i class="icon-plus"></i> Eğitim Ekle</a><br><br>'; break;
   case "Diller": $sql = $db->query("select * from language order by sira asc"); $djadja = "Dil"; echo '<a href="add.php?table='.$djadja.'" class="btn btn-success"><i class="icon-plus"></i> Dil Ekle</a><br><br>'; break;
   case "Hobiler/Yetenekler": $sql = $db->query("select * from ability order by sira asc"); $djadja = "Hobi/Yetenek"; echo '<a href="add.php?table='.$djadja.'" class="btn btn-success"><i class="icon-plus"></i> Hobi/Yetenek Ekle</a><br><br>'; break;
   default: echo '<meta http-equiv="refresh" content="0;URL=home.php">'; exit;
}

?>
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th style="text-align:center;">Sıra No</th>
                    <th>Başlık</th>
                    <?php if($id=="Deneyimler"){ ?><th>Şirket</th><?php } ?>
                    <th class="td-actions"></th>
                  </tr>
                </thead>
                <tbody>
	<?php foreach($sql as $yazdir){ ?>
                  <tr>
                    <td width="50" style="text-align:center;"><?php echo $yazdir['sira']; ?></td>
                    <td><?php if($id=="Deneyimler"){ echo $yazdir['gorev']; }elseif($id=="Diller"){ echo $yazdir['dil_adi']; }elseif($id=="Eğitimler"){ echo $yazdir['okul_adi']; }else{ echo $yazdir['baslik']; } ?></td>
                    <?php if($id=="Deneyimler"){ ?><td><?php echo $yazdir['company']; ?></td><?php } ?>
					<td width="100" class="td-actions"><a href="edit.php?table=<?php echo $djadja; ?>&id=<?php echo $yazdir['id']; ?>" class="btn btn-small btn-info"><i class="btn-icon-only icon-edit"></i></a>
					<a href="<?php echo $_SERVER['REQUEST_URI']; ?>&sil=<?php echo $yazdir['id']; ?>" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"></i></a></td>
                  </tr>
	<?php } ?>
                </tbody>
              </table>

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