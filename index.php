<form method="post"> 	
	<p>
		<input type="submit" value="Send">
		<select name="hero"> 						 			
			<option >Выберите героя</option>
			<option value="Чебурашка">Чебурашка</option>
			<option value="Крокодил Гена">Крокодил Гена</option>
			<option value="Шапокляк">Шапокляк</option>			
		</select>
	</p> 
</form>
<?php

print_r($_POST);
?>
