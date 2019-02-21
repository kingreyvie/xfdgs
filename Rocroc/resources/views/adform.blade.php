<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="/Rocroc" method="POST">
	@csrf
	<input type="text" name="title" placeholder="Title"><br>
	<textarea name="content"></textarea><br>
	<input type="submit" name="submit" value="Submit">
</form>

@if($errors->any())
<div>
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>

</div>

@endif

</body>
</html>