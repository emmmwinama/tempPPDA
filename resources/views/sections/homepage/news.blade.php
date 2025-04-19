<div class="news py-28 bg-gray-200/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-heading">
            <div class="text-2xl font-bold">
                <h3>NEWS AND EVENTS</h3>
            </div>
            <div class="h-[5px] w-[30px] my-3 bg-[#1d4722]"></div>
            <div class="section-label pb-3">
                Find the latest news and events happening at PPDA
            </div>
        </div>
        <div class="">
            <div class="">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($news as $newsItem)
                        <div class="card hover:shadow-sm bg-transparent border">
                            <img src="{{ asset('storage/'.$newsItem->image) }}" alt="" class="card-img-top object-cover">
                                <div class="card-body bg-">
                                    <h1 class="card-title uppercase text-green-900 text-lg font-bold">
                                        {{ $newsItem->title }}
                                    </h1>
                                    <p class="card-text pb-3">
                                        {{ $newsItem->description }}
                                    </p>
                                    <a href="{{ route('NewsDetail', $newsItem->id) }}" class="stretched-link"></a>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">
                                        Publish Date: {{ date_format(date_create(Date($newsItem->publishdate)), "F d, Y") }}
                                    </small>
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>
            <div class="mt-5">
                <a href="{{ route('news') }}" class="rounded-md bg-green-800 text-white hover:bg-green-900 py-2.5 px-4 inline-flex items-center">More news</a>
            </div>
        </div>
    </div>
</div>
