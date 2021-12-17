@extends("layout")
@section('page_content')

<!-- first row -->
<div class="row mt-4">
    <!-- new arrivals products  -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-white border-0">
                <h4>New Arrivals</h4>
            </div>
            <div class="card-body d-flex ">
                @foreach ($products -> slice(0,3) as $product)
                    <a href="/p/{{$product -> title }}" style="text-decoration: none; color: #000; width: 100%">
                        <img style="width: 100px; height: 100px; display: block" src="{{$product -> image}}" >
                        <div class="text-center mt-2" style="margin-left: -15px">
                            <span style="font-size: 12px; display: block; margin-bottom:-5px;">BDT 12.86</span>
                            <span style="font-size: 11px">Trending Now</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- new arrivals products  -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-white border-0">
                <h4>Top-ranked Products</h4>
            </div>
            <div class="card-body d-flex ">
                @foreach ($products -> slice(3, 3) as $product)
                    <a href="/p/{{$product -> title }}" style="text-decoration: none; color: #000; width: 100%">
                        <img style="width: 100px; height: 100px; display: block" src="{{$product -> image}}" >
                        <div class="text-center mt-2" style="margin-left: -15px">
                            <span style="font-size: 12px; display: block; margin-bottom:-5px;">BDT 12.86</span>
                            <span style="font-size: 11px">Trending Now</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- personal protective equipment  -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-white border-0">
                <h4>Personal Protective Equipment</h4>
            </div>
            <div class="card-body d-flex ">
                @foreach ($products -> slice(6, 3) as $product)
                    <a href="/p/{{$product -> title }}" style="text-decoration: none; color: #000; width: 100%">
                        <img style="width: 100px; height: 100px; display: block" src="{{$product -> image}}" >
                        <div class="text-center mt-2" style="margin-left: -15px">
                            <span style="font-size: 12px; display: block; margin-bottom:-5px;">BDT 12.86</span>
                            <span style="font-size: 11px">Trending Now</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <!-- dropshipping -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-white border-0">
                <h4>Dropshipping</h4>
            </div>
            <div class="card-body d-flex ">
                @foreach ($products -> slice(9,3) as $product)
                    <a href="/p/{{$product -> title }}" style="text-decoration: none; color: #000; width: 100%">
                        <img style="width: 100px; height: 100px; display: block" src="{{$product -> image}}" >
                        <div class="text-center mt-2" style="margin-left: -15px">
                            <span style="font-size: 12px; display: block; margin-bottom:-5px;">BDT 12.86</span>
                            <span style="font-size: 11px">Trending Now</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- global orignial sources  -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-white border-0">
                <h4>Global Original Sources</h4>
            </div>
            <div class="card-body d-flex ">
                @foreach ($products -> slice(12, 3) as $product)
                    <a href="/p/{{$product -> title }}" style="text-decoration: none; color: #000; width: 100%">
                        <img style="width: 100px; height: 100px; display: block" src="{{$product -> image}}" >
                        <div class="text-center mt-2" style="margin-left: -15px">
                            <span style="font-size: 12px; display: block; margin-bottom:-5px;">BDT 12.86</span>
                            <span style="font-size: 11px">Trending Now</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- best selling products  -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-white border-0">
                <h4>Best Selling Products</h4>
            </div>
            <div class="card-body d-flex ">
                @foreach ($products -> slice(16, 3) as $product)
                    <a href="/p/{{$product -> title }}" style="text-decoration: none; color: #000; width: 100%">
                        <img style="width: 100px; height: 100px; display: block" src="{{$product -> image}}" >
                        <div class="text-center mt-2" style="margin-left: -15px">
                            <span style="font-size: 12px; display: block; margin-bottom:-5px;">BDT 12.86</span>
                            <span style="font-size: 11px">Trending Now</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
