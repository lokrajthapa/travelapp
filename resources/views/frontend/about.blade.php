

<?php

use App\Models\SelectClass;

$selectheading = new SelectClass();

$headingabout = $selectheading->selectMainHeading("About");




 
 ?>
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

   

   
 

   

    <!-- footer -->
    @extends('frontend.layouts.footer')

    <!-- //footer -->

</body>

</html>