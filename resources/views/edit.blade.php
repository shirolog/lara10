@extends('app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="font-size: 1rem;">画面編集</h2>
                <h3 style="font-size: 1rem;">{{$blog->user->name}}さん　投稿者本人だけしか編集できません</h3>
            </div>
        </div>

        <div class="pull-right">
            <a href="{{url('blogs')}}?page={{request()->input('page')}}"
            class="btn btn-success">ページ番号{{request()->input('page')}}に戻る</a>
        </div>
    </div>

    <div style="text-align: right;">
        <form action="{{route('blogs.update', $blog->id)}}" method="post" enctype="multipart/form-data">
            @method('PUT')            
            @csrf

            <div class="row w-75">
                <div class="col-12 mb-2 mt-2">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control"
                        placeholder="タイトル" value="{{$blog->title}}">
                    </div>
                </div>
                
                <div class="col-12 mb-2 mt-2">
                    <div class="form-group">
                       <textarea name="content" class="form-control" 
                       style="height: 100px;" placeholder="内容">{{$blog->content}}</textarea>
                    </div>
                </div>

                <div class="col-12 mb-2 mt-2">
                    <div class="form-group">
                       <input type="file" name="image" accept="image/jpg, image/png, image/gif, image/jpeg">
                    </div>
                </div>

                <div class="col-12 mb-2 mt-2">
                    <input type="hidden" name="page" value="{{request()->input('page')}}">
                    <button type="submit" class="btn btn-primary w-100">編集</button>
                </div>
            </div>
        </form>
    </div>

@endsection