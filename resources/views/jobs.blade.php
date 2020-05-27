@extends('layouts.jobs.head')
@section('content')

<div id="topheader"class="header">
  <nav class="navbar navbar-expand-lg">
      <div class="container text-uppercase p-2">
          <a class="navbar-brand font-weight-bold" href="{{ url('/') }}"><img src="/images/logo.png" alt="brisebox logo">Brisebox</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">--- <br> --- </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto text-uppercase">
                  <li class="nav-item">
                      <a class="nav-link" href="dashboard">Docs & API <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="pricing">Pricing</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="jobs">Careers</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="contact">Contact</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="login">Sign In -></a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>

  <section class="header-section">
      <div class="center-div">
          <h1 class="font-weight-bold">
              Build the future in E-commerce. 
          </h1>
          {{-- <p> Close online purchases faster with the Brisebox API.</p>
          <div class="header-buttons">
              <a href="contact">Contact Sales</a>
              <a href="contact">Get Support</a>
          </div> --}}
      </div>
  </section>
</div>
    
<div id="cookie-consent-banner-container" style="position: fixed;bottom: 0;width:100%;z-index:100000;">
  <div class="row">
    <div class="col-sm-8 col-sm-push-2" style="text-align:center;background-color:lightyellow;padding:5px;">
      <span>This website uses cookies to give you the best experience on our website.</span>&nbsp;&nbsp;<span id="cookie-consent-confirm-btn" style="font-weight:bold;cursor:pointer;color:#4d619a;">Got it!</span>&nbsp;&nbsp;<a href="https://recruiterflow.com/privacy-policy" target="_blank" style="font-weight:bold;"class="link-style">Learn more</a>
    </div>
  </div>
</div>

<!-- begin:about -->

<div id="about" class="about block-section padd-60-top padd-20-btm bg-white">
<div class="container">
  <div class="row">
    
    <div class="col-sm-10 col-sm-push-1">
      <h4 class="text-grey marg-40-btm">About us</h4>
      <p>We are Brisebox, a backed startup building e-commerce API platform that enables any company or developer to access and provide better purchasing experience for their end-users' online shopping, through one easy-to-use API.</p>
    </div><!-- .col-## -->
    
  </div><!-- .row -->
