<div>
    <div class="py-28" style="">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($awards->count())
                <div class="notice-table table-responsive">
                    <table class="table table-bordered" id="awardstable">
                        <thead class="bg-green-900 text-gray-100">
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Institution</th>
                            <th scope="col">Reference No.</th>
                            <th scope="col">Publish Date</th>
                            <th scope="col">Attachment</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($awards as $key => $award)
                            <tr>
                                <td> {{ $award->title }}</td>
                                <td> {{ $award->pde->name }}</td>
                                <td> {{ $award->reference }}</td>
                                <td> {{ $award->datepublished }}</td>
                                <td class="d-flex justify-content-center"><a href="{{ asset('storage/'.$award->downloads) }}" class="btn w-50 bg-green-800 hover:bg-green-900 hover:text-green-100 text-gray-100"><i class="fa fa-download"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="row py-4 text-white rounded bg-green-900">
                    <div class="col d-flex align-items-center justify-content-center">No publications available at the moment</div>
                </div>
            @endif
        </div>
    </div>
</div>

