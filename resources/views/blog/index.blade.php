@extends('layouts.blog.head')

@section('content')
    <div id="topheader"class="header">

        @include('nav')

        <section class="header-section">
            <div class="center-div  text-center">
                <h1 class="font-weight-bold">
                    Today on Shopping Deals & Ideas
                </h1>
                <p>Shopping deals, ideas, reviews and new home & living resources.</p>
            </div>
        </section>
    </div>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        
        {{-- <h1 class="my-4"> <p>updated </p>
          <small>{{date('Y')}}</small>
        </h1> --}}

        <!-- Blog Post -->
        <div class="card mb-4">
          {{-- <img class="card-img-top" src="/images/homeplant.jpg" alt="Card image cap"> --}}
          <div class="card-body">
            <h2 class="card-title">Daily on Home, Decor, Living & More</h2>
            <p class="card-text">Explore today on shopping deals & ideas. Get the latest on
              shopping deals, ideas, reviews and new home & living resources.</p>
            
              <br>
          
              <blockquote class="twitter-tweet"><p lang="en" dir="ltr">Nordic, Scandinavian Natural Decor Acrylic Moonphase Mirrors Interior Design Wooden Moon<a href="https://twitter.com/hashtag/interiordesign?src=hash&amp;ref_src=twsrc%5Etfw">#interiordesign</a> <a href="https://twitter.com/hashtag/design?src=hash&amp;ref_src=twsrc%5Etfw">#design</a> <a href="https://twitter.com/hashtag/HomeDecor?src=hash&amp;ref_src=twsrc%5Etfw">#HomeDecor</a> <a href="https://twitter.com/hashtag/WoodenMoon?src=hash&amp;ref_src=twsrc%5Etfw">#WoodenMoon</a> <a href="https://twitter.com/hashtag/wooden?src=hash&amp;ref_src=twsrc%5Etfw">#wooden</a> <a href="https://t.co/SLOE9a5VJN">pic.twitter.com/SLOE9a5VJN</a></p>&mdash; Thebrisebox (@thebrisebox) <a href="https://twitter.com/thebrisebox/status/1289410394063216640?ref_src=twsrc%5Etfw">August 1, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

            

              <blockquote class="twitter-tweet"><p lang="en" dir="ltr">FirsTime &amp; Co. Carriage House Barn <a href="https://twitter.com/hashtag/DoorWall?src=hash&amp;ref_src=twsrc%5Etfw">#DoorWall</a> Plaque Set<a href="https://twitter.com/hashtag/interiordesign?src=hash&amp;ref_src=twsrc%5Etfw">#interiordesign</a> <a href="https://twitter.com/hashtag/decoration?src=hash&amp;ref_src=twsrc%5Etfw">#decoration</a> <a href="https://twitter.com/hashtag/shelf?src=hash&amp;ref_src=twsrc%5Etfw">#shelf</a> <a href="https://twitter.com/hashtag/decor?src=hash&amp;ref_src=twsrc%5Etfw">#decor</a> <a href="https://twitter.com/hashtag/home?src=hash&amp;ref_src=twsrc%5Etfw">#home</a> <a href="https://t.co/7g8TCXW1Mh">pic.twitter.com/7g8TCXW1Mh</a></p>&mdash; Thebrisebox (@thebrisebox) <a href="https://twitter.com/thebrisebox/status/1289911639257407488?ref_src=twsrc%5Etfw">August 2, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>



              <blockquote class="twitter-tweet"><p lang="en" dir="ltr">KINGSO Wall Shelf Rustic Wood Floating Shelves.<br><br>Click: <a href="https://t.co/MHbzH7PEP4">https://t.co/MHbzH7PEP4</a><a href="https://twitter.com/hashtag/homedecor?src=hash&amp;ref_src=twsrc%5Etfw">#homedecor</a> <a href="https://twitter.com/hashtag/interiordesign?src=hash&amp;ref_src=twsrc%5Etfw">#interiordesign</a> <a href="https://twitter.com/hashtag/home?src=hash&amp;ref_src=twsrc%5Etfw">#home</a> <a href="https://twitter.com/hashtag/interior?src=hash&amp;ref_src=twsrc%5Etfw">#interior</a> <a href="https://twitter.com/hashtag/design?src=hash&amp;ref_src=twsrc%5Etfw">#design</a> <a href="https://twitter.com/hashtag/decor?src=hash&amp;ref_src=twsrc%5Etfw">#decor</a> <a href="https://twitter.com/hashtag/homedesign?src=hash&amp;ref_src=twsrc%5Etfw">#homedesign</a> <a href="https://twitter.com/hashtag/homesweethome?src=hash&amp;ref_src=twsrc%5Etfw">#homesweethome</a> <a href="https://twitter.com/hashtag/handmade?src=hash&amp;ref_src=twsrc%5Etfw">#handmade</a> <a href="https://twitter.com/hashtag/art?src=hash&amp;ref_src=twsrc%5Etfw">#art</a> <a href="https://twitter.com/hashtag/decoration?src=hash&amp;ref_src=twsrc%5Etfw">#decoration</a> <a href="https://twitter.com/hashtag/furniture?src=hash&amp;ref_src=twsrc%5Etfw">#furniture</a> <a href="https://twitter.com/hashtag/interiors?src=hash&amp;ref_src=twsrc%5Etfw">#interiors</a> <a href="https://t.co/h5xORFq8Sx">pic.twitter.com/h5xORFq8Sx</a></p>&mdash; Thebrisebox (@thebrisebox) <a href="https://twitter.com/thebrisebox/status/1290262143925760000?ref_src=twsrc%5Etfw">August 3, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>



              <blockquote class="twitter-tweet"><p lang="en" dir="ltr">Greenco Geometric Diamond Shaped 3 Tier Mounted Floating, Home Decor<br><br>Click : <a href="https://t.co/SqYivOodot">https://t.co/SqYivOodot</a><a href="https://twitter.com/hashtag/homedecor?src=hash&amp;ref_src=twsrc%5Etfw">#homedecor</a> <a href="https://twitter.com/hashtag/interiordesign?src=hash&amp;ref_src=twsrc%5Etfw">#interiordesign</a> <a href="https://twitter.com/hashtag/home?src=hash&amp;ref_src=twsrc%5Etfw">#home</a> <a href="https://twitter.com/hashtag/interior?src=hash&amp;ref_src=twsrc%5Etfw">#interior</a> <a href="https://twitter.com/hashtag/design?src=hash&amp;ref_src=twsrc%5Etfw">#design</a> <a href="https://twitter.com/hashtag/decor?src=hash&amp;ref_src=twsrc%5Etfw">#decor</a> <a href="https://twitter.com/hashtag/homedesign?src=hash&amp;ref_src=twsrc%5Etfw">#homedesign</a> <a href="https://twitter.com/hashtag/homesweethome?src=hash&amp;ref_src=twsrc%5Etfw">#homesweethome</a> <a href="https://twitter.com/hashtag/handmade?src=hash&amp;ref_src=twsrc%5Etfw">#handmade</a> <a href="https://t.co/A6gubIo9EP">pic.twitter.com/A6gubIo9EP</a></p>&mdash; Thebrisebox (@thebrisebox) <a href="https://twitter.com/thebrisebox/status/1289983540432576512?ref_src=twsrc%5Etfw">August 2, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>



              <blockquote class="twitter-tweet"><p lang="en" dir="ltr">AGSIVO Wall Mounted Hexagonal Floating Shelves<br><br>Click :<a href="https://t.co/j5ZeZlnbXf">https://t.co/j5ZeZlnbXf</a><a href="https://twitter.com/hashtag/homedecor?src=hash&amp;ref_src=twsrc%5Etfw">#homedecor</a> <a href="https://twitter.com/hashtag/interiordesign?src=hash&amp;ref_src=twsrc%5Etfw">#interiordesign</a> <a href="https://twitter.com/hashtag/home?src=hash&amp;ref_src=twsrc%5Etfw">#home</a> <a href="https://twitter.com/hashtag/interior?src=hash&amp;ref_src=twsrc%5Etfw">#interior</a> <a href="https://twitter.com/hashtag/design?src=hash&amp;ref_src=twsrc%5Etfw">#design</a> <a href="https://twitter.com/hashtag/decor?src=hash&amp;ref_src=twsrc%5Etfw">#decor</a> <a href="https://twitter.com/hashtag/homedesign?src=hash&amp;ref_src=twsrc%5Etfw">#homedesign</a> <a href="https://twitter.com/hashtag/homesweethome?src=hash&amp;ref_src=twsrc%5Etfw">#homesweethome</a> <a href="https://twitter.com/hashtag/handmade?src=hash&amp;ref_src=twsrc%5Etfw">#handmade</a> <a href="https://twitter.com/hashtag/art?src=hash&amp;ref_src=twsrc%5Etfw">#art</a> <a href="https://twitter.com/hashtag/decoration?src=hash&amp;ref_src=twsrc%5Etfw">#decoration</a> <a href="https://twitter.com/hashtag/furniture?src=hash&amp;ref_src=twsrc%5Etfw">#furniture</a> <a href="https://twitter.com/hashtag/interiors?src=hash&amp;ref_src=twsrc%5Etfw">#interiors</a> <a href="https://twitter.com/hashtag/homedecoration?src=hash&amp;ref_src=twsrc%5Etfw">#homedecoration</a> <a href="https://twitter.com/hashtag/vintage?src=hash&amp;ref_src=twsrc%5Etfw">#vintage</a> <a href="https://twitter.com/hashtag/interiordesigner?src=hash&amp;ref_src=twsrc%5Etfw">#interiordesigner</a> <a href="https://twitter.com/hashtag/LoveAndListings?src=hash&amp;ref_src=twsrc%5Etfw">#LoveAndListings</a> <a href="https://t.co/gHFL5o0e7i">pic.twitter.com/gHFL5o0e7i</a></p>&mdash; Thebrisebox (@thebrisebox) <a href="https://twitter.com/thebrisebox/status/1290513354864250888?ref_src=twsrc%5Etfw">August 4, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>



              <blockquote class="twitter-tweet"><p lang="en" dir="ltr">Greenco Geometric Mounted Floating, Home Decor<br> Click : <a href="https://t.co/DDMgrxAYh2">https://t.co/DDMgrxAYh2</a><a href="https://twitter.com/hashtag/homedecor?src=hash&amp;ref_src=twsrc%5Etfw">#homedecor</a> <a href="https://twitter.com/hashtag/interiordesign?src=hash&amp;ref_src=twsrc%5Etfw">#interiordesign</a> <a href="https://twitter.com/hashtag/home?src=hash&amp;ref_src=twsrc%5Etfw">#home</a> <a href="https://twitter.com/hashtag/interior?src=hash&amp;ref_src=twsrc%5Etfw">#interior</a> <a href="https://twitter.com/hashtag/design?src=hash&amp;ref_src=twsrc%5Etfw">#design</a> <a href="https://twitter.com/hashtag/decor?src=hash&amp;ref_src=twsrc%5Etfw">#decor</a> <a href="https://twitter.com/hashtag/love?src=hash&amp;ref_src=twsrc%5Etfw">#love</a> <a href="https://twitter.com/hashtag/interiordecor?src=hash&amp;ref_src=twsrc%5Etfw">#interiordecor</a> <a href="https://twitter.com/hashtag/homestyle?src=hash&amp;ref_src=twsrc%5Etfw">#homestyle</a> <a href="https://twitter.com/hashtag/interiorstyling?src=hash&amp;ref_src=twsrc%5Etfw">#interiorstyling</a> <a href="https://twitter.com/hashtag/livingroom?src=hash&amp;ref_src=twsrc%5Etfw">#livingroom</a> <a href="https://twitter.com/hashtag/inspiration?src=hash&amp;ref_src=twsrc%5Etfw">#inspiration</a> <a href="https://t.co/HwqBkuQCBG">pic.twitter.com/HwqBkuQCBG</a></p>&mdash; Thebrisebox (@thebrisebox) <a href="https://twitter.com/thebrisebox/status/1290074317196124160?ref_src=twsrc%5Etfw">August 2, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>



              <blockquote class="twitter-tweet"><p lang="en" dir="ltr">Greenco Set of 3 Floating U Shelves<br><br>Click: <a href="https://t.co/1cPmT5iAJs">https://t.co/1cPmT5iAJs</a><a href="https://twitter.com/hashtag/shelves?src=hash&amp;ref_src=twsrc%5Etfw">#shelves</a> <a href="https://twitter.com/hashtag/homedecor?src=hash&amp;ref_src=twsrc%5Etfw">#homedecor</a> <a href="https://twitter.com/hashtag/interiordesign?src=hash&amp;ref_src=twsrc%5Etfw">#interiordesign</a> <a href="https://twitter.com/hashtag/interior?src=hash&amp;ref_src=twsrc%5Etfw">#interior</a> <a href="https://twitter.com/hashtag/shelf?src=hash&amp;ref_src=twsrc%5Etfw">#shelf</a> <a href="https://twitter.com/hashtag/furniture?src=hash&amp;ref_src=twsrc%5Etfw">#furniture</a> <a href="https://twitter.com/hashtag/design?src=hash&amp;ref_src=twsrc%5Etfw">#design</a> <a href="https://twitter.com/hashtag/shelvesdesign?src=hash&amp;ref_src=twsrc%5Etfw">#shelvesdesign</a> <a href="https://twitter.com/hashtag/floatingshelves?src=hash&amp;ref_src=twsrc%5Etfw">#floatingshelves</a> <a href="https://twitter.com/hashtag/shelving?src=hash&amp;ref_src=twsrc%5Etfw">#shelving</a> <a href="https://twitter.com/hashtag/shelfie?src=hash&amp;ref_src=twsrc%5Etfw">#shelfie</a> <a href="https://twitter.com/hashtag/wood?src=hash&amp;ref_src=twsrc%5Etfw">#wood</a> <a href="https://twitter.com/hashtag/rakdinding?src=hash&amp;ref_src=twsrc%5Etfw">#rakdinding</a> <a href="https://twitter.com/hashtag/home?src=hash&amp;ref_src=twsrc%5Etfw">#home</a> <a href="https://twitter.com/hashtag/floating?src=hash&amp;ref_src=twsrc%5Etfw">#floating</a> <a href="https://twitter.com/hashtag/rakgantung?src=hash&amp;ref_src=twsrc%5Etfw">#rakgantung</a> <a href="https://twitter.com/hashtag/decoration?src=hash&amp;ref_src=twsrc%5Etfw">#decoration</a> <a href="https://t.co/7Az1uq1yqh">pic.twitter.com/7Az1uq1yqh</a></p>&mdash; Thebrisebox (@thebrisebox) <a href="https://twitter.com/thebrisebox/status/1290620593335762944?ref_src=twsrc%5Etfw">August 4, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          


            <script type="text/javascript">
              amzn_assoc_placement = "adunit0";
              amzn_assoc_tracking_id = "bsx02a-20";
              amzn_assoc_ad_mode = "search";
              amzn_assoc_ad_type = "smart";
              amzn_assoc_marketplace = "amazon";
              amzn_assoc_region = "US";
              amzn_assoc_default_search_phrase = "home decor";
              amzn_assoc_default_category = "All";
              amzn_assoc_linkid = "8fa8cc97ccf51fa23f45214959f05101";
              amzn_assoc_title = "Shop Related Products";
              amzn_assoc_search_bar = "false";
              amzn_assoc_search_bar_position = "top";
            </script>
            <script src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US"></script>
            <a href="https://www.amazon.com/gp/search/ref=as_li_qf_sp_sr_tl?ie=UTF8&tag=bsx02a-20&keywords=home decor clearance&index=aps&camp=1789&creative=9325&linkCode=ur2&linkId=5c222b0c13fd1976614b622c83f15f65" class="btn btn-primary">Explore &rarr;</a>

          </div>
          <div class="card-footer text-muted">
            On {{date('Y-m-d')}}
            <a href="https://retailers.brisebox.com" target="_blank">Brisebox Team</a>
          </div>
        </div>

        @if (count($posts) > 0)
          @foreach ($posts as $post)
            <div class="card mb-4">
            {{-- <img class="card-img-top" src="{{ asset('storage/image_file_post/'.$post->image_file_post) }}" alt="Card image cap"> --}}
              {{-- <img class="card-img-top" src="/images/homeplant.jpg" alt="Card image cap"> --}}

              <div class="card-body">
                <h2 class="card-title">{{$post->title}}</h2>
                <p class="card-text"> 
                   {{ substr(strip_tags($post->body), 0, 1000) }} {{ strlen($post->body) > 1000 ? "..." : "" }}
                </p>
                <a href="/blog/{{$post->id}}" class="btn btn-primary">Read more </a>
                {{-- <a href="https://www.amazon.com/gp/search/ref=as_li_qf_sp_sr_tl?ie=UTF8&tag=bsx02a-20&keywords=home decor clearance&index=aps&camp=1789&creative=9325&linkCode=ur2&linkId=5c222b0c13fd1976614b622c83f15f65" class="btn btn-primary">Explore &rarr;</a> --}}
              </div>
              <div class="card-footer text-muted">
                On {{ $post->created_at->format('Y-m-d') }}
                <a href="https://retailers.brisebox.com" target="_blank">Brisebox Team</a>
              </div>
            </div>

            {{-- <!-- Blog Post -->
            <div class="card mb-4">
              <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
              <div class="card-body">
                <h2 class="card-title">Post Title</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                <a href="#" class="btn btn-primary">Read More &rarr;</a>
              </div>
              <div class="card-footer text-muted">
                Posted on January 1, 2020 by
                <a href="#">Brisebox</a>
              </div>
            </div>

            <!-- Blog Post -->
            <div class="card mb-4">
              <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
              <div class="card-body">
                <h2 class="card-title">Post Title</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                <a href="#" class="btn btn-primary">Read More &rarr;</a>
              </div>
              <div class="card-footer text-muted">
                Posted on January 1, 2020 by
                <a href="#">Brisebox</a>
              </div>
            </div>

            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
              <li class="page-item">
                <a class="page-link" href="#">&larr; Older</a>
              </li>
              <li class="page-item disabled">
                <a class="page-link" href="#">Newer &rarr;</a>
              </li>
            </ul>

          </div> --}}
        @endforeach
      @else
        <p>Make your first post!</p>
      @endif
          
      <!-- Sidebar Widgets Column -->
      {{-- <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Home & Living</a>
                  </li>
                  <li>
                    <a href="#">Decor</a>
                  </li>
                  <li>
                    <a href="#">Cleaning</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Have an e-commerce store?</h5>
          <div class="card-body">
            Create a better online experience for your shoppers and boost sales. 
            <a href="https://retailers.brisebox.com">Learn More...</a>
          </div>
        </div>

      </div> --}}

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <section id="footer">
    <div class="container">
        <div class="row offset-1">
            <div class="col-md-4 footer-box">
                <b>Accounts</b>
                <p> <i class="fa fa-dashboard" aria-hidden="true"></i> <a href="dashboard"> Dashboard </a></p>
                <p> <i class="fa fa-address-book-o" aria-hidden="true"></i> <a href="register">Register </a> </p>
                <p> <i class="fa fa-sign-in" aria-hidden="true"></i> <a href="login">Login </a> </p>
                <p> <i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="#footer">Support </a> </p>
            </div>
            <div class="col-md-4 footer-box">
                <b>Resources</b>
                <p> <i class="fa fa-file" aria-hidden="true"></i> <a href="docs">Docs & APIs </a> </p>
                <p> <i class="fa fa-dollar" aria-hidden="true"></i> <a href="pricing">Pricing </a> </p>
                <p> <i class="fa fa-mortar-board" aria-hidden="true"></i> <a href="jobs">Jobs </a> </p>
                <p> <i class="fa fa-envelope" aria-hidden="true"></i> <a href="contact">Contact </a> </p>
            </div>
            <div class="col-md-4 footer-box">
                <p><b> <a href="#footer">Sunnyvale, California 94043 </a> </b> </p>
                <p> <a href="about">About Brisebox</a> </p>
                <a href="https://twitter.com/thebrisebox/" class="fa fa-twitter"></a>
                <a href="https://linkedin.com/company/thebrisebox" class="fa fa-linkedin"></a>
                <a href="https://pinterest.com/thebrisebox/" class="fa fa-pinterest-square"></a>
                <a href="https://www.facebook.com/thebrisebox/" class="fa fa-facebook"></a>
            </div>
        </div>
        <p class="copyright"> &copy; brisebox 2020 </p>
    </div>
</section>

@endsection