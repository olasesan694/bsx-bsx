<!DOCTYPE html>
<html>
<head>

    {{-- ********* BEGIN BRISEBOX TAGS **********  --}}

        <!-- Meta and Open Graph Tags -->
        <meta property="og:description" content="Improve customer shopping experience. Brisebox is for your e-commerce website, and your customers."/>        <meta property="og:title" content="Brisebox Retail Software."/>
        <meta property="og:url" content="https://retailers.brisebox.com"/>
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Tailored Jeans" />
        <meta property="bb:price" content="$19.99" />
        <meta property="og:image" content="https://www.your-domain.com/path/image.jpg" />
        <meta property="bb:company" content="Retail Brisebox" />

        <!-- Brisebox Script -->
        <script src="/js/test_download/bsx_connect.js"></script>

        {{-- ********* END BRISEBOX TAGS **********  --}}

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

<h2 style="text-align:center">Product Card</h2>

<div class="card">
  <img src="/w3images/jeans3.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Tailored Jeans</h1>
  <p class="price">$19.99</p>
  <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
  <p><button>Add to Cart</button></p>
</div>

<br>
<br>
<!-- Brisebox Button Connector -->

<button class="btn cn bsx bb-btn" onclick="cnt_brisebox(cnt_bb_url, cnt_bb_title, cnt_bb_w, cnt_bb_h)" style="border-radius: 4px; background-color: #000000; border: none; color: #ffb6c1; text-align: center; font-size: 12px; padding: 7px; width: 250px; transition: all 0.5s; cursor: pointer;"> <span> brisebox - Chat with Store Member </span> </button>

</body>
</html>
