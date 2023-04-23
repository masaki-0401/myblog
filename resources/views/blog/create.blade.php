@extends('layouts.app')
@include('layouts.header')

<div class="mx-auto mt-8 w-10/12">
    @include('commons.errors')
    <form action="{{ route('store') }}" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="title">
                タイトル
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="title" type="text" name="title" value="{{ old('title', $myblog->title) }}"
                placeholder="タイトルを入力してください">
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 font-bold mb-2" for="content">
                本文
            </label>
            <textarea
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="content" name="content" rows="8" placeholder="コンテンツを入力してください">{{ old('content', $myblog->content) }}</textarea>
        </div>
        <div class="flex items-center justify-between">
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                href="{{ route('index') }}">キャンセル</a>
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">
                投稿する
            </button>
        </div>
    </form>
</div>
