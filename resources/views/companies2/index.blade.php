<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Mail List</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div>
<h2 style="text-align:center">Welcome</h2>
<a href=home> 課題1 </a>
<a href=companies2> 課題2 </a>
<a href=companies> 課題3 </a>
<h5>メール一覧</h5>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('companies2.create') }}"> 登録</a>
<a class="btn btn-success"> 送信</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
<tr>
<th></th>
<th>名前</th>
<th>メールアドレス</th>
<th>都道府県 </th>
<th width="150px">変更一覧</th>
</tr>
@foreach ($companies as $company)
<tr>
<td><input type="checkbox" value="{{ $company->id }}" name="checkbox_value[]"></td>
<td>{{ $company->name }}</td>
<td>{{ $company->email }}</td>
<td>{{ $company->address }}</td>
<td>
<form action="{{ route('companies2.destroy',$company->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('companies2.edit',$company->id) }}">変更</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">削除</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $companies->links() !!}
</body>
</html>