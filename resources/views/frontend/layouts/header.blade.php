<?php

use App\Models\SelectClass;

$sc = new SelectClass();

$subheadings = $sc->selectSubHeading("Tours");


$subheadingsHiking = $sc->selectSubHeading("Hiking");
$subheadingsTreking = $sc->selectSubHeading("Trekking");
$subheadingsTibet = $sc->selectSubHeading("Tibet");
$subheadingsBhutan = $sc->selectSubHeading("Bhutan");
$subheadingsIndia = $sc->selectSubHeading("India");
$subheadingsAsia = $sc->selectSubHeading("Asia");
$subheadingsEurope =$sc->selectSubHeading('Europe');
$subheadingsEverstRegion =$sc->selectSubHeading('Everest Region Trekking');
$subheadingsAnnapurnaRegion =$sc->selectSubHeading('Annapurna Region');
$subheadingsActivities =$sc->selectSubHeading('Activities');











 
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
							<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Destinations  <i class="fas fa-angle-down"> </i> </a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Nepal  &raquo;</a>
                                <ul class="submenu dropdown-menu">
										<li><a class="dropdown-item" href="#">Tours  &raquo;</a>
                                           <ul class="submenu dropdown-menu">
											   
										   @foreach($subheadings as $subheading)
											<li>
												<a class="dropdown-item" href=" {{url('page/').'/'.$subheading->id}}">{{ $subheading->pagesubheading }}</a>
											</li>
                                            @endforeach
											


											</ul>
                                       </li>
										<li><a class="dropdown-item" href="#">Hiking  &raquo;</a>
                                            <ul class="submenu dropdown-menu">
											@foreach($subheadingsHiking as $subheading)

											<li>
												<a class="dropdown-item" href=" {{url('page/').'/'.$subheading->id}}">{{ $subheading->pagesubheading }}</a>
											</li>
                                            @endforeach
                                             
											</ul>
                                       
                                        </li>
										<li><a class="dropdown-item" href="#">Trekking  &raquo; </a>
											<ul class="submenu dropdown-menu">
											@foreach($subheadingsTreking   as $subheading)

											<li>
												<a class="dropdown-item" href=" {{url('page/').'/'.$subheading->id}}"> {{ $subheading->pagesubheading }}</a>
											</li>
                                            @endforeach

											</ul>
										</li>
										

								</ul>
                               </li>
								<li><a class="dropdown-item" href="#"> Tibet &raquo; </a>
									<ul class="submenu dropdown-menu">

									@foreach($subheadingsTibet  as $subheading)
											<li>
												<a class="dropdown-item" href=" {{url('page/').'/'.$subheading->id}}"> {{ $subheading->pagesubheading }}</a>
											</li>
									@endforeach
										

									</ul>
								</li>
								<li><a class="dropdown-item" href="#">Bhutan   &raquo;</a>
                                   <ul class="submenu dropdown-menu">
								   @foreach($subheadingsBhutan   as $subheading)

										<li>
											<a class="dropdown-item" href=" {{url('page/').'/'.$subheading->id}}"> {{ $subheading->pagesubheading }}</a>
										</li>
                                    @endforeach
									</ul>
                               
                                 </li>
								<li><a class="dropdown-item" href="#"> India  &raquo;</a>
                                      <ul class="submenu dropdown-menu">
									  @foreach($subheadingsIndia   as $subheading)

											<li>
												<a class="dropdown-item" href=" {{url('page/').'/'.$subheading->id}}"> {{ $subheading->pagesubheading }}</a>
											</li>
									  @endforeach

									</ul>
                                </li>
								<li><a class="dropdown-item" href="#"> Aisa &raquo;</a> 
									<ul class="submenu dropdown-menu">
									@foreach($subheadingsAsia   as $subheading)

									<li>
										<a class="dropdown-item" href=" {{url('page/').'/'.$subheading->id}}"> {{ $subheading->pagesubheading }}</a>
									</li>
                                   @endforeach									

																		
																			
																				
											

									</ul>
                               </li>
								<li><a class="dropdown-item" href="#"> Europe &raquo;</a>
								  
								<ul class="submenu dropdown-menu">

								@foreach($subheadingsEurope   as $subheading)

											<li>
												<a class="dropdown-item" href=" {{url('page/').'/'.$subheading->id}}"> {{ $subheading->pagesubheading }}</a>
											</li>
								@endforeach	

																		
																			
																				
											

									</ul>
							
							
							   </li>


							</ul>
						</li>
                       


                       

                    

                               
                    
                         <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Trekking In Nepal  <i class="fas fa-angle-down"> </i> </a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Everest Region  &raquo;</a> 
                                    <ul class="submenu dropdown-menu">
									@foreach($subheadingsEverstRegion   as $subheading)

											<li>
												<a class="dropdown-item" href=" {{url('page/').'/'.$subheading->id}}"> {{ $subheading->pagesubheading }}</a>
											</li>
									@endforeach	
                                            
                                            

                                    </ul>
                               </li>
								<li><a class="dropdown-item" href="#"> Annapurna Region &raquo; </a>
									<ul class="submenu dropdown-menu">

										@foreach($subheadingsAnnapurnaRegion   as $subheading)

											<li>
												<a class="dropdown-item" href=" {{url('page/').'/'.$subheading->id}}"> {{ $subheading->pagesubheading }}</a>
									  		</li>
								      	@endforeach	
                                     								
										

									</ul>
								</li>

								

								
								


							</ul>
						</li>

             
                        <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Activities  <i class="fas fa-angle-down"> </i> </a>
							<ul class="dropdown-menu">
							@foreach($subheadingsActivities   as $subheading)

                              <li>
	                             <a class="dropdown-item" href=" {{url('page/').'/'.$subheading->id}}"> {{ $subheading->pagesubheading }}</a>
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