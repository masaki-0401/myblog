@extends('layouts.app')
@extends('layouts.header')
@vite('resources/css/app.css')
@section('content')
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <div class="mb-5 md:mb-8">
                <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">新規投稿</h2>
            </div>
            <form class="mx-auto grid max-w-screen-md gap-4 sm:grid-cols-2" method="POST"
                action="{{ route('boards.store') }}">
                @csrf
                <div class="sm:col-span-2">
                    <label class="mb-2 inline-block text-sm text-gray-800 sm:text-base" for="title">タイトル</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}"
                        class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
                    @if ($errors->has('title'))
                        <p class="error-message text-red-500">{{ $errors->first('title') }}</p>
                    @endif
                </div>
                <div class="sm:col-span-2">
                    <label class="mb-2 inline-block text-sm text-gray-800 sm:text-base" for="name">投稿者名</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                        class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring">
                </div>
                <div class="sm:col-span-2">
                    <label class="mb-2 inline-block text-sm text-gray-800 sm:text-base" for="body">本文</label>
                    <textarea name="body" id="body"
                        class="h-64 w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring">{{ old('body') }}</textarea>
                    @if ($errors->has('body'))
                        <p class="error-message text-red-500">{{ $errors->first('body') }}</p>
                    @endif
                </div>
                <div class="flex items-center justify-between sm:col-span-2">
                    <a class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base"
                        href="{{ url()->previous() }}">キャンセル</a>
                    <button type="submit"
                        class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base">投稿</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('footer')
    @include('layouts.footer')
@endsection
