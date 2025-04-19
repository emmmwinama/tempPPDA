<div class="py-28" style="">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="news-article">
            <div class="">
                <div class="col-span-2">
                    @if(isset($error))
                        <div class="font-bold">
                            {{ $error }}
                        </div>
                    @else
                        @if(!empty($supplier))
                            <div class="text-2xl font-bold pb-5 text-center">Supplier Details</div>
                            <div class="grid grid-cols-2 gap-1">
                                @foreach($supplier as $value)
                                    <div class="font-bold text-right pr-3"> Supplier Code :</div>
                                    <div class="">{{ $value['supplier_code'] }}</div>
                                    <div class=" font-bold text-right pr-3"> Supplier Name :</div>
                                    <div class="">{{ $value['supplier_name'] }}</div>
                                    <div class=" font-bold text-right pr-3"> Postal Address "</div>
                                    <div class="">{{ $value['postal_address'] }} </div>
                                    <div class=" font-bold text-right pr-3"> Supplier Location :</div>
                                    <div class="">{{ $value['Location'] }} </div>
                                    <div class=" font-bold text-right pr-3"> Goods Category :</div>
                                    <div class="">{{ $value['goods_category'] }} </div>
                                    <div class=" font-bold text-right pr-3"> Services Category :</div>
                                    <div class="">{{ $value['services_category'] }} </div>
                                    <div class=" font-bold text-right pr-3"> Date of Expiry :</div>
                                    <div class="">{{ $value['expire_date'] }} </div>
                                    <div class=" font-bold text-right pr-3"> Validity of Certificate:</div>
                                    <div class="">
                                        @if($value['expire_date'] < now())
                                            <i class="fa-solid fa-circle-xmark text-6xl text-red-600"></i>
                                        @elseif($value['expire_date'] == now())
                                            <i class="fa-solid fa-circle-exclamation text-6xl text-amber-400"></i>
                                        @else
                                            <i class="fa-solid fa-circle-check text-6xl text-green-600"></i>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        
                        @if(empty($supplier))
                
                            <div class="row py-4 text-white rounded bg-green-800">
                                <div class="col d-flex align-items-center justify-content-center">Certificate not found</div>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
