@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="id">
                                    <nobr>ID：
                                    {{ $post->id }}
                                    </nobr>
                                </div>
                                <div class="name">
                                    <nobr>名前： 
                                    {{ $post->name }}
                                    </nobr>
                                </div>
                                <div class="gender">
                                    <nobr>性別：
                                    {{$post->gender }}
                                    </nobr>
                                </div>
                                
                                <div class="hobby">
                                    <nobr>趣味：
                                    {{ Str::limit($post->hobby, 200) }}
                                    </nobr>
                                </div>
                                <div class="introduction">
                                    <p>自己紹介</p>
                                    {{ Str::limit($post->introduction, 1500) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection