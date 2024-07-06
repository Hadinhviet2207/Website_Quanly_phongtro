<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostsController extends Controller
{
    public function index() {
        // $posts = \App\Models\Post::all();
        //query builders: tránh hacker xóa bảng,...
        // $posts = DB::select("SELECT * FROM posts WHERE id = :id",
        // [
        //     'id'=>3
        // ]);

        //SELECT TITLE FROM POSTS WHERE ID=4
        $posts = DB::table('posts')
                    ->where('id', '=', 4)
                    ->delete();
                    // ->update([
                    //     'title' => 'haha',
                    //     'body' => 'ana'
                    // ]);

                    // ->insert([
                    //     'title'=>'Duy đẹp trai nè',
                    //     'body'=>'Uyên đẹp gái quá'
                    // ]);

                    //  ->where("id", 4)
                    // ->whereNotNull()
                    //  ->oldest()
                    //  ->select("title")
                    //  ->get();
        //whereBetween: lấy id trong khoảng
        //orwhere: một trong 2 điều kiện xảy ra
        //whereNotNull: Lấy ra những bản ghi không bị null
        //orderBy('id','desc): sắp xếp giảm dần, asc: tăng
        //last(), oldest: xem bản ghi cũ
        //find(): tìm theo id
        //count(): đếm
        //max(), min():tìm giá trị min, max
        //sum():tính tổng
        //avg(): trung bình
        dd($posts); //dd: die dump
        // return view('posts.index');
    }
}
