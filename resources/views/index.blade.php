@extends('layouts.app')
@extends('layouts.header')
@section('content')
    <div class="mx-auto max-w-screen">
        {{-- <div class="lg:w-2/3 mx-auto"> --}}
        <div class="w-full bg-gray-100 mb-4">
            <img alt="gallery" class="w-full h-2/4 object-cover block" src="{{ asset('img/mv.jpg') }}">
            {{-- <div class="text-center relative z-10 w-full">
                <h2 class="text-2xl text-gray-900 font-medium title-font mb-2">【エンジニアに興味がある人】<br>
                    未経験からエンジニアになるために一緒にがんばりませんか</h2>
            </div> --}}
            {{-- </div> --}}

        </div>
    </div>

    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-xl px-4 md:px-8">

            <!-- text - start -->
            <div class="mb-10 md:mb-16">
                <h1 class="tracking-wide mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">
                    【エンジニアに興味がある人】<br>
                    未経験からエンジニアになるために一緒にがんばりませんか
                </h1>

                <div class="font-bold border-b border-l-8 border-blue-500 pl-5 mx-auto max-w-screen-md mt-10 mb-8 p-1.5">
                    <h2 class="text-xl">自己紹介</h2>
                </div>
                <p class="tracking-widest mb-2 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg">
                    こんにちは、エンジニアを目指すＭ｜Ｈと申します。</p>
                <p class="tracking-widest mb-2 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg">
                    現在、14年間勤めた電気関係の仕事を離れ、転職活動中です。プログラムの学習には苦戦しているものの、自分でサイトを作りながら日々成長しています。現在は、４か月のプログラムの学習期間を経て、Laravelフレームワークを使ってサイト開発に挑戦しています。
                </p>
                <p class="tracking-widest mb-2 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg">
                    歳も歳なので（察してください）最後のチャレンジとして、エンジニアとしてスキルを磨きたいと思っています。同じように困っている方もいるかと思います。そこで、お互いに成長しあい、一歩ずつ前へ進んでいきたいという思いから、このサイトを作成しました。
                </p>
                <p class="tracking-widest mb-2 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg">
                    共に学び合い、互いに刺激しあいながら、目標に向かって頑張っていきましょう。</p>

                <div class="font-bold border-b border-l-8 border-blue-500 pl-5 mx-auto max-w-screen-md mt-10 mb-8 p-1.5">
                    <h2 class="text-xl">目的</h2>
                </div>
                <p class="tracking-widest mb-2 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg">
                    このサイトの目的は、みなさんの（私も含め）モチベーションアップ、維持、知識スキルアップを促進することです。また、情報の共有と交換を行い、お互いに成長するための場所です。</p>
                <p class="tracking-widest mb-2 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg">
                    掲示板では、テーマにそって話し合いを行い、メッセージ交換を通じて情報の共有をします。また、実際に使ってみて「こういう機能があったら便利だ」という意見や要望があれば、お問い合わせを通じてお知らせください。その要望を取り入れ、実際にサイトに実装することで、使うみなさんの要望が形になり、私の技術も向上するwin-winなサイトにしていきたいと思います。
                </p>

                <div class="font-bold border-b border-l-8 border-blue-500 pl-5 mx-auto max-w-screen-md mt-10 mb-8 p-1.5">
                    <h2 class="text-xl">みんなの掲示板</h2>
                </div>
                <p class="tracking-widest mb-5 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg">
                    みんなの掲示板は、誰でも参加できる交流の場です。</p>
                <p class="tracking-widest mb-5 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg">
                    エンジニアを目指している方や、スキルアップを目指している方、また、何か新しいことに挑戦したい方にもおすすめです。</p>
                <p class="tracking-widest mb-8 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg">
                    大切なのは、お互いの刺激と成長です。自分が知らなかったことを学び、また、自分が持っている知識やスキルを他の人に伝えることで、自分自身も成長できます。この掲示板であなたのカタチを見つけてください！<span
                        class="block w-6 h-6 mx-auto mt-4 border-b-2 border-r-2 transform rotate-45"></span></p>
                <a href="{{ route('boards.index') }}"
                    class="max-w-screen-md mx-auto block mb-5 relative px-5 py-3 overflow-hidden font-medium text-gray-600 bg-gray-100 border border-gray-100 rounded-lg shadow-inner group">
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
                    <span
                        class="relative transition-colors duration-300 delay-200 group-hover:text-white ease">みんなの掲示板へ</span>
                </a>
                <div class="font-bold border-b border-l-8 border-blue-500 pl-5 mx-auto max-w-screen-md mt-10 mb-8 p-1.5">
                    <h2 class="text-xl">MyBlog</h2>
                </div>
                <p class="tracking-widest mb-8 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg">
                    Myblogは私の学習している内容や、日々の日記を書いています。<span
                        class="block w-6 h-6 mx-auto mt-4 border-b-2 border-r-2 transform rotate-45"></span></p>
                <a href="{{ route('blogindex') }}"
                    class="max-w-screen-md mx-auto block mb-5 relative px-5 py-3 overflow-hidden font-medium text-gray-600 bg-gray-100 border border-gray-100 rounded-lg shadow-inner group">
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
                    <span
                        class="relative transition-colors duration-300 delay-200 group-hover:text-white ease">MyBlogへ</span>
                </a>
                <div class="font-bold border-b border-l-8 border-blue-500 pl-5 mx-auto max-w-screen-md mt-10 mb-8 p-1.5">
                    <h2 class="text-xl">お問い合わせフォーム</h2>
                </div>
                <p class="tracking-widest mb-5 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg">
                    お問い合わせについては、下記よりお受けしております。</p>
                <p class="tracking-widest mb-8 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg">
                    サイトをもっとこうしたほうが良いとかなんもで良いので何でもお気軽にお問い合わせください。<span
                        class="block w-6 h-6 mx-auto mt-4 border-b-2 border-r-2 transform rotate-45"></span></p>
                <a href="{{ route('contact') }}"
                    class="max-w-screen-md mx-auto block mb-5 relative px-5 py-3 overflow-hidden font-medium text-gray-600 bg-gray-100 border border-gray-100 rounded-lg shadow-inner group">
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
                    <span
                        class="relative transition-colors duration-300 delay-200 group-hover:text-white ease">お問い合わせフォームへ</span>
                </a>
            </div>
            <!-- text - end -->
        </div>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
{{-- </body> --}}
