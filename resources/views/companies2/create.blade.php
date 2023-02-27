<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">
<h2>メール一覧</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('companies2.index') }}"> 戻る</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('companies2.store') }}" method="POST">
@csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>お名前:</strong>
<input type="text" name="name" class="form-control" placeholder="お名前を入力してください" value="{{ old('name') }}" required>
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>メールアドレス:</strong>
<input type="text" name="email" class="form-control" placeholder="受信可能なメールアドレスを入力してください" value="{{ old('email') }}" required>
@error('email')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>都道府県:</strong>
<input type="text" name="address" class="form-control" placeholder="お住まいの都道府県を入力してください" value="{{ old('address') }}" required>
@error('address')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<button type="submit" class="btn btn-primary ml-3">確認</button>
</div>
</form>
</body>
</html>