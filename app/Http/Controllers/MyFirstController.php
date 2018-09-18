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
        return view('admin/index');
    }
    public function getEditor(){
        return view('admin/editor');
    }
    public function getLogin(){
        return view('admin/login');
    }
    //end admin
    //note
    public function getCss(){
        return view('cssTrick');
    }
    //jquery
    public function getJquery(){
        return view('jquery');
    }
    //note
    public function getNote(){
        return view('note');
    }
    //end note
    public function showArticle($id){
        $article = VpPost::find($id);
    	return view('article') -> with('article', $article);//resources/views : article.blade"
    }
    public function getTatCaBaiViet(){
        $article_composition = VpPost::all();
        return view('admin/tatcabaiviet',compact('article_composition'));
    }

}
