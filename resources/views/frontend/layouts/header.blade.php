<?php

use App\Models\SelectClass;

$sc = new SelectClass();

$subheadings = $sc->selectSubHeading("Tours");

$subheadingsTravel = $sc->selectSubHeading("Travel");
$subheadingsHiking = $sc->selectSubHeading("Hiking");
$subheadingsTreking = $sc->selectSubHeading("Trekking");
$subheadingsAdventure = $sc->selectSubHeading("Adventure Sports");


 
?>


<!-- header -->
<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ url('/') }}">


                <img style="margin-top: -5px;" height="75px" src="{{ asset('frontend/assets/images/logo.svg') }}">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('/about') }}">About</a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Travel<i class="fas fa-angle-down"> </i>
                            </a>                 
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">

                                    @foreach($subheadingsTravel as $subheading)
                                    <li>
                                        <a class="dropdown-item" href=" {{url('page/').'/'.$subheading->id}}">{{ $subheading->pagesubheading }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                         </li>       

                    

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tours<i class="fas fa-angle-down"></i>
                            </a>                 
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">

                                        @foreach($subheadings as $subheading)
                                        <li>
                                            <a class="dropdown-item" href=" {{url('page/').'/'.$subheading->id}}">{{ $subheading->pagesubheading }}</a>
                                        </li>
                                        @endforeach
                                </ul>
                         </li>        
                    
                        <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Hiking<i class="fas fa-angle-down"></i>
                                    </a>                 
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">

                                        @foreach($subheadingsHiking as $subheading)
                                        <li>
                                            <a class="dropdown-item" href=" {{url('page/').'/'.$subheading->id}}">{{ $subheading->pagesubheading }}</a>
                                        </li>
                                        @endforeach
                                </ul>
                        </li>

                        <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Trekking<i class="fas fa-angle-down"></i>
                                        </a>                 
                                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">

                                        @foreach($subheadingsTreking as $subheading)
                                        <li>
                                            <a class="dropdown-item" href=" {{url('page/').'/'.$subheading->id}}">{{ $subheading->pagesubheading }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                        </li>
                        <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Adventures<i class="fas fa-angle-down"></i>
                                        </a>                 
                                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">

                                        @foreach($subheadingsAdventure as $subheading)
                                        <li>
                                            <a class="dropdown-item" href=" {{url('page/').'/'.$subheading->id}}">{{ $subheading->pagesubheading }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{ url('/contact') }}">Contact</a>
                        </li>
                </ul>
              
            </div>
            <!-- toggle switch for light and dark theme -->
            <div class="cont-ser-position">
                <nav class="navigation">
                    
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>
<!-- //header -->