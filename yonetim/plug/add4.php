<?php if(!defined("include")){ echo '<meta http-equiv="refresh" content="0;URL=../index.php">'; exit(); } 

if(isset($_POST['ekle'])){

if($_POST['sira']==""||$_POST['okul_adi']==""||$_POST["bolum"]==""||$_POST['tarih']==""){ echo '<div class="alert alert-danger">Lütfen tüm alanları doldurun!</div>'; }else{

$kayit = $db->prepare("insert into education set sira=?,okul_adi=?,bolum=?,tarih=?"); 
$kayit->execute(array($_POST['sira'], $_POST['okul_adi'], $_POST['bolum'], $_POST['tarih']));

echo '<div class="alert alert-success">Yeni kayıt eklendi...</div>'; echo '<meta http-equiv="refresh" content="2">'; } } ?>
<form method="post">
		<div class="control-group">											
			<label class="control-label">Sıra No</label>
			<div class="controls">
			<input type="number" min="1" max="99" class="span6" name="sira">
			<p class="help-block">Sıra numarası görüntülenme sırasını belirler</p>
			</div>				
		</div>
		
		<div class="control-group">											
			<label class="control-label">Okul Adı</label>
			<div class="controls">
			<input type="text" class="span6" name="okul_adi">
			</div>				
		</div>	

		<div class="control-group">											
			<label class="control-label">Bölüm</label>
			<div class="controls">
			<input type="text" class="span6" name="bolum">
			</div>				
		</div>	

		<div class="control-group">											
			<label class="control-label">Tarihler (başlangıç - bitiş)</label>
			<div class="controls">
			<input type="text" class="span6" name="tarih">
			<p class="help-block">Örnek: 2001 - 2005 / 2000 - 2010</p>			
			</div>				
		</div>				

		<div class="form-actions">
			<button type="submit" name="ekle" class="btn btn-success"><i class="icon-plus"></i> Ekle</button> 
			<a class="btn btn-danger" href="home.php"><i class="icon-remove-circle"></i> İptal</a>
		</div>
</form>
