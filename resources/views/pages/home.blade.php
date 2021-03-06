@extends('layout')
@section('content')

<div class="col-sm-9 padding-right">
<div class="features_items">
    <!--features_items-->
    <h2 class="title text-center">Sản phẩm mới nhất</h2>
    @foreach($all_product as $key=> $all_pro)

    <div class="col-sm-4">
        <div class="product-image-wrapper">
       
            <div class="single-products">
            <a href="{{URL::to('/chi-tiet-san-pham/'.$all_pro->product_id)}}">
                <div class="productinfo text-center">
                    <img src="{{URL::to('public/uploads/product/'.$all_pro->product_image)}}" alt="" />
                    
                    <h2>{{number_format($all_pro->product_price).''.'VND'}}</h2>
                    <p>{{$all_pro->product_name}}</p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                </div>
               
            
                </a>
        </div>
        <div class="choose">
            <ul class="nav nav-pills nav-justified">
                <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
            </ul>
        </div>
    </div>
</div>

@endforeach
@endsection