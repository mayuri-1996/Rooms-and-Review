@extends('layout.base')
@section('content')


               
    <div class="clearfix"></div>
       
    <!-- ============================ Hero Banner End ================================== -->

    <div class="image-cover hero-banner p-0" style="background:url(frontend/assets/img/3.jpg) no-repeat;" data-overlay="6">
        <div class="container">

            <h2 class="big-header-capt mb-0 font-weight-normal">Be a part of <strong>GoGoal</strong></h2>
            <p class="text-center mb-5">#FulFillYourGoal</p>
            
            <div class="full-search-2 eclip-search italian-search hero-search-radius shadow">
                <div class="hero-search-content">
                    
                    <form method="GET" action="{{route('pages.index')}}">
                        @csrf
                        <div class="row">
                      
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="form-group borders">
                                    <div class="input-with-icon">
                                        <select id="ptypes" class="form-control state" name="state_id">
                                            <option value="">&nbsp;</option>
                                            @foreach ($states as $state)
                                                <option value="{{$state->id}}" 
                                                    @if (Request::get('state_id') == $state->id)
                                                        selected
                                                    @endif
                                                >{{$state->zone_name}}</option>
                                            @endforeach
                                        </select>
                                        <i class="ti-briefcase"></i>
                                    </div>
                                </div>
                            </div>
    
                            
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="form-group borders">
                                    <div class="input-with-icon b-l">
                                        <select id="location" class="form-control city" name="city_id">
                                            <option value="">&nbsp;</option>  
                                            @foreach ($cities as $city)
                                                <option value="{{$city->id}}"
                                                    @if (Request::get('city_id') == $city->id)
                                                        selected
                                                    @endif
                                                >{{$city->city_name}}</option>
                                            @endforeach                                     
                                        </select>
                                        <i class="ti-location-pin"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 b-r">
                                <div class="form-group borders">
                                    <div class="input-with-icon">
                                        <input type="text" name="street_name" class="form-control search-state" placeholder="Area">
                                        <i class="ti-search"></i>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn search-btn">Search</button>
                                </div>                           
                            </div>
                            
                        </div>
                    </form>
                    
                    
                </div>
            </div>
                
        </div>
    </div>
    <!-- ============================ Hero Banner End ================================== -->


    <!-- ============================ Ad Start================================== -->
    <div class="home-slider margin-bottom-0 mt-1">

        <!-- Slide -->
        <div data-background-image="frontend/assets/img/3.jpg" class="item">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="home-slider-container pt-1 pl-2 pr-2 pb-1">

                            <!-- Slide Title -->
                            <div class="home-slider-desc">
                                <div class="listing-price-with-compare justify-content-between align-item-baseline">
                                    <div>
                                        <div class="modern-pro-wrap">
                                            <span class="property-type">For Rent</span>
                                            <span class="property-featured theme-bg">Featured</span>
                                        </div>
                                        <div class="home-slider-title">
                                            <h3><a href="single-property-page-1.html">Aashirvaad Apartment</a></h3>
                                            <span><i class="lni-map-marker"></i> 778 Country St. Panama City, FL</span>
                                        </div>
                                    </div>
                                    <div class="lpc-right">
                                        <a href="compare-property.html" data-toggle="tooltip" data-placement="top" title="Share this property"><i class="ti-share"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Save this property"><i class="ti-heart"></i></a>
                                    </div>
                                </div>
                              
                                <div class="slide-property-info">
                                    <ul>
                                        <li>Beds: 4</li>
                                        <li>Bath: 2</li>
                                        <li>sqft: 5270</li>
                                    </ul>
                                </div>
                                
                                <div class="listing-price-with-compare">
                                    <h4 class="list-pr theme-cl">$2,580</h4>
                                    <a href="single-property-page-1.html" class="read-more">View Details <i class="fa fa-angle-right"></i></a>
                                </div>                                
                            </div>
                            <!-- Slide Title / End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide -->
        <div data-background-image="https://via.placeholder.com/1920x900" class="item">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="home-slider-container pt-1 pl-2 pr-2 pb-1">

                            <!-- Slide Title -->
                            <div class="home-slider-desc">
                                <div class="listing-price-with-compare justify-content-between align-item-baseline">
                                    <div>
                                        <div class="modern-pro-wrap">
                                            <span class="property-type">For Rent</span>
                                            <span class="property-featured theme-bg">Featured</span>
                                        </div>
                                        <div class="home-slider-title">
                                            <h3><a href="single-property-page-1.html">Aashirvaad Apartment</a></h3>
                                            <span><i class="lni-map-marker"></i> 778 Country St. Panama City, FL</span>
                                        </div>
                                    </div>
                                    <div class="lpc-right">
                                        <a href="compare-property.html" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="ti-control-shuffle"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="ti-heart"></i></a>
                                    </div>
                                </div>
                              
                                <div class="slide-property-info">
                                    <ul>
                                        <li>Beds: 4</li>
                                        <li>Bath: 2</li>
                                        <li>sqft: 5270</li>
                                    </ul>
                                </div>
                                
                                <div class="listing-price-with-compare">
                                    <h4 class="list-pr theme-cl">$2,580</h4>
                                    <a href="single-property-page-1.html" class="read-more">View Details <i class="fa fa-angle-right"></i></a>
                                </div>                                
                            </div>
                            <!-- Slide Title / End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide -->
        <div data-background-image="https://via.placeholder.com/1920x900" class="item">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="home-slider-container pt-1 pl-2 pr-2 pb-1">

                            <!-- Slide Title -->
                            <div class="home-slider-desc">
                                <div class="listing-price-with-compare justify-content-between align-item-baseline">
                                    <div>
                                        <div class="modern-pro-wrap">
                                            <span class="property-type">For Rent</span>
                                            <span class="property-featured theme-bg">Featured</span>
                                        </div>
                                        <div class="home-slider-title">
                                            <h3><a href="single-property-page-1.html">Aashirvaad Apartment</a></h3>
                                            <span><i class="lni-map-marker"></i> 778 Country St. Panama City, FL</span>
                                        </div>
                                    </div>
                                    <div class="lpc-right">
                                        <a href="compare-property.html" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="ti-control-shuffle"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="ti-heart"></i></a>
                                    </div>
                                </div>
                              
                                <div class="slide-property-info">
                                    <ul>
                                        <li>Beds: 4</li>
                                        <li>Bath: 2</li>
                                        <li>sqft: 5270</li>
                                    </ul>
                                </div>
                                
                                <div class="listing-price-with-compare">
                                    <h4 class="list-pr theme-cl">$2,580</h4>
                                    <a href="single-property-page-1.html" class="read-more">View Details <i class="fa fa-angle-right"></i></a>
                                </div>                                
                            </div>
                            <!-- Slide Title / End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- ============================ Ad End ================================== -->
    
    <!-- ================= Explore Property ================= -->
    <section>
        <div class="container">
            
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 text-center">
                    <div class="sec-heading center">
                        <h2>Explore Good Places Based on Your Search</h2>
                    </div>
                </div>
            </div>
            
            @if (count($property_by_search) > 0)
                <div class="row">
                    
                    @foreach ($property_by_search as $search)
                        <!-- Single Property -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="property-listing property-2">
                                
                                <div class="listing-img-wrapper">
                                    <div class="list-img-slide">
                                        <div class="click">
                                            <div>
                                                @if ($search->properties_to_images->count() > 0)
                                                    @foreach ($search->properties_to_images as $image)
                                                        <a href="{{route('pages.propertydetails',$search->id)}}">
                                                            <img src="{{asset('uplaods/'.$image->big_img)}}" class="img-fluid mx-auto" alt="" />
                                                        </a>
                                                    @endforeach 
                                                @else
                                                    <a href="{{route('pages.propertydetails',$search->id)}}">
                                                        <img src="https://via.placeholder.com/1200x800" class="img-fluid mx-auto" alt="" />
                                                    </a>
                                                @endif
                                                                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="listing-detail-wrapper">
                                    <div class="listing-short-detail-wrap">
                                        <div class="listing-short-detail">
                                            <span class="property-type">{{$search->property_status}}</span>
                                            <h4 class="listing-name verified"><a href="" class="prt-link-detail">{{$search->property_title}}</a></h4>
                                        </div>
                                        <div class="listing-short-detail-flex">
                                            <h6 class="listing-card-info-price"> Rs {{$search->property_price}}</h6>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="price-features-wrapper">
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="{{asset('frontend/assets/img/bed.svg')}}" width="13" alt="" /></div>
                                        {{$search->no_of_bedrooms}} Beds
                                    </div>
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="{{asset('frontend/assets/img/bathtub.svg')}}" width="13" alt="" /></div>{{$search->no_of_bathrooms}} Bath
                                    </div>
                                    <div class="listing-card-info-icon">
                                        <div class="inc-fleat-icon"><img src="{{asset('frontend/assets/img/move.svg')}}" width="13" alt="" /></div>{{$search->property_area}}
                                    </div>
                                </div>
                                
                                <div class="listing-detail-footer">
                                    <div class="footer-first">
                                        <div class="foot-location"><img src="{{asset('frontend/assets/img/pin.svg')}}" width="18" alt="" />
                                            {{$search->properties_to_property_addresses->property_addresses_to_zone_cities->city_name}}, 
                                            				{{$search->properties_to_property_addresses->property_addresses_to_zones->zone_name}}
                                        </div>
                                    </div>
                                    <div class="footer-flex">
                                        <a href="{{route('pages.propertydetails',$search->id)}}" class="prt-view">View</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Single Property -->
                    @endforeach
                    
                </div>
                
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <a href="" class="btn btn-theme-light-2 rounded" data-bs-toggle="modal" data-bs-target="#signup">Browse More Properties</a>
                    </div>
                </div>
            @endif

            
            
        </div>	
    </section>
    <!-- ================================= Explore Property =============================== -->
    
    <!-- ============================ Property Location Start ================================== -->
    <section class="bg-light">
        <div class="container">
            
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 text-center">
                    <div class="sec-heading center">
                        <h2>Find By Your Locations</h2>
                    </div>
                </div>
            </div>
            
            @if (count($property_by_location) > 0)
                <div class="row">
                
                    <div class="col-lg-4 col-md-4">
                        <div class="location-property-wrap">
                            <div class="location-property-thumb">
                                <a href=""><img src="{{asset('frontend/assets/img/7 (7).jpg')}}" class="img-fluid" alt="" /></a>
                            </div>
                            <div class="location-property-content">
                                <div class="lp-content-flex">
                                    <h4 class="lp-content-title">San Francisco, California</h4>
                                    <span>12 Properties</span>
                                </div>
                                <div class="lp-content-right">
                                    <a href="" class="lp-property-view"><i class="ti-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4">
                        <div class="location-property-wrap">
                            <div class="location-property-thumb">
                                <a href=""><img src="{{asset('frontend/assets/img/7 (8).jpg')}}" class="img-fluid" alt="" /></a>
                            </div>
                            <div class="location-property-content">
                                <div class="lp-content-flex">
                                    <h4 class="lp-content-title">Dunao, California</h4>
                                    <span>142 Properties</span>
                                </div>
                                <div class="lp-content-right">
                                    <a href="" class="lp-property-view"><i class="ti-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4">
                        <div class="location-property-wrap">
                            <div class="location-property-thumb">
                                <a href=""><img src="{{asset('frontend/assets/img/7 (9).jpg')}}" class="img-fluid" alt="" /></a>
                            </div>
                            <div class="location-property-content">
                                <div class="lp-content-flex">
                                    <h4 class="lp-content-title">Liverpool, London</h4>
                                    <span>17 Properties</span>
                                </div>
                                <div class="lp-content-right">
                                    <a href="" class="lp-property-view"><i class="ti-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4">
                        <div class="location-property-wrap">
                            <div class="location-property-thumb">
                                <a href=""><img src="{{asset('frontend/assets/img/7 (10).jpg')}}" class="img-fluid" alt="" /></a>
                            </div>
                            <div class="location-property-content">
                                <div class="lp-content-flex">
                                    <h4 class="lp-content-title">San Francisco, New York</h4>
                                    <span>72 Properties</span>
                                </div>
                                <div class="lp-content-right">
                                    <a href="" class="lp-property-view"><i class="ti-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4">
                        <div class="location-property-wrap">
                            <div class="location-property-thumb">
                                <a href=""><img src="{{asset('frontend/assets/img/7 (11).jpg')}}" class="img-fluid" alt="" /></a>
                            </div>
                            <div class="location-property-content">
                                <div class="lp-content-flex">
                                    <h4 class="lp-content-title">New Orleans, Louisiana</h4>
                                    <span>102 Properties</span>
                                </div>
                                <div class="lp-content-right">
                                    <a href="" class="lp-property-view"><i class="ti-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4">
                        <div class="location-property-wrap">
                            <div class="location-property-thumb">
                                <a href=""><img src="{{asset('frontend/assets/img/7 (12).jpg')}}" class="img-fluid" alt="" /></a>
                            </div>
                            <div class="location-property-content">
                                <div class="lp-content-flex">
                                    <h4 class="lp-content-title">Los Angeles</h4>
                                    <span>95 Properties</span>
                                </div>
                                <div class="lp-content-right">
                                    <a href="" class="lp-property-view"><i class="ti-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <a href="" class="btn btn-theme-light rounded">Browse More Locations</a>
                    </div>
                </div>
            @endif
            
            @guest
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <a href="" class="btn btn-theme-light rounded">Login Now</a>
                    </div>
                </div>               
            @else
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <a href="{{route('pages.myprofile')}}" class="btn btn-theme-light rounded">Set Your Location</a>
                    </div>
                </div>
            @endguest
            
            
        </div>
    </section>
    <!-- ============================ Property Location End ================================== -->
    
    <!-- ============================ All Random Property ================================== -->
    <section>
        <div class="container">
        
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 text-center">
                    <div class="sec-heading center">
                        <h2>Property For Rent</h2>
                    </div>
                </div>
            </div>
        
            <div class="row list-layout">
                
                @foreach ($random_properties as $random_property)
                    <!-- Single Property Start -->
                    <div class="col-lg-6 col-md-12">
                        <div class="property-listing property-1">
                                
                            <div class="listing-img-wrapper">
                                <a href="{{route('pages.propertydetails',$random_property->id)}}">
                                    @if ($random_property->properties_to_images->count()>0)
                                    <img src="{{asset('uplaods/'.$random_property->properties_to_images[0]->big_img)}}" class="img-fluid mx-auto" alt="" />
                                    @endif
                                </a>
                            </div>
                            
                            <div class="listing-content">
                            
                                <div class="listing-detail-wrapper-box">
                                    <div class="listing-detail-wrapper">
                                        <div class="listing-short-detail">
                                            <h4 class="listing-name"><a href="{{route('pages.propertydetails',$random_property->id)}}">{{$random_property->property_title}}</a></h4>
                                            {{-- <div class="fr-can-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="reviews_text">(42 Reviews)</span>
                                            </div> --}}
                                            <span class="prt-types sale">{{$random_property->property_status}}</span>
                                        </div>
                                        <div class="list-price">
                                            <h6 class="listing-card-info-price">Rs {{$random_property->property_price}}</h6>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="price-features-wrapper">
                                    <div class="list-fx-features">
                                        <div class="listing-card-info-icon">
                                            <div class="inc-fleat-icon"><img src="{{asset('frontend/assets/img/bed.svg')}}" width="13" alt="" /></div>
                                            {{$random_property->no_of_bedrooms}} Beds
                                        </div>
                                        <div class="listing-card-info-icon">
                                            <div class="inc-fleat-icon"><img src="{{asset('frontend/assets/img/bathtub.svg')}}" width="13" alt="" /></div>{{$random_property->no_of_bathrooms}} Bath
                                        </div>
                                        <div class="listing-card-info-icon">
                                            <div class="inc-fleat-icon"><img src="{{asset('frontend/assets/img/move.svg')}}" width="13" alt="" /></div>{{$random_property->property_area}}
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="listing-footer-wrapper">
                                    <div class="listing-locate">
                                        <span class="listing-location"><i class="ti-location-pin"></i>
                                            {{$random_property->properties_to_property_addresses->property_addresses_to_zone_cities->city_name}}, 
                                            {{$random_property->properties_to_property_addresses->property_addresses_to_zones->zone_name}}
                                        </span>
                                    </div>
                                    <div class="listing-detail-btn">
                                        <a href="{{route('pages.propertydetails',$random_property->id,$random_property->id)}}" class="more-btn">View</a>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                <!-- Single Property End -->
                @endforeach
                               
            </div>
                    
            <!-- Pagination -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <a href="{{route('pages.propertylisting')}}" class="btn btn-theme-light-2 rounded-browse-more">Browse More Properties</a>
                </div>
            </div>
            
        </div>		
    </section>
    <!-- ============================ All Featured Property ================================== -->
    
    <!-- ============================ Smart Testimonials ================================== -->
    <section class="bg-orange">
        <div class="container">
        
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 text-center">
                    <div class="sec-heading center">
                        <h2> Reviews by Our Customers</h2>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center">
                
                <div class="col-lg-12 col-md-12">
                    
                    <div class="smart-textimonials smart-center" id="smart-textimonials">
                        
                        <!-- Single Item -->
                        <div class="item">
                            <div class="item-box">
                                <div class="smart-tes-author">
                                    <div class="st-author-box">
                                        <div class="st-author-thumb">
                                            <div class="quotes bg-blue"><i class="ti-quote-right"></i></div>
                                            <img src="https://via.placeholder.com/400x400" class="img-fluid" alt="" />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="smart-tes-content">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</p>
                                </div>
                                
                                <div class="st-author-info">
                                    <h4 class="st-author-title">Adam Williams</h4>
                                    <span class="st-author-subtitle">CEO Of Microwoft</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Single Item -->
                        <div class="item">
                            <div class="item-box">
                                <div class="smart-tes-author">
                                    <div class="st-author-box">
                                        <div class="st-author-thumb">
                                            <div class="quotes bg-inverse"><i class="ti-quote-right"></i></div>
                                            <img src="https://via.placeholder.com/400x400" class="img-fluid" alt="" />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="smart-tes-content">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</p>
                                </div>
                                
                                <div class="st-author-info">
                                    <h4 class="st-author-title">Retha Deowalim</h4>
                                    <span class="st-author-subtitle">CEO Of Apple</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Single Item -->
                        <div class="item">
                            <div class="item-box">
                                <div class="smart-tes-author">
                                    <div class="st-author-box">
                                        <div class="st-author-thumb">
                                            <div class="quotes bg-purple"><i class="ti-quote-right"></i></div>
                                            <img src="https://via.placeholder.com/400x400" class="img-fluid" alt="" />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="smart-tes-content">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</p>
                                </div>
                                
                                <div class="st-author-info">
                                    <h4 class="st-author-title">Sam J. Wasim</h4>
                                    <span class="st-author-subtitle">Pio Founder</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Single Item -->
                        <div class="item">
                            <div class="item-box">
                                <div class="smart-tes-author">
                                    <div class="st-author-box">
                                        <div class="st-author-thumb">
                                            <div class="quotes bg-primary"><i class="ti-quote-right"></i></div>
                                            <img src="https://via.placeholder.com/400x400" class="img-fluid" alt="" />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="smart-tes-content">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</p>
                                </div>
                                
                                <div class="st-author-info">
                                    <h4 class="st-author-title">Usan Gulwarm</h4>
                                    <span class="st-author-subtitle">CEO Of Facewarm</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Single Item -->
                        <div class="item">
                            <div class="item-box">
                                <div class="smart-tes-author">
                                    <div class="st-author-box">
                                        <div class="st-author-thumb">
                                            <div class="quotes bg-success"><i class="ti-quote-right"></i></div>
                                            <img src="https://via.placeholder.com/400x400" class="img-fluid" alt="" />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="smart-tes-content">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</p>
                                </div>
                                
                                <div class="st-author-info">
                                    <h4 class="st-author-title">Shilpa Shethy</h4>
                                    <span class="st-author-subtitle">CEO Of Zapple</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- ============================ Smart Testimonials End ================================== -->
       
    <!-- ============================ Call To Action ================================== -->
    @guest
    <section class="theme-bg call-to-act-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">                   
                    <div class="call-to-act">
                        <div class="call-to-act-head">
                            <h3>Be a part of GoGoal</h3>
                            <span class="text-center">#FulFillYourGoal</span>
                        </div>
                        <a href="{{route('pages.signin')}}" class="btn btn-call-to-act">Register Now</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    @endguest
    <!-- ============================ Call To Action End ================================== -->
    
    
    
    <!-- Log In Modal -->
    <!-- <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="registermodal">
                <span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                <div class="modal-body">
                    <h4 class="modal-header-title">Log In</h4>
                    <div class="login-form">
                        <form>
                        
                            <div class="form-group">
                                <label>User Name</label>
                                <div class="input-with-icon">
                                    <input type="text" class="form-control" placeholder="Username">
                                    <i class="ti-user"></i>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-with-icon">
                                    <input type="password" class="form-control" placeholder="*******">
                                    <i class="ti-unlock"></i>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">Login</button>
                            </div>
                        
                        </form>
                    </div>
                    <div class="modal-divider"><span>Or login via</span></div>
                    <div class="social-login mb-3">
                        <ul>
                            <li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Facebook</a></li>
                            <li><a href="#" class="btn connect-google"><i class="ti-google"></i>Google+</a></li>
                        </ul>
                    </div>
                    <div class="text-center">
                        <p class="mt-5"><a href="#" class="link">Forgot password?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Modal -->
    
    <!-- Sign Up Modal -->
    <!-- <div class="modal fade signup" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="sign-up">
                <span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                <div class="modal-body">
                    <h4 class="modal-header-title">Sign Up</h4>
                    <div class="login-form">
                        <form>
                            
                            <div class="row">
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="text" class="form-control" placeholder="Full Name">
                                            <i class="ti-user"></i>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="email" class="form-control" placeholder="Email">
                                            <i class="ti-email"></i>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="text" class="form-control" placeholder="Username">
                                            <i class="ti-user"></i>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="password" class="form-control" placeholder="*******">
                                            <i class="ti-unlock"></i>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="password" class="form-control" placeholder="123 546 5847">
                                            <i class="lni-phone-handset"></i>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <select class="form-control">
                                                <option>As a Customer</option>
                                                <option>As a Agent</option>
                                                <option>As a Agency</option>
                                            </select>
                                            <i class="ti-briefcase"></i>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">Sign Up</button>
                            </div>
                        
                        </form>
                    </div>
                    <div class="modal-divider"><span>Or login via</span></div>
                    <div class="social-login mb-3">
                        <ul>
                            <li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Facebook</a></li>
                            <li><a href="#" class="btn connect-google"><i class="ti-google"></i>Google+</a></li>
                        </ul>
                    </div>
                    <div class="text-center">
                        <p class="mt-5"><i class="ti-user mr-1"></i>Already Have An Account? <a href="#" class="link">Go For LogIn</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Modal -->

    <!-- Sign Up Modal -->
	<div class="modal fade signup" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered login-pop-form" role="document" style="max-width: 500px;">
			<div class="modal-content" id="sign-up">
				<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
				<div class="modal-body">
					<div class="login-form">
						<div class="row" style="margin-bottom: 20px">
							<h4 class="text-center">
								You are not logged in
							</h4>
							<h6 class="text-center">
								To access all your searched property please login first.
							</h6>										
						</div>
						<a href="{{route('pages.signup')}}">
							<button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">Log In</button>				
						</a>
					</div>														
				</div>
			</div>
		</div>
	</div>
	<!-- End Modal -->
    
    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>

					
@endsection

		
        

		