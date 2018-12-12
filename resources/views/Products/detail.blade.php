@extends('Layouts.index')
@section('content')
<div role="main" class="main">
	<section class="page-header">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>

				<li><a href="#">Fashion</a></li>
				<li class="active">Black Maxi Dress</li>
			</ul>
		</div>
	</section>
			
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="product-view">
					<div class="product-essential">
						<div class="row">
							<div class="product-img-box col-sm-5">
								<div class="product-img-box-wrapper">
	                                <div class="product-img-wrapper">
	                                    <img id="product-zoom" src="{{asset('shop7/img/demos/shop/products/single/product1.jpg')}}" data-zoom-image="img/demos/shop/products/single/product1.jpg')}}" alt="Product main image">
	                                </div>

									<a href="#" class="product-img-zoom" title="Zoom">
										<span class="glyphicon glyphicon-search"></span>
									</a>
								</div>

								<div class="owl-carousel manual" id="productGalleryThumbs">
									<div class="product-img-wrapper">
										<a href="#" data-image="img/demos/shop/products/single/product1.jpg')}}" data-zoom-image="img/demos/shop/products/single/product1.jpg')}}" class="product-gallery-item">
                                            <img src="{{asset('shop7/img/demos/shop/products/single/thumbs/product1.jpg')}}" alt="product">
                                        </a>
									</div>
									<div class="product-img-wrapper">
										<a href="#" data-image="img/demos/shop/products/single/product2.jpg')}}" data-zoom-image="img/demos/shop/products/single/product2.jpg')}}" class="product-gallery-item">
                                            <img src="{{asset('shop7/img/demos/shop/products/single/thumbs/product2.jpg')}}" alt="product">
                                        </a>
									</div>
									<div class="product-img-wrapper">
										<a href="#" data-image="img/demos/shop/products/single/product3.jpg')}}" data-zoom-image="img/demos/shop/products/single/product3.jpg')}}" class="product-gallery-item">
                                            <img src="{{asset('shop7/img/demos/shop/products/single/thumbs/product3.jpg')}}" alt="product">
                                        </a>
									</div>
									<div class="product-img-wrapper">
										<a href="#" data-image="img/demos/shop/products/single/product4.jpg')}}" data-zoom-image="img/demos/shop/products/single/product4.jpg')}}" class="product-gallery-item">
                                            <img src="{{asset('shop7/img/demos/shop/products/single/thumbs/product4.jpg')}}" alt="product">
                                        </a>
									</div>
									<div class="product-img-wrapper">
										<a href="#" data-image="img/demos/shop/products/single/product5.jpg')}}" data-zoom-image="img/demos/shop/products/single/product5.jpg')}}" class="product-gallery-item">
                                            <img src="{{asset('shop7/img/demos/shop/products/single/thumbs/product5.jpg')}}" alt="product">
                                        </a>
									</div>
								</div>
							</div>

							<div class="product-details-box col-sm-7">
								<div class="product-nav-container">
									<div class="product-nav product-nav-prev">
										<a href="#" title="Previous Product">
											<i class="fa fa-chevron-left"></i>
										</a>

										<div class="product-nav-dropdown">
											<img src="{{asset('shop7/img/demos/shop/products/product1.jpg')}}" alt="Product">
											<h4>Blue Denim Dress</h4>
										</div>
									</div>
									<div class="product-nav product-nav-next">
										<a href="#" title="Next Product">
											<i class="fa fa-chevron-right"></i>
										</a>

										<div class="product-nav-dropdown">
											<img src="{{asset('shop7/img/demos/shop/products/product2.jpg')}}" alt="Product">
											<h4>Black Woman Shirt</h4>
										</div>
									</div>
								</div>
								<h1 class="product-name">
									Black Maxi Dress
								</h1>

								<div class="product-rating-container">
                                    <div class="product-ratings">
										<div class="ratings-box">
											<div class="rating" style="width:60%"></div>
										</div>
									</div>
                                    <div class="review-link">
                                        <a href="#" class="review-link-in" rel="nofollow"> <span class="count">1</span> customer review</a> | 
                                        <a href="#" class="write-review-link" rel="nofollow">Add a review</a>
                                    </div>
                                </div>

                                <div class="product-short-desc">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>

								<div class="product-detail-info">
									<div class="product-price-box">
										<span class="old-price">$99.00</span>
										<span class="product-price">$89.00</span>
									</div>
									<p class="availability">
										<span class="font-weight-semibold">Availability:</span>
										In Stock
									</p>
									<p class="email-to-friend"><a href="#">Email to a Friend</a></p>
								</div>

								<div class="product-actions">
									<div class="product-detail-qty">
	                                    <input type="text" value="1" class="vertical-spinner" id="product-vqty">
	                                </div>
									<a href="#" class="addtocart" title="Add to Cart">
										<i class="fa fa-shopping-cart"></i>
										<span>Add to Cart</span>
									</a>
											
									<div class="actions-right">
										<a href="#" class="addtowishlist" title="Add to Wishlist">
											<i class="fa fa-heart"></i>
										</a>
										<a href="#" class="comparelink" title="Add to Compare">
											<i class="glyphicon glyphicon-signal"></i>
										</a>
									</div>
								</div>

								<div class="product-share-box">
									<div class="addthis_inline_share_toolbox"></div>
											 
								</div>
							</div>
						</div>
					</div>
					<div class="tabs product-tabs">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#product-desc" data-toggle="tab">Description</a>
							</li>
							<li>
								<a href="#product-add" data-toggle="tab">Additional</a>
							</li>
							<li>
								<a href="#product-tags" data-toggle="tab">Tags</a>
							</li>
							<li>
								<a href="#product-reviews" data-toggle="tab">Reviews</a>
							</li>
						</ul>
						<div class="tab-content">
							<div id="product-desc" class="tab-pane active">
								<div class="product-desc-area">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<ul>
										<li>Simple, Configurable (e.g. size, color, etc.), Bundled and Grouped Products</li>
										<li>Downloadable/Digital Products, Virtual Products</li>
										<li>Inventory Management with Backordered items</li>
										<li>Customer Personalized Products - upload text for embroidery, monogramming, etc.</li>
										<li>Create Store-specific attributes on the fly</li>
										<li>Advanced Pricing Rules and support for Special Prices</li>
										<li>Tax Rates per location, customer group and product type</li>
									</ul>
								</div>
							</div>
							<div id="product-add" class="tab-pane">
								<table class="product-table">
									<tbody>
										<tr>
											<td class="table-label">Color</td>
											<td>Black</td>
										</tr>
										<tr>
											<td class="table-label">Size</td>
											<td>16mx24mx18m</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div id="product-tags" class="tab-pane">
								<div class="product-tags-area">
									<form action="#">
										<div class="form-group">
											<label>Add Your Tags:</label>
											<div class="clearfix">
												<input type="text" class="form-control pull-left" required>
												<input type="submit" class="btn btn-primary" value="Add Tags">
											</div>
										</div>
									</form>
									<p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
								</div>
							</div>
							<div id="product-reviews" class="tab-pane">
								<div class="collateral-box">
									<ul class="list-unstyled">
										<li>Be the first to review this product</li>
									</ul>
								</div>

								<div class="add-product-review">
									<h3 class="text-uppercase heading-text-color font-weight-semibold">WRITE YOUR OWN REVIEW</h3>
									<p>How do you rate this product? *</p>

									<form action="#">
										<table class="ratings-table">
											<thead>
												<tr>
													<th>&nbsp;</th>
													<th>1 star</th>
													<th>2 stars</th>
													<th>3 stars</th>
													<th>4 stars</th>
													<th>5 stars</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Quality</td>
													<td>
														<input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio">
													</td>
													<td>
														<input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio">
													</td>
													<td>
														<input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio">
													</td>
													<td>
														<input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio">
													</td>
													<td>
														<input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio">
													</td>
												</tr>
												<tr>
													<td>Value</td>
													<td>
														<input type="radio" name="value[1]" id="Value_1" value="1" class="radio">
													</td>
													<td>
														<input type="radio" name="value[1]" id="Value_2" value="2" class="radio">
													</td>
													<td>
														<input type="radio" name="value[1]" id="Value_3" value="3" class="radio">
													</td>
													<td>
														<input type="radio" name="value[1]" id="Value_4" value="4" class="radio">
													</td>
													<td>
														<input type="radio" name="value[1]" id="Value_5" value="5" class="radio">
													</td>
												</tr>
												<tr>
													<td>Price</td>
													<td>
														<input type="radio" name="price[1]" id="Price_1" value="1" class="radio">
													</td>
													<td>
														<input type="radio" name="price[1]" id="Price_2" value="2" class="radio">
													</td>
													<td>
														<input type="radio" name="price[1]" id="Price_3" value="3" class="radio">
													</td>
													<td>
														<input type="radio" name="price[1]" id="Price_4" value="4" class="radio">
													</td>
													<td>
														<input type="radio" name="price[1]" id="Price_5" value="5" class="radio">
													</td>
												</tr>
											</tbody>
										</table>

										<div class="form-group">
											<label>Nickname<span class="required">*</span></label>
											<input type="text" class="form-control" required>
										</div>
										<div class="form-group">
											<label>Summary of Your Review<span class="required">*</span></label>
											<input type="text" class="form-control" required>
										</div>
										<div class="form-group mb-xlg">
											<label>Review<span class="required">*</span></label>
											<textarea cols="5" rows="6" class="form-control"></textarea>
										</div>

										<div class="text-right">
											<input type="submit" class="btn btn-primary" value="Submit Review">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

				<h2 class="slider-title">
                    <span class="inline-title">Also Purchased</span>
                    <span class="line"></span>
                </h2>

                <div class="owl-carousel owl-theme" data-plugin-options='{"items":4, "margin":20, "nav":true, "dots": false, "loop": false}'>
					<div class="product">
						<figure class="product-image-area">
							<a href="#" title="Product Name" class="product-image">
								<img src="{{asset('shop7/img/demos/shop/products/product1.jpg')}}" alt="Product Name">
								<img src="{{asset('shop7/img/demos/shop/products/product1-2.jpg')}}" alt="Product Name" class="product-hover-image">
							</a>

							<a href="#" class="product-quickview">
								<i class="fa fa-share-square-o"></i>
								<span>Quick View</span>
							</a>
							<div class="product-label"><span class="discount">-10%</span></div>
							<div class="product-label"><span class="new">New</span></div>
						</figure>
						<div class="product-details-area">
							<h2 class="product-name"><a href="#" title="Product Name">Noa Sheer Blouse</a></h2>
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
							<a href="#" title="Product Name" class="product-image">
								<img src="{{asset('shop7/img/demos/shop/products/product2.jpg')}}" alt="Product Name">
								<img src="{{asset('shop7/img/demos/shop/products/product2-2.jpg')}}" alt="Product Name" class="product-hover-image">
							</a>

							<a href="#" class="product-quickview">
								<i class="fa fa-share-square-o"></i>
								<span>Quick View</span>
							</a>
							<div class="product-label"><span class="discount">-25%</span></div>
						</figure>
						<div class="product-details-area">
							<h2 class="product-name"><a href="#" title="Product Name">Women Fashion Blouse</a></h2>
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
							<a href="#" title="Product Name" class="product-image">
								<img src="{{asset('shop7/img/demos/shop/products/product3.jpg')}}" alt="Product Name">
							</a>

							<a href="#" class="product-quickview">
								<i class="fa fa-share-square-o"></i>
								<span>Quick View</span>
							</a>
						</figure>
						<div class="product-details-area">
							<h2 class="product-name"><a href="#" title="Product Name">Fashion Dress</a></h2>
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
							<a href="#" title="Product Name" class="product-image">
								<img src="{{asset('shop7/img/demos/shop/products/product4.jpg')}}" alt="Product Name">
							</a>

							<a href="#" class="product-quickview">
								<i class="fa fa-share-square-o"></i>
								<span>Quick View</span>
							</a>
							<div class="product-label"><span class="discount">-20%</span></div>
						</figure>
						<div class="product-details-area">
							<h2 class="product-name"><a href="#" title="Product Name">Fashion Sweater</a></h2>
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
							<a href="#" title="Product Name" class="product-image">
								<img src="{{asset('shop7/img/demos/shop/products/product11.jpg')}}" alt="Product Name">
							</a>

							<a href="#" class="product-quickview">
								<i class="fa fa-share-square-o"></i>
								<span>Quick View</span>
							</a>
						</figure>
						<div class="product-details-area">
							<h2 class="product-name"><a href="#" title="Product Name">Woman Shee Blouse</a></h2>
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
			<aside class="col-md-3 sidebar product-sidebar">
				<div class="feature-box feature-box-style-3">
					<div class="feature-box-icon">
						<i class="fa fa-truck"></i>
					</div>
					<div class="feature-box-info">
						<h4>FREE SHIPPING</h4>
						<p class="mb-none">Free shipping on all orders over $99.</p>
					</div>
				</div>

				<div class="feature-box feature-box-style-3">
					<div class="feature-box-icon">
						<i class="fa fa-dollar"></i>
					</div>
					<div class="feature-box-info">
						<h4>MONEY BACK GUARANTEE</h4>
						<p class="mb-none">100% money back guarantee.</p>
					</div>
				</div>

				<div class="feature-box feature-box-style-3">
					<div class="feature-box-icon">
						<i class="fa fa-support"></i>
					</div>
					<div class="feature-box-info">
						<h4>ONLINE SUPPORT 24/7</h4>
						<p class="mb-none">Lorem ipsum dolor sit amet.</p>
					</div>
				</div>

				<hr class="mt-xlg">

				<div class="owl-carousel owl-theme" data-plugin-options='{"items":1, "margin": 5}'>
					<a href="#">
						<img class="img-responsive" src="{{asset('shop7/img/demos/shop/banners/banner1-blue.jpg')}}" alt="Banner">
					</a>
					<a href="#">
						<img class="img-responsive" src="{{asset('shop7/img/demos/shop/banners/banner2-blue.jpg')}}" alt="Banner">
					</a>
				</div>

				<hr>
			</aside>
		</div>
	</div>

	</div>
@endsection
