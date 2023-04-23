@extends('layouts.app')
@extends('layouts.header')
@section('content')
    <div class="m-10"></div>
    <div class="flex flex-col gap-3 max-w-screen-md mx-auto">
        <h1 class="text-2xl font-bold border-b-2 border-gray-300 py-4 pl-5 mb-4">記事一覧</h1>

        @foreach ($myblogs as $myblog)
            <section class="text-gray-600 body-font overflow-hidden border-b border-gray-300">
                <a href="{{ route('show', $myblog) }}" class="block">
                    <div class="p-5 mx-auto flex">
                        <div class="w-32 sm:w-64 mb-2">
                            <img src="{{ asset('img/mv.jpg') }}" alt="" class="w-full">
                        </div>
                        <div class="sm:ml-10 ml-5">
                            @if ($myblog->created_at)
                                <span
                                    class="text-sm text-gray-400">{{ date('Y/m/d', strtotime($myblog->updated_at)) }}</span>
                            @endif
                            <h2 class="text-lg sm:text-xl font-medium text-gray-900 title-font mt-2 mb-2">
                                <a href="{{ route('show', $myblog) }}"
                                    class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">
                                    {{ $myblog->title }}
                                </a>
                            </h2>
                        </div>
                    </div>
                </a>
            </section>
        @endforeach
    </div>
    <a href="{{ route('create') }}"
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

    {{ $myblogs->links() }}
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
