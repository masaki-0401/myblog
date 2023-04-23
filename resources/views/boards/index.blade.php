@extends('layouts.app')
@extends('layouts.header')
@section('content')
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <!-- text - start -->
            <div class="mb-10">
                <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">みんなの掲示板</h2>
            </div>
            <div class="flex flex-col text-center w-full">
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-left">
                    この掲示板は、知識の共有や意見交換を目的として設置されました。みなさんが気軽に投稿できる場所として、自由なトピックや議論ができるようになっています。
                    是非、モチベーションアップのためにも活用してください。少しでもみなさんのお役にたてたら幸いです。
                </p>
            </div>

            <section class="text-gray-600 body-font">
                <div class="container px-5 py-10 mx-auto">
                    <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">投稿一覧</h2>
                    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                        <table class="table-auto w-full text-left whitespace-no-wrap">
                            <thead>
                                <tr>
                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">
                                        #</th>

                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">
                                        タイトル</th>
                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                        投稿者</th>
                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                        投稿日時</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $postNumber = ($boards->currentPage() - 1) * $boards->perPage() + 1;
                                @endphp

                                @foreach ($boards as $board)
                                    <tr>
                                        {{-- <th>{{ $board->id }}</th> --}}
                                        <td class="px-4 py-3 border-b"><a class="block hover:underline"
                                                href="{{ route('boards.show', $board) }}">{{ $postNumber }}</a></td>
                                        <td class="px-4 py-3 border-b"><a class="block hover:underline"
                                                href="{{ route('boards.show', $board) }}">{{ $board->title }}</a></td>
                                        <td class="px-4 py-3 border-b"><a class="block hover:underline"
                                                href="{{ route('boards.show', $board) }}">{{ $board->name }}</a></td>
                                        <td class="px-4 py-3 border-b"><a class="block hover:underline"
                                                href="{{ route('boards.show', $board) }}">{{ $board->created_at }}</a></td>
                                    </tr>
                                    @php
                                        $postNumber++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="lg:w-2/3 w-full mx-auto overflow-auto mt-7">
                        {{ $boards->links('vendor.pagination.tailwind_pagination') }}
                    </div>
            </section>
            <a href="{{ route('boards.create') }}"
                class="max-w-screen-md mx-auto block mb-5 mt-10 relative px-5 py-3 overflow-hidden font-medium text-gray-600 bg-gray-100 border border-gray-100 rounded-lg shadow-inner group">
                <span
                    class="absolute top-0 left-0 w-0 h-0 transition-all duration-200 border-t-2 border-gray-600 group-hover:w-full ease"></span>
                <span
                    class="absolute bottom-0 right-0 w-0 h-0 transition-all duration-200 border-b-2 border-gray-600 group-hover:w-full ease"></span>
                <span
                    class="absolute top-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-gray-600 group-hover:h-full ease"></span>
                <span
                    class="absolute bottom-0 left-0 w-full h-0 transition-all duration-300 delay-200 bg-gray-600 group-hover:h-full ease"></span>
                <span
                    class="absolute inset-0 w-full h-full duration-300 delay-300 bg-gray-900 opacity-0 group-hover:opacity-100"></span>
                <span class="relative transition-colors duration-300 delay-200 group-hover:text-white ease">新規投稿</span>
            </a>
        </div>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
