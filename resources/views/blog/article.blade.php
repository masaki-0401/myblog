@extends('layouts.app')
@extends('layouts.header')
@section('content')
    <div class="mx-auto max-w-screen-md px-4 md:px-8">
        <div class="container mx-auto py-6">
            {{-- <div class="w-full md:w-2/4 mx-auto"> --}}
            <p>更新日：</p>
            <h1 class="text-3xl font-bold my-10">目標を設定し、それを達成するためのロードマップ</h1>

            <div class="w-full bg-gray-100 mb-4">
                <img alt="gallery" class="w-full h-auto object-cover block" src="{{ asset('img/roadmap.png') }}">
            </div>

            <nav class="sticky top-0">
                <div class="flex flex-col md:block bg-gray-100 p-4 my-10">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        <h2 class="text-xl font-semibold">目次</h2>
                    </div>
                    <ul class="md:ml-4">
                        <li class="m-4">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>



                                <h2 class="block hover:underline font-bold text-xl ml-2">ロードマップとは</h2>
                            </div>
                            <ul>
                                <li class="ml-9 py-1 text-gray-600 text-lg"><a href="#section1">１：ロードマップの説明と目的</a></li>
                                <li class="ml-9 py-1 text-gray-600 text-lg"><a href="#section1">２：ロードマップの重要性</a></li>
                            </ul>
                        </li>
                        <li class="m-4">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>



                                <h2 class="block hover:underline font-bold text-xl ml-2">目標設定</h2>
                            </div>
                            <ul>
                                <li class="ml-9 py-1 text-gray-600 text-lg"><a href="#section1">１：こうなりたい自分をイメージする</a></li>
                                <li class="ml-9 py-1 text-gray-600 text-lg"><a href="#section1">２：具体的な目標を明確にする</a></li>
                                <li class="ml-9 py-1 text-gray-600 text-lg"><a href="#section1">３：目標達成の期限を決める</a></li>
                            </ul>
                        </li>
                        <li class="m-4">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>



                                <h2 class="block hover:underline font-bold text-xl ml-2">現状分析</h2>
                            </div>
                            <ul>
                                <li class="ml-9 py-1 text-gray-600 text-lg"><a href="#section1">１：現在の課題や問題点を整理する</a></li>
                                <li class="ml-9 py-1 text-gray-600 text-lg"><a
                                        href="#section1">２：目標達成するために今の自分のスキルレベルを把握する</a></li>
                            </ul>
                        </li>
                        <li class="m-4">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>



                                <h2 class="block hover:underline font-bold text-xl ml-2">モチベーション維持</h2>
                            </div>
                            <ul>
                                <li class="ml-9 py-1 text-gray-600 text-lg"><a
                                        href="#section1">１：目標達成のメリットや将来のビジョンを明確にする</a></li>
                                <li class="ml-9 py-1 text-gray-600 text-lg"><a href="#section1">２：目標に向けた行動計画をたてる</a></li>
                                <li class="ml-9 py-1 text-gray-600 text-lg"><a
                                        href="#section1">３：進捗状況を可視化するためにチェックリストを準備する</a></li>
                            </ul>
                        </li>
                        <li class="m-4">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>



                                <h2 class="block hover:underline font-bold text-xl ml-2">ロードマップ作成</h2>
                            </div>
                            <ul>
                                <li class="ml-9 py-1 text-gray-600 text-lg"><a href="#section1">１：ゴールから書く</a></li>
                                <li class="ml-9 py-1 text-gray-600 text-lg"><a href="#section1">２：期限を決める</a></li>
                                <li class="ml-9 py-1 text-gray-600 text-lg"><a href="#section1">３：課題の整理</a></li>
                                <li class="ml-9 py-1 text-gray-600 text-lg"><a href="#section1">４：タスクの整理</a></li>
                            </ul>
                        </li>
                        <li class="m-4">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                                <h2 class="block hover:underline font-bold text-xl ml-2">まとめ</h2>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <article>
            <section>
                <div class="font-bold border-b border-l-8 border-blue-500 pl-5 mx-auto mt-10 mb-5 p-1.5">
                    <h2 class="text-xl">ロードマップとは</h2>
                </div>
                <div class="px-5">
                    <h3 class="py-5 text-lg"><span style="border-bottom: 6px solid yellow;">１：ロードマップの説明と目的</span></h3>

                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        ロードマップとは、目標達成に向けた方針や計画を示したドキュメントのことです。主に、プロジェクトや製品の開発、キャリアの進路設計、マーケティング戦略などに活用されます。ロードマップは、具体的なスケジュールやタスクを記載することで、目的を達成するための手順や進捗状況を明確にし、関係者の共通理解を促進します。また、ロードマップは、将来の展望を共有し、目標達成の方向性を示すことで、戦略の策定や意思決定に役立ちます。
                    </p>
                    <h3 class="py-5 text-lg"><span style="border-bottom: 6px solid yellow;">２：ロードマップの重要性</span></h3>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        ロードマップは、目標達成に向けた方針や計画を示すことで、チームや組織全体で目的を共有し、一丸となって取り組むことができます。また、ロードマップには、具体的なスケジュールやタスクが記載されているため、プロジェクトや製品の開発、キャリアの進路設計、マーケティング戦略などにおいて、目的達成に向けた進捗状況を明確に把握することができます。さらに、ロードマップは将来の展望を共有し、目標達成の方向性を示すことで、戦略の策定や意思決定に役立ちます。そのため、ロードマップは、チームや組織の目標達成に欠かせない重要なドキュメントであり、十分な時間と労力をかけて作成することが求められます。
                    </p>
                </div>
            </section>
            <section>
                <div class="font-bold border-b border-l-8 border-blue-500 pl-5 mx-auto mt-10 mb-5 p-1.5">
                    <h2 class="text-xl">目標設定</h2>
                </div>
                <div class="px-5">
                    <h3 class="py-5 text-lg"><span style="border-bottom: 6px solid yellow;">１：現在の課題や問題点を整理する</span></h3>

                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        現在自分たちが抱えている課題や問題点を整理して、その解決策を考えることを意味します。このプロセスを行うことで、現在の状況を客観的に把握し、今後の方向性を見出すことができます。
                    </p>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        課題や問題点を整理するためには、以下のような手順が必要となります。</p>
                    <div class="bg-gray-100 p-4 mb-4">
                        <p class="tracking-widest mx-auto max-w-screen-md text-base text-red-500 md:text-lg"
                            style="line-height: 2;">
                            ◇ 課題や問題点を洗い出す</p>
                        <p class="tracking-widest mb-4 ml-7 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                            style="line-height: 2;">
                            現在の状況について、何が問題であるかを洗い出します。そのためには、プロジェクトメンバーとの話し合いや調査などが必要となります。</p>
                        <p class="tracking-widest mx-auto max-w-screen-md text-base text-red-500 md:text-lg"
                            style="line-height: 2;">
                            ◇ 問題点を整理する</p>
                        <p class="tracking-widest mb-4 ml-7 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                            style="line-height: 2;">
                            洗い出した課題や問題点を整理します。そのためには、それぞれの問題点について原因や影響範囲、優先度などを詳細に調べる必要があります。</p>
                        <p class="tracking-widest mx-auto max-w-screen-md text-base text-red-500 md:text-lg"
                            style="line-height: 2;">
                            ◇ 解決策を考える</p>
                        <p class="tracking-widest mb-4 ml-7 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                            style="line-height: 2;">
                            整理した問題点について、解決策を考えます。そのためには、それぞれの問題点について改善案を出し合い、その中から最適な解決策を見つけ出す必要があります。</p>
                        <p class="tracking-widest mx-auto max-w-screen-md text-base text-red-500 md:text-lg"
                            style="line-height: 2;">
                            ◇ 実行する</p>
                        <p class="tracking-widest mb-4 ml-7 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                            style="line-height: 2;">
                            最後に、考え出した解決策を実行します。そのためには、プロジェクトメンバー全員が協力し、スケジュールやタスク管理などを行い、計画通りに進めていく必要があります。</p>
                    </div>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        このように、現在の課題や問題点を整理することで、問題解決に向けた方針を明確化することができます。
                    </p>
                    <h3 class="py-5 text-lg"><span
                            style="border-bottom: 6px solid yellow;">２：目標設定のために今の自分のスキルレベルを把握する</span></h3>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        自分が今どの程度のスキルを持っているのかを正しく把握し、目標設定に反映させることを意味します。このプロセスを行うことで、自分がどこからスタートするべきかが明確化され、目標達成のためのロードマップが作成されます。
                    </p>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        自分のスキルレベルを把握するためには、以下のような手順が必要となります。</p>
                    <div class="bg-gray-100 p-4 mb-4">
                        <p class="tracking-widest mx-auto max-w-screen-md text-base text-red-500 md:text-lg"
                            style="line-height: 2;">
                            ◇ スキルを分類する</p>
                        <p class="tracking-widest mb-4 ml-7 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                            style="line-height: 2;">
                            まず、自分が持っているスキルを分類します。たとえば、プログラミングの場合は、プログラミング言語、データベース、フレームワークなどのカテゴリーに分けることができます。</p>
                        <p class="tracking-widest mx-auto max-w-screen-md text-base text-red-500 md:text-lg"
                            style="line-height: 2;">
                            ◇ スキルレベルを評価する</p>
                        <p class="tracking-widest mb-4 ml-7 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                            style="line-height: 2;">
                            スキルを分類した後、自分のスキルレベルを評価します。たとえば、言語の場合は、初心者、中級者、上級者などの段階に分けることができます。自己評価や他者からの評価を参考に、正しいスキルレベルを把握することが重要です。
                        </p>
                        <p class="tracking-widest mx-auto max-w-screen-md text-base text-red-500 md:text-lg"
                            style="line-height: 2;">
                            ◇ 目標を設定する</p>
                        <p class="tracking-widest mb-4 ml-7 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                            style="line-height: 2;">
                            スキルレベルを把握した後、目標を設定します。自分がどの程度のスキルレベルを目指すかを明確化することで、目標達成のための方向性が決まります。また、目標設定には期限を設定することも重要です。
                        </p>
                    </div>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        このように、目標設定のために今の自分のスキルレベルを把握することで、自分自身の能力を正しく把握し、目標達成に向けて効果的なロードマップを作成することができます。
                    </p>
                </div>
            </section>
            <section>
                <div class="font-bold border-b border-l-8 border-blue-500 pl-5 mx-auto mt-10 mb-5 p-1.5">
                    <h2 class="text-xl">モチベーション維持</h2>
                </div>
                <div class="px-5">
                    <h3 class="py-5 text-lg"><span
                            style="border-bottom: 6px solid yellow;">１：目標達成のメリットや将来のビジョンを明確にする</span></h3>

                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        目標を設定することで得られるメリットや、将来の自分がどうなりたいかを明確化することを意味します。このプロセスを行うことで、目標達成の意義や目的が明確化され、自分自身のビジョンが明確化されます。
                    </p>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        目標達成のメリットや将来のビジョンを明確にするためには、以下のような手順が必要となります。</p>
                    <div class="bg-gray-100 p-4 mb-4">
                        <p class="tracking-widest mx-auto max-w-screen-md text-base text-red-500 md:text-lg"
                            style="line-height: 2;">
                            ◇ 目標達成のメリットを考える</p>
                        <p class="tracking-widest mb-4 ml-7 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                            style="line-height: 2;">
                            まず、目標を達成することで得られるメリットを考えます。たとえば、スキルアップやキャリアアップなど、具体的なメリットを考えることができます。また、目標を達成することで得られる自信や達成感など、精神的な面でのメリットも考えることが重要です。
                        </p>
                        <p class="tracking-widest mx-auto max-w-screen-md text-base text-red-500 md:text-lg"
                            style="line-height: 2;">
                            ◇ 将来のビジョンを明確にする</p>
                        <p class="tracking-widest mb-4 ml-7 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                            style="line-height: 2;">
                            次に、将来の自分がどうなりたいかを明確化します。たとえば、どのような仕事をしていたいか、どのような人間関係を築きたいか、どのようなライフスタイルを実現したいかなど、自分自身が望む将来像を明確化することが重要です。
                        </p>
                        <p class="tracking-widest mx-auto max-w-screen-md text-base text-red-500 md:text-lg"
                            style="line-height: 2;">
                            ◇ 目標と将来のビジョンを関連付ける</p>
                        <p class="tracking-widest mb-4 ml-7 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                            style="line-height: 2;">
                            目標と将来のビジョンを関連付け、目標達成が将来の自分のビジョン実現につながることを明確化します。具体的には、目標達成が将来のキャリアアップにつながるなど、目標と将来のビジョンを具体的に関連付けることが重要です。
                    </div>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        このように、目標達成のメリットや将来のビジョンを明確にすることで、目標達成の意義や目的が明確化され、自分自身のビジョンが明確化されます。それにより、自己成長やキャリアアップに向けた取り組みがより具体化され、より効果的な学習やスキルアップが可能になります。また、将来の自分がどうなりたいかを明確化することで、自分自身が何を大切にしたいかを再確認し、それに向けた行動が取れるようになります。
                    </p>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        さらに、目標達成のメリットや将来のビジョンを明確にすることで、自己モチベーションが高まります。目標達成に向けた努力や成果が明確になることで、自分自身が達成できる可能性や自信を感じることができます。また、将来の自分がどうなりたいかを明確化することで、それに向けた自己実現がより現実的なものとなり、モチベーションの維持につながります。
                    </p>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        このように、目標達成のメリットや将来のビジョンを明確にすることは、自己成長やキャリアアップのために必要不可欠なプロセスです。自分自身が何を目指し、どのような人生を送りたいかを明確にすることで、自己実現に向けた取り組みがより具体的になり、自己モチベーションの維持にもつながります。
                    </p>
                    <h3 class="py-5 text-lg"><span style="border-bottom: 6px solid yellow;">２：目標に向けた行動計画をたてる</span></h3>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        目標を達成するためにどのような具体的なアクションをとるかを明確化することを意味します。このプロセスを行うことで、目標達成に必要なスキルや知識、時間、コストなどを把握し、目標達成に向けた実践的な行動計画をたてることができます。
                    </p>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        目標に向けた行動計画をたてるためには、以下のような手順が必要となります。</p>
                    <div class="bg-gray-100 p-4 mb-4">
                        <p class="tracking-widest mx-auto max-w-screen-md text-base text-red-500 md:text-lg"
                            style="line-height: 2;">
                            ◇ 目標を明確化する</p>
                        <p class="tracking-widest mb-4 ml-7 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                            style="line-height: 2;">
                            まず、目標を明確化します。目標を明確にすることで、何を達成したいのか、どのような成果が必要なのかが明確になります。具体的な目標を設定することで、必要なアクションを洗い出しやすくなります。
                        </p>
                        <p class="tracking-widest mx-auto max-w-screen-md text-base text-red-500 md:text-lg"
                            style="line-height: 2;">
                            ◇ アクションを洗い出す</p>
                        <p class="tracking-widest mb-4 ml-7 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                            style="line-height: 2;">
                            目標を設定したら、目標達成に必要なアクションを洗い出します。たとえば、必要なスキルの習得や、必要な情報の収集、必要な予算の確保など、具体的なアクションを洗い出します。
                        </p>
                        <p class="tracking-widest mx-auto max-w-screen-md text-base text-red-500 md:text-lg"
                            style="line-height: 2;">
                            ◇ アクションに優先度をつける</p>
                        <p class="tracking-widest mb-4 ml-7 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                            style="line-height: 2;">
                            次に、アクションに優先度をつけます。アクションには、緊急性や重要度など、優先度をつけることができます。また、アクションの関連性や依存関係なども考慮しながら、優先度をつけることが重要です。
                        <p class="tracking-widest mx-auto max-w-screen-md text-base text-red-500 md:text-lg"
                            style="line-height: 2;">
                            ◇ スケジュールを作成する</p>
                        <p class="tracking-widest mb-4 ml-7 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                            style="line-height: 2;">
                            アクションに優先度をつけたら、それらをスケジュール化します。具体的には、アクションの期限や、必要な時間、必要な予算などを考慮して、スケジュールを作成します。また、スケジュールを作成することで、アクションの進捗状況を把握することができます。
                    </div>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        このように、目標に向けた行動計画をたてることで、目標達成に向けた具体的なアクションを洗い出し、それらをスケジュール化することができます。行動計画を実行し、進捗状況を把握しながら、必要に応じて修正することで、目標達成に向けた取り組みがより具体的になります。
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        また、目標に向けた行動計画をたてることで、自己モチベーションの向上にもつながります。計画を具体的にたてることで、達成感や充実感を得られる可能性が高まります。また、スケジュールに沿ってアクションを実行することで、達成感を得ることができます。
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        このように、目標に向けた行動計画をたてることは、目標達成に向けた効果的な取り組みを行う上で欠かせないプロセスです。自分自身が何を達成したいのかを明確にし、具体的なアクションプランをたてることで、目標達成に向けた取り組みをより効果的に進めることができます。
                </div>
            </section>
            <section>
                <div class="font-bold border-b border-l-8 border-blue-500 pl-5 mx-auto mt-10 mb-5 p-1.5">
                    <h2 class="text-xl">ロードマップ作成</h2>
                </div>
                <div class="px-5">
                    <h3 class="py-5 text-lg"><span style="border-bottom: 6px solid yellow;">１：ゴールから書く</span></h3>

                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        自分自身が達成したいゴールや目標を達成するために、具体的な行動プランを立てるプロセスです。ロードマップを作成することで、ゴールに向かって必要なアクションを明確化し、計画的に取り組むことができます。
                    </p>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        ロードマップを作成する際には、期限を決めることが重要です。つまり、目標を達成する期限を設定し、その期限までに必要なアクションを洗い出します。こうすることで、期限に向けて具体的なアクションプランを立てることができます。
                    </p>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        たとえば、自分自身が将来的に達成したいキャリアアップやプロジェクトの成功などのゴールを設定した場合、そのゴールを達成するために必要な期限を設定します。その期限までに必要な具体的なアクションを書き出し、アクションプランを策定します。
                    </p>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        また、期限を決めることで、具体的なスケジュールを立てることができます。つまり、期限に向けて必要なアクションを日程に沿って分割し、実行可能な範囲にまとめることができます。その結果、目標達成に向けたアクションプランを、期限に向けて具体的に進めることができます。
                    </p>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        以上のように、「ロードマップ作成」は、自分自身が達成したいゴールや目標を達成するために必要な具体的なアクションプランを策定するプロセスです。期限を決めることで、期限に向けて具体的なアクションプランを立てることができ、目標達成に向けたプランの実現性を高めることができます。
                    </p>
                    <h3 class="py-5 text-lg"><span style="border-bottom: 6px solid yellow;">２：期限を決める</span></h3>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        ロードマップを作成する際には、期限を決めることが重要です。つまり、目標を達成する期限を設定し、その期限までに必要なアクションを洗い出します。こうすることで、期限に向けて具体的なアクションプランを立てることができます。
                    </p>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        たとえば、自分自身が将来的に達成したいキャリアアップやプロジェクトの成功などのゴールを設定した場合、そのゴールを達成するために必要な期限を設定します。その期限までに必要な具体的なアクションを書き出し、アクションプランを策定します。
                    </p>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        また、期限を決めることで、具体的なスケジュールを立てることができます。つまり、期限に向けて必要なアクションを日程に沿って分割し、実行可能な範囲にまとめることができます。その結果、目標達成に向けたアクションプランを、期限に向けて具体的に進めることができます。
                    </p>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        以上のように、「ロードマップ作成」は、自分自身が達成したいゴールや目標を達成するために必要な具体的なアクションプランを策定するプロセスです。期限を決めることで、期限に向けて具体的なアクションプランを立てることができ、目標達成に向けたプランの実現性を高めることができます。
                    </p>
                    <h3 class="py-5 text-lg"><span style="border-bottom: 6px solid yellow;">３：課題の整理</span></h3>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        ロードマップを作成する際には、課題の整理が必要です。つまり、自分自身が現在抱えている課題や問題点を明確にし、それらを解決するために必要なアクションを洗い出します。こうすることで、課題解決に向けた具体的なアクションプランを立てることができます。
                    </p>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        たとえば、自分自身が将来的に達成したいキャリアアップやプロジェクトの成功などのゴールを設定した場合、そのゴールを達成するために現在抱えている課題や問題点を洗い出します。たとえば、必要なスキルの不足や、情報収集の不十分さ、時間の確保の難しさなど、現在抱えている課題を具体的に書き出します。
                    </p>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        また、課題の整理により、アクションプランの具体化に役立ちます。つまり、課題を解決するために必要な具体的なアクションを立てることができます。その結果、課題解決に向けた具体的なアクションプランを立てることができます。
                    </p>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        以上のように、「ロードマップ作成」は、自分自身が達成したいゴールや目標を達成するために必要な具体的なアクションプランを策定するプロセスです。課題の整理を行うことで、課題解決に向けた具体的なアクションプランを立てることができ、目標達成への近道となります。
                    </p>
                    <h3 class="py-5 text-lg"><span style="border-bottom: 6px solid yellow;">４：タスクの整理</span></h3>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        ロードマップを作成する際には、タスクの整理が必要です。つまり、ゴール達成に必要なアクションをタスク単位に分割し、それらのタスクを洗い出します。こうすることで、タスクごとに必要なアクションプランを立てることができます。
                    </p>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        たとえば、自分自身が将来的に達成したいキャリアアップやプロジェクトの成功などのゴールを設定した場合、そのゴールを達成するために必要なタスクを洗い出します。たとえば、必要なスキルの習得、情報収集、アウトプットの作成など、ゴールに向けて必要なタスクを具体的に書き出します。
                    </p>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        また、タスクの整理により、アクションプランの具体化に役立ちます。つまり、タスクごとに必要なアクションを立てることができます。その結果、ゴール達成に向けた具体的なアクションプランを立てることができます。
                    </p>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        以上のように、「ロードマップ作成」は、自分自身が達成したいゴールや目標を達成するために必要な具体的なアクションプランを策定するプロセスです。タスクの整理を行うことで、タスクごとに必要なアクションプランを立てることができ、目標達成に向けたプランの実現性を高めることができます。
                    </p>
                </div>
            </section>

            <section>
                <div class="font-bold border-b border-l-8 border-blue-500 pl-5 mx-auto mt-10 mb-5 p-1.5">
                    <h2 class="text-xl">まとめ</h2>
                </div>
                <div class="px-5">
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        ロードマップとは、自分自身が達成したいゴールや目標を達成するために、具体的な行動プランを立てるプロセスです。ロードマップを作成することで、ゴールに向かって必要なアクションを明確化し、計画的に取り組むことができます。
                    </p>
                    <p class="tracking-widest mb-4 mx-auto max-w-screen-md text-base text-gray-500 md:text-lg"
                        style="line-height: 2;">
                        以上のように、ロードマップ作成は、自分自身が達成したいゴールや目標を達成するためのプロセスです。このプロセスを通じて、目標達成に向けた行動プランを具体的に立て、計画的に取り組むことができます。また、進捗状況を確認し、アクションプランを修正することで、目標達成への近道となります。

                    <div class="w-full bg-gray-100 mb-4">
                        <a href="{{ asset('img/myroadmap_enlarged.png') }}" target="_blank">
                            My Roadmap
                        </a>
                    </div>
                </div>
            </section>
        </article>
    </div>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

<script>
    function enlargeImg() {
        var img = document.getElementsByTagName("img")[0];
        var enlargedImg = document.createElement("img");
        enlargedImg.src = "{{ asset('img/myroadmap_enlarged.png') }}";
        enlargedImg.alt = "enlarged gallery";
        enlargedImg.style.width = "100%";
        enlargedImg.style.height = "auto";
        img.onclick = function() {
            document.body.appendChild(enlargedImg);
        };
    }
</script>
