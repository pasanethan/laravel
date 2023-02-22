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
</div>
<div class="pull-right">
<p style="margin-bottom:20px"> 下記の項目をご確認の上、送信してください。</p>
</div>
</div>
</div>

<form action="/mail/send" method="post">
@csrf
<div class="form-group" style="margin-bottom: 0">
<label for="name">名前 : {{$name}}</label>
<input type="hidden" name="name" value="{{$name}}"><br>
</div>

<div class="form-group" style="margin-bottom: 0">
<label for="email">メールアドレス : {{$email}}</label>
<input type="hidden"  name="email" value="{{$email}}"><br>
</div>

<div class="form-group">
<label for="where">都道府県  :  {{$where}}</label>
<input type="hidden"  name="where" value="{{$where}}"><br>
</div>

<div class="form-group" style="margin-bottom: 0">
<button type="submit" class="btn btn-primary">確認</button>
</form>
<button class="btn btn-primary" name='back' value="back" action="again">再入力</button>
</div>

</div>
</form>
</body>
</html>