<!doctype html>
<html lang="en">

@extends('frontend.layouts.title')

<body>
    <!-- header -->
 @extends('frontend.layouts.header')

    <!-- //header -->

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4"> </h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2">  {{request()->route('id')}}  </i> </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->
  

    <?php
    $Pages = DB::table('sub_pages')->select('*')->where('pageheading', request()->route('id'))->get();
    ?>


    <!-- blog section -->
    <div class="w3l-news py-5" id="homeblog">
        <div class="container py-lg-5 py-md-4 py-2">
            <h3 class="title-style text-center mb-lg-5 mb-4">{{request()->route('id')}} Packgaes</h3>
            <div class="row justify-content-center">


                @foreach($Pages as $page)

                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="grids5-info">
                        <a href="#blog" class="blog-image d-block zoom"><img src="{{url('uploads/thumbnailimg/').'/'.$page->thumbnailimg}}" alt="" class="img-fluid news-image" />
                            <div class="image-overlay">
                                <span class="fas fa-plus"></span>
                            </div>
                        </a>
                        <div class="blog-info card-body blog-details">
                            <h4>
                                <a class="blog-desc" href="{{url('page/').'/'.$page->id}}"> {{ $page->pagesubheading }}</a>

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
    <!-- //blog section -->




    <!-- footer -->
    @extends('frontend.layouts.footer')

    <!-- //footer -->



</body>

</html>