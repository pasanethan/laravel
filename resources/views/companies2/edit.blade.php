<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h5>編集画面</h2>
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
<form action="{{ route('companies2.update',$company->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>お名前:</strong>
<input type="text" name="name" value="{{ $company->name }}" class="form-control" placeholder="Company name">
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>メールアドレス:</strong>
<input type="email" name="email" class="form-control" placeholder="Company Email" value="{{ $company->email }}">
@error('email')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>都道府県:</strong>
<input type="text" name="address" value="{{ $company->address }}" class="form-control" placeholder="Company Address">
@error('address')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<button type="submit" class="btn btn-primary ml-3">確認</button>
</div>
</form>
</div>
</body>
</html>