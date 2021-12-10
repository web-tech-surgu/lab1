<form method="post" action="qqq.php"> 	
	<p>
		<input type="submit" value="Send"></p> 
<p>
<select class="form-control" name="country" multiple>
 <option value="Австралия">Австралия</option>
 <option value="Австрия">Австрия</option>
 <option value="Азербайджан">Азербайджан</option>
 <option value="Албания">Албания</option>
 <option value="Алжир">Алжир</option>
</select>
	</p> 


<select class="form-control" name="year">
<?php 
	for($i = 1900; $i <= date('Y'); $i++): 
?>
<option value="<?=$i?>"><?=$i?></option>
<?php endfor; ?>
</select>
