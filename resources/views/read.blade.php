@extends('layout.master')

@section('content')
    <div class="col-12" style="color: #000000;">
        <div class="col-12" style="display: flex;justify-content: center">
            <div class="col-6"
                 style=";margin: 20px 0px 20px 0px;padding: 10px;text-align: right;background-color: #ffffff;border-radius: 8px">
                <div class="col-12" style="padding-bottom: 20px">
                    <div style="width: 100%;float: right">
                        <h2>{{$post->title}}</h2>
                        {{$post->text}}
                    </div>
                    <div class="col-12" style="direction: rtl;font-size: 12px;color: #575757;padding-top: 15px">
                        <div style="width: 30%;float: right;">
                            <a> تاریخ انتشار: {{$post->datePublished}}</a>
                        </div>
                    </div>
                    <div class="col-12">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
