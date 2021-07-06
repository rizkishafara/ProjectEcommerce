 </div>
 <!-- /.row -->
 </div>
 <!-- /.col-lg-9 -->

 </div>
 <!-- /.row -->

 </div>
 <footer class="footer">
   <div class="container">
     <p class="text-muted">
       <left>Copyright © Rizki 2021 </left>
     </p>
   </div>
 </footer>
 <script>
   // ------------------------------------------------------- //
   //   Inject SVG Sprite - 
   //   see more here 
   //   https://css-tricks.com/ajaxing-svg-sprite/
   // ------------------------------------------------------ //
   function injectSvgSprite(path) {

     var ajax = new XMLHttpRequest();
     ajax.open("GET", path, true);
     ajax.send();
     ajax.onload = function(e) {
       var div = document.createElement("div");
       div.className = 'd-none';
       div.innerHTML = ajax.responseText;
       document.body.insertBefore(div, document.body.childNodes[0]);
     }
   }
   // this is set to BootstrapTemple website as you cannot 
   // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
   // while using file:// protocol
   // pls don't forget to change to your domain :)
   injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
 </script>
 <script>
   var search = document.getElementById('search_text');
   var container = document.getElementById('container');

   search.addEventListener('keyup', function() {

     //buat objek ajax
     var xhr = new XMLHttpRequest();

     //cek kesiapan ajax
     xhr.onreadystatechange = function() {
       if (xhr.readyState == 4 && xhr.status == 200) {
         container.innerHTML = xhr.responseText;
       }
     }
     //eksekusi ajax
     xhr.open('GET', '<?php echo base_url("toko/page/search") ?>?search=' + search.value, true);
     xhr.send();
   });
 </script>


 <!-- Bootstrap core JavaScript
    ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="<?php echo base_url() ?>assets/jquery/jquery-3.2.1.min.js"></script>
 <script src="<?php echo base_url() ?>assets/js/arf.js"></script>
 <script src="<?php echo base_url() ?>assets/js/prs.js"></script>
 <script src="<?php echo base_url() ?>assets/js/validation.js"></script>
 <script src="<?php echo base_url() ?>assets/jquery/jquery-ui.js"></script>
 <script src="<?php echo base_url() ?>assets/jquery/jquery.validate.min.js"></script>
 <script>
   window.jQuery || document.write('<script src="<?php echo base_url() ?>assets/vendor/jquery.min.js"><\/script>')
 </script>
 <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
 <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 <script src="<?php echo base_url() ?>assets/asie/js/ie10-viewport-bug-workaround.js"></script>
 </body>

 </html>