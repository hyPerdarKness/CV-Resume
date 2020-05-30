<?php if(!defined("include")){ echo '<meta http-equiv="refresh" content="0;URL=../index.php">'; exit(); } $p = basename($_SERVER['REQUEST_URI']); ?>
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li<?php if($p=="home.php"){ echo ' class="active"'; } ?>><a href="home.php"><i class="icon-dashboard"></i><span>Anasayfa</span> </a> </li>
        <li<?php if($p=="text.php"){ echo ' class="active"'; } ?>><a href="text.php"><i class="icon-file"></i><span>Ön Yazı/Özet Bilgi</span> </a> </li>
        <li<?php if(@$id=="Deneyimler"||@$table=="Deneyim"){ echo ' class="active"'; } ?>><a href="tables.php?id=Deneyimler&icon=suitcase"><i class="icon-suitcase"></i><span>Deneyimler</span> </a> </li>
        <li<?php if(@$id=="Projeler"||@$table=="Proje"){ echo ' class="active"'; } ?>><a href="tables.php?id=Projeler&icon=archive"><i class="icon-archive"></i><span>Projeler</span> </a></li>
        <li<?php if(@$id=="Programlar"||@$table=="Program"){ echo ' class="active"'; } ?>><a href="tables.php?id=Programlar&icon=rocket"><i class="icon-rocket"></i><span>Programlar</span> </a> </li>
        <li<?php if(@$id=="Eğitimler"||@$table=="Eğitim"){ echo ' class="active"'; } ?>><a href="tables.php?id=Eğitimler&icon=trophy"><i class="icon-trophy"></i><span>Eğitimler</span> </a> </li>
        <li<?php if(@$id=="Diller"||@$table=="Dil"){ echo ' class="active"'; } ?>><a href="tables.php?id=Diller&icon=globe"><i class="icon-globe"></i><span>Diller</span> </a> </li>
        <li<?php if(@$id=="Hobiler/Yetenekler"||@$table=="Hobi/Yetenek"){ echo ' class="active"'; } ?>><a href="tables.php?id=Hobiler/Yetenekler&icon=asterisk"><i class="icon-asterisk"></i><span>Hobiler/Yetenekler</span> </a> </li>
        <li<?php if($p=="ayarlar.php"){ echo ' class="active"'; } ?>><a href="ayarlar.php"><i class="icon-cog"></i><span>Ayarlar</span> </a> </li>
        <li<?php if($p=="yonetim.php?id=".$_SESSION['cvresume'].""){ echo ' class="active"'; } ?>><a href="yonetim.php?id=<?php echo $_SESSION['cvresume']; ?>"><i class="icon-user"></i><span>Yönetim</span> </a> </li>
      </ul>
    </div>
  </div>
</div>