 <!-- START FOOTER -->
 <footer class="first-footer">
     <div class="second-footer">
         <div class="container">
             <p>2022 © Copyright - All Rights Reserved.</p>
             <p>Made With <i class="fa fa-heart" aria-hidden="true"></i> Solutions Tree</p>
         </div>
     </div>
 </footer>

 <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
 <!-- END FOOTER -->

 <!-- START PRELOADER -->
 <div id="preloader">
     <div id="status">
         <div class="status-mes"></div>
     </div>
 </div>
 <!-- END PRELOADER -->

 <!-- ARCHIVES JS -->
 <script src="{{ asset('assets/frontend/js/jquery-3.5.1.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/jquery-ui.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/tether.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/moment.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/mmenu.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/mmenu.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/swiper.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/swiper.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/slick2.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/fitvids.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/jquery.waypoints.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/jquery.counterup.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/smooth-scroll.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/lightcase.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/search.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/owl.carousel.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/ajaxchimp.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/newsletter.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/jquery.form.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/jquery.validate.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/searched.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/dashbord-mobile-menu.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/forms-2.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/color-switcher.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/dropzone.js') }}"></script>

 <!-- MAIN JS -->
 <script src="{{ asset('assets/frontend/js/script.js') }}"></script>
 <script>
     $(".dropzone").dropzone({
         dictDefaultMessage: "<i class='fa fa-cloud-upload'></i> Click here or drop files to upload",
     });
 </script>
 <script>
     $(".header-user-name").on("click", function() {
         $(".header-user-menu ul").toggleClass("hu-menu-vis");
         $(this).toggleClass("hu-menu-visdec");
     });
 </script>

 </div>
 <!-- Wrapper / End -->
 </body>

 </html>
