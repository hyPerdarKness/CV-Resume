<?php if(!defined("include")){ echo '<meta http-equiv="refresh" content="0;URL=../index.php">'; exit(); } 

if(isset($_POST['kaydet'])){

if($_POST['sira']==""||$_POST['baslik']==""||$_POST["seviye"]==""){ echo '<div class="alert alert-danger">Lütfen tüm alanları doldurun!</div>'; }else{

$kayit = $db->prepare("update programlar set sira=?,baslik=?,seviye=? where id=?"); 
$kayit->execute(array($_POST['sira'], $_POST['baslik'], $_POST['seviye'], $id));

echo '<div class="alert alert-success">Düzenleme kaydedildi...</div>'; echo '<meta http-equiv="refresh" content="2">'; } } ?>
<form method="post">
<?php foreach($db->query("select * from programlar where id='".$id."'") as $aaa){ ?>
		<div class="control-group">											
			<label class="control-label">Sıra No</label>
			<div class="controls">
			<input type="number" min="1" max="99" class="span6" name="sira" value="<?php echo $aaa['sira']; ?>">
			<p class="help-block">Sıra numarası görüntülenme sırasını belirler</p>
			</div>				
		</div>
		
		<div class="control-group">											
			<label class="control-label">Program Adı</label>
			<div class="controls">
			<input type="text" class="span6" name="baslik" value="<?php echo $aaa['baslik']; ?>">
			</div>				
		</div>	
		
		<div class="control-group">											
			<label class="control-label">Bilgi Seviyesi</label>
			<div class="controls">
			<input type="number" min="1" max="100" class="span6" name="seviye" value="<?php echo $aaa['seviye']; ?>">
			<p class="help-block">1 ile 100 arasında bir sayı belirleyebilirsiniz</p>
			</div>				
		</div>		

		<div class="form-actions">
			<button type="submit" name="kaydet" class="btn btn-primary"><i class="icon-save"></i> Kaydet</button> 
			<a class="btn btn-danger" href="home.php"><i class="icon-remove-circle"></i> İptal</a>
		</div> 
<?php } ?>
</form>
