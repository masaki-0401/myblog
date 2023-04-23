@vite('resources/css/app.css')
@include('layouts.header')
<article class="mt-10 border p-4 rounded-lg shadow-md w-10/12 mx-auto">
    <div class="text-gray-500 mb-4">{{ date('Y/m/d H:i', strtotime($myblog->updated_at)) }}</div>
    <h1 class="text-xl font-bold mb-4">タイトル：{{ $myblog->title }}</h1>
    <h2 class="text-xl font-bold">本文</h2>
    <div class="border-b"></div>
    <div class="text-lg leading-8 mt-4">{!! nl2br(e($myblog->content)) !!}</div>
    <div class="mt-8 flex items-center justify-between">
        <div class="">
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                href="{{ route('blogindex') }}">戻る</a>
            <a href="{{ route('edit', $myblog) }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold ml-4 py-2 px-4 rounded focus:outline-none focus:shadow-outline">編集</a>
        </div>
        <form onsubmit="return confirm('本当に削除しますか？')" action="{{ route('destroy', $myblog) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-lg">削除</button>
        </form>
    </div>
</article>
