
<!doctype html>
<html lang="en">

@include('frontend.layouts.title')

<body>
    <!-- header -->
 @include('frontend.layouts.header')

    <!-- //header -->

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">{{ $pageDetails[0]->page->pageheading}}</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ url('/')}}">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>{{ $pageDetails[0]->pagesubheading}}    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- about block -->
    <section class="w3l-about py-2" id="about">
        <div class="container py-lg-2 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-11 section-width pe-xl-3 ">
                   <div pi-4> 
                   
                        <div class="full mt-2 mb-2 padding-left-4 small-shadow ">

                            <img class="img-fluid text-center" height="450px" src=" {{url('uploads/thumbnailimg/').'/'.$pageDetails[0]->thumbnailimg }}">
                        </div>

                        <div class="width-auto ">


                            {!! $pageDetails[0]->text !!} 

                        </div>
                  </div>

                </div>

            </div>
        </div>
    </section>
    <!-- //about block -->


    <?php
    $Pages = DB::table('sub_pages')->select('*')->where('pagesubheading', '!=', $pageDetails[0]->pagesubheading)->take(3)->get();
    ?>


    <!-- blog section -->
    <div class="w3l-news py-5" id="homeblog">
        <div class="container py-lg-5 py-md-4 py-2">
            <h3 class="title-style text-center mb-lg-5 mb-4"> Similar Packgaes</h3>
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
    <!-- //blog section -->




    <!-- footer -->
    @include('frontend.layouts.footer')

    <!-- //footer -->



</body>

</html>