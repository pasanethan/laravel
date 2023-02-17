<h1> 登録画面 </h1>


<form action="confirm" method="POST">
@csrf

<label for="name">名前 :</label>
<input type="text"  name="name"><br>
<span style="color:red">@error('name'){{$message}}@enderror</span><br>

<label for="email">メールアドレス :</label>
<input type="text"  name="email"><br>
<span style="color:red">@error('email'){{$message}}@enderror</span><br>

<label for="where">都道府県  :</label>
<input type="text"  name="where"><br>
<span style="color:red">@error('where'){{$message}}@enderror</span><br>

<button type="submit">確認</button>

</form>
