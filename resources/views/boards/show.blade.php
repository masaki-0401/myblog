@extends('layouts.app')
@extends('layouts.header')
@vite(['resources/css/app.css', 'resources/js/app.js'])
@section('content')
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="font-bold border-b border-l-8 border-blue-500 pl-5 mx-auto max-w-screen-md mt-10 mb-8 p-1.5">
            <h1 class="text-xl">タイトル：{{ $board->title }}</h1>
        </div>
        <p>もし、今話しているトピックとは異なる話題について意見交換したい場合は、新しいスレッドを立ち上げることができます。下記のボタンをクリックして、新しいスレッドを始めてみましょう。</p>
        <a href="{{ route('boards.create') }}"
            class="max-w-screen-md mx-auto block mb-5 mt-2 relative px-5 py-3 overflow-hidden font-medium text-gray-600 bg-gray-100 border border-gray-100 rounded-lg shadow-inner group">
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
            <span class="relative transition-colors duration-300 delay-200 group-hover:text-white ease">新規スレッド</span>
        </a>
        <div class="pagination-container">
            {{ $messages->links('vendor.pagination.tailwind_pagination') }}
        </div>

        <div class="my-4 rounded bg-blue-200 p-4">
            <div class="flex mb-4">
                <span class="text-green-500 font-bold text-sm mr-4">スレッド立上た人：{{ $board->name }}</span>
                <span class="text-gray-500 text-sm">投稿日時：{{ $board->created_at }}</span>
            </div>
            <p class="text-lg leading-7">{!! nl2br(e($board->body)) !!}</p>
        </div>
        <div class="message-container mt-4"
            data-last-message-number="{{ ($messages->currentPage() - 1) * $messages->perPage() + $messages->count() }}">
            @if (isset($messages))
                @foreach ($messages as $index => $message)
                    <div class="my-4 rounded bg-gray-100 p-4">
                        <div class="flex mb-4">
                            <span
                                class="text-green-500 font-bold text-sm mr-4">#{{ ($messages->currentPage() - 1) * $messages->perPage() + $index + 1 }}
                                投稿者：{{ $message->name }}</span>
                            <span class="text-gray-500 text-sm">投稿日時：{{ $message->created_at }}</span>
                        </div>
                        <div class="overflow-hidden">
                            <p class="text-base leading-7 text-ellipsis">{!! preg_replace(
                                '/\bhttps?:\/\/\S+/',
                                '<a href="$0" target="_blank" class="text-blue-500 hover:underline">$0</a>',
                                nl2br(e($message->body)),
                            ) !!}</p>
                        </div>
                        @if ($message->image_url)
                            <img src="{{ $message->image_url }}" alt="投稿画像" class="mt-4">
                        @endif
                    </div>
                @endforeach
                <div class="new-messages"></div>
                <div class="pagination-container">
                    {{ $messages->links('vendor.pagination.tailwind_pagination') }}
                </div>
            @endif
        </div>

        <form action="{{ route('messages.store', ['id' => $board->id]) }}" method="post" enctype="multipart/form-data"
            class="bg-blue-100 bg-opacity-60 rounded px-8 pt-6 pb-8 my-4" id="message-form">
            @csrf
            <div class="mb-4">
                <div class="mb-3 flex">
                    <div class="flex-grow mr-2">
                        @if ($errors->has('name'))
                            <p class="error-message text-red-500">{{ $errors->first('name') }}</p>
                        @endif
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="title" type="text" name="name" value="{{ old('name') }}"
                            placeholder="名前未記入でも投稿できます">
                    </div>
                    <div class="flex-shrink ml-8">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline text-sm sm:text-base"
                            type="submit">
                            投稿
                        </button>
                    </div>
                </div>
                @if ($errors->has('body'))
                    <p class="error-message text-red-500">{{ $errors->first('body') }}</p>
                @endif
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="content" name="body" rows="8" placeholder="本文を入力してください">{{ old('body') }}</textarea>
                <input type="file" name="image" accept="image/*" class="mt-5">
            </div>
        </form>
        <div class="mt-8">
            <a href="{{ route('boards.index') }}" class="text-sm text-blue-500 hover:underline">投稿一覧に戻る</a>
        </div>
        <p class="mt-5">もし、今話しているトピックとは異なる話題について意見交換したい場合は、新しいスレッドを立ち上げることができます。下記のボタンをクリックして、新しいスレッドを始めてみましょう。</p>
        <a href="{{ route('boards.create') }}"
            class="max-w-screen-md mx-auto block mb-5 mt-2 relative px-5 py-3 overflow-hidden font-medium text-gray-600 bg-gray-100 border border-gray-100 rounded-lg shadow-inner group">
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
            <span class="relative transition-colors duration-300 delay-200 group-hover:text-white ease">新規スレッド</span>
        </a>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection


<script>
    window.addEventListener('DOMContentLoaded', function() {
        // boardIdを定義して適切な値を設定
        const boardId = '{{ $board->id }}';
        // 他のコード ...

        // Event listener for the MessageSent event
        window.Echo.channel('board-detail-chat-channel.' + boardId)
            .listen('MessageSent', function(e) {
                console.log('MessageSent event received:', e);

                const newMessageNumber = e.number; // この行を修正しました

                const newMessageElement = document.createElement('div');
                newMessageElement.className = 'my-4 rounded bg-gray-100 p-4';
                newMessageElement.innerHTML = `
<div class="flex mb-4">
    <span class="text-green-500 font-bold text-sm mr-4">#${newMessageNumber} 投稿者：${e.name}</span>
    <span class="text-gray-500 text-sm">投稿日時：${new Date().toLocaleString()}</span>
</div>
<div class="overflow-hidden">
    <p class="text-base leading-7 text-ellipsis">${e.body.replace(/\n/g, '<br>')}</p>
    ${e.imageUrl ? '<img src="' + e.imageUrl + '" class="w-full h-auto">' : ''} <!-- 画像を表示する -->
</div>
`;

                const newMessages = document.querySelector('.new-messages');
                newMessages.appendChild(newMessageElement);

                // Add this condition to check if the logged-in user is the sender
                if (window.authUserId === e.user_id) {
                    scrollToLatestMessage();
                }
            });
        // window.paginationInfoオブジェクトを定義し、メッセージの総数を設定
        window.paginationInfo = {
            total: parseInt('{{ $board->messages_count }}', 10)
        };

        const messageForm = document.getElementById('message-form');
        if (messageForm) {
            messageForm.addEventListener('submit', async function(event) {
                event.preventDefault();

                // フォームデータを送信し、レスポンスを処理
                try {
                    const formData = new FormData(messageForm);
                    const response = await submitFormData(formData);

                    // フォームをリセット
                    messageForm.reset();
                } catch (error) {
                    console.error('Failed to submit form data:', error);
                }
            });
        }
    });

    // Ajaxを使ってデータを送信する関数
    function submitFormData(formData) {
        return new Promise((resolve, reject) => {
            const xhr = new XMLHttpRequest();
            xhr.open('POST', '{{ route('messages.store', ['id' => $board->id]) }}', true);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

            xhr.onload = function() {
                console.log("Response text:", xhr.responseText)
                if (xhr.status >= 200 && xhr.status < 400) {
                    resolve(JSON.parse(xhr.responseText));
                } else {
                    reject(new Error('Failed to submit form data'));
                }
            };

            xhr.onerror = function() {
                reject(new Error('Failed to submit form data'));
            };

            xhr.send(formData);
        });
    }
</script>
