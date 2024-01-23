{{--ベーシックターム課題No21-4：課題３で作成した profile.blade.phpファイルを読み込む。--}}
@extends('layouts.profile')

{{--ベーシックターム課題No.21-4：プロフィールのページであることがわかるように titleとcontentを編集する--}}
 {{--admin.blade.phpの@yeld('title')に'ニュースの新規作成'を埋め込む--}}
       @section('title','プロフィールのページ')
       
       {{--admin.blade.phpの@yield('content')に以下のタグを埋め込む--}}
       @section('content')
          <div class ="container">
              <div class ="row">
                  <div class ="col-md-8 mx-auto">
                     <h2>プロフィール</h2> 
                  </div>
              </div>
          </div>
       @endsection
