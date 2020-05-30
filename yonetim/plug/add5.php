<?php if(!defined("include")){ echo '<meta http-equiv="refresh" content="0;URL=../index.php">'; exit(); } 

if(isset($_POST['ekle'])){

if($_POST['sira']==""||$_POST['dil_adi']==""||$_POST["seviye"]==""){ echo '<div class="alert alert-danger">Lütfen tüm alanları doldurun!</div>'; }else{

$kayit = $db->prepare("insert into language set sira=?,dil_adi=?,seviye=?"); 
$kayit->execute(array($_POST['sira'], $_POST['dil_adi'], $_POST['seviye']));

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
			<label class="control-label">Dil Adı</label>
			<div class="controls">
			<input type="text" class="span6" name="dil_adi">
			</div>				
		</div>	

		<div class="control-group">											
			<label class="control-label">Seviye</label>
			<div class="controls">
			<input type="text" class="span6" name="seviye">
			<p class="help-block">Dil seviyenizi buraya yazın. Örnek: B1, C2, A1</p>			
			</div>				
		</div>			

		<div class="form-actions">
			<button type="submit" name="ekle" class="btn btn-success"><i class="icon-plus"></i> Ekle</button> 
			<a class="btn btn-danger" href="home.php"><i class="icon-remove-circle"></i> İptal</a>
		</div>
</form>
