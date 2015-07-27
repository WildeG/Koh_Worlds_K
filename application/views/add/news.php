<center>
	<form action="addnews/addnews" method="post" enctype="multipart/form-data">
		Заголовок
		<input class="field" type="text" maxlength="40" name="title" >
		Содержание
		<textarea class="field" maxlength="16600" name="text"></textarea>       
		Изображение*
		<input class="button" name="image" type="file" accept="image/jpeg,image/png,image/gif">       
		* - Помечены не обязательные поля
		<input class="button" type="submit" value="Добавить новость" name="submit" >
	</form>
</center>