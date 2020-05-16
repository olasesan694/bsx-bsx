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
        </ul><br>
      </div>
      <br>
      
      <div class="col-sm-9">
        <div id="about" class="well">
          <h3>Allow User-To-User Shopping Discussions on your Website</h3>
          <p>Learn how to integrate with Brisebox to allow user-to-user discussions while they shop online, and close purchases faster.
              BRISEBOX API gives online shoppers a simplified and secure shopping experience. 
          <br>
          Whether you’re a startup or a global enterprise, Learn how and try the button
          </p>
        </div>
  
        <div id="Demo" class="well">
          <h3>Try the Buttons</h3>
          <p>Whether you’re a startup or a global enterprise, learn how </p>
        </div>
  
        <div class="row">
          <div class="col-sm-3">
            <div class="well">
              <button class="button" onclick="PopupCenter(linkToOpen, linkTitle, linkWidth, linkHeight);" style="vertical-align:middle">
                <span>BRISEBOX </span>
              </button>
            </div>
          </div>
          <!-- <div class="col-sm-3">
            <div class="well">
              <button class="button" style="vertical-align:middle"><span>BRISEBOX </span></button>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="well">
              <button class="button" style="vertical-align:middle"><span>BRISEBOX </span></button>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="well">
              <button class="button" style="vertical-align:middle"><span>BRISEBOX </span></button>
            </div>
          </div> -->
        </div>
  
        <div class="row">
          <div id="getstarted" class="col-sm-8">
            <div class="well">
            <h3>Add the buttons to your website</h3> 
              <p>Now that you've seen the BRISEBOX Buttons in action, add the button code to your website.</p> 
              <p>Copy this code into your HTML page. You'll use the code to start a basic integration.</p>
              <p>Set product properties meta tags. </p> 
            </div>
          </div>
          <div class="col-sm-4">
            <!-- <div class="well">
              <p>Text</p> 
            </div> -->
          </div>
        </div>
        
        <div id="api" class="row">
          <div class="col-sm-8">
            <div class="well ">
              <div class="code">
                  &lt;!-- Brisebox meta and open graph tags --&gt;
                  <br>
                  <br>
                  &lt;meta property="og:url"           content="https://www.your-domain.com/your-page.html" /&gt;
                  <br>
                  &lt;meta property="og:type"          content="website" /&gt;
                  <br>
                  &lt;meta property="og:title"         content="Your Website Title" /&gt;
                  <br>
                  &lt;meta property="bb:price"         content="Your Product Price" /&gt;
                  <br>
                  &lt;meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" /&gt;
                  <br>
                  &lt;meta property="bb:company"       content="macys" /&gt;
                  <br>
                  &lt;script src="popup-demo.js"&gt;&lt;/script&gt;
                  <br>
                  <br>
                  <br>
                  <br>
                  &lt;!-- Brisebox button connector  --&gt;
                  <br>
                  <br>
                  &lt;button class="btn-primary bb-share-button" onclick="cnt_brisebox(cnt_bb_url, cnt_bb_title, cnt_bb_w, cnt_bb_h)" style="vertical-align:middle"&gt;
                      invite friend with BRISEBOX 
                  &lt;/button&gt;
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <!-- <div class="well">
              <p>Text</p> 
            </div> -->
          </div>
        </div>
  
        <div class="row">
          <div class="col-sm-6">
            <div class="well">
              <!-- <h3>See the example</h3> 
              <p>Try now</p>  -->
              <div class="col-md-6">
                  <div class="price-content">
                      <ul>
                          <!-- <li><i class="fa fa-twitter"></i></li> -->
                          <h3>Final Step:</h3> 
                          <li>Download connect.js and move it to your js folder.</li>
                          
                          <!-- <li><i class="fa fa-linkedin"></i>Product's specific Title,</li>
                          <li><i class="fa fa-linkedin"></i>and its price.</li>
                          <li><i class="fa fa-linkedin"></i>Add dependencies through terminal.</li> -->
                      </ul>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
              <div class="well">
                  <!-- <p><img src="creative_team.png" class="feature-img" alt="" style="width:60%;"></p>  -->
                  <p> Cannot download? <a href="contact">Talk to us.</a> </p>
                  <div class="code">
                    <a href="/js/cn_bsx_bb_dl.js" download="connect.js">  connect.js  </a>
                  </div>
                  <!-- <br>
                  <p> PHP </p>
                  <div class="code">
                    <p> script src="https://www.brisebox.com/sdk/js?client-id=sb"> brisebox.Buttons().render("body");
                    <br>
                    script src="https://www.brisebox.com/sdk/js?client-id=sb"> brisebox.Buttons().render("body");
                    </p>
                  </div>
                  <br>
                  <p> Java </p>
                  <div class="code">
                    <p> script src="https://www.brisebox.com/sdk/js?client-id=sb"> brisebox.Buttons().render("body");
                    <br>
                    script src="https://www.brisebox.com/sdk/js?client-id=sb"> brisebox.Buttons().render("body");
                    </p>
                  </div> -->
              </div>
          </div>
          <!-- <div class="col-sm-4">
            <div class="well">
              <p>Text</p> 
              <p>Text</p> 
              <p>Text</p>  
            </div>
          </div> -->
        </div>
  
      </div>
    </div>
  </div>
  
    <section id="footer">
        <hr>
        <div class="container">
            <div class="row offset-1">
                <div class="col-md-4 footer-box">
                    <!-- <p>A fun way to text, video communicate, and plan things all in the workplace. Fun way to text, video communicate, and plan things all in the workplace.</p>
                    <p class="user-details"><b>Angelina</b> <br> Executive Director, ESsense</p> -->
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