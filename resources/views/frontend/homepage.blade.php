@extends('frontend.layout')

@section('content')
<style>
  /* Style untuk card */
  .card {
        width: 300px;
        border: 2px solid #e1e1e1; /* Warna border */
        border-radius: 15px;
        overflow: hidden;
        margin: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
    }

    /* Style untuk gambar produk */
    .card img {
        width: 100%;
        height: auto;
        border-bottom: 1px solid #e1e1e1; /* Garis bawah pada gambar */
    }

    /* Style untuk konten card */
    .card-content {
        padding: 20px;
        flex: 1;
    }

    /* Style untuk nama produk */
    .product-name {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    /* Style untuk deskripsi produk */
    .product-description {
        margin-bottom: 15px;
    }

    /* Style untuk harga */
    .product-price {
        font-size: 16px;
        font-weight: bold;
        color: #007bff; /* Warna harga */
    }

    /* Style untuk tombol beli */
    .btn-buy,
    .btn-add-cart {
        display: block;
        width: 100%;
        padding: 10px 0;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px; /* Jarak antara tombol dan konten */
    }

    .btn-buy {
        background-color: #007bff; /* Warna tombol beli */
        color: white;
        margin-bottom: 5px; /* Jarak tambahan */
    }

    .btn-add-cart {
        background-color: #28a745; /* Warna tombol tambahkan ke keranjang */
        color: white;
        margin-top: 5px; /* Jarak tambahan */
    }

    /* Style untuk grup tombol */
    .button-group {
        display: flex;
        flex-direction: column; /* Tampilan vertikal */
    }
	.p1{
		margin-left: 900px;
		margin-top: -485px;
	}
    .carousel-item img {
    width: 100%;
    height: auto;
    object-fit: cover;
  }
</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- slider -->
        <div class="slider-area">
            <div class="slider-active owl-carousel">
                @foreach($slides as $slide)
                    <div class="single-slider-4 slider-height-6 bg-img" style="background-image: url({{ Storage::url($slide->path) }})">
                        <div class="container">
                            <div class="row">
                                <div class="ml-auto col-lg-6">
                                    <div class="furniture-content fadeinup-animated">
                                        <h2 class="animated">{{ $slide->title }}</h2>
                                        <p class="animated">{{ $slide->body }}</p>
                                        <a class="furniture-slider-btn btn-hover animated" href="{{ $slide->url }}">Go</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    <!-- end -->
    <!-- products -->
    @if ($products)
	<div class="popular-product-area wrapper-padding-3 pt-115 pb-115">
		<div class="container-fluid">
			<div class="section-title-6 text-center mb-50">
				<h2>Produk Material</h2>
				<p>Bahan Bahan dan Alat bangunan rumah</p>
			</div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="{{ asset('themes/ezone/assets/img/logo/avi (1).jpg') }}" class="d-block w-30" alt="Gambar 1" style="height:500px;">
      </div>
      <div class="carousel-item">
      <img src="{{ asset('themes/ezone/assets/img/logo/kayu.jpg') }}" class="d-block w-30" alt="Gambar 2" style="height:500px;">
      </div>
      <div class="carousel-item">
      <img src="{{ asset('themes/ezone/assets/img/logo/avi (1).jpg') }}" class="d-block w-100" alt="Gambar 3" style="height:500px;">
      </div>
      <!-- Tambahkan gambar sesuai kebutuhan -->
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br><br><br><br><br><br><br><br><br><br>
            <div class="container">
  
			<div class="card">
        <img src="{{ asset('themes/ezone/assets/img/logo/avi (1).jpg') }}" alt="Gambar Produk">
        <div class="card-content">
            <div class="product-name">Nama Produk</div>
            <div class="product-description">Deskripsi singkat produk di sini.</div>
            <div class="product-price">Harga: $99</div>
            <div class="button-group">
                <button class="btn-buy">Beli Sekarang</button>
                <button class="btn-add-cart">Tambahkan ke Keranjang</button>
            </div>
        </div>
    </div>
	<div  style ="margin-left: 450px; margin-top: -570px;"class="p2">
	<div class="card">
        <img src="{{ asset('themes/ezone/assets/img/logo/dulux (1).jpg') }}" alt="Gambar Produk">
        <div class="card-content">
            <div class="product-name">Nama Produk</div>
            <div class="product-description">Deskripsi singkat produk di sini.</div>
            <div class="product-price">Harga: $99</div>
            <div class="button-group">
                <button class="btn-buy">Beli Sekarang</button>
                <button class="btn-add-cart">Tambahkan ke Keranjang</button>
            </div>
        </div>
    </div>
</div>
	<div style="margin-top:-550px;"class="p1">
	<div class="card">
        <img src="{{ asset('themes/ezone/assets/img/logo/decol (1).jpg') }}" alt="Gambar Produk" >
        <div class="card-content">
            <div class="product-name">Nama Produk</div>
            <div class="product-description">Deskripsi singkat produk di sini.</div>
            <div class="product-price">Harga: $99</div>
            <div class="button-group">
                <button class="btn-buy">Beli Sekarang</button>
                <button class="btn-add-cart">Tambahkan ke Keranjang</button>
            </div>
        </div>
</div>

    </div>
        </div>
    </div>
    </div>
    </div>
    </div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<div class="product-style">
				<div class="popular-product-active owl-carousel">
					@foreach ($products as $product)
						@php
							$product = $product->parent ?: $product;
						@endphp
						<div class="product-wrapper">
							<div class="product-img">
								<a href="{{ url('product/'. $product->slug) }}">
									@if ($product->productImages->first())
										<img src="{{ Storage::url($product->productImages->first()->path) }}" alt="{{ $product->name }}">
									@else
										<img src="{{ asset('themes/ezone/assets/img/product/fashion-colorful/1.jpg') }}" alt="{{ $product->name }}">
									@endif
								</a>
								<div class="product-action">
									<a class="animate-left add-to-fav" title="Wishlist"  product-slug="{{ $product->slug }}" href="">
										<i class="pe-7s-like"></i>
									</a>
									<a class="animate-top add-to-card" title="Add To Cart" href="" product-id="{{ $product->id }}" product-type="{{ $product->type }}" product-slug="{{ $product->slug }}">
										<i class="pe-7s-cart"></i>
									</a>
									<a class="animate-right quick-view" title="Quick View" product-slug="{{ $product->slug }}" href="">
										<i class="pe-7s-look"></i>
									</a>
								</div>
							</div>
							<div class="funiture-product-content text-center">
								<h4><a href="{{ url('product/'. $product->slug) }}">{{ $product->name }}</a></h4>
								<span>Rp{{ number_format($product->priceLabel(), 0, ",", ".") }}</span>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


	<!-- product area end -->
@endif
    <!-- end -->
@endsection
