<!DOCTYPE html>
<html>
<head>
	<title>ROCROC</title>


</head>
<body>
<table>
	<tr class="tablerow">
		<th>Id</th>
		<th>Title</th>
		<th>Content</th>
		<th>Action</th>
	</tr>
	<center><h1>LUENTHAI</h1></center>
	<a href="/Rocroc/create">Add new Article></a>
	@foreach($articles as $article)
		<tr>
			<td>{{$article->id}}</td>
			<td>{{$article->title}}</td>
			<td>{{$article->content}}</td>
			<td><a href="/Rocroc/{{$article->id}}">View</a> | <a href="/Rocroc/{{$article->id}}/edit">Edit</a>	<form action="Rocroc/{{$article->id}}" method="POST">
				@csrf
				@method("DELETE")
				<input type="submit" name="submit" value="Delete">

			</form></td>

		


		</tr>
	@endforeach

	{{$articles->links()}}
</table>
</body>
</html>
<style>
	.pagination li{
		color:black;
		float:left;
		padding:8px 16px;
		transtion: background-color .3s;
		list-style-type: none;
	}
	.pagination li:hover{
		background: pink;
	}
body{
	font-family:arial;
}

	th,td{
		border: 1px solid black;
		padding: 10px;
		text-align: center;
	}
	table{
		border: 1px solid black;
		width: 100%;
		border-collapse: collapse;
	}

</style>		