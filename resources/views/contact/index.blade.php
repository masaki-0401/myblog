@extends('layouts.app')
@extends('layouts.header')
@vite(['resources/css/app.css', 'resources/js/app.js'])
@section('content')
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <!-- text - start -->
            <div class="mb-10 md:mb-16">
                <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">お問い合わせフォーム</h2>

                <p class="mx-auto max-w-screen-md text-left text-gray-500 md:text-lg">
                    下記の入力欄に必要事項をご記入のうえ、送信してください。<br>
                    何かご不明な点がございましたら、お気軽にお問い合わせください。
                </p>

            </div>
            <!-- text - end -->

            <!-- form - start -->
            <form class="mx-auto grid max-w-screen-md gap-4 sm:grid-cols-2" method="POST" action="{{ route('confirm') }}">
                @csrf

                <div class="sm:col-span-2">
                    <label for="" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">メールアドレス</label>
                    <input name="email" value="{{ old('email') }}" type="text"
                        class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
                    @if ($errors->has('email'))
                        <p class="error-message text-red-500">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <div class="sm:col-span-2">
                    <label for="" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">タイトル</label>
                    <input name="title" value="{{ old('title') }}" type="text"
                        class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
                    @if ($errors->has('title'))
                        <p class="error-message text-red-500">{{ $errors->first('title') }}</p>
                    @endif
                </div>

                <div class="sm:col-span-2">
                    <label for="message" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">お問い合わせ内容</label>
                    <textarea name="body"
                        class="h-64 w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring">{{ old('body') }}</textarea>
                    @if ($errors->has('body'))
                        <p class="error-message text-red-500">{{ $errors->first('body') }}</p>
                    @endif
                </div>

                <div class="flex items-center justify-between sm:col-span-2">
                    <a class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base"
                        href="{{ url()->previous() }}">戻る</a>
                    <button type="submit"
                        class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base">入力内容確認</button>
                </div>
            </form>
            <!-- form - end -->
        </div>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
