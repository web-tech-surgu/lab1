<form action="select1.php" method="post"> 	
	<p>
		<select size="3" multiple name="hero[]"> 
                        <option disabled>Выберите героя</option>
			<option value="Чебурашка">Чебурашка</option>
			<option selected value="Крокодил Гена">Крокодил Гена</option>
			<option value="Шапокляк">Шапокляк</option>			
		</select>
	</p> 
	<p>
		<input type="submit" value="Отправить">
	</p> 
</form>
<?php
echo '<pre>';
print_r($_POST);
?>
