<?php

use Illuminate\Http\Request;
use App\VpPost;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//Router Tinh tong 
// Route::get('hello/{stm}/{sth}',function($stn,$sth){
// 	echo $stn + $sth;
// });
// root/hello/linh
// ===Groupt Route===
// Route::group(['prefix'=>'admin'],function(){
// 	Route::get('home',function(){
// 		return "Day la trang home";
// 	});
// 	Route::group(['prefix'=>'product'],function(){
// 		Route::get('add',function(){
// 			return "day la trang quan ly san pham";
// 		});
// 	});
// });

//controller: lay du lieu tu model ra view
// Route::get('controller/{stn}/{sth}','MyFirstController@getController');

// phuong thuc de ket noi toi file myfirstview
//
// Route::get('index','MyFirstController@getView');

// Route::get('article/{id}','MyFirstController@showArticle');
//route admin viet bai
Route::get('admin','MyFirstController@getAdmin');
Route::get('editor','MyFirstController@getEditor');
//end route
//route tat ca bai viet
Route::get('tatcabaiviet','MyFirstController@getTatCaBaiViet');
//css
// Route::get('csstrick','MyFirstController@getCss');
//jquery
// Route::get('jquery','MyFirstController@getJquery');
//jquery
// Route::get('note','MyFirstController@getNote');
// delete data
// Route::get('/delete_post/{id}','MyFirstController@getDelete');
// end delete data
// update
// Route::post('update/{id}','MyFirstController@getUpdate');
// end update
//query user
// Route::get('qb/get', function(){
// 	$data = DB::table('vp_post')->get();
// 	foreach($data as $row){
// 		foreach($row as $key => $value){
// 			echo $key.":".$value."<br>";
// 		}
// 		echo "<hr>";
// 	}
// });
//select * form users where id = 2
// Route::get('qb/where', function(){
// 	$data = DB::table('vp_post')-> where('id','=',2)->get();
// 	foreach($data as $row){
// 		foreach($row as $key => $value){
// 			echo $key.":".$value."<br>";
// 		}
// 		echo "<hr>";
// 	}
// });
//select id,name,content ....
// Route::get('qb/select', function(){
// 	$data = DB::select('vp_post')->select(['id','title','content'])->get();
// 	return view('id','title','content',['data' => $data])
// });
//select name as hoten form
// Route::get('insert/{title}-{content}',function($title,$content){
// 	$post = new App\VpPost;
// 	$post->title = $title;
// 	$post->content = $content;
// 	$post->save();
// });
// Route::post('verify',function(){
// 	$title = request()['title'];
// 	$content = request()['content'];
// 	$quote_content = request()['quote_content'];
// 	$summary_content = request()['summary_content'];
// 	$post = new App\VpPost;
// 	$post->title = $title;
// 	$post->content = $content;
// 	$post->quote_content = $quote_content;
// 	$post->summary_content = $summary_content;
// 	$post->save();
// 	return redirect('tatcabaiviet');
// });

Route::get('/get_csrf', function() {
	return csrf_token();
});

Route::post('/create_post', function(Request $request) {
	// Truyen title
	// Truyen content
	$title = $request->input('title');
	$content = $request->input('content');

	// Tao Object VpPost
	$vpPost = new App\VpPost;
	$vpPost->title = $title;
	$vpPost->content = $content;
	$vpPost->save();

	return $vpPost;
});

Route::get('/delete_post',function(Request $request){
		$id = $request->input('id');
		$post = VpPost::find($id);
		if ($post != null) {
            $post->delete();
            return redirect('tatcabaiviet');
        } else {
            return redirect('tatcabaiviet');
        }  
});

//fix data
Route::get('edit_post',function(Request $request){
	$id = $request->input('id');
	$edit_data = VpPost::find($id);
	return view('admin/index')->with('post',$edit_data);
});

// end fix data
Route::get('update_post',function(Request $request){
	$id = $request->input('id');
	$title = $request->input('title');
	$content = $request->input('content');

	$update_post = VpPost::find($id);
	$update_post->title = $title;
	$update_post->content = $content;
	$update_post->save();
	
	return $update_post;
});
