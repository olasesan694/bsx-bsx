<!DOCTYPE html>
<html>
<head>

    {{-- ********* BEGIN BRISEBOX TAGS **********  --}}

        <!-- Meta and Open Graph Tags -->
        <meta property="og:description" content="Improve customer shopping experience. Brisebox is for your e-commerce website, and your customers."/>   
        <meta property="og:url" content="https://retailers.brisebox.com/store"/>
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Sleeveless Mock Neck Dress" />
        <meta property="bb:price" content="$98.99" />
        <meta property="og:image" content="https://www.hautelookcdn.com/products/S9FTJ-D4503M/large/12533047.jpg" />
        <meta property="bb:company" content="Bana Repub" />
        <meta property="bb:domain" content="support@banarepub.com" />

        <!-- Brisebox Script for "Connector" -->
        <script src="/js/test_download/bsx_connect.js"></script>

        {{-- ********* END BRISEBOX TAGS **********  --}}

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>

</head>
<body>

<h2 style="text-align:center">*** Sample of your website's product details page. ***</h2>

<div class="card">
  <img src="/images/test-store/girldress.jpg" alt="Sleeveless Dress" style="width:100%">
  <h1>Sleeveless Mock Neck Dress</h1>
  <p class="price">$98.99</p>
  <p>A fitted mock neck paired with the sleeveless silhouette of this breezy shift dress makes it an effortlessly stylish staple.</p>
  <br>
  <br>
  <p>
    <!-- Connector -->
    {{-- <button class="btn cn bsx bb-btn" onclick="cnt_brisebox(cnt_bb_url, cnt_bb_title, cnt_bb_w, cnt_bb_h)" style="border-radius: 4px; background-color: #000000; border: none; color: #ffb6c1; text-align: center; font-size: 12px; padding: 7px; width: 250px; transition: all 0.5s; cursor: pointer;"> <span> Try Me -- reach our API </span> </button> --}}
    <button type="button" class="btn cn bsx bb-btn" data-toggle="modal" data-target="#myModal" style="border-radius: 4px; background-color: #000000; border: none; color: #ffb6c1; text-align: center; font-size: 12px; padding: 7px; width: 250px; transition: all 0.5s; cursor: pointer;"> <span> Use me </span> </button>
  </p>


  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          {{-- <h4 class="modal-title">Modal Header</h4> --}}
          <h4 class="modal-title">X</h4>
        </div>
        <div class="modal-body">
          {{-- <p>Some text in the modal.</p> --}}
          @include('demo-test')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
  </div>
  <br>
  <br>
</div>

</body>
</html>
