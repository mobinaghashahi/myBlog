@extends('layout.master')

@section('content')
    <div class="col-12" style="color: #000000;">
        <div class="col-12" style="display: flex;justify-content: center">
            <div class="col-6"
                 style=";margin: 20px 0px 20px 0px;padding: 10px;text-align: right;background-color: #ffffff;border-radius: 8px">
                @foreach($posts as $post)
                <div class="col-12" style="padding-bottom: 20px">
                    <div style="width: 100%;float: right">
                        <h2>{{$post->title}}</h2>
                        <img src="/imagePost/142sWs12.jpg"
                             style="width: 100%">
                        <p style="text-align: justify;direction: rtl">{{$post->description}}</p>
                    </div>
                    <div class="col-12" style="direction: rtl;font-size: 12px;color: #575757;">
                        <div style="width: 30%;float: right;">
                            <a> تاریخ انتشار: {{$post->datePublished}}</a>
                        </div>
                        <div style="width: 20%;float: right">
                            <a>{{$post->comment_count}} نظر</a>
                        </div>
                    </div>
                </div>
                <hr class="col-12" style="float: none">
                @endforeach
            </div>
        </div>
    </div>
@endsection
