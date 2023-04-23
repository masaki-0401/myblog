@extends('layouts.app')
@include('layouts.header')
@section('content')
    <div class="mx-auto w-10/12">
        <div class="bg-white p-8 rounded-lg shadow-lg mt-5">
            <p class="mb-4">お問い合わせいただき、ありがとうございました。</p>
            <p>お問い合わせ内容を確認し、迅速に対応いたします。</p>
        </div>
        <a class="inline-block mt-5 rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base"
            href="{{ route('index') }}">戻る</a>
    </div>
@endsection
