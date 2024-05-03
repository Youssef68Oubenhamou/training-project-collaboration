<!--====== Tiny Slider Css ======-->
<link rel="stylesheet" href="https://cdn.ayroui.com/1.0/css/tiny-slider.css" />
<link rel="stylesheet" href="{{asset('css/2_section.css')}}" />

<!--====== SLIDER THREE PART START ======-->

 <section class="slider-three">
   <div class="container">
     <div class="row justify-content-center">
       <div class="col-lg-6">
         <div class="section-title text-center">
           <h3 class="title">FAIRS & EXPOSITIONS</h3>
           <h4 style="color: #009ee0;">Creation, Design and Manufacturing</h4>
           <p class="text">
            Thanks to great flexibility, we offer modular stand designs,
            umbrella stands or even custom structure traditional stands.
           </p>
         </div>
         <!-- section title -->
       </div>
     </div>
     <!-- row -->

     <div class="slider-items-wrapper">
       <div class="row slider-items-active">
         <div class="col-lg-4">
           <div class="single-items-one">
             <img src="https://cdn.ayroui.com/1.0/images/slider/slider-items-one.jpg" alt="Image" />
           </div>
           <!-- single-items-one -->
         </div>
         <div class="col-lg-4">
           <div class="single-items-one">
             <img src="https://cdn.ayroui.com/1.0/images/slider/slider-items-two.jpg" alt="Image" />
           </div>
           <!-- single-items-one -->
         </div>
         <div class="col-lg-4">
           <div class="single-items-one">
             <img src="https://cdn.ayroui.com/1.0/images/slider/slider-items-three.jpg" alt="Image" />
           </div>
           <!-- single-items-one -->
         </div>
         <div class="col-lg-4">
           <div class="single-items-one">
             <img src="https://cdn.ayroui.com/1.0/images/slider/slider-items-two.jpg" alt="Image" />
           </div>
           <!-- single-items-one -->
         </div>
       </div>
       <!-- row -->
     </div>
   </div>
   <!-- container -->
 </section>

 <!--====== SLIDER THREE PART ENDS ======-->

 <!--====== Tiny Slider js ======-->
 <script src="https://cdn.ayroui.com/1.0/js/tiny-slider.js"></script>

<script>
     //======== tiny slider for slider-items-active
     tns({
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 0,
        container: ".slider-items-active",
        center: false,
        nav: true,
        navPosition: "bottom",
        controls: false,
        speed: 400,
        controlsText: [
           '<i class="lni lni-arrow-left-circle"></i>',
           '<i class="lni lni-arrow-right-circle"></i>',
        ],
        responsive: {
           0: {
              items: 1,
           },

           768: {
              items: 2,
           },
           992: {
              items: 3,
           },
        },
     });
  </script>