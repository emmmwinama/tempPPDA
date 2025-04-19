<div class="py-28" style="">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="">
            <div class="trending-text text-2xl font-bold  uppercase">
                trending now
            </div>
            <div class="h-[5px] w-[30px] my-4 bg-[#1d4722]"></div>
            @if($latest->count())
                <div class="trending-block pb-5">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-3">
                        <div class="">
                            <div class="lg:h-full text-white flex align-items-end justify-content-center bg-cover bg-center sm:h-[250px] min-h-[240px]" style="background-image: url({{ asset('storage/'.$latest[0]->image) }})">
                                <div class="py-4 w-full backdrop-brightness-25 bg-green-900/50 flex flex-col align-items-center">
                                    <a href="{{ route('NewsDetail', $latest[0]->id) }}" class="text-1xl lg:text-2xl hover:3xl font-[1000] hover:text-white">{{ $latest[0]->title }}</a>
                                    <p class="text-sm italic pt-2 sm:hidden">{{ date_format(date_create(Date($latest[0]->publishdate)), "F d, Y") }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="grid grid-rows-2 gap-3">
                                @if($latest->count()>1)
                                <div class="">
                                    <div class="flex align-items-end justify-content-center h-[250px] text-white font-[1000] bg-cover bg-center" style="background-image: url({{ asset('storage/'.$latest[1]->image) }})">
                                        <div class="py-4 w-full backdrop-brightness-25 bg-green-900/50 flex justify-content-center">
                                            <a href="{{ route('NewsDetail', $latest[1]->id) }}" class="text-1xl hover:2xl font-[1000] hover:text-white">{{ $latest[1]->title }}</a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                        @if($latest->count()>2)
                                            <div class="h-[250px]">
                                                <div class="h-full flex align-items-end justify-content-center text-white bg-cover bg-center" style="background-image: url({{ asset('storage/'.$latest[2]->image) }})">
                                                    <div class="py-4 w-full backdrop-brightness-25 bg-green-900/50 flex justify-content-center">
                                                        <a href="{{ route('NewsDetail', $latest[2]->id) }}" class="text-1xl hover:2xl font-[1000] hover:text-white">{{ $latest[2]->title }}</a>
                                                    </div>

                                                </div>
                                            </div>
                                        @endif
                                        @if($latest->count()>3)
                                            <div class="h-[250px]">
                                                <div class="h-full flex align-items-end justify-content-center text-white bg-cover bg-center" style="background-image: url({{ asset('storage/'.$latest[3]->image) }})">
                                                    <div class="py-4 w-full backdrop-brightness-25 bg-green-900/50 flex justify-content-center">
                                                        <a href="{{ route('NewsDetail', $latest[3]->id) }}" class="text-1xl hover:2xl font-[1000] hover:text-white">{{ $latest[3]->title }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row py-4 text-white rounded bg-green-900">
                    <div class="col d-flex align-items-center justify-content-center">No news available at the moment</div>
                </div>
            @endif
        </div>
        @if($news->count())
            <div class="other-news pt-4">
                <div class="trending-text text-2xl font-bold uppercase pb-4">
                    other news
                </div>
                <div class="h-[5px] w-[30px] my-4 bg-[#1d4722]"></div>
                <div class="">
                    <div class="grid grid-cols-1 lg:grid-cols-2 md:gap-3">
                        @foreach($news as $newsItem)
                            <div class="news-item">
                                <div class="grid grid-cols-1 md:grid-cols-5">
                                    <img src="{{ asset('storage/'.$newsItem->image) }}" class="img col-span-2 h-[180px] object-cover" >
                                    </img>
                                    <div class="col-span-3 font-bold p-2">
                                        <a href="{{ route('NewsDetail', $newsItem->id) }}" class="text-2xl">{{ $newsItem->title }}</a><br>
                                        <div class="my-2">{{ $newsItem->description }}</div>
                                        <div class="">
                                            <small>{{ date_format(date_create(Date($newsItem->publishdate)), "F d, Y") }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="">
                    {{ $news->links() }}
                </div>
            </div>
        @endif
    </div>
</div>
