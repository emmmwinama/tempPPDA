<div class="py-28" style="">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="row mb-3">
            <div class="col">
                <div class="sp-search">
                    <form action="">
                        <div class="input-group mb-3 rounded border" style="overflow: hidden">
                            <input type="search" class="form-control bg-white border border-gray-300 text-black rounded-lg focus:ring-green-800 focus:border-green-800 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark: dark:focus:border-green-800" placeholder="Search by Supplier's name" aria-label="Search by Supplier's name" aria-describedby="basic-addon2" style="background: transparent">
                            <div class="input-group-append">
                                <button class="bg-green-800 m-0  h-100 rounded-0 rounded-right border-0 px-5" type="button"><i class="fas fa-search text-white"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="sp-tables mt-6">
            <div class="table-utils my-3">
                <div class="number-records input-group form-group d-flex justify-content-start flex-row align-items-center">
                    <label for="record-num-select" class="mr-3">Show:</label>
                    <select name="record-num-select" id="record-num-select" class="mr-3">
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="200">200</option>
                        <option value="500">500</option>
                        <option value="All">All</option>
                    </select> Records
                </div>
                <div class="export-records input-group form-group d-flex justify-content-end flex-row align-items-center">
                    <button class="bg-green-800 m-2 text-white px-5 rounded py-2.5">Print <i class="fas fa-print text-white"></i></button>
                    <button class="bg-green-800 text-white px-5 rounded py-2.5">Download List<i class="fas fa-print ml-2 text-white"></i></button>
                </div>
            </div>
            <div class="tables">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Supplier name</th>
                        <th scope="col">Validity Expiry Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($suppliers as $supplier)
                    <tr>
                        <th scope="row">{{ $supplier[0] }}</th>
                        <td>{{ $supplier[1] }}</td>
                        <td>{{ $supplier[2] }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