</div><!-- .container -->
</div><!-- #about -->
<!-- end:about -->
    
    <!-- begin:whyus -->
    <div id="whyus" class="whyus content-section bg-green">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="service-item service-item-icon-top">
              <div class="service-item-icon">
                <span class="pe-7s-global"></span>
              </div><!-- .service-item-icon -->
              <h4 class="service-item-title">Our Vision</h4>
              <p>Our vision is to power the next generation of e-commerce services across the U.S. by enabling more inclusive, efficient and empowering offerings through tech and data. Cities in this region are a very exciting and dynamic place to be right now and a great place to build infrastructure for the next generation of e-commerce products for a huge market.</p>
            </div><!-- .service-item -->
          </div><!-- .col-sm-4 -->
          <div class="col-sm-4">
            <div class="service-item service-item-icon-top">
              <div class="service-item-icon">
                <span class="pe-7s-users"></span>
              </div><!-- .service-item-icon -->
              <h4 class="service-item-title">Our Team</h4>
              <p>We’re a highly-technical, passionate and driven team based in Sunnyvale, CA. (and in your city and remotely) that is tackling a very challenging problem: connecting online retailers innovators with legacy e-commerce infrastructure. We strive to go beyond the limits of what is possible today and to do so in an elegant and developer-first way.</p>
            </div><!-- .service-item -->
          </div><!-- .col-sm-4 -->
          <div class="col-sm-4">
            <div class="service-item service-item-icon-top">
              <div class="service-item-icon">
                <span class="pe-7s-graph1"></span>
              </div><!-- .service-item-icon -->
              <h4 class="service-item-title">Our Commitment</h4>
              <p>Defining the way e-commerce data is accessed and used by millions of people requires the best talent, and we’re looking for A-players who can raise the bar and contribute their utmost to this endeavor.</p>
            </div><!-- .service-item -->
          </div><!-- .col-sm-4 -->
        </div><!-- .row -->
      </div><!-- .container -->
    </div><!-- #whyus -->
    <!-- end:whyus -->
    
    <!-- begin:menu -->
    <div id="menu" class="menu content-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
            <div class="section-title">
              <h2 style="margin-bottom:10px;">Open Positions:</h2>
            </div>
            <!--<p class="text-center"></p>-->
          </div><!-- .col-## -->
        </div><!-- .row -->
        <div class="row">
          <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
            <div class="row" style="padding-top:20px;padding-bottom:20px;">
              <div class="col-sm-12">
                <table>
                  <tbody>
                    <tr>
                      <td>
                        <select id="job-filter-by-location" class="job-filter-by job-filter-by-location">
                          <option value="-1">Locations</option>
                          
                            <option value="New York">New York</option>
                          
                            <option value="California">California</option>
                          
                            <option value="New York">Indiana</option>
                          
                            <option value="Remote">Texas</option>

                            <option value="Seattle">Seattle</option>
                            
                            <option value="remotefriendly">remotefriendly</option>
                          
                        </select>
                      </td>
                      <td>
                        <select id="job-filter-by-department" class="job-filter-by job-filter-by-department">
                          <option value="-1">Departments</option>
                          
                          <option value="Customer Success">Customer Success</option>
                          
                          <option value="Product">Product</option>
                          
                          <option value="All">All</option>
                          
                          <option value="Finance &amp; Ops">Finance &amp; Ops</option>
                          
                          <option value="Engineering">Engineering</option>
                          
                        </select>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
            
              <div class="row">
                <div class="col-sm-12" style="padding: 10px 15px;margin-bottom:20px;background-color: whitesmoke;">
                  <span class="job-label-header">All</span>
                </div>
              </div>
              
              <div class="marg-40-btm">
                <span class="pull-right text-bold text-big"> 
                  <a href="contact" class="btn" style="color:white;background-color:#d9534f;font-weight: 600; padding-left: 30px; padding-right: 30px;" target="_self">Apply</a>
                </span>
                <a href="contact" target="_self"><h6 style="color:black;" class="text-uppercase text-bold">CV</h6></a>
                <h6>New York City, NY</h6>
                <span class="fade-06">
                  
                    Full time
                  
                </span>
                <hr>
              </div>
              
            
              <div class="row">
                <div class="col-sm-12" style="padding: 10px 15px;margin-bottom:20px;background-color: whitesmoke;">
                  <span class="job-label-header">Customer Success</span>
                </div>
              </div>
              
              <div class="marg-40-btm">
                <span class="pull-right text-bold text-big"> 
                  <a href="contact" class="btn" style="color:white;background-color:#d9534f;font-weight: 600; padding-left: 30px; padding-right: 30px;" target="_self">Apply</a>
                </span>
                <a href="contact" target="_self"><h6 style="color:black;" class="text-uppercase text-bold">Customer Success Associate (Tech)</h6></a>
                <h6>Fishers, IN</h6>
                <span class="fade-06">
                  
                    Full time
                  
                </span>
                <hr>
              </div>
              
            
              <div class="row">
                <div class="col-sm-12" style="padding: 10px 15px;margin-bottom:20px;background-color: whitesmoke;">
                  <span class="job-label-header">Engineering</span>
                </div>
              </div>
              
              <div class="marg-40-btm">
                <span class="pull-right text-bold text-big"> 
                  <a href="contact" class="btn" style="color:white;background-color:#d9534f;font-weight: 600; padding-left: 30px; padding-right: 30px;" target="_self">Apply</a>
                </span>
                <a href="contact" target="_self"><h6 style="color:black;" class="text-uppercase text-bold">Scraping Developer (PHP)</h6></a>
                <h6>Sunnyvale, California, Remote</h6>
                <span class="fade-06">
                  
                    Full time
                  
                </span>
                <hr>
              </div>
              
              <div class="marg-40-btm">
                <span class="pull-right text-bold text-big"> 
                  <a href="contact" class="btn" style="color:white;background-color:#d9534f;font-weight: 600; padding-left: 30px; padding-right: 30px;" target="_self">Apply</a>
                </span>
                <a href="contact" target="_self"><h6 style="color:black;" class="text-uppercase text-bold">Backend Engineer (PHP/APIs)</h6></a>
                <h6>Austin, TX, Glendale, CA, remotefriendly</h6>
                <span class="fade-06">
                  
                    Full time
                  
                </span>
                <hr>
              </div>
              
              <div class="marg-40-btm">
                <span class="pull-right text-bold text-big"> 
                  <a href="contact" class="btn" style="color:white;background-color:#d9534f;font-weight: 600; padding-left: 30px; padding-right: 30px;" target="_self">Apply</a>
                </span>
                <a href="contact" target="_self"><h6 style="color:black;" class="text-uppercase text-bold">Frontend Developer</h6></a>
                <h6>Fishers, IN </h6>
                <span class="fade-06">
                  
                    Full time
                  
                </span>
                <hr>
              </div>
              
            
              <div class="row">
                <div class="col-sm-12" style="padding: 10px 15px;margin-bottom:20px;background-color: whitesmoke;">
                  <span class="job-label-header">Finance &amp; Ops</span>
                </div>
              </div>
              
              <div class="marg-40-btm">
                <span class="pull-right text-bold text-big"> 
                  <a href="contact" class="btn" style="color:white;background-color:#d9534f;font-weight: 600; padding-left: 30px; padding-right: 30px;" target="_self">Apply</a>
                </span>
                <a href="contact" target="_self"><h6 style="color:black;" class="text-uppercase text-bold">Finance Associate</h6></a>
                <h6>Denver, CO</h6>
                <span class="fade-06">
                  
                    Full time
                  
                </span>
                <hr>
              </div>
              
              <div class="marg-40-btm">
                <span class="pull-right text-bold text-big"> 
                  <a href="contact" class="btn" style="color:white;background-color:#d9534f;font-weight: 600; padding-left: 30px; padding-right: 30px;" target="_self">Apply</a>
                </span>
                <a href="contact" target="_self"><h6 style="color:black;" class="text-uppercase text-bold">Operations Associate</h6></a>
                <h6>Seattle, WA</h6>
                <span class="fade-06">
                  
                    Full time
                  
                </span>
                <hr>
              </div>
              
            
              <div class="row">
                <div class="col-sm-12" style="padding: 10px 15px;margin-bottom:20px;background-color: whitesmoke;">
                  <span class="job-label-header">Product</span>
                </div>
              </div>
              
              <div class="marg-40-btm">
                <span class="pull-right text-bold text-big"> 
                  <a href="contact" class="btn" style="color:white;background-color:#d9534f;font-weight: 600; padding-left: 30px; padding-right: 30px;" target="_self">Apply</a>
                </span>
                <a href="contact" target="_self"><h6 style="color:black;" class="text-uppercase text-bold">Product Manager</h6></a>
                <h6>Sunnyvale, CA</h6>
                <span class="fade-06">
                  
                    Full time
                  
                </span>
                <hr>
              </div>
              
            
            
            </div>
          </div>
        </div><!-- .col-## -->
      </div><!-- .row -->
    <!-- end:menu -->

    <!-- begin:footer -->
    <footer id="colophon" class="site-footer text-center bg-light-grey" role="contentinfo" style="padding-top: 0px; padding-bottom: 0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0 marg-40-top" style="margin-top: 5px !important;">
            <!-- Change <h2 class="text-big text-bold">- LUCKY BAR -</h2> -->
            <p style="margin-bottom:10px;"> Powered by Recruiterflow, a <a href="https://recruiterflow.com/?utm_source=careers-page">candidate tracking system</a> that just works!  </p>
              
          </div><!-- .col-## -->
        </div><!-- .row -->
      </div><!-- .container -->
    </footer><!-- #colophon -->
    <!-- end:footer -->
    

@endsection