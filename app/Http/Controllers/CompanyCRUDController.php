<?php
namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;
class CompanyCRUDController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$data['companies'] = Company::orderBy('id','desc')->paginate(5);
return view('companies.index', $data);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('companies.create');
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$request->validate([
'name' => 'required|max:8|min:2',
'email' =>  'required|email',
'address' => 'required|max:8|min:2'
],

[
  'required' => ':attributeはご入力必須です。',
  'email' => ':attributeはメール形式である必要があります。',
  'max' => ':attributeは2文字以上と8文字以内でご入力してください',
  'min' => ':attributeは2文字以上と8文字以内でご入力してください'
],
[
  'name' => '名前',
  'email' => 'メールアドレス',
  'address' => '都道府県',
]);

$company = new Company;
$company->name = $request->name;
$company->email = $request->email;
$company->address = $request->address;
$company->save();
return redirect()->route('companies.index')
->with('success','ご利用ありがとうございます。登録致しました。');
}
/**
* Display the specified resource.
*
* @param  \App\company  $company
* @return \Illuminate\Http\Response
*/
public function show(Company $company)
{
return view('companies.show',compact('company'));
} 
/**
* Show the form for editing the specified resource.
*
* @param  \App\Company  $company
* @return \Illuminate\Http\Response
*/
public function edit(Company $company)
{
return view('companies.edit',compact('company'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\company  $company
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$request->validate([
'name' => 'required',
'email' => 'required',
'address' => 'required',
]);
$company = Company::find($id);
$company->name = $request->name;
$company->email = $request->email;
$company->address = $request->address;
$company->save();
return redirect()->route('companies.index')
->with('success','ご利用ありがとうございます。編集致しました。');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\Company  $company
* @return \Illuminate\Http\Response
*/
public function destroy(Company $company)
{
$company->delete();
return redirect()->route('companies.index')
->with('success','ご利用ありがとうございます。削除致しました。');
}


public function mail(Request $request)
 { 


  print_r($request->id);
//   if(isset($_POST['sendallbutton']))
//   {  
  
//   if(!empty($this->request->getPost('checkbox_value')))
//   {
//   $checked = $this->request->getPost('checkbox_value');

//   $company = Company::find($id);
// $company->name = $request->name;
// $company->email = $request->email;
// $company->address = $request->address;

//   foreach( $checked as $row){
      
//  //     $data = $detail->find($row);
//       $company = Company::find($id);
     
//        if (Mail::send(new TestMail($name, $email,$where))) 
//       {
//           //return redirect()->back()->with('status','対象のメールアドレスへメールをお送り致しました。');
//       } 
//       else 
//      {
//      $data = $email->printDebugger(['headers']);
//          print_r($data);
//     }
//   }
//   return redirect()->back()->with('status','対象のメールアドレスへメールをお送り致しました。');
//   }
//   else{
//   return redirect()->back()->with('status','対象のメールアドレスをチェックしてください。');
//   }
//   }
  
  }




}
