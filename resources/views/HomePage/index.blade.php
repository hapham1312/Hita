@extends('Layouts.index')
@section('content')

			<div role="main" class="main">
				
			<div class="banners-container">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="banner">
								<a href="#"><img src="{{asset('shop7/img/demos/shop/banners/shop7/banner1.jpg')}}" alt="Banner"></a>

								<div class="banner-content v1">
									<h2><strong>Huge</strong> Sale</h2>
									<p>Now starting at <strong>$99</strong></p>
									<a href="#">Shop now ></a>
								</div>

								<div class="banner-ribbon">
									<div class="ribbon-content">
										<span>Up to</span>
										<h3>70%</h3>
										<h4>Off</h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="banner">
								<a href="#"><img src="{{asset('shop7/img/demos/shop/banners/shop7/banner2.jpg')}}" alt="Banner"></a>
								<div class="banner-content v2">
									<h3>amazing</h3>
									<h2>Collection</h2>
									<a href="#">Show now ></a>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="banner">
								<a href="#"><img src="{{asset('shop7/img/demos/shop/banners/shop7/banner3.jpg')}}" alt="Banner"></a>

								<div class="banner-content v3">
									<p>Mobile</p>
									<p>Mega Sale</p>
									<h4>$450.00</h4>
									<h3>$350.<span>00</span></h3>
									<a href="#">Shop now ></a>
								</div>
							</div>

							<div class="banner">
								<a href="#"><img src="{{asset('shop7/img/demos/shop/banners/shop7/banner4.jpg')}}" alt="Banner"></a>

								<div class="banner-content v4">
									<h2><strong>Deals</strong> +<br> PROMOS</h2>
									<p>Limited sales in<br>our categories.</p>
									<a href="#" class="btn btn-primary">SHOP NOW <i class="fa fa-caret-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<h2 class="slider-title">
                    <span class="inline-title">FEATURED PRODUCTS</span>
                    <span class="line"></span>
                </h2>

                <div class="owl-carousel owl-theme manual featured-products-carousel">
					<div class="product">
						<figure class="product-image-area">
							<a href="demo-shop-7-product-details.html" title="Product Name" class="product-image">
								<img src="{{asset('shop7/img/demos/shop/products/shop7/product1.jpg')}}" alt="Product Name">
							</a>

							<a href="#" class="product-quickview">
								<i class="fa fa-share-square-o"></i>
								<span>Quick View</span>
							</a>
							<div class="product-label"><span class="discount">-10%</span></div>
						</figure>
						<div class="product-details-area">
							<h2 class="product-name"><a href="demo-shop-7-product-details.html" title="Product Name">Noa Sheer Blouse</a></h2>
							<div class="product-ratings">
								<div class="ratings-box">
									<div class="rating" style="width:60%"></div>
								</div>
							</div>

							<div class="product-price-box">
								<span class="old-price">$99.00</span>
								<span class="product-price">$89.00</span>
							</div>

							<div class="product-actions">
								<a href="#" class="addtowishlist" title="Add to Wishlist">
									<i class="fa fa-heart"></i>
								</a>
								<a href="#" class="addtocart" title="Add to Cart">
									<i class="fa fa-shopping-cart"></i>
									<span>Add to Cart</span>
								</a>
								<a href="#" class="comparelink" title="Add to Compare">
									<i class="glyphicon glyphicon-signal"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="product">
						<figure class="product-image-area">
							<a href="demo-shop-7-product-details.html" title="Product Name" class="product-image">
								<img src="{{asset('shop7/img/demos/shop/products/shop7/product2.jpg')}}" alt="Product Name">
							</a>

							<a href="#" class="product-quickview">
								<i class="fa fa-share-square-o"></i>
								<span>Quick View</span>
							</a>
							<div class="product-label"><span class="discount">-25%</span></div>
						</figure>
						<div class="product-details-area">
							<h2 class="product-name"><a href="demo-shop-7-product-details.html" title="Product Name">Women Fashion Blouse</a></h2>
							<div class="product-ratings">
								<div class="ratings-box">
									<div class="rating" style="width:0%"></div>
								</div>
							</div>

							<div class="product-price-box">
								<span class="old-price">$120.00</span>
								<span class="product-price">$90.00</span>
							</div>

							<div class="product-actions">
								<a href="#" class="addtowishlist" title="Add to Wishlist">
									<i class="fa fa-heart"></i>
								</a>
								<a href="#" class="addtocart" title="Add to Cart">
									<i class="fa fa-shopping-cart"></i>
									<span>Add to Cart</span>
								</a>
								<a href="#" class="comparelink" title="Add to Compare">
									<i class="glyphicon glyphicon-signal"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="product">
						<figure class="product-image-area">
							<a href="demo-shop-7-product-details.html" title="Product Name" class="product-image">
								<img src="{{asset('shop7/img/demos/shop/products/shop7/product3.jpg')}}" alt="Product Name">
							</a>

							<a href="#" class="product-quickview">
								<i class="fa fa-share-square-o"></i>
								<span>Quick View</span>
							</a>
						</figure>
						<div class="product-details-area">
							<h2 class="product-name"><a href="demo-shop-7-product-details.html" title="Product Name">Fashion Dress</a></h2>
							<div class="product-ratings">
								<div class="ratings-box">
									<div class="rating" style="width:60%"></div>
								</div>
							</div>

							<div class="product-price-box">
								<span class="product-price">$70.00</span>
							</div>

							<div class="product-actions">
								<a href="#" class="addtowishlist" title="Add to Wishlist">
									<i class="fa fa-heart"></i>
								</a>
								<a href="#" class="addtocart" title="Add to Cart">
									<i class="fa fa-shopping-cart"></i>
									<span>Add to Cart</span>
								</a>
								<a href="#" class="comparelink" title="Add to Compare">
									<i class="glyphicon glyphicon-signal"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="product">
						<figure class="product-image-area">
							<a href="demo-shop-7-product-details.html" title="Product Name" class="product-image">
								<img src="{{asset('shop7/img/demos/shop/products/shop7/product4.jpg')}}" alt="Product Name">
							</a>

							<a href="#" class="product-quickview">
								<i class="fa fa-share-square-o"></i>
								<span>Quick View</span>
							</a>
							<div class="product-label"><span class="discount">-20%</span></div>
						</figure>
						<div class="product-details-area">
							<h2 class="product-name"><a href="demo-shop-7-product-details.html" title="Product Name">Fashion Sweater</a></h2>
							<div class="product-ratings">
								<div class="ratings-box">
									<div class="rating" style="width:80%"></div>
								</div>
							</div>

							<div class="product-price-box">
								<span class="old-price">$100.00</span>
								<span class="product-price">$90.00</span>
							</div>

							<div class="product-actions">
								<a href="#" class="addtowishlist" title="Add to Wishlist">
									<i class="fa fa-heart"></i>
								</a>
								<a href="#" class="addtocart" title="Add to Cart">
									<i class="fa fa-shopping-cart"></i>
									<span>Add to Cart</span>
								</a>
								<a href="#" class="comparelink" title="Add to Compare">
									<i class="glyphicon glyphicon-signal"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="product">
						<figure class="product-image-area">
							<a href="demo-shop-7-product-details.html" title="Product Name" class="product-image">
								<img src="{{asset('shop7/img/demos/shop/products/shop7/product1.jpg')}}" alt="Product Name">
							</a>

							<a href="#" class="product-quickview">
								<i class="fa fa-share-square-o"></i>
								<span>Quick View</span>
							</a>
						</figure>
						<div class="product-details-area">
							<h2 class="product-name"><a href="demo-shop-7-product-details.html" title="Product Name">Woman Shee Blouse</a></h2>
							<div class="product-ratings">
								<div class="ratings-box">
									<div class="rating" style="width:0%"></div>
								</div>
							</div>

							<div class="product-price-box">
								<span class="product-price">$70.00</span>
							</div>

							<div class="product-actions">
								<a href="#" class="addtowishlist" title="Add to Wishlist">
									<i class="fa fa-heart"></i>
								</a>
								<a href="#" class="addtocart" title="Add to Cart">
									<i class="fa fa-shopping-cart"></i>
									<span>Add to Cart</span>
								</a>
								<a href="#" class="comparelink" title="Add to Compare">
									<i class="glyphicon glyphicon-signal"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container mb-xlg">
        		<h2 class="slider-title">
                    <span class="inline-title">BROWSE OUR CATEGORIES</span>
                    <span class="line"></span>
                </h2>

                <div class="owl-carousel owl-theme" data-plugin-options='{"items":4, "loop": false, "nav": true, "dots": false, "margin": 10}'>
					<div class="cat-box">
						<a href="#">
							<img src="{{asset('shop7/img/demos/shop/category/category1.jpg')}}" alt="Category">
						</a>
						<h3>Home &amp; Garden</h3>
					</div>

					<div class="cat-box">
						<a href="#">
							<img src="{{asset('shop7/img/demos/shop/category/category2.jpg')}}" alt="Category">
						</a>
						<h3>Sports</h3>
					</div>

					<div class="cat-box">
						<a href="#">
							<img src="{{asset('shop7/img/demos/shop/category/category3.jpg')}}" alt="Category">
						</a>
						<h3>Fashion</h3>
					</div>

					<div class="cat-box">
						<a href="#">
							<img src="{{asset('shop7/img/demos/shop/category/category4.jpg')}}" alt="Category">
						</a>
						<h3>Electronics</h3>
					</div>

					<div class="cat-box">
						<a href="#">
							<img src="{{asset('shop7/img/demos/shop/category/category1.jpg')}}" alt="Category">
						</a>
						<h3>Home &amp; Garden</h3>
					</div>
				</div>
			</div>

			<div class="container mb-xlg">
				<h2 class="slider-title">
                    <span class="inline-title">JUST ARRIVED</span>
                </h2>
				<ul class="products-grid columns6">
					<li>
						<div class="product">
							<figure class="product-image-area">
								<a href="demo-shop-7-product-details.html" title="Product Name" class="product-image">
									<img src="{{asset('shop7/img/demos/shop/products/shop7/product6.jpg')}}" alt="Product Name">
									<img src="{{asset('shop7/img/demos/shop/products/shop7/product6-2.jpg')}}" alt="Product Name" class="product-hover-image">
								</a>

								<a href="#" class="product-quickview">
									<i class="fa fa-share-square-o"></i>
									<span>Quick View</span>
								</a>
								<div class="product-actions">
									<a href="#" class="addtocart" title="Add to Cart">
										<i class="fa fa-shopping-cart"></i>
									</a>
								</div>
							</figure>
							<div class="product-details-area">
								<h2 class="product-name"><a href="demo-shop-7-product-details.html" title="Product Name">Sports Set</a></h2>
								<div class="product-ratings">
									<div class="ratings-box">
										<div class="rating" style="width:60%"></div>
									</div>
								</div>

								<div class="product-price-box">
									<span class="old-price">$99.00</span>
									<span class="product-price">$89.00</span>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="product">
							<figure class="product-image-area">
								<a href="demo-shop-7-product-details.html" title="Product Name" class="product-image">
									<img src="{{asset('shop7/img/demos/shop/products/shop7/product5.jpg')}}" alt="Product Name">
								</a>

								<a href="#" class="product-quickview">
									<i class="fa fa-share-square-o"></i>
									<span>Quick View</span>
								</a>
								<div class="product-actions">
									<a href="#" class="addtocart" title="Add to Cart">
										<i class="fa fa-shopping-cart"></i>
									</a>
								</div>
							</figure>
							<div class="product-details-area">
								<h2 class="product-name"><a href="demo-shop-7-product-details.html" title="Product Name">Cellphone</a></h2>
								<div class="product-ratings">
									<div class="ratings-box">
										<div class="rating" style="width:0%"></div>
									</div>
								</div>

								<div class="product-price-box">
									<span class="old-price">$120.00</span>
									<span class="product-price">$90.00</span>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="product">
							<figure class="product-image-area">
								<a href="demo-shop-7-product-details.html" title="Product Name" class="product-image">
									<img src="{{asset('shop7/img/demos/shop/products/shop7/product7.jpg')}}" alt="Product Name">
								</a>

								<a href="#" class="product-quickview">
									<i class="fa fa-share-square-o"></i>
									<span>Quick View</span>
								</a>
								<div class="product-actions">
									<a href="#" class="addtocart" title="Add to Cart">
										<i class="fa fa-shopping-cart"></i>
									</a>
								</div>
							</figure>
							<div class="product-details-area">
								<h2 class="product-name"><a href="demo-shop-7-product-details.html" title="Product Name">White Bag</a></h2>
								<div class="product-ratings">
									<div class="ratings-box">
										<div class="rating" style="width:60%"></div>
									</div>
								</div>

								<div class="product-price-box">
									<span class="product-price">$70.00</span>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="product">
							<figure class="product-image-area">
								<a href="demo-shop-7-product-details.html" title="Product Name" class="product-image">
									<img src="{{asset('shop7/img/demos/shop/products/shop7/product8.jpg')}}" alt="Product Name">
								</a>

								<a href="#" class="product-quickview">
									<i class="fa fa-share-square-o"></i>
									<span>Quick View</span>
								</a>
								<div class="product-label"><span class="discount">-20%</span></div>
								<div class="product-actions">
									<a href="#" class="addtocart" title="Add to Cart">
										<i class="fa fa-shopping-cart"></i>
									</a>
								</div>
							</figure>
							<div class="product-details-area">
								<h2 class="product-name"><a href="demo-shop-7-product-details.html" title="Product Name">Hand Bag</a></h2>
								<div class="product-ratings">
									<div class="ratings-box">
										<div class="rating" style="width:80%"></div>
									</div>
								</div>

								<div class="product-price-box">
									<span class="old-price">$100.00</span>
									<span class="product-price">$90.00</span>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="product">
							<figure class="product-image-area">
								<a href="demo-shop-7-product-details.html" title="Product Name" class="product-image">
									<img src="{{asset('shop7/img/demos/shop/products/shop7/product9.jpg')}}" alt="Product Name">
								</a>

								<a href="#" class="product-quickview">
									<i class="fa fa-share-square-o"></i>
									<span>Quick View</span>
								</a>
								<div class="product-label"><span class="new">New</span></div>
								<div class="product-actions">
									<a href="#" class="addtocart" title="Add to Cart">
										<i class="fa fa-shopping-cart"></i>
									</a>
								</div>
							</figure>
							<div class="product-details-area">
								<h2 class="product-name"><a href="demo-shop-7-product-details.html" title="Product Name">Sports Cap</a></h2>
								<div class="product-ratings">
									<div class="ratings-box">
										<div class="rating" style="width:20%"></div>
									</div>
								</div>

								<div class="product-price-box">
									<span class="product-price">$230.00</span>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="product">
							<figure class="product-image-area">
								<a href="demo-shop-7-product-details.html" title="Product Name" class="product-image">
									<img src="{{asset('shop7/img/demos/shop/products/shop7/product10.jpg')}}" alt="Product Name">
								</a>

								<a href="#" class="product-quickview">
									<i class="fa fa-share-square-o"></i>
									<span>Quick View</span>
								</a>
								<div class="product-actions">
									<a href="#" class="addtocart" title="Add to Cart">
										<i class="fa fa-shopping-cart"></i>
									</a>
								</div>
							</figure>
							<div class="product-details-area">
								<h2 class="product-name"><a href="demo-shop-7-product-details.html" title="Product Name">Fashion Bag</a></h2>
								<div class="product-ratings">
									<div class="ratings-box">
										<div class="rating" style="width:100%"></div>
									</div>
								</div>

								<div class="product-price-box">
									<span class="old-price">$220.00</span>
									<span class="product-price">$180.00</span>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="product">
							<figure class="product-image-area">
								<a href="demo-shop-7-product-details.html" title="Product Name" class="product-image">
									<img src="{{asset('shop7/img/demos/shop/products/shop7/product11.jpg')}}" alt="Product Name">
								</a>

								<a href="#" class="product-quickview">
									<i class="fa fa-share-square-o"></i>
									<span>Quick View</span>
								</a>
								<div class="product-actions">
									<a href="#" class="addtocart" title="Add to Cart">
										<i class="fa fa-shopping-cart"></i>
									</a>
								</div>
							</figure>
							<div class="product-details-area">
								<h2 class="product-name"><a href="demo-shop-7-product-details.html" title="Product Name">Cellphone</a></h2>
								<div class="product-ratings">
									<div class="ratings-box">
										<div class="rating" style="width:0%"></div>
									</div>
								</div>

								<div class="product-price-box">
									<span class="product-price">$60.00</span>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="product">
							<figure class="product-image-area">
								<a href="demo-shop-7-product-details.html" title="Product Name" class="product-image">
									<img src="{{asset('shop7/img/demos/shop/products/shop7/product12.jpg')}}" alt="Product Name">
								</a>

								<a href="#" class="product-quickview">
									<i class="fa fa-share-square-o"></i>
									<span>Quick View</span>
								</a>
								<div class="product-actions">
									<a href="#" class="addtocart" title="Add to Cart">
										<i class="fa fa-shopping-cart"></i>
									</a>
								</div>
							</figure>
							<div class="product-details-area">
								<h2 class="product-name"><a href="demo-shop-7-product-details.html" title="Product Name">Fashion Luggage</a></h2>
								<div class="product-ratings">
									<div class="ratings-box">
										<div class="rating" style="width:60%"></div>
									</div>
								</div>

								<div class="product-price-box">
									<span class="product-price">$90.00</span>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="product">
							<figure class="product-image-area">
								<a href="demo-shop-7-product-details.html" title="Product Name" class="product-image">
									<img src="{{asset('shop7/img/demos/shop/products/shop7/product13.jpg')}}" alt="Product Name">
								</a>

								<a href="#" class="product-quickview">
									<i class="fa fa-share-square-o"></i>
									<span>Quick View</span>
								</a>
								<div class="product-actions">
									<a href="#" class="addtocart" title="Add to Cart">
										<i class="fa fa-shopping-cart"></i>
									</a>
								</div>
							</figure>
							<div class="product-details-area">
								<h2 class="product-name"><a href="demo-shop-7-product-details.html" title="Product Name">Fashion Sunglasses</a></h2>
								<div class="product-ratings">
									<div class="ratings-box">
										<div class="rating" style="width:80%"></div>
									</div>
								</div>

								<div class="product-price-box">
									<span class="product-price">$80.00</span>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="product">
							<figure class="product-image-area">
								<a href="demo-shop-7-product-details.html" title="Product Name" class="product-image">
									<img src="{{asset('shop7/img/demos/shop/products/shop7/product10.jpg')}}" alt="Product Name">
								</a>

								<a href="#" class="product-quickview">
									<i class="fa fa-share-square-o"></i>
									<span>Quick View</span>
								</a>
								<div class="product-actions">
									<a href="#" class="addtocart" title="Add to Cart">
										<i class="fa fa-shopping-cart"></i>
									</a>
								</div>
							</figure>
							<div class="product-details-area">
								<h2 class="product-name"><a href="demo-shop-7-product-details.html" title="Product Name">Fashion Bag</a></h2>
								<div class="product-ratings">
									<div class="ratings-box">
										<div class="rating" style="width:40%"></div>
									</div>
								</div>

								<div class="product-price-box">
									<span class="old-price">$120.00</span>
									<span class="product-price">$99.00</span>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="product">
							<figure class="product-image-area">
								<a href="demo-shop-7-product-details.html" title="Product Name" class="product-image">
									<img src="{{asset('shop7/img/demos/shop/products/shop7/product11.jpg')}}" alt="Product Name">
								</a>

								<a href="#" class="product-quickview">
									<i class="fa fa-share-square-o"></i>
									<span>Quick View</span>
								</a>

								<div class="product-actions">
									<a href="#" class="addtocart" title="Add to Cart">
										<i class="fa fa-shopping-cart"></i>
									</a>
								</div>
							</figure>
							<div class="product-details-area">
								<h2 class="product-name"><a href="demo-shop-7-product-details.html" title="Product Name">Cellphone</a></h2>
								<div class="product-ratings">
									<div class="ratings-box">
										<div class="rating" style="width:0%"></div>
									</div>
								</div>

								<div class="product-price-box">
									<span class="product-price">$70.00</span>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="product">
							<figure class="product-image-area">
								<a href="demo-shop-7-product-details.html" title="Product Name" class="product-image">
									<img src="{{asset('shop7/img/demos/shop/products/shop7/product6.jpg')}}" alt="Product Name">
									<img src="{{asset('shop7/img/demos/shop/products/shop7/product6-2.jpg')}}" alt="Product Name" class="product-hover-image">
								</a>

								<a href="#" class="product-quickview">
									<i class="fa fa-share-square-o"></i>
									<span>Quick View</span>
								</a>

								<div class="product-actions">
									<a href="#" class="addtocart" title="Add to Cart">
										<i class="fa fa-shopping-cart"></i>
									</a>
								</div>
							</figure>
							<div class="product-details-area">
								<h2 class="product-name"><a href="demo-shop-7-product-details.html" title="Product Name">Backpack</a></h2>
								<div class="product-ratings">
									<div class="ratings-box">
										<div class="rating" style="width:60%"></div>
									</div>
								</div>

								<div class="product-price-box">
									<span class="product-price">$80.00</span>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>

			<div class="container mb-xlg">
                <div class="row">
                	<div class="col-sm-6">
                		<h2 class="slider-title mt-sm">
		                    <span class="inline-title">LATESt BLOG POSTS</span>
		                </h2>

		                <div class="owl-carousel owl-theme recent-posts-carousel" data-plugin-options='{"items":1, "loop": false}'>
							<article class="post">
								<div class="row">
									<div class="col-sm-5">
										<div class="post-image">
											<div class="img-thumbnail">
												<img class="img-responsive" src="{{asset('shop7/img/demos/shop/blog/blog-shop-1.jpg')}}" alt="Post">
											</div>
										</div>
									</div>

									<div class="col-sm-7">
										<div class="post-date">
											<span class="day">10</span>
											<span class="month">Jan</span>
										</div>
										<h2><a href="demo-shop-7-blog-post.html">Post Format - Image Gallery</a></h2>

										<div class="post-content">

											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi…</p>

											<a href="demo-shop-7-blog-post.html" class="btn btn-link">Read more</a>
										</div>
									</div>
								</div>
							</article>

							<article class="post">
								<div class="row">
									<div class="col-sm-5">
										<div class="post-image">
											<div class="img-thumbnail">
												<img class="img-responsive" src="{{asset('shop7/img/demos/shop/blog/blog-shop-2.jpg')}}" alt="Post">
											</div>
										</div>
									</div>

									<div class="col-sm-7">
										<div class="post-date">
											<span class="day">22</span>
											<span class="month">Dec</span>
										</div>
										<h2><a href="demo-shop-7-blog-post.html">Post Format - Video</a></h2>

										<div class="post-content">
											<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent…</p>

											<a href="demo-shop-7-blog-post.html" class="btn btn-link">Read more</a>
										</div>
									</div>
								</div>
							</article>
						</div>
                	</div>

                	<div class="col-sm-6">
                		<h2 class="slider-title mt-sm">
		                    <span class="inline-title">WHAT CLIENT'S SAY</span>
		                </h2>

		                <div class="row">
							<div class="owl-carousel owl-theme mb-none" data-plugin-options='{"items": 1}'>
								<div>
									<div class="col-md-12">
										<div class="testimonial testimonial-primary">
											<blockquote>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.</p>
											</blockquote>
											<div class="testimonial-arrow-down"></div>
											<div class="testimonial-author">
												<div class="testimonial-author-thumbnail img-thumbnail">
													<img src="{{asset('shop7/img/clients/client-1.jpg')}}" alt="">
												</div>
												<p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="col-md-12">
										<div class="testimonial testimonial-primary">
											<blockquote>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
											</blockquote>
											<div class="testimonial-arrow-down"></div>
											<div class="testimonial-author">
												<div class="testimonial-author-thumbnail img-thumbnail">
													<img src="{{asset('shop7/img/clients/client-1.jpg')}}" alt="">
												</div>
												<p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                	</div>
                </div>
			</div>

			<div class="container mb-xlg">
				<h2 class="slider-title">
                    <span class="inline-title">FEATURED BRANDS</span>
                    <span class="line"></span>
                    <a href="#" class="view-all">View All</a>
                </h2>

				<div class="owl-carousel owl-theme manual clients-carousel owl-no-narrow">
					<a href="#" title="Brand Name" class="client">
						<img class="img-responsive" src="{{asset('shop7/img/demos/shop/brands/square/brand1.jpg')}}" alt="Brand">
					</a>
					<a href="#" title="Brand Name" class="client">
						<img class="img-responsive" src="{{asset('shop7/img/demos/shop/brands/square/brand2.jpg')}}" alt="Brand">
					</a>
					<a href="#" title="Brand Name" class="client">
						<img class="img-responsive" src="{{asset('shop7/img/demos/shop/brands/square/brand3.jpg')}}" alt="Brand">
					</a>
					<a href="#" title="Brand Name" class="client">
						<img class="img-responsive" src="{{asset('shop7/img/demos/shop/brands/square/brand4.jpg')}}" alt="Brand">
					</a>
					<a href="#" title="Brand Name" class="client">
						<img class="img-responsive" src="{{asset('shop7/img/demos/shop/brands/square/brand5.jpg')}}" alt="Brand">
					</a>
					<a href="#" title="Brand Name" class="client">
						<img class="img-responsive" src="{{asset('shop7/img/demos/shop/brands/square/brand6.jpg')}}" alt="Brand">
					</a>
					<a href="#" title="Brand Name" class="client">
						<img class="img-responsive" src="{{asset('shop7/img/demos/shop/brands/square/brand1.jpg')}}" alt="Brand">
					</a>
				</div>
			</div>

			<div class="newsletter-popup mfp-hide" id="newsletter-popup-form" style=" background-image: url('{{asset('shop7/img/demos/shop/newsletter_popup_bg.jpg')}}');">
                <div class="newsletter-popup-content">
                	<img src="{{asset('shop7/img/demos/shop/logo-shop-charcoal.png')}}" alt="Logo" class="img-responsive center-block">
                    <h2>BE THE FIRST TO KNOW</h2>
                    <p>Subscribe to the Porto eCommerce newsletter to receive timely updates from your favorite products.</p>
                    <form action="#">
                        <div class="input-group">
                            <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Email address" required>
                            <span class="input-group-btn">
                                <input type="submit" class="btn btn-default" value="Go!">
                            </span>
                        </div><!-- End .from-group -->
                    </form>
                    <div class="newsletter-subscribe">
                    	<div class="checkbox mb-none">
							<label>
								<input type="checkbox" value="1">
							   Don't show this popup again
							</label>
						</div>
                    </div>
                </div><!-- End .newsletter-popup-content -->
            </div><!-- End .newsletter-popup -->

			</div>

@endsection
