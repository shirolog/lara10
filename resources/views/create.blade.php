@extends('app')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="font-size: 1rem;">登録画面</h2>
            </div>

            <div class="pull-right">
                <a href="{{url('./blogs')}}" class="btn btn-success">戻る</a>
            </div>
        </div>
    </div>

    <div style="text-align: right;">
        <form action="{{route('blogs.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row w-75">
                <div class="col-lg-12 mt-2 mb-2">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="タイトル">
                    </div>
                </div>
                <div class="col-lg-12 mt-2 mb-2">
                    <div class="form-group">
                        <textarea name="content" class="form-control" style="height: 100px;"
                        placeholder="内容"></textarea>
                    </div>
                </div>

                <div class="col-lg-12 mt-2 mb-2">
                    <div class="form-group">
                        <input type="file" name="image" accept="image/png, image/jpg, image/jpeg, image/gif">
                    </div>
                </div>

                <div class="col-lg-12 mt-2 mb-2">
                    <button type="submit" class="btn btn-primary w-100">登録</button>
                </div>
            </div>
        </form>
    </div>

@endsection