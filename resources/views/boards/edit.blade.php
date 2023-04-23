<!-- resources/views/bord/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>投稿編集</h1>

        <form method="POST" action="{{ route('bord.update', $post->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">タイトル</label>
                <input type="text" name="title" id="title" class="form-control"
                    value="{{ old('title', $post->title) }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">本文</label>
                <textarea name="body" id="body" class="form-control">{{ old('body', $post->body) }}</textarea>
                @error('body')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">画像</label>
                <input type="file" name="image" id="image" class="form-control-file">
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">更新する</button>
        </form>
    </div>
@endsection
