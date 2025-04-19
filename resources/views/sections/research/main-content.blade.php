<div>
    <div class="py-12 bg-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="res-search">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-2"></div>
                    <div class="col-lg-8 col-md-8 col-sm-10">
                        <form action="" method="get">
                            <div class="flex">
                                <input type="search" name="document" value="{{ request('document') }}" class="bg-white border border-gray-300 text-black focus:ring-green-800 focus:border-green-800 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark: dark:focus:border-green-800 rounded-none rounded-l" placeholder="Search by document name" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="bg-green-900 hover:bg-green-900 text-white px-5 rounded-r" type="submit" id="button-addon2"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if(request('document'))
                <div class="d-flex justify-content-center align-items-center py-2 fs-3">Search results for "<span class="fw-bold fst-italic">{{ $search }}</span>"</div>
            @endif
            <div class="res-cards">
                @if($researchs->count())
                    @if(!request('document'))
                        <div>
                            {{ $researchs->links() }}
                        </div>
                    @endif
                    @foreach($researchs as $key => $research)
                        <div class="res-card bg-white rounded py-3 px-3 shadow-sm my-3">
                            <div class="row">
                                <div class="col-lg-1 col-md-1 d-flex align-items-center justify-content-center text-green-800">
                                    <i class="far fa-file-alt" style="font-size: xxx-large"></i>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="row d-flex">
                                        <div class="col d-flex align-items-center justify-content-center fw-bold fs-5">{{ $research->name }}</div>
                                    </div>
                                    <div class="row ">
                                        <div class="col d-flex align-items-center justify-content-center text-center my-1">{{ $research->description }}</div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-2 d-flex align-items-center justify-content-center">
                                    {{ date_format(date_create(Date($research->created_at)), "F d, Y") }}
                                </div>
                                <div class="col-lg-2 col-md-3 d-flex align-items-center justify-content-center">
                                    <a href="{{ asset('storage/'.$research->url) }}" class="btn text-gray-100 bg-green-800">Download <i class="fa fa-download"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @if(!request('document'))
                        <div>
                            {{ $researchs->links() }}
                        </div>
                    @endif
                @else
                    <div class="row py-4 text-white rounded bg-green-800">
                        <div class="col d-flex align-items-center justify-content-center">No documents available at this moment</div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
