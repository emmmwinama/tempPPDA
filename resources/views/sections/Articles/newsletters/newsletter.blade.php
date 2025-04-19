<div class="py-28" style="">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($newsletters->count())
            <div class="notice-table table-responsive">
                <table class="table table-bordered" id="newsletterstable">
                    <thead class="bg-green-900 text-gray-100">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Date Published</th>
                        <th scope="col">File Asset</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($newsletters as $key => $newsletter)
                        <tr>
                            <td> {{$newsletter['title']}}</td>
                            <td> {{$newsletter['description']}}</td>
                            <td> {{ date_format(date_create(Date($newsletter['ispublished'])), 'd M, Y') }}</td>
                            <td>
                                <a href="{{asset('/storage/'.$newsletter['downloads'])}}" class="btn w-50 bg-green-800 hover:bg-green-900 hover:text-green-100 text-gray-100">
                                    <i class="fa fa-download px-1"></i>
                                </a>
                            </td>
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
