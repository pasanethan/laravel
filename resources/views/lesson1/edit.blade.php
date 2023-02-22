<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Ethan Technology Japan</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">
<h3>Ethan Technology Japan</h3>
<a href=public/home> 課題1 </a>
<a href=companies> 課題2 </a>
<a href=companies> 課題3 </a>
</div>
<div class="pull-right">
<p style="margin-bottom:20px"> 下記の項目を入力ください。</p>
</div>
</div>
</div>
<form action="confirm" method="POST">
@csrf

<label for="name">名前 :</label>
<input type="text"  name="name" value="{{$name}}"><br>
<span style="color:red">@error('name'){{$message}}@enderror</span><br>

<label for="email">メールアドレス :</label>
<input type="text"  name="email" value="{{$email}}"><br>
<span style="color:red">@error('email'){{$message}}@enderror</span><br>

<label for="where">都道府県  :</label>
<input type="text"  name="where" value="{{$where}}"><br>
<span style="color:red">@error('where'){{$message}}@enderror</span><br>

<button type="submit" class="btn btn-primary">確認</button>

</form>
</div>
</form>
</body>
</html>
