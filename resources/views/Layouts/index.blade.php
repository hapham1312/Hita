<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>ECosplay</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('shop7/img/favicon.ico')}}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{asset('shop7/img/apple-touch-icon.png')}}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('shop7/vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('shop7/vendor/font-awesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('shop7/vendor/animate/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('shop7/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
		<link rel="stylesheet" href="{{asset('shop7/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('shop7/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('shop7/vendor/magnific-popup/magnific-popup.min.css')}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('shop7/css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('shop7/css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{asset('shop7/css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{asset('shop7/css/theme-shop.css')}}">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="{{asset('shop7/vendor/rs-plugin/css/settings.css')}}">
		<link rel="stylesheet" href="{{asset('shop7/vendor/rs-plugin/css/layers.css')}}">
		<link rel="stylesheet" href="{{asset('shop7/vendor/rs-plugin/css/navigation.css')}}">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('shop7/css/skins/skin-shop-7.css')}}"> 

		<!-- Demo CSS -->
		<link rel="stylesheet" href="{{asset('shop7/css/demos/demo-shop-7.css')}}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('shop7/css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('shop7/vendor/modernizr/modernizr.min.js')}}"></script>

	</head>
	<body>

		<div class="body">
			<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": false, "stickyStartAt": 147, "stickySetTop": "-41px", "stickyChangeLogo": false}'>
				<div class="header-body">
					<div class="header-top">
						<div class="container">
							<div class="dropdowns-container">
								<div class="header-dropdown cur-dropdown">
									<a href="#">USD <i class="fa fa-caret-down"></i></a>

									<ul class="header-dropdownmenu">
										<li><a href="#">EUR</a></li>
										<li><a href="#">USD</a></li>
									</ul>
								</div>

								<div class="header-dropdown lang-dropdown">
									<a href="#"><img src="{{asset('shop7/img/demos/shop/en.png')}}" alt="English">English <i class="fa fa-caret-down"></i></a>

									<ul class="header-dropdownmenu">
										<li><a href="#"><img src="{{asset('shop7/img/demos/shop/en.png')}}" alt="English">English</a></li>
										<li><a href="#"><img src="{{asset('shop7/img/demos/shop/fr.png')}}" alt="French">French</a></li>
									</ul>
								</div>
							</div>		
							
							<div class="top-menu-area">
								<a href="#">Links <i class="fa fa-caret-down"></i></a>
								<ul class="top-menu">
									<li><a href="demo-shop-7-myaccount.html">My Account</a></li>
									<li><a href="#">Daily Deal</a></li>
									<li><a href="#">My Wishlist</a></li>
									<li><a href="demo-shop-7-blog.html">Blog</a></li>
									<li><a href="demo-shop-7-login.html">Log in</a></li>
								</ul>
							</div>
							<p class="welcome-msg">DEFAULT WELCOME MSG!</p>
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="demo-shop-7.html">
										<img alt="Porto" width="108" height="50" src="{{asset('shop7/img/logo1.png')}}">
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="row">


									<div class="cart-area">
										<div class="custom-block">
											<i class="fa fa-phone"></i>
											<span>(+404) 158 14 25 78</span>
											<span class="split"></span>
											<a href="#">CONTACT US</a>
										</div>

										<div class="cart-dropdown">
											<a href="#" class="cart-dropdown-icon">
												<i class="minicart-icon"></i>
												<span class="cart-info">
													<span class="cart-qty">2</span>
													<span class="cart-text">item(s)</span>
												</span>
											</a>

											<div class="cart-dropdownmenu right">
												<div class="dropdownmenu-wrapper">
													<div class="cart-products">
														<div class="product product-sm">
															<a href="#" class="btn-remove" title="Remove Product">
																<i class="fa fa-times"></i>
															</a>
															<figure class="product-image-area">
																<a href="demo-shop-7-product-details.html" title="Product Name" class="product-image">
																	<img src="{{asset('shop7/img/demos/shop/products/thumbs/cart-product1.jpg')}}" alt="Product Name">
																</a>
															</figure>
															<div class="product-details-area">
																<h2 class="product-name"><a href="demo-shop-7-product-details.html" title="Product Name">Blue Women Top</a></h2>

																<div class="cart-qty-price">
																	1 X 
																	<span class="product-price">$65.00</span>
																</div>
															</div>
														</div>
														<div class="product product-sm">
															<a href="#" class="btn-remove" title="Remove Product">
																<i class="fa fa-times"></i>
															</a>
															<figure class="product-image-area">
																<a href="demo-shop-7-product-details.html" title="Product Name" class="product-image">
																	<img src="{{asset('shop7/img/demos/shop/products/thumbs/cart-product2.jpg')}}" alt="Product Name">
																</a>
															</figure>
															<div class="product-details-area">
																<h2 class="product-name"><a href="demo-shop-7-product-details.html" title="Product Name">Black Utility Top</a></h2>

																<div class="cart-qty-price">
																	1 X 
																	<span class="product-price">$39.00</span>
																</div>
															</div>
														</div>
													</div>

													<div class="cart-totals">
														Total: <span>$104.00</span>
													</div>

													<div class="cart-actions">
														<a href="demo-shop-7-cart.html" class="btn btn-primary">View Cart</a>
														<a href="demo-shop-7-checkout.html" class="btn btn-primary">Checkout</a>
													</div>
												</div>
											</div>
										</div>
									</div>

									<a href="#" class="mmenu-toggle-btn" title="Toggle menu">
										<i class="fa fa-bars"></i>
									</a>

									<div class="header-search">
										<a href="#" class="search-toggle"><i class="fa fa-search"></i></a>
										<form action="#" method="get">
											<div class="header-search-wrapper">
												<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
												<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
											</div>
										</form>
									</div>

									<div class="header-nav-main">
										<nav>
											<ul class="nav nav-pills" id="mainNav">
												<li class="dropdown active">
													<a class="dropdown-toggle" href="demo-shop-7.html">
														Home
													</a>
												</li>
												<li class="dropdown dropdown-mega-small">
													<a href="demo-shop-7-category-4col.html" class="dropdown-toggle">
														Women <span class="tip tip-new">New</span>
													</a>
													<ul class="dropdown-menu">
														<li>
															<div class="dropdown-mega-content dropdown-mega-content-small">
																<div class="row">
																	<div class="col-md-7">
																		<div class="row">
																			<div class="col-md-6">
																				<a href="demo-shop-7-category-4col.html" class="dropdown-mega-sub-title">Women</a>
																				<ul class="dropdown-mega-sub-nav">
																					<li><a href="demo-shop-7-category-4col.html">Top &amp; Blouses</a></li>
																					<li><a href="demo-shop-7-category-4col.html">Accessories</a></li>
																					<li><a href="demo-shop-7-category-4col.html">Dresses &amp; Skirts</a></li>
																					<li><a href="demo-shop-7-category-4col.html">Shoes &amp; Boots</a></li>
																				</ul>
																			</div>
																			<div class="col-md-6">
																				<a href="demo-shop-7-category-4col.html" class="dropdown-mega-sub-title">Men</a>
																				<ul class="dropdown-mega-sub-nav">
																					<li><a href="demo-shop-7-category-4col.html">Accessories</a></li>
																					<li><a href="demo-shop-7-category-4col.html">Watch Fashion<span class="tip tip-new">New</span></a></li>
																					<li><a href="demo-shop-7-category-4col.html">Tees, Knits &amp; Polos</a></li>
																					<li><a href="demo-shop-7-category-4col.html">Pants &amp; Denim</a></li>
																				</ul>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-md-6">
																				<a href="demo-shop-7-category-4col.html" class="dropdown-mega-sub-title">Jewellery<span class="tip tip-hot">Hot!</span></a>
																				<ul class="dropdown-mega-sub-nav">
																					<li><a href="demo-shop-7-category-4col.html">Sweaters</a></li>
																					<li><a href="demo-shop-7-category-4col.html">Heels &amp; Sandals</a></li>
																					<li><a href="demo-shop-7-category-4col.html">Jeans &amp; Shorts</a></li>
																				</ul>
																			</div>
																			<div class="col-md-6">
																				<a href="demo-shop-7-category-4col.html" class="dropdown-mega-sub-title">Kids Fashion</a>
																				<ul class="dropdown-mega-sub-nav">
																					<li><a href="demo-shop-7-category-4col.html">Casual Shoes</a></li>
																					<li><a href="demo-shop-7-category-4col.html">Spring Autumn</a></li>
																					<li><a href="demo-shop-7-category-4col.html">Winter Sneakers</a></li>
																				</ul>
																			</div>
																		</div>
																	</div>

																	<div class="col-md-5 mega-banner-bg">
																		<img src="{{asset('shop7/img/demos/shop/menu-bg.png')}}" alt="Banner bg">
																	</div>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li class="dropdown dropdown-mega">
													<a href="demo-shop-7-category-4col.html" class="dropdown-toggle">
														Electronics
													</a>
													<ul class="dropdown-menu">
														<li>
															<div class="dropdown-mega-content">
																<div class="row">
																	<div class="col-md-8">
																		<div class="dropdown-mega-top">
																			<span>Suggestions:</span>
																			<a href="demo-shop-7-category-4col.html">3D</a>
																			<a href="demo-shop-7-category-4col.html">Mobile</a>
																			<a href="demo-shop-7-category-4col.html">Camera</a>
																			<a href="demo-shop-7-category-4col.html">Headsets</a>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-8">
																		<div class="row">
																			<div class="col-md-4">
																				<a href="demo-shop-7-category-4col.html" class="cat-img"><img src="{{asset('shop7/img/demos/shop/cat-tv.png')}}" alt="Category Name"></a>
																				
																				<a href="demo-shop-7-category-4col.html" class="dropdown-mega-sub-title">Smart Tvs</a>
																				<ul class="dropdown-mega-sub-nav">
																					<li><a href="demo-shop-7-category-4col.html">TV, Audio</a></li>
																					<li><a href="demo-shop-7-category-4col.html">Computers &amp; Tablets</a></li>
																					<li><a href="demo-shop-7-category-4col.html">Home Office Equipments</a></li>
																					<li><a href="demo-shop-7-category-4col.html">GPS Navigation</a></li>
																					<li><a href="demo-shop-7-category-4col.html">Car Video, Audio &amp; GPS</a></li>
																					<li><a href="demo-shop-7-category-4col.html">Radios &amp; Clock Radios</a></li>
																				</ul>
																			</div>
																			<div class="col-md-4">
																				<a href="demo-shop-7-category-4col.html" class="cat-img"><img src="{{asset('shop7/img/demos/shop/cat-camera.png')}}" alt="Category Name"></a>
																				<a href="demo-shop-7-category-4col.html" class="dropdown-mega-sub-title">Cameras</a>
																				<ul class="dropdown-mega-sub-nav">
																					<li><a href="demo-shop-7-category-4col.html">Cell Phones &amp; Accessories</a></li>
																					<li><a href="demo-shop-7-category-4col.html">Cameras &amp; Photo</a></li>
																					<li><a href="demo-shop-7-category-4col.html">Photo Accessories</a></li>
																					<li><a href="demo-shop-7-category-4col.html">IP Phones</a></li>
																					<li><a href="demo-shop-7-category-4col.html">Samsung Galaxy Phones</a></li>
																					<li><a href="demo-shop-7-category-4col.html">iPad &amp; Android Tablets</a></li>
																				</ul>
																			</div>
																			<div class="col-md-4">
																				<a href="demo-shop-7-category-4col.html" class="cat-img"><img src="{{asset('shop7/img/demos/shop/cat-game.png')}}" alt="Category Name"></a>
																				<a href="demo-shop-7-category-4col.html" class="dropdown-mega-sub-title">Games</a>
																				<ul class="dropdown-mega-sub-nav">
																					<li><a href="demo-shop-7-category-4col.html">e-Book Readers</a></li>
																					<li><a href="demo-shop-7-category-4col.html">Video Games &amp; Consolers</a></li>
																					<li><a href="demo-shop-7-category-4col.html">Printers &amp; Scanners</a></li>
																					<li><a href="demo-shop-7-category-4col.html">Digital Picture Frames</a></li>
																					<li><a href="demo-shop-7-category-4col.html">3D Fashion Games</a></li>
																					<li><a href="demo-shop-7-category-4col.html">Game Machine &amp; Devices</a></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="menu-banner-area">
																			<img src="{{asset('shop7/img/demos/shop/menu-cat.png')}}" alt="Menu Banner">
																			<div class="menu-banner-header">
																				<h3>Shop Now <span class="font-weight-bold">3D</span> <span class="font-weight-extra-bold">Tv's</span></h3>
																				<a href="#" class="btn btn-primary">View now <i class="fa fa-caret-right"></i></a>
																			</div>
																			<p>This is a custom block. You can add any images or links here</p>
																		</div>
																	</div>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li class="dropdown">
													<a class="dropdown-toggle" href="#">
														Pages
													</a>
													<ul class="dropdown-menu">
														<li class="dropdown-submenu">
															<a href="#">Category</a>
															<ul class="dropdown-menu">
																<li><a href="demo-shop-7-category-2col.html">Category - 2 Columns</a></li>
																<li><a href="demo-shop-7-category-3col.html">Category - 3 Columns</a></li>
																<li><a href="demo-shop-7-category-4col.html">Category - 4 Columns</a></li>
																<li><a href="demo-shop-7-category-5col.html">Category - 5 Columns</a></li>
																<li><a href="demo-shop-7-category-6col.html">Category - 6 Columns</a></li>
																<li><a href="demo-shop-7-category-7col.html">Category - 7 Columns</a></li>
																<li><a href="demo-shop-7-category-8col.html">Category - 8 Columns</a></li>
																<li><a href="demo-shop-7-category-list.html">Category - List</a></li>
																<li><a href="demo-shop-7-category-right-sidebar.html">Rigt Sidebar</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu">
															<a href="#">Category Banners</a>
															<ul class="dropdown-menu">
																<li><a href="demo-shop-7-category-banner-boxed-slider.html">Boxed Slider</a></li>
																<li><a href="demo-shop-7-category-banner-boxed-image.html">Boxed Image</a></li>
																<li><a href="demo-shop-7-category-banner-fullwidth.html">Fullwidth Image</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu">
															<a href="#">Product Details</a>
															<ul class="dropdown-menu">
																<li><a href="demo-shop-7-product-details.html">Product Details</a></li>
																<li><a href="demo-shop-7-product-details2.html">Product Details 2</a></li>
																<li><a href="demo-shop-7-product-details3.html">Product Details 3</a></li>
																<li><a href="demo-shop-7-product-details4.html">Product Details 4</a></li>
															</ul>
														</li>
														<li><a href="demo-shop-7-cart.html">Shopping Cart</a></li>
														<li><a href="demo-shop-7-checkout.html">Checkout</a></li>
														<li><a href="demo-shop-7-about-us.html">About Us</a></li>
														<li class="dropdown-submenu">
															<a href="#">Dashboard</a>
															<ul class="dropdown-menu">
																<li><a href="demo-shop-7-dashboard.html">Dashboard</a></li>
																<li><a href="demo-shop-7-myaccount.html">My Account</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu">
															<a href="#">Login &amp; Register</a>
															<ul class="dropdown-menu">
																<li><a href="demo-shop-7-login.html">Login</a></li>
																<li><a href="demo-shop-7-register.html">Register</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu">
															<a href="#">Blog</a>
															<ul class="dropdown-menu">
																<li><a href="demo-shop-7-blog.html">Blog</a></li>
																<li><a href="demo-shop-7-blog-post.html">Blog Post</a></li>
															</ul>
														</li>
														<li><a href="demo-shop-7-contact-us.html">Contact Us</a></li>
													</ul>
												</li>
												<li>
													<a href="#">
														Buy Porto! <span class="tip tip-hot">Hot!</span>
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div class="mobile-nav">
				<div class="mobile-nav-wrapper">
					<ul class="mobile-side-menu">
						<li><a href="demo-shop-7.html">Home</a></li>
						<li>
							<span class="mmenu-toggle"></span>
							<a href="#">Fashion <span class="tip tip-new">New</span></a>
			
							<ul>
								<li>
									<span class="mmenu-toggle"></span>
									<a href="#">Women</a>
									<ul>
										<li>
											<a href="#">Tops &amp; Blouses</a>
										</li>
										<li>
											<a href="#">Accessories</a>
										</li>
										<li>
											<a href="#">Dresses &amp; Skirts</a>
										</li>
										<li>
											<a href="#">Shoes &amp; Boots</a>
										</li>
									</ul>
								</li>
								<li>
									<span class="mmenu-toggle"></span>
									<a href="#">Men</a>
			
									<ul>
										<li>
											<a href="#">Accessories</a>
										</li>
										<li>
											<a href="#">Watch &amp; Fashion <span class="tip tip-new">New</span></a>
										</li>
										<li>
											<a href="#">Tees, Knits &amp; Polos</a>
										</li>
										<li>
											<a href="#">Pants &amp; Denim</a>
										</li>
									</ul>
								</li>
								<li>
									<span class="mmenu-toggle"></span>
									<a href="#">Jewellery <span class="tip tip-hot">Hot</span></a>
			
									<ul>
										<li>
											<a href="#">Sweaters</a>
										</li>
										<li>
											<a href="#">Heels &amp; Sandals</a>
										</li>
										<li>
											<a href="#">Jeans &amp; Shorts</a>
										</li>
									</ul>
								</li>
								<li>
									<span class="mmenu-toggle"></span>
									<a href="#">Kids Fashion</a>
			
									<ul>
										<li>
											<a href="#">Casual Shoes</a>
										</li>
										<li>
											<a href="#">Spring &amp; Autumn</a>
										</li>
										<li>
											<a href="#">Winter Sneakers</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<span class="mmenu-toggle"></span>
							<a href="#">Pages <span class="tip tip-hot">Hot!</span></a>
			
							<ul>
								<li>
									<span class="mmenu-toggle"></span>
									<a href="#">Category</a>
									<ul>
										<li>
											<a href="demo-shop-7-category-2col.html">2 Columns</a>
										</li>
										<li>
											<a href="demo-shop-7-category-3col.html">3 Columns</a>
										</li>
										<li>
											<a href="demo-shop-7-category-4col.html">4 Columns</a>
										</li>
										<li>
											<a href="demo-shop-7-category-5col.html">5 Columns</a>
										</li>
										<li>
											<a href="demo-shop-7-category-6col.html">6 Columns</a>
										</li>
										<li>
											<a href="demo-shop-7-category-7col.html">7 Columns</a>
										</li>
										<li>
											<a href="demo-shop-7-category-8col.html">8 Columns</a>
										</li>
										<li>
											<a href="demo-shop-7-category-right-sidebar.html">Right Sidebar</a>
										</li>
										<li>
											<a href="demo-shop-7-category-list.html">Category List</a>
										</li>
									</ul>
								</li>
								<li>
									<span class="mmenu-toggle"></span>
									<a href="#">Category Banners</a>
									<ul>
										<li>
											<a href="demo-shop-7-category-banner-boxed-slider.html">Boxed slider</a>
										</li>
										<li>
											<a href="demo-shop-7-category-banner-boxed-image.html">Boxed Image</a>
										</li>
										<li>
											<a href="demo-shop-7-category-banner-fullwidth.html">Fullwidth</a>
										</li>
									</ul>
								</li>
								<li>
									<span class="mmenu-toggle"></span>
									<a href="#">Product Details</a>
									<ul>
										<li>
											<a href="demo-shop-7-product-details.html">Product Details 1</a>
										</li>
										<li>
											<a href="demo-shop-7-product-details2.html">Product Details 2</a>
										</li>
										<li>
											<a href="demo-shop-7-product-details3.html">Product Details 3</a>
										</li>
										<li>
											<a href="demo-shop-7-product-details4.html">Product Details 4</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="demo-shop-7-cart.html">Shopping Cart</a>
								</li>
								<li>
									<a href="demo-shop-7-checkout.html">Checkout</a>
								</li>
								<li>
									<span class="mmenu-toggle"></span>
									<a href="#">Loign &amp; Register</a>
									<ul>
										<li>
											<a href="demo-shop-7-login.html">Login</a>
										</li>
										<li>
											<a href="demo-shop-7-register.html">Register</a>
										</li>
									</ul>
								</li>
								<li>
									<span class="mmenu-toggle"></span>
									<a href="#">Dashboard</a>
									<ul>
										<li>
											<a href="demo-shop-7-dashboard.html">Dashboard</a>
										</li>
										<li>
											<a href="demo-shop-7-myaccount.html">My Account</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<a href="demo-shop-7-about-us.html">About Us</a>
						</li>
						<li>
							<span class="mmenu-toggle"></span>
							<a href="#">Blog</a>
							<ul>
								<li><a href="demo-shop-7-blog.html">Blog</a></li>
								<li><a href="demo-shop-7-blog-post.html">Blog Post</a></li>
							</ul>
						</li>
						<li>
							<a href="demo-shop-7-contact-us.html">Contact Us</a>
						</li>
						<li>
							<a href="#">Buy Porto!</a>
						</li>
					</ul>
				</div>
			</div>
			
			<div id="mobile-menu-overlay"></div>
            @yield('content')
			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span>Get in Touch</span>
						</div>
						
						<div class="col-md-3">
							<h4>My Account</h4>
							<ul class="links">
								<li>
									<i class="fa fa-caret-right text-color-primary"></i>
									<a href="demo-shop-7-about-us.html">About Us</a>
								</li>
								<li>
									<i class="fa fa-caret-right text-color-primary"></i>
									<a href="demo-shop-7-contact-us.html">Contact Us</a>
								</li>
								<li>
									<i class="fa fa-caret-right text-color-primary"></i>
									<a href="demo-shop-7-myaccount.html">My account</a>
								</li>
								<li>
									<i class="fa fa-caret-right text-color-primary"></i>
									<a href="#">Orders history</a>
								</li>
								<li>
									<i class="fa fa-caret-right text-color-primary"></i>
									<a href="#">Advanced search</a>
								</li>
							</ul>
						</div>
						<div class="col-md-3">
							<div class="contact-details">
								<h4>Contact Information</h4>
								<ul class="contact">
									<li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong><br> 1234 Street Name, City, US</p></li>
									<li><p><i class="fa fa-phone"></i> <strong>Phone:</strong><br> (123) 456-7890</p></li>
									<li><p><i class="fa fa-envelope-o"></i> <strong>Email:</strong><br> <a href="mailto:mail@example.com">mail@example.com</a></p></li>
									<li><p><i class="fa fa-clock-o"></i> <strong>Working Days/Hours:</strong><br> Mon - Sun / 9:00AM - 8:00PM</p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<h4>Main Features</h4>
							<ul class="features">
								<li>
									<i class="fa fa-check text-color-primary"></i>
									<a href="#">Super Fast Template</a>
								</li>
								<li>
									<i class="fa fa-check text-color-primary"></i>
									<a href="#">1st Seller Template</a>
								</li>
								<li>
									<i class="fa fa-check text-color-primary"></i>
									<a href="#">19 Unique Shop Layouts</a>
								</li>
								<li>
									<i class="fa fa-check text-color-primary"></i>
									<a href="#">Powerful Template Features</a>
								</li>
								<li>
									<i class="fa fa-check text-color-primary"></i>
									<a href="#">Mobile &amp; Retina Optimized</a>
								</li>
							</ul>
						</div>
						<div class="col-md-3">
							<div class="newsletter">
								<h4>Be the First to Know</h4>
								<p class="newsletter-info">Get all the latest information on Events,<br> Sales and Offers. Sign up for newsletter today.</p>

								<div class="alert alert-success hidden" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>

								<div class="alert alert-danger hidden" id="newsletterError"></div>


								<p>Enter your e-mail Address:</p>
								<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
									<div class="input-group">
										<input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-btn">
											<button class="btn btn-primary" type="submit">Submit</button>
										</span>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<a href="index.html" class="logo">
							<img alt="Porto Website Template" class="img-responsive" src="{{asset('shop7/img/demos/shop/logo-footer.png')}}">
						</a>
						<ul class="social-icons">
							<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
						<img alt="Payments" src="{{asset('shop7/img/demos/shop/payments.png')}}" class="footer-payment">
						<p class="copyright-text">© Copyright 2016. All Rights Reserved.</p>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="{{asset('shop7/vendor/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('shop7/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
		<script src="{{asset('shop7/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
		<script src="{{asset('shop7/vendor/jquery-cookie/jquery-cookie.min.js')}}"></script>
		<script src="{{asset('shop7/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('shop7/vendor/common/common.min.js')}}"></script>
		<script src="{{asset('shop7/vendor/jquery.validation/jquery.validation.min.js')}}"></script>
		<script src="{{asset('shop7/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js')}}"></script>
		<script src="{{asset('shop7/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
		<script src="{{asset('shop7/vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
		<script src="{{asset('shop7/vendor/isotope/jquery.isotope.min.js')}}"></script>
		<script src="{{asset('shop7/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
		<script src="{{asset('shop7/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('shop7/vendor/vide/vide.min.js')}}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('shop7/js/theme.js')}}"></script>


		<script src="{{asset('shop7/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
		<script src="{{asset('shop7/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{asset('shop7/js/views/view.contact.js')}}"></script>



		<!-- Demo -->
		<script src="{{asset('shop7/js/demos/demo-shop-7.js')}}"></script>
		
		<!-- Theme Custom -->
		<script src="{{asset('shop7/js/custom.js')}}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{asset('shop7/js/theme.init.js')}}"></script>






		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->


	</body>
</html>
