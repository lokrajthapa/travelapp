<!doctype html>
<html lang="en">

@extends('frontend.layouts.title')

<body>
    @extends('frontend.layouts.header')

    <!-- hero slider Start -->
    <div class="banner-wrap">
        <div class="banner-slider">
            <!-- hero slide start -->
            <div class="banner-slide bg1">
                <div class="container">
                    <div class="hero-content">
                        <p data-animation="fadeInDown" class="mb-2">Tours </p>
                        <h1 data-animation="flipInX" data-delay="0.8s" data-color="#fff">
                            Pokhara <span>Fewa</span> Lake </h1>
                     
                    </div>
                </div>
                <div class="hero-overlay"></div>
            </div>
            <!-- hero slide end -->
            <!-- hero slide start -->
            <div class="banner-slide bg2">
                <div class="container">
                    <div class="hero-content">
                        <p data-animation="fadeInDown" class="mb-2">Rafting</p>
                        <h1 data-animation="fadeInDown" data-delay="0.8s" data-color="#fff">
                            Adventure <span>Sports</span>
                        </h1>
                        
                    </div>
                </div>
                <div class="hero-overlay"></div>
            </div>
            <!-- hero slide end -->
            <!-- hero slide start -->
            <div class="banner-slide bg3">
                <div class="container">
                    <div class="hero-content">
                        <p data-animation="fadeInUp" class="mb-2">Travel</p>
                        <h1 data-animation="fadeInUp" data-color="#fff" data-delay="0.8s">
                            Lake <span>view</span> 
                        </h1>
                        
                    </div>
                </div>
                <div class="hero-overlay"></div>
            </div>
            <!-- hero slide end -->
            <!-- hero slide start -->
            <div class="banner-slide bg4">
                <div class="container">
                    <div class="hero-content">
                        <p data-animation="fadeInDown" class="mb-2">Hiking</p>
                        <h1 data-animation="flipInX" data-color="#fff" data-delay="0.8s">
                            Mount  <span>Everest</span> Climbing
                        </h1>
                        
                    </div>
                </div>
                <div class="hero-overlay"></div>
            </div>
            <!-- hero slide end -->
        </div>
    </div>
    <!-- hero slider end -->

    <!-- home services block -->
    <div class="w3l-servicesblock2 py-5" id="services">
        <div class="container py-lg-5 py-md-4 py-2">
            <h3 class="title-style text-center mb-lg-5 mb-4">Services we're <span>offering</span></h3>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="grids5-info">
                        <a href="{{url('itemlisting/Tours')}}" class="blog-image d-block zoom"><img src="{{ asset('frontend/assets/images/s1.jpg') }}" alt="" class="img-fluid radius-image" />
                            <div class="image-overlay">
                                <h4>Tours</h4>
                                <p> A trip with visits to various places of interest for business, pleasure, or instruction</p>
                            </div>
                            <div class="iconic-plus">
                                <i class="fas fa-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                    <div class="grids5-info">
                        <a href="{{url('itemlisting/Trekking')}}" class="blog-image d-block zoom"><img src="{{ asset('frontend/assets/images/s2.jpg') }}" alt="" class="img-fluid radius-image" />
                            <div class="image-overlay">
                                <h4>Trekking</h4>
                                <p> Trekking is a form of walking, undertaken with the specific purpose </p>
                            </div>
                            <div class="iconic-plus">
                                <i class="fas fa-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                    <div class="grids5-info">
                        <a href="{{url('itemlisting/Hiking')}}" class="blog-image d-block zoom"><img src="{{ asset('frontend/assets/images/s3.jpg') }}" alt="" class="img-fluid radius-image" />
                            <div class="image-overlay">
                                <h4>Hiking</h4>
                                <p>Reduce your heart disease by going hiking.On Going up and down hills gets the heart pumping, creating a great cardio workout.  </p>
                            </div>
                            <div class="iconic-plus">
                                <i class="fas fa-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                    <div class="grids5-info">
                        <a href="{{url('itemlisting/Adventure Sports')}}" class="blog-image d-block zoom"><img src="{{ asset ('frontend/assets/images/s4.jpg') }}" alt="" class="img-fluid radius-image" />
                            <div class="image-overlay">
                                <h4>Adventure Sports</h4>
                                <p>An adventure sport pushes one to get out of their comfort zone and perform a task</p>
                            </div>
                            <div class="iconic-plus">
                                <i class="fas fa-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- //home services block -->


    <?php
     $Pages=DB::table('sub_pages')->select('*')->take(6)->get();
    ?>




   <!-- blog section -->
    <!-- blog section -->
    <div class="w3l-news py-5" id="homeblog">
        <div class="container py-lg-5 py-md-4 py-2">
            <h3 class="title-style text-center mb-lg-5 mb-4">Popular Trekking & Tour Packgaes</h3>
            <div class="row justify-content-center">
                @foreach($Pages as $page)
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 mb-4">
                    <div class="grids5-info">
                        <a href="{{url('page/').'/'.$page->id}}" class="blog-image d-block zoom"><img src="{{url('uploads/thumbnailimg/').'/'.$page->thumbnailimg}}" alt="" class="img-fluid news-image" />
                            <div class="image-overlay">
                                <span class="fas fa-plus"></span>
                            </div>
                        </a>
                        <div class="blog-info card-body blog-details">
                            <h4>
                                <a class="blog-desc" href="{{url('page/').'/'.$page->id}}">
                               
                                     {{  ucfirst($page->pagesubheading)  }} 
                                     
                                     </a>

                            </h4>
                            <p class="mt-3"><?php
                                            echo substr($page->text, 0, 200);
                                            ?></p>
                            <a href="{{url('page/').'/'.$page->id}}" class="read">Read more</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
           



        </div>
    </div>
    </div>
    <!-- //blog section -->

    <!-- footer -->
    @extends('frontend.layouts.footer')


    <!-- //footer -->

</body>

</html>