<div class="py-28" style="">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="news-article">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div class="col-span-2">
                    @if(isset($newsdetail))
                        <div class="font-[1000] text-3xl uppercase">
                            <div class="news-title">
                                {{ $newsdetail->title }}
                            </div>
                        </div>
                        <div class="news-meta py-4">
                            {{ date_format(date_create(Date($newsdetail->publishdate)), "F d, Y") }}
                        </div>
                        <div class="news-img">
                            <img src="{{ asset('storage/'.$newsdetail->image) }}" alt="" class="w-full">
                        </div>
                        <div class="news-descr py-3">
                            <p class="normal-case italic"> {{ $newsdetail->description }}</p>
                        </div>
                        <div class="news-content antialiased">
                            {!! $newsdetail->content !!}
                        </div>
                    @endif

                </div>
                <div class="">
                    @if($news->count())
                        <div class="font-bold text-lg uppercase mb-2">
                            <div class="news-title text-2xl font-bold">
                                Other News and Events
                            </div>
                        </div>
                        <div class="pt-16">
                            @foreach($news as $newsItem)
                                <div class="mb-4 flex justify-content-end min-h-[150px] bg-cover bg-center rounded-lg overflow-hidden" style="background-image: url({{ asset('storage/'.$newsItem->image) }})">
                                    <div class="flex align-items-end bg-green-900/50 text-white w-full text-center p-2 text-2xl font-bold">
                                        <a href="{{ route('NewsDetail', $newsItem->id) }}" class="">{{ $newsItem->title }}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

{{--<div class="container ps-5 pe-5">--}}
{{--    <div class="row">--}}
{{--        <div class="col-12 p-2 text-center mt-4 mb-4" style="border-bottom: 1px solid black;border-top: 1px solid black;">--}}
{{--            <h1 class="text-black">WELCOME TO PPDA NEWS AND TRENDING EVENTS</h1>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--    <div class="row">--}}


{{--        <div class="col-lg-8 col-12">--}}
{{--            <div class="max-w-full rounded overflow-hidden shadow-lg">--}}
{{--                <img class="w-full" src="{{asset('/storage/'.$newsdetail->image)}}">--}}
{{--                <div class="px-2 py-4">--}}
{{--                    <div class="font-bold text-xl mb-2">{{ $newsdetail->title }}</div>--}}
{{--                    <p class="text-gray-700 text-base">--}}
{{--                        {{ $newsdetail->content }}--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


{{--        <div class="col-lg-1 col-0"></div>--}}
{{--        <div class="col-lg-3 col-12 mt-5 ps-lg-4">--}}
{{--            <div class="row">--}}


{{--                <div class="col-12 pb-4 g-0 border-bottom-black">--}}
{{--                    <p class="text-muted fs-5">What's recenting</p>--}}

{{--                    --}}{{----}}
{{--                                        @foreach ($newslisting as $recent)--}}
{{--                                           <span onclick="redirectTo({{route('NewsDetail',$recent->id)}})">--}}
{{--                        <a href="{{route('NewsDetail',$recent->id)}}" class="text-dark" style="text-decoration: none;">--}}
{{--      <div class="card p-0 mt-4 small-card" style="min-height:140px;">--}}
{{--        <img src="{{asset('/storage/'.$recent['image'])}}" class="w-100 h-100 card-img" style="opacity: 0.5; min-height:140px;">--}}
{{--        <div class="card-img-overlay">--}}
{{--          <h5 class="card-title">{{ $recent['title'] }}</h5>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--                        </a>--}}


{{--   </span>--}}

{{--                   @endforeach--}}

{{--                   --}}
{{--                </div>--}}


{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}





{{--</div>--}}

