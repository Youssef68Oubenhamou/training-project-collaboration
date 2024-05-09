<!--====== gLightBox CSS ======-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox@3.1.0/dist/css/glightbox.min.css" />
<link rel="stylesheet" href="{{asset('css/pages/portfolio.css')}}" />
<link rel="stylesheet" href="{{asset('css/pages/admin/dash.css')}}" />

<x-admin-dashboard dashTitle='Dashboard'>
<!--====== portfolio ONE PART START ======-->
<section class="portfolio-area portfolio-one">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="portfolio-menu">
               <button data-filter="all" class="active">ALL WORK</button>
               <button data-filter="branding">DISPLAY</button>
               <button data-filter="marketing">POINT OF SALE</button>
               <button data-filter="planning">FAIRS & EXPOSITIONS</button>
               <button data-filter="research">POSM</button>
            </div>
            <!-- portfolio menu -->
         </div>
      </div>
      <!-- row -->
      <div class="row grid">
         @foreach($works as $work)
         <div class="col-lg-4 col-sm-6" data-filter="branding">
            <div class="portfolio-style-one text-center">
               <div class="portfolio-image">
                  <img
                     src="/uploads/{{$work->path}}"
                     alt="image"
                     />
               </div>
               <div class="portfolio-overlay">
                  <div class="portfolio-content">
                        <h4 class="text-center text-white">
                           {{ $work->brand_name }}
                        </h4>
                     <div class="actions d-flex gap-3">
                        <button class="btn btn-success"><a href="{{ route('works.edit' , $work->id) }}" >edit</a></button>
                        <button class="btn btn-danger">Delete</button>
                     </div>
                  </div>
               </div>
            </div>
            <!-- single portfolio -->
         </div>
         @endforeach
         <div class="col-lg-4 col-sm-6" data-filter="branding">
            <div class="portfolio-style-one text-center">
               <div class="portfolio-image">
                  <img
                     src="https://cdn.ayroui.com/1.0/images/portfolio/portfolio-1/pf1.jpg"
                     alt="image"
                     />
               </div>
               <div class="portfolio-overlay">
                  <div class="portfolio-content">
                        <h4 class="text-center text-white">
                           Graphics Design
                        </h4>
                     <div class="actions d-flex gap-3">
                        <button class="btn btn-success">edit</button>
                        <button class="btn btn-danger">Delete</button>
                     </div>
                  </div>
               </div>
            </div>
            <!-- single portfolio -->
         </div>
         <div class="col-lg-4 col-sm-6" data-filter="marketing">
            <div class="portfolio-style-one text-center">
               <div class="portfolio-image">
                  <img
                     src="https://cdn.ayroui.com/1.0/images/portfolio/portfolio-1/pf2.jpg"
                     alt="image"
                     />
               </div>
               <div class="portfolio-overlay d-flex align-items-center">
                  <div class="portfolio-content">
                     <div class="portfolio-icon">
                        <a
                           class="image-popup-two glightbox"
                           href="https://cdn.ayroui.com/1.0/images/portfolio/portfolio-1/pf2.jpg"
                           >
                        <i class="lni lni-zoom-in"></i>
                        </a>
                     </div>
                     <div class="portfolio-text">
                        <h4 class="portfolio-title">
                           <a href="javascript:void(0)">Graphics Design</a>
                        </h4>
                        <p class="text">
                           Short description for the ones who look for something new.
                           Awesome!
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- single portfolio -->
         </div>
         <div class="col-lg-4 col-sm-6" data-filter="branding">
            <div class="portfolio-style-one text-center">
               <div class="portfolio-image">
                  <img
                     src="https://cdn.ayroui.com/1.0/images/portfolio/portfolio-1/pf3.jpg"
                     alt="image"
                     />
               </div>
               <div class="portfolio-overlay d-flex align-items-center">
                  <div class="portfolio-content">
                     <div class="portfolio-icon">
                        <a
                           class="image-popup-two glightbox"
                           href="https://cdn.ayroui.com/1.0/images/portfolio/portfolio-1/pf3.jpg"
                           >
                        <i class="lni lni-zoom-in"></i>
                        </a>
                     </div>
                     <div class="portfolio-text">
                        <h4 class="portfolio-title">
                           <a href="javascript:void(0)">Graphics Design</a>
                        </h4>
                        <p class="text">
                           Short description for the ones who look for something new.
                           Awesome!
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- single portfolio -->
         </div>
         <div class="col-lg-4 col-sm-6" data-filter="research">
            <div class="portfolio-style-one text-center">
               <div class="portfolio-image">
                  <img
                     src="https://cdn.ayroui.com/1.0/images/portfolio/portfolio-1/pf4.jpg"
                     alt="image"
                     />
               </div>
               <div class="portfolio-overlay d-flex align-items-center">
                  <div class="portfolio-content">
                     <div class="portfolio-icon">
                        <a
                           class="image-popup-two glightbox"
                           href="https://cdn.ayroui.com/1.0/images/portfolio/portfolio-1/pf4.jpg"
                           >
                        <i class="lni lni-zoom-in"></i>
                        </a>
                     </div>
                     <div class="portfolio-text">
                        <h4 class="portfolio-title">
                           <a href="javascript:void(0)">Graphics Design</a>
                        </h4>
                        <p class="text">
                           Short description for the ones who look for something new.
                           Awesome!
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- single portfolio -->
         </div>
         <div class="col-lg-4 col-sm-6" data-filter="planning">
            <div class="portfolio-style-one text-center">
               <div class="portfolio-image">
                  <img
                     src="https://cdn.ayroui.com/1.0/images/portfolio/portfolio-1/pf5.jpg"
                     alt="image"
                     />
               </div>
               <div class="portfolio-overlay d-flex align-items-center">
                  <div class="portfolio-content">
                     <div class="portfolio-icon">
                        <a
                           class="image-popup-two glightbox"
                           href="https://cdn.ayroui.com/1.0/images/portfolio/portfolio-1/pf5.jpg"
                           >
                        <i class="lni lni-zoom-in"></i>
                        </a>
                     </div>
                     <div class="portfolio-text">
                        <h4 class="portfolio-title">
                           <a href="javascript:void(0)">Graphics Design</a>
                        </h4>
                        <p class="text">
                           Short description for the ones who look for something new.
                           Awesome!
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- single portfolio -->
         </div>
         <div class="col-lg-4 col-sm-6" data-filter="research">
            <div class="portfolio-style-one text-center">
               <div class="portfolio-image">
                  <img
                     src="https://cdn.ayroui.com/1.0/images/portfolio/portfolio-1/pf6.jpg"
                     alt="image"
                     />
               </div>
               <div class="portfolio-overlay d-flex align-items-center">
                  <div class="portfolio-content">
                     <div class="portfolio-icon">
                        <a
                           class="image-popup-two glightbox"
                           href="https://cdn.ayroui.com/1.0/images/portfolio/portfolio-1/pf6.jpg"
                           >
                        <i class="lni lni-zoom-in"></i>
                        </a>
                     </div>
                     <div class="portfolio-text">
                        <h4 class="portfolio-title">
                           <a href="javascript:void(0)">Graphics Design</a>
                        </h4>
                        <p class="text">
                           Short description for the ones who look for something new.
                           Awesome!
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- single portfolio -->
         </div>
         <div class="col-lg-4 col-sm-6" data-filter="planning">
            <div class="portfolio-style-one text-center">
               <div class="portfolio-image">
                  <img
                     src="https://cdn.ayroui.com/1.0/images/portfolio/portfolio-1/pf7.jpg"
                     alt="image"
                     />
               </div>
               <div class="portfolio-overlay d-flex align-items-center">
                  <div class="portfolio-content">
                     <div class="portfolio-icon">
                        <a
                           class="image-popup-two glightbox"
                           href="https://cdn.ayroui.com/1.0/images/portfolio/portfolio-1/pf7.jpg"
                           >
                        <i class="lni lni-zoom-in"></i>
                        </a>
                     </div>
                     <div class="portfolio-text">
                        <h4 class="portfolio-title">
                           <a href="javascript:void(0)">Graphics Design</a>
                        </h4>
                        <p class="text">
                           Short description for the ones who look for something new.
                           Awesome!
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- single portfolio -->
         </div>
         <div class="col-lg-4 col-sm-6" data-filter="branding">
            <div class="portfolio-style-one text-center">
               <div class="portfolio-image">
                  <img
                     src="https://cdn.ayroui.com/1.0/images/portfolio/portfolio-1/pf8.jpg"
                     alt="image"
                     />
               </div>
               <div class="portfolio-overlay d-flex align-items-center">
                  <div class="portfolio-content">
                     <div class="portfolio-icon">
                        <a
                           class="image-popup-two glightbox"
                           href="https://cdn.ayroui.com/1.0/images/portfolio/portfolio-1/pf8.jpg"
                           >
                        <i class="lni lni-zoom-in"></i>
                        </a>
                     </div>
                     <div class="portfolio-text">
                        <h4 class="portfolio-title">
                           <a href="javascript:void(0)">Graphics Design</a>
                        </h4>
                        <p class="text">
                           Short description for the ones who look for something new.
                           Awesome!
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- single portfolio -->
         </div>
         <div class="col-lg-4 col-sm-6" data-filter="marketing">
            <div class="portfolio-style-one text-center">
               <div class="portfolio-image">
                  <img
                     src="https://cdn.ayroui.com/1.0/images/portfolio/portfolio-1/pf9.jpg"
                     alt="image"
                     />
               </div>
               <div class="portfolio-overlay d-flex align-items-center">
                  <div class="portfolio-content">
                     <div class="portfolio-icon">
                        <a
                           class="image-popup-two glightbox"
                           href="https://cdn.ayroui.com/1.0/images/portfolio/portfolio-1/pf9.jpg"
                           >
                        <i class="lni lni-zoom-in"></i>
                        </a>
                     </div>
                     <div class="portfolio-text">
                        <h4 class="portfolio-title">
                           <a href="javascript:void(0)">Graphics Design</a>
                        </h4>
                        <p class="text">
                           Short description for the ones who look for something new.
                           Awesome!
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- single portfolio -->
         </div>
      </div>
      <!-- row -->
   </div>
   <!-- container -->
