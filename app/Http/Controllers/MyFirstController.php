<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VpPost;
use DB;
class MyFirstController extends Controller
{
    //
    public function getController($stn,$sth){
    	$tong = $stn+$sth;
    	return $tong;
    }

    // phuong thuc de doc dc file myfirstview
    public function getView(){
    	$articles = VpPost::all();
        return view('index', compact('articles'));
    }
    //admin
    public function getAdmin(){
        return view('admin');
    }
    //end admin
    public function showArticle($id){
        $article = VpPost::find($id);
    	return view('article') -> with('article', $article);//resources/views : article.blade"
    }
    public function getTatCaBaiViet(){
        $article_composition = VpPost::all();
        return view('tatCaBaiViet',compact('article_composition'));
    }
    // delete
    public function getDelete($id){
        $post = VpPost::find($id);
        if ($post != null) {
            $post->delete();
            return redirect('tatcabaiviet')->with('msg', 'Da xoa bai viet '.$post->title);
        } else {
            return redirect('tatcabaiviet')->with('msg', 'Bai viet khong ton tai');
        }   
    }
    // end delete
    //fix data
    public function getData($id){
        $edit_data = VpPost::find($id);
        return view('edit_data')->with('post',$edit_data);
    }
    // end fix data


    // update
    public function getUpdate($id){
        
        $title = request()['title'];
        $content = request()['content'];
        // dd($id,$title,$content);
        $update_data = VpPost::find($id);
        $update_data->title = $title;
        $update_data->content = $content;
        $update_data->save();
        return redirect('tatcabaiviet');
    }
    // end update
}