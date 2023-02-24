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
<div>
<h2 style="text-align:center">Ethan Technology Japan</h2>
<h5>メール一覧</h5>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('companies.create') }}"> 登録</a>
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
<form action="{{ route('companies.destroy',$company->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">変更</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">削除</button>
</form>
</td>
</tr>
@endforeach
</table>
</table>
<form name="mailform" action="/mail" method="Post">
    @csrf
<input name="details"  type="hidden" value="">    

</form>
<button  onlick="DosendMail()" type="submit" name="sendallbutton">SENDALL</button>
<script>
function DosendMail() {
    document.getElementById("details").value = document.getElementByName("checkbox_value[]").value;
  return true;
}
</script>
{!! $companies->links() !!}
</body>
</html>