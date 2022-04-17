
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
                <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">{{ $mainpagedetails[0]->pageheading}}</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ url('/')}}">Home</a></li>
                   
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
                   
                       

                        <div class="width-auto ">


                            {!! $mainpagedetails[0]->text !!} 

                        </div>
                  </div>

                </div>

            </div>
        </div>
    </section>
    <!-- //about block -->


   


  



    <!-- footer -->
    @include('frontend.layouts.footer')

    <!-- //footer -->



</body>

</html>