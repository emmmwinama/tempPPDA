<div>
    <div class="py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-3">
                <div class="col-span-4 lg:col-span-3">
                    <div class="mb-3">
                        <a href="{{ route('vacancies') }}">&larr; Back to Vacancy Listings</a>
                    </div>
                    <div class="border-b mb-5 pb-3">
                        <div class="text-2xl font-bold uppercase">{{ $vacancydetail->title }}</div>
                        <div class="text-lg capitalize">{{ $vacancydetail->location }}</div>
                        <div class="Capitalize">{{ $vacancydetail->type }}</div>
                    </div>
                    <div class="mb-5">
                        {!! $vacancydetail->description !!}
                    </div>
                    <div class="pt-3">
                        <a href="{{ asset('storage/'.$vacancydetail->attachment) }}" class="bg-green-900 hover:bg-green-800 text-white p-3 rounded-lg"><i class="fas fa-file-pdf mr-3"></i>File Attachment</a>
                    </div>
                </div>
                <div class="">

                </div>
            </div>
        </div>
    </div>
</div>
