<div>
    <div class="py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-2">
                <div class="col-span-3">
                    @if($vacancies->count())
                        {{--                <div class="grid grid-col-1 md:grid-cols-3 lg:grid-cols-3 gap-y-2 md:gap-2 lg:gap-3">--}}
                        {{--                    <div class="col-span-3 border-4">1</div>--}}
                        {{--                </div>--}}
                        <div class="mb-4">
                            <span class="font-bold uppercase text-lg">Available positions</span><br><br>
                                Join us in one of the following capacities
                        </div>
                        <div class="grid grid-cols-1 gap-2">
                            @foreach($vacancies as $key => $vacancy)
                                <div class="border shadow-md rounded-3xl px-5 py-4 hover:shadow-md">
                                    <div class="d-flex items-center justify-content-between">
                                        <div class="d-flex items-center">
                                            <div class="mr-5">
                                                <i class="fas fa-briefcase text-3xl p-3 bg-gray-200 rounded-lg"></i>
                                            </div>
                                            <div class="text-lg uppercase font-bold">
                                                {{ $vacancy->title }}
                                            </div>
                                        </div>
                                        <div class="">
                                            <span class="font-bold">Location: </span>
                                            {{ $vacancy->location }}
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <div class="d-flex items-center justify-content-between">
                                            <div class="d-flex gap-x-2">
                                                <div class="p-2 bg-gray-100 rounded-lg">
                                                    {{ $vacancy->type }}
                                                </div>
                                                <div class="p-2 bg-gray-100 rounded-lg">{{ date_format(date_create(Date($vacancy->close_date)), "d F, Y") }}</div>
                                            </div>
                                            <div class="py-3 md:py-1">
                                                <a href="{{ route('vacancyDetails', $vacancy->id) }}" class="p-3 bg-green-900 hover:bg-green-800 text-white rounded-lg">See Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-3">
                            {{ $vacancies->links() }}
                        </div>
                    @else
                        <div class="row py-4 text-white rounded bg-green-900">
                            <div class="col d-flex align-items-center justify-content-center">No vacancies available at the moment</div>
                        </div>
                    @endif
                </div>
                <div class=""></div>
            </div>
        </div>
    </div>
</div>
