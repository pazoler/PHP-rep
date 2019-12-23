<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Загрузка файлов</title>
</head>
<body>
	<form action="form-handler.php" method="post" enctype="multipart/form-data">
		<div>
			<input type="text" name="title">
		</div>
		<div>
			<input type="file" name="picture[]" accept="image/*" multiple>
		</div>
		<div>
			<input type="submit" value="Загрузить">
		</div>
	</form>
</body>
</html>