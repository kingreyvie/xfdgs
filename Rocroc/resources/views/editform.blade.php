<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="/Rocroc/{{$article->id}}" method="POST">
	@csrf
	@method('PUT')
	<input type="text" name="title" placeholder="Title" value="{{$article->title}}"><br>
	<textarea name="content"></textarea>{{$article->content}}<br>
	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>