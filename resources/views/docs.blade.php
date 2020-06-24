@extends('layouts.docs.head')

@section('content')
<div class="container-fluid">
    <div class="row content">
      <div class="col-sm-3 sidenav hidden-xs">
        <h2>Brisebox Docs</h2>
        <ul class="nav nav-pills nav-stacked">
          <li class=""><a href="#about">About</a></li>
          <li><a href="#demo">Demo</a></li>
          <li><a href="#getstarted">Get Started</a></li>
          <li><a href="#api">APIs</a></li>
          <li><a href="dashboard">RETURN TO YOUR DASHBOARD</a></li>
        </ul><br>
      </div>
      <br>
      
      <div class="col-sm-9">
        <div id="about" class="well">
          {{-- <h3>Allow User-To-User Shopping Discussions on your Website</h3> --}}
          <h3>Get Started</h3>
          {{-- <p>Learn how to integrate with Brisebox to allow live user-to-user discussions while they shop online, and close purchases faster.
              BRISEBOX API gives your customers a social and engaging shopping experience throughout their shopping experience.
          </p> --}}
          <p>Learn how to integrate with Brisebox and close purchases faster.
        </p>
        </div>
  
        <div id="Demo" class="well">
          <h3>Try the Button</h3>
          {{-- <p>Whether you’re a small or a global enterprise, try the Brisebox Button 
            <br> to see how your customers will have the option to invite a friend and begin live dicussions. </p> --}}
            <p>Whether you’re a small or a global enterprise, the Brisebox Button will appear as it is below. </p>
        </div>
  
        <div class="row">
          <div class="col-sm-3">
            <div class="well">
              {{-- <button class="button" onclick="PopupCenter(linkToOpen, linkTitle, linkWidth, linkHeight);">
                <span>invite friend with BRISEBOX </span>
              </button> --}}
              <button class="button" >
                <div style="font-style: italic; display:inline;"> brisebox - </div><span> Chat with Store Member</span>
              </button>
            </div>
          </div>
        </div>
  
        <div class="row">
          <div id="getstarted" class="col-sm-8">
            <div class="well">
              <h3>Add meta tags</h3> 
              <p>Now that you've seen the Brisebox Button in action,</p> 
              <p>Copy the following, and paste it inside the &lt;head&gt; tag of your details page.</p>
            </div>
          </div>
        </div>
        
        <div id="api" class="row">
          <div class="col-sm-8">
            <div class="well ">
              <div class="code">
                  &lt;!-- Meta and Open Graph Tags --&gt;
                  <br>
                  <br>
                  &lt;meta property="og:url"           content="https://www.your-domain.com/your-details-page" /&gt;
                  <br>
                  &lt;meta property="og:type"          content="website" /&gt;
                  <br>
                  &lt;meta property="og:title"         content="the_website_title" /&gt;
                  <br>
                  &lt;meta property="bb:price"         content="the_product_price" /&gt;
                  <br>
                  &lt;meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" /&gt;
                  <br>
                  &lt;meta property="bb:company"       content="your_company_name" /&gt;
                  <br>
                  <br>
                  <br>
                  &lt;!-- Brisebox Script --&gt;
                  <br>
                  <br>
                  &lt;script src="bsx_connect.js"&gt;&lt;/script&gt;
              </div>
            </div>
          </div>
          
          <div class="row">
            <div id="getstarted" class="col-sm-8">
              <div class="well">
                <h3>Add the Brisebox Button to your website</h3> 
                <p> Copy the code for Brisebox Button connector. </p> 
                <p> Most people paste this in their details page, under the 'Add to cart' button. </p> 
              </div>
            </div>
          </div>
          <div id="" class="row">
            <div class="col-sm-8">
              <div class="well ">
                <div class="code">
                    &lt;!-- Brisebox Button Connector  --&gt;
                    <br>
                    <br>
                    &lt;button 
                    class="btn cn bsx bb-btn" 
                    onclick="cnt_brisebox(cnt_bb_url, cnt_bb_title, cnt_bb_w, cnt_bb_h)" 
                    style="border-radius: 4px;
                    background-color: #000000;
                    border: none;
                    color: #ffb6c1;
                    text-align: center;
                    font-size: 12px;
                    padding: 7px;
                    width: 250px;
                    transition: all 0.5s;
                    cursor: pointer;"&gt;
                    &lt;span&gt; invite friend with BRISEBOX &lt;/span&gt;
                    &lt;/button&gt;
                </div>
              </div>
            </div>
        </div>
  
        <div class="row">
          <div class="col-sm-6">
            <div class="well">
              <div class="col-md-6">
                  <div class="price-content">
                      <ul>
                          <h3>Final Step:</h3> 
                          <li>Download the connect js file and move it to your js folder.</li>
                      </ul>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
              <div class="well">
                  <p> Cannot download? <a href="contact">Talk to us.</a> </p>
                  <div class="code">
                    <a href="/js/bsx_connect.js" download="bsx_connect.js"> Download </a>
                    {{-- <a href="#"> Download </a> --}}
                  </div>
              </div>
          </div>
        </div>
  
      </div>
    </div>
  </div>
  
  <section id="footer">
      <hr>
      <div class="container">
          <div class="row offset-1">
              <div class="col-md-4 footer-box">
                  <p> <b>Account</b> </p>
                  <p> <i class="fa fa-map-marker" aria-hidden="true"></i>Dashboard</p>
                  <p> <i class="fa fa-phone" aria-hidden="true"></i>Register </p>
                  <p> <i class="fa fa-envelope-o" aria-hidden="true"></i>Support</p>
              </div>
              <div class="col-md-4 footer-box">
                  <p> <b>Resources</b> </p>
                  <p> <i class="fa fa-map-marker" aria-hidden="true"></i>Documentation</p>
                  <p> <i class="fa fa-phone" aria-hidden="true"></i>API</p>
                  <p> <i class="fa fa-envelope-o" aria-hidden="true"></i>Contact</p>
              </div>
              <div class="col-md-4 footer-box">
                  <p> <b>Subscribe for developer updates</b> </p>
                  <input type="email" class="form-control" placeholder="Your Email">
                  <button type="button" class="btn btn-primary">Subscribe</button>
              </div>
          </div>
          <hr>
          <p class="copyright"> &copy; brisebox 2020 </p>
      </div>
  </section>
@endsection