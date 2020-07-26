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

        <h1 class="my-4"> 
          <small>{{date('Y')}}</small>
        </h1>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="/images/homeplant.jpg" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Your Daily on Home, Decor, Living & More</h2>
            <p class="card-text">Explore today on shopping deals & ideas. Get the latest on
              shopping deals, ideas, reviews and new home & living resources.</p>
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
                <a href="https://www.facebook.com/brisebox/" class="fa fa-facebook"></a>
                <a href="https://twitter.com/brisebox/" class="fa fa-twitter"></a>
                <a href="https://linkedin.com/company/brisebox" class="fa fa-linkedin"></a>
            </div>
        </div>
        <p class="copyright"> &copy; brisebox 2020 </p>
    </div>
</section>

@endsection