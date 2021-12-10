<body>
<form action="select1.php" method="post"> 	
	<p>
<select class="form-control" name="country">
 <option value="Австралия">Австралия</option>
 <option value="Австрия">Австрия</option>
 <option value="Азербайджан">Азербайджан</option>
 <option value="Албания">Албания</option>
 <option value="Алжир">Алжир</option>
</select>

	</p> 
	<p>
		<input type="submit" value="Отправить">
	</p> 
</form>
<?php
echo '<pre>';
print_r($_POST['hero']);
?>
</body>
