@extends("layouts.template")
@section("titre")
page produits
@endsection
@section("contenu")

<div class="tab-content jump">
    <div class="tab-pane" id="product-1">
        <div class="row">
            <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                <div class="product-wrap mb-25">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/img/product/hm22-pro-12.jpg');}}" alt="">
                            <img class="hover-img" src="{{asset('assets/img/product/hm22-pro-12.jpg');}}" alt="">
                        </a>
                        <span class="pink">-10%</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">Product Title Here</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                            <span class="old">$ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                <div class="product-wrap mb-25">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/img/product/hm22-pro-11.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/img/product/hm22-pro-11.jpg')}}" alt="">
                        </a>
                        <span class="purple">New</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">Product Title Here</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                <div class="product-wrap mb-25">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/img/product/hm22-pro-10.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/img/product/hm22-pro-10.jpg')}}" alt="">
                        </a>
                        <span class="pink">-10%</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">Product Title Here</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                            <span class="old">$ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                <div class="product-wrap mb-25">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/img/product/hm22-pro-9.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/img/product/hm22-pro-9.jpg')}}" alt="">
                        </a>
                        <span class="purple">New</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">Product Title Here</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                <div class="product-wrap mb-25">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/img/product/hm22-pro-8.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/img/product/hm22-pro-8.jpg')}}" alt="">
                        </a>
                        <span class="pink">-10%</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">Product Title Here</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                            <span class="old">$ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                <div class="product-wrap mb-25">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/img/product/hm22-pro-7.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/img/product/hm22-pro-7.jpg')}}" alt="">
                        </a>
                        <span class="purple">New</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">Product Title Here</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                <div class="product-wrap mb-25">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/img/product/hm22-pro-6.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/img/product/hm22-pro-6.jpg')}}" alt="">
                        </a>
                        <span class="pink">-10%</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">Product Title Here</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                            <span class="old">$ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                <div class="product-wrap mb-25">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/img/product/hm22-pro-5.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/img/product/hm22-pro-5.jpg')}}" alt="">
                        </a>
                        <span class="purple">New</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">Product Title Here</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane active" id="product-2">
        <div class="row">
            <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                <div class="product-wrap mb-25">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/img/product/hm22-pro-5.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/img/product/hm22-pro-5.jpg')}}" alt="">
                        </a>
                        <span class="pink">-10%</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">Product Title Here</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                            <span class="old">$ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                <div class="product-wrap mb-25">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/img/product/hm22-pro-6.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/img/product/hm22-pro-6.jpg')}}" alt="">
                        </a>
                        <span class="purple">New</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">Product Title Here</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                <div class="product-wrap mb-25">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/img/product/hm22-pro-7.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/img/product/hm22-pro-7.jpg')}}" alt="">
                        </a>
                        <span class="pink">-10%</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">Product Title Here</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                            <span class="old">$ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                <div class="product-wrap mb-25">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/img/product/hm22-pro-8.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/img/product/hm22-pro-8.jpg')}}" alt="">
                        </a>
                        <span class="purple">New</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">Product Title Here</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                <div class="product-wrap mb-25">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/img/product/hm22-pro-9.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/img/product/hm22-pro-9.jpg')}}" alt="">
                        </a>
                        <span class="pink">-10%</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">Product Title Here</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                            <span class="old">$ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                <div class="product-wrap mb-25">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/img/product/hm22-pro-10.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/img/product/hm22-pro-10.jpg')}}" alt="">
                        </a>
                        <span class="purple">New</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">Product Title Here</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                <div class="product-wrap mb-25">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/img/product/hm22-pro-11.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/img/product/hm22-pro-11.jpg')}}" alt="">
                        </a>
                        <span class="pink">-10%</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">Product Title Here</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                            <span class="old">$ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                <div class="product-wrap mb-25">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/img/product/hm22-pro-12.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/img/product/hm22-pro-12.jpg')}}" alt="">
                        </a>
                        <span class="purple">New</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">Product Title Here</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane" id="product-3">
        <div class="row">
            <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                <div class="product-wrap mb-25">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/img/product/hm22-pro-8.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/img/product/hm22-pro-8.jpg')}}" alt="">
                        </a>
                        <span class="pink">-10%</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">Product Title Here</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                            <span class="old">$ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                <div class="product-wrap mb-25">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/img/product/hm22-pro-7.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/img/product/hm22-pro-7.jpg')}}" alt="">
                        </a>
                        <span class="purple">New</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">Product Title Here</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                <div class="product-wrap mb-25">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/img/product/hm22-pro-6.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/img/product/hm22-pro-6.jpg')}}" alt="">
                        </a>
                        <span class="pink">-10%</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">Product Title Here</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                            <span class="old">$ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                <div class="product-wrap mb-25">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/img/product/hm22-pro-5.jpg')}}"alt="">
                            <img class="hover-img" src="{{asset('assets/img/product/hm22-pro-5.jpg')}}" alt="">
                        </a>
                        <span class="purple">New</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">Product Title Here</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                <div class="product-wrap mb-25">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/img/product/hm22-pro-12.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/img/product/hm22-pro-12.jpg')}}" alt="">
                        </a>
                        <span class="pink">-10%</span>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">Product Title Here</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                            <span class="old">$ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                <div class="product-wrap mb-25">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/img/product/hm22-pro-11.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/img/product/hm22-pro-11.jpg')}}" alt="">
                        </a>
                        <span class="purple">New</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">Product Title Here</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                <div class="product-wrap mb-25">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/img/product/hm22-pro-10.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/img/product/hm22-pro-10.jpg')}}" alt="">
                        </a>
                        <span class="pink">-10%</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">Product Title Here</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                            <span class="old">$ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6">
                <div class="product-wrap mb-25">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{asset('assets/img/product/hm22-pro-9.jpg')}}" alt="">
                            <img class="hover-img" src="{{asset('assets/img/product/hm22-pro-9.jpg')}}" alt="">
                        </a>
                        <span class="purple">New</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">Product Title Here</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection