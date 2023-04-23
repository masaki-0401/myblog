@vite('resources/css/app.css')
@extends('layouts.app')
@include('layouts.header')
@section('content')
    <div class="flex justify-center mt-10">
        <div class="bg-white p-8 rounded shadow w-10/12">
            <h1 class=" text-center text-2xl font-bold mb-4">お問い合わせ確認画面</h1>
            <form method="POST" action="{{ route('send') }}">
                @csrf
                <div class="border-t border-gray-300 pt-4 mb-2">
                    <label class="block mb-2 text-gray-400">メールアドレス</label>
                    {{ $inputs['email'] }}
                    <input name="email" value="{{ $inputs['email'] }}" type="hidden">
                </div>

                <div class="border-t border-gray-300 pt-4 mb-2">
                    <label class="block mb-2 text-gray-400">タイトル</label>
                    {{ $inputs['title'] }}
                    <input name="title" value="{{ $inputs['title'] }}" type="hidden">
                </div>

                <div class="border-t border-gray-300 pt-4 mb-6">
                    <label class="block mb-2 text-gray-400">お問い合わせ内容</label>
                    {!! nl2br(e($inputs['body'])) !!}
                    <input name="body" value="{{ $inputs['body'] }}" type="hidden">
                </div>
                <div class="flex justify-between items-center">
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="submit"
                        name="action" value="back">入力内容修正</button>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit"
                        name="action" value="submit">送信する</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('footer')
    @include('layouts.footer')
@endsection
