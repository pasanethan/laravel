<h1> 登録画面 </h1>


<form action="end" method="post">
@csrf

<label for="name">名前 :</label>{{$name}}
<input type="hidden" name="name" value="<?= $name; ?>"><br>


<label for="email">メールアドレス :</label>{{$email}}
<input type="hidden"  name="email"><br>

<label for="where">都道府県  :</label>{{$where}}
<input type="hidden"  name="where"><br>

<button type="submit">確認</button>

</form>
