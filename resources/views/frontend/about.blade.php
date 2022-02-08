<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->

<?php

use App\Models\SelectClass;

$selectheading = new SelectClass();

$headingabout = $selectheading->selectMainHeading("About");




 
 ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dress-Up - Fashion Category Bootstrap Responsive Website Template - About Us : W3Layouts</title>
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/style-starter.css') }}">
</head>
     

<body>
    <!-- header -->
     @extends('frontend.layouts.header')
      
    <!-- //header -->

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">About Us</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ url('/')}}">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>About</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- about block -->
    <section class="w3l-about py-5" id="about">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                
               
                    <h3 class="title-style"> <span>About us</span></h3>
                    <div class="col-lg-12 section-width pe-xl-5"> 
                        <p>
                         Welcome to Mohit International Travels and Planning.
                         We've all traveled and been tourists, maybe many times in our lives. 
                         Tourism and tourism are so common that they are mentioned almost daily in newspapers and magazines.
                         Despite his popularity, have you ever considered the definition of travel and tourism? What are the
                         components of the tourism industry? Who's a tourist? Well, this article attempts to explore the words 
                         "travel", "tourism" and "tourist", both technically and conceptually.
                         What does travel mean, and how can it be transformed into a full - time industry? What are the
                         main concepts relating to tourism and what are the characteristics of tourism as an industry?
                          What types of tourism exist? In this article,
                          we will examine the answers to these basic questions about the travel and tourism industry
                          The term "travel" comes from the old French word "travail", which meant hard work.Travel involves
                           the movement of persons or objects, such as aircraft, boats, trains and other vehicles, between 
                           different remote geographical locations.Another "ethimologically for the world tour proposed by
                            Theobald in 1994 is that it comes from Latin "torn" and Greek "tornos", which means "a machine 
                            or a circle and motion around a central point or axis".This meaning has changed in modern English 
                            to "turn", and it implies a round-trip movement.
                        </p> 
                   
                </div>
               
            </div>
        </div>
    </section>
    <!-- //about block -->

    <!-- team block -->
    <!-- <section class="w3l-team-61 py-5" id="team">
        <div class="container py-lg-5 py-md-4 py-2">
            <h3 class="title-style mb-lg-5 mb-4 text-center"><span>Our</span> Team</h3>
            <div class="team-right-content row text-center justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="teams-gd">
                        <div class="team-member">
                            <div class="team-img">
                                <a href="#team"><img class="img-fluid img-responsive" src="{{ asset('frontend/assets/images/team1.jpg') }}"
                                        alt=""></a>
                            </div>
                            <div class="team-hover">
                                <div class="desk">
                                    <h4><a href="#team">Meet Me</a></h4>
                                    <p>Lorem ipsum dolor sit amet,Ea consequuntur </p>
                                </div>
                                <div class="s-link">
                                    <a href="#facebook"><span class="fab fa-facebook-f"></span></a>
                                    <a href="#twitter"><span class="fab fa-twitter"></span></a>
                                    <a href="#google-plus"><span class="fab fa-google-plus-g"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-title p-4">
                            <h5><a href="#team">Martin Ker</a></h5>
                            <span>Tailor</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                    <div class="teams-gd">
                        <div class="team-member">
                            <div class="team-img">
                                <a href="#team"><img class="img-fluid img-responsive" src="{{ asset('frontend/assets/images/team2.jpg') }}"
                                        alt=""></a>
                            </div>
                            <div class="team-hover">
                                <div class="desk">
                                    <h4><a href="#team">Meet Me</a></h4>
                                    <p>Lorem ipsum dolor sit amet,Ea consequuntur </p>
                                </div>
                                <div class="s-link">
                                    <a href="#facebook"><span class="fab fa-facebook-f"></span></a>
                                    <a href="#twitter"><span class="fab fa-twitter"></span></a>
                                    <a href="#google-plus"><span class="fab fa-google-plus-g"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-title p-4">
                            <h5><a href="#team">Shona Leer</a></h5>
                            <span>Master Tailor</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                    <div class="teams-gd">
                        <div class="team-member">
                            <div class="team-img">
                                <a href="#team"><img class="img-fluid img-responsive" src="{{ asset('frontend/assets/images/team3.jpg') }}"
                                        alt=""></a>
                            </div>
                            <div class="team-hover">
                                <div class="desk">
                                    <h4><a href="#team">Meet Me</a></h4>
                                    <p>Lorem ipsum dolor sit amet,Ea consequuntur </p>
                                </div>
                                <div class="s-link">
                                    <a href="#facebook"><span class="fab fa-facebook-f"></span></a>
                                    <a href="#twitter"><span class="fab fa-twitter"></span></a>
                                    <a href="#google-plus"><span class="fab fa-google-plus-g"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-title p-4">
                            <h5><a href="#team">Brock Lee</a></h5>
                            <span>Tailor</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                    <div class="teams-gd">
                        <div class="team-member">
                            <div class="team-img">
                                <a href="#team"><img class="img-fluid img-responsive" src="{{ asset('frontend/assets/images/team4.jpg') }}"
                                        alt=""></a>
                            </div>
                            <div class="team-hover">
                                <div class="desk">
                                    <h4><a href="#team">Meet Me</a></h4>
                                    <p>Lorem ipsum dolor sit amet,Ea consequuntur </p>
                                </div>
                                <div class="s-link">
                                    <a href="#facebook"><span class="fab fa-facebook-f"></span></a>
                                    <a href="#twitter"><span class="fab fa-twitter"></span></a>
                                    <a href="#google-plus"><span class="fab fa-google-plus-g"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-title p-4">
                            <h5><a href="#team">Maya Didas</a></h5>
                            <span>Master Tailor</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- //team block -->

   
 

    <!-- testimonials block -->
    <!-- <section class="w3l-customer-block py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <h3 class="title-style text-center mb-lg-5 mb-4"><span>Our</span> Testimonials</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="customer-single pe-lg-4">
                        <blockquote>Lorem ipsum dolor sit amet, consectetur adip iscing elit sed. orci urna. In et augue
                            ornare, tempor
                            massa
                            in,
                            luctus sapien. Proin a diam et dui fermentum dolor molestie vel id neque euismod massa a
                            quam viverra
                            et.
                        </blockquote>
                        <div class="customer-img d-flex align-items-center mt-4">
                            <img src="{{ asset('frontend/assets/images/testi1.jpg') }} " class="img-fluid me-3" alt="" />
                            <div class="customer-info">
                                <h6>Theo Hall</h6>
                                <small class="mb-0">Subtitle goes here</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-md-0 mt-5">
                    <div class="customer-single pe-lg-4">
                        <blockquote>Lorem ipsum dolor sit amet, consectetur adip iscing elit sed. orci urna. In et augue
                            ornare, tempor
                            massa
                            in,
                            luctus sapien. Proin a diam et dui fermentum dolor molestie vel id neque euismod massa a
                            quam viverra
                            et.
                        </blockquote>
                        <div class="customer-img d-flex align-items-center mt-4">
                            <img src="{{ asset('frontend/assets/images/testi2.jpg') }}" class="img-fluid me-3" alt="" />
                            <div class="customer-info">
                                <h6>Jenna John</h6>
                                <small class="mb-0">Subtitle goes here</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-md-0 mt-5">
                    <div class="customer-single pe-lg-4">
                        <blockquote>Lorem ipsum dolor sit amet, consectetur adip iscing elit sed. orci urna. In et augue
                            ornare, tempor
                            massa
                            in,
                            luctus sapien. Proin a diam et dui fermentum dolor molestie vel id neque euismod massa a
                            quam viverra
                            et.
                        </blockquote>
                        <div class="customer-img d-flex align-items-center mt-4">
                            <img src="{{ asset('assets/images/testi3.jpg') }}" class="img-fluid me-3" alt="" />
                            <div class="customer-info">
                                <h6>William Due</h6>
                                <small class="mb-0">Subtitle goes here</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- //testimonials block -->

    <!-- footer -->
    @extends('frontend.layouts.footer')

    <!-- //footer -->

</body>

</html>