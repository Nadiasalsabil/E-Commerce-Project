<style>
.mySlides {display:none;}
</style>

<div class="features">
		<div class="container"><br><br><br><br>
        <div class="row">
           <div class="col-sm-8">
           <div class="w3-content w3-display-container">
                <img class="mySlides" src="asset/images/slider1.jpg" style="width:100%">
                <img class="mySlides" src="asset/images/slider2.jpg" style="width:100%">
                <img class="mySlides" src="asset/images/slider1.jpg" style="width:100%">
                <img class="mySlides" src="asset/images/slider2.jpg" style="width:100%">

                <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                </div>
           </div>
           <div class="col-sm-4">
           <img src="asset/images/slider1.jpg" style="width:100%">
           <img src="asset/images/slider2.jpg" style="width:100%">
           </div>
            </div>
		</div><br>
    


    <div class="container">           
  <table class="table table-bordered" >
    <thead>
      <tr>
        <th colspan="5"><font color="black">Discount Produk</font></th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><center> <img src="asset/tempe/olahan1.jpg" style="width:80%">
         <p><font color="black"><b>Keripik Tempe</b> <br>
         80 gr<br> Rp.<strike>20.000</strike> Hemat Rp. 10.000<br>
         <b>Rp. 10.000</b></font></p>
         <button type="button" class="btn btn-primary btn-block">Beli Sekarang</button></td>
         <td><center> <img src="asset/tempe/olahan2.jpg" style="width:80%">
         <p><font color="black"><b>Keripik Tempe</b> <br>
         80 gr<br> Rp.<strike>30.000</strike> Hemat Rp. 10.000<br>
         <b>Rp. 15.000</b></font></p>
         <button type="button" class="btn btn-primary btn-block">Beli Sekarang</button></td>
         <td><center> <img src="asset/tempe/olahan1.jpg" style="width:80%">
         <p><font color="black"><b>Keripik Tempe</b> <br>
         80 gr<br> Rp.<strike>20.000</strike> Hemat Rp. 10.000<br>
         <b>Rp. 10.000</b></font></p>
         <button type="button" class="btn btn-primary btn-block">Beli Sekarang</button></td>
         <td><center> <img src="asset/tempe/olahan2.jpg" style="width:80%">
         <p><font color="black"><b>Keripik Tempe</b> <br>
         80 gr<br> Rp.<strike>30.000</strike> Hemat Rp. 10.000<br>
         <b>Rp. 15.000</b></font></p>
         <button type="button" class="btn btn-primary btn-block">Beli Sekarang</button></td>
         <td><center> <img src="asset/tempe/olahan1.jpg" style="width:80%">
         <p><font color="black"><b>Keripik Tempe</b> <br>
         80 gr<br> Rp.<strike>20.000</strike> Hemat Rp. 10.000<br>
         <b>Rp. 10.000</b></font></p>
         <button type="button" class="btn btn-primary btn-block">Beli Sekarang</button></td>
       
        
      </tr>
      <tr>
        <td><center> <img src="asset/tempe/olahan2.jpg" style="width:80%">
         <p><font color="black"><b>Keripik Tempe</b> <br>
         80 gr<br> Rp.<strike>20.000</strike> Hemat Rp. 10.000<br>
         <b>Rp. 10.000</b></font></p>
         <button type="button" class="btn btn-primary btn-block">Beli Sekarang</button></td>
         <td><center> <img src="asset/tempe/olahan1.jpg" style="width:80%">
         <p><font color="black"><b>Keripik Tempe</b> <br>
         80 gr<br> Rp.<strike>30.000</strike> Hemat Rp. 10.000<br>
         <b>Rp. 15.000</b></font></p>
         <button type="button" class="btn btn-primary btn-block">Beli Sekarang</button></td>
         <td><center> <img src="asset/tempe/olahan2.jpg" style="width:80%">
         <p><font color="black"><b>Keripik Tempe</b> <br>
         80 gr<br> Rp.<strike>20.000</strike> Hemat Rp. 10.000<br>
         <b>Rp. 10.000</b></font></p>
         <button type="button" class="btn btn-primary btn-block">Beli Sekarang</button></td>
         <td><center> <img src="asset/tempe/olahan1.jpg" style="width:80%">
         <p><font color="black"><b>Keripik Tempe</b> <br>
         80 gr<br> Rp.<strike>30.000</strike> Hemat Rp. 10.000<br>
         <b>Rp. 15.000</b></font></p>
         <button type="button" class="btn btn-primary btn-block">Beli Sekarang</button></td>
         <td><center> <img src="asset/tempe/olahan2.jpg" style="width:80%">
         <p><font color="black"><b>Keripik Tempe</b> <br>
         80 gr<br> Rp.<strike>20.000</strike> Hemat Rp. 10.000<br>
         <b>Rp. 10.000</b></font></p>
         <button type="button" class="btn btn-primary btn-block">Beli Sekarang</button></td>
       
        
      </tr>
     
    </tbody>
  </table>
</div>
</div>
    
    <script>
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
            showDivs(slideIndex += n);
            }

            function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            x[slideIndex-1].style.display = "block";  
            }
</script>



