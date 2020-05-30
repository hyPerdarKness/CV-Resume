<?php if(!defined("include")){ echo '<meta http-equiv="refresh" content="0;URL=../index.php">'; exit(); } 

if(isset($_POST['ekle'])){

if($_POST['sira']==""||$_POST['gorev']==""||$_POST["company"]==""){ echo '<div class="alert alert-danger">Lütfen tüm alanları doldurun!</div>'; }else{

$kayit = $db->prepare("insert into deneyimler set sira=?,gorev=?,company=?,bas_tarih=?,bit_tarih=?,text=?"); 
$kayit->execute(array($_POST['sira'], $_POST['gorev'], $_POST['company'], $_POST['bas_tarih'], $_POST['bit_tarih'], $_POST['text']));

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
			<label class="control-label">Görev</label>
			<div class="controls">
			<input type="text" class="span6" name="gorev">
			<p class="help-block">İş yerinde yaptığınız görev</p>
			</div>				
		</div>

		<div class="control-group">											
			<label class="control-label">Şirket Adı</label>
			<div class="controls">
			<input type="text" class="span6" name="company">
			</div>				
		</div>		
		
		<div class="control-group">											
			<label class="control-label">İşe Başladığınız Tarih</label>
			<div class="controls">
			<input type="text" class="span6" name="bas_tarih" placeholder="01.2020 / 01-2020">
			<p class="help-block">Örnek tarih yazılışları: 01-2020 / 01.2020 / 01.01.2020 / 01-01-2020 vb.</p>			
			</div>				
		</div>	

		<div class="control-group">											
			<label class="control-label">İşten Ayrıldığınız Tarih</label>
			<div class="controls">
			<input type="text" class="span6" name="bit_tarih" placeholder="01.2020 / 01-2020 yada hala çalışıyorum / devam ediyor">
			<p class="help-block">Ayrıldığınız tarihi belirtin, eğer iş yerinde hala çalışıyorsanız " hala çalışıyorum " yada " devam ediyor " gibi ibareler yazabilirsiniz</p>				
			</div>				
		</div>			
		
		<div class="control-group">											
			<label class="control-label">Detaylar</label>
			<div class="controls">
			<textarea name="text" class="span6" rows="5"></textarea>
			<p class="help-block">Deneyimlerinizi buraya detaylı olarak yazabilirsiniz</p>				
			</div>				
		</div>		

		<div class="form-actions">
			<button type="submit" name="ekle" class="btn btn-success"><i class="icon-plus"></i> Ekle</button> 
			<a class="btn btn-danger" href="home.php"><i class="icon-remove-circle"></i> İptal</a>
		</div> 
</form>