</section>
<!--====== portfolio ONE PART ENDS ======-->

<!--====== gLightBox js ======-->
<script src="https://cdn.jsdelivr.net/npm/glightbox@3.1.0/dist/js/glightbox.min.js"></script>

<script>
      const filters = document.querySelectorAll(".portfolio-menu button");

      filters.forEach((filter) => {
        filter.addEventListener("click", function () {
          // ==== Filter btn toggle
          let filterBtn = filters[0];
          while (filterBtn) {
            if (filterBtn.tagName === "BUTTON") {
              filterBtn.classList.remove("active");
            }
            filterBtn = filterBtn.nextSibling;
          }
          this.classList.add("active");

          // === filter
          let selectedFilter = filter.getAttribute("data-filter");
          let itemsToHide = document.querySelectorAll(
            `.grid .col-lg-4:not([data-filter='${selectedFilter}'])`
          );
          let itemsToShow = document.querySelectorAll(
            `.grid [data-filter='${selectedFilter}']`
          );

          if (selectedFilter == "all") {
            itemsToHide = [];
            itemsToShow = document.querySelectorAll(".grid [data-filter]");
          }

          itemsToHide.forEach((el) => {
            el.classList.add("hide");
            el.classList.remove("show");
          });

          itemsToShow.forEach((el) => {
            el.classList.remove("hide");
            el.classList.add("show");
          });
        });
      });

      //========= glightbox
      const myGallery = GLightbox({
        selector: ".glightbox",
        type: "image",
        width: 900,
      });
    </script>

</x-admin-dashboard>