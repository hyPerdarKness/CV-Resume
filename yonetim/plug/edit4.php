<?php if(!defined("include")){ echo '<meta http-equiv="refresh" content="0;URL=../index.php">'; exit(); } 

if(isset($_POST['kaydet'])){

if($_POST['sira']==""||$_POST['okul_adi']==""||$_POST["bolum"]==""||$_POST['tarih']==""){ echo '<div class="alert alert-danger">Lütfen tüm alanları doldurun!</div>'; }else{

$kayit = $db->prepare("update education set sira=?,okul_adi=?,bolum=?,tarih=? where id=?"); 
$kayit->execute(array($_POST['sira'], $_POST['okul_adi'], $_POST['bolum'], $_POST['tarih'], $id));

echo '<div class="alert alert-success">Düzenleme kaydedildi...</div>'; echo '<meta http-equiv="refresh" content="2">'; } } ?>
<form method="post">
<?php foreach($db->query("select * from education where id='".$id."'") as $aaa){ ?>
		<div class="control-group">											
			<label class="control-label">Sıra No</label>
			<div class="controls">
			<input type="number" min="1" max="99" class="span6" name="sira" value="<?php echo $aaa['sira']; ?>">
			<p class="help-block">Sıra numarası görüntülenme sırasını belirler</p>
			</div>				
		</div>
		
		<div class="control-group">											
			<label class="control-label">Okul Adı</label>
			<div class="controls">
			<input type="text" class="span6" name="okul_adi" value="<?php echo $aaa['okul_adi']; ?>">
			</div>				
		</div>	

		<div class="control-group">											
			<label class="control-label">Bölüm</label>
			<div class="controls">
			<input type="text" class="span6" name="bolum" value="<?php echo $aaa['bolum']; ?>">
			</div>				
		</div>	

		<div class="control-group">											
			<label class="control-label">Tarihler (başlangıç - bitiş)</label>
			<div class="controls">
			<input type="text" class="span6" name="tarih" value="<?php echo $aaa['tarih']; ?>">
			<p class="help-block">Örnek: 2001 - 2005 / 2000 - 2010</p>			
			</div>				
		</div>				

		<div class="form-actions">
			<button type="submit" name="kaydet" class="btn btn-primary"><i class="icon-save"></i> Kaydet</button> 
			<a class="btn btn-danger" href="home.php"><i class="icon-remove-circle"></i> İptal</a>
		</div> 
<?php } ?>
</form>
