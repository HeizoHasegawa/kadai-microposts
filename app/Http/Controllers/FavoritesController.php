<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /*
     * 投稿をお気に入りにするアクション
     *
     * @param $id 投稿のmicropost_id
     * @return \Illuminate\Http\Response
     */
     public function store($id)
     {
         // 認証済みユーザ（閲覧者）が、idの投稿をお気に入りにする
         \Auth::user()->favorite($id);
         // 前のURLへリダイレクトさせる
         return back();
     }
     
     /*
      * ユーザをアンフォローするアクション
      *
      * @param $id 投稿のmicropost_id
      * @return \Illuminate\Http\Response
      */
      public function destroy($id)
      {
          // 認証済みユーザ（閲覧者）が、idの投稿をお気に入り解除する
          \Auth::user()->unfavorite($id);
          // 前のURLへリダイレクトさせる
          return back();
      }
    
}
