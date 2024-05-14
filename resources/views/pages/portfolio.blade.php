<!--====== gLightBox CSS ======-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox@3.1.0/dist/css/glightbox.min.css" />
<link rel="stylesheet" href="{{asset('css/pages/portfolio.css')}}" />
<x-app>
<!--====== portfolio ONE PART START ======-->
<section class="portfolio-area portfolio-one">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-xxl-6 col-xl-7 col-lg-8">
            <div class="section-title text-center mb-5">
               <h2 class="mb-3 fw-bold">PORTFOLIO</h2>
               <p class="text-lg">
                  Morem ipsum dolor sit amet consectetur, adipisicing elit. Illum
                  quam suscipit distinctio optio, quaerat consequatur labore
                  pariatur rerum.
               </p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="portfolio-menu">
               <button data-filter="all" class="active">ALL WORK</button>
               @foreach ($categories as $category )
                  <button data-filter="{{$category->categorie_name}}" class="active">{{$category->categorie_name}}</button>
               @endforeach
            </div>
            <!-- portfolio menu -->
         </div>
      </div>

      <!-- row -->
      <div class="row grid">
         @foreach ($works as $work )
         <div class="col-lg-4 col-sm-6" data-filter="{{$work->categorie->categorie_name}}">
            <div class="portfolio-style-one text-center">
               <div class="portfolio-image">
                  <img
                     src="{{$work->img}}"
                     alt="image"
                     />
               </div>
               <div class="portfolio-overlay d-flex align-items-center">
                  <div class="portfolio-content">
                     <div class="portfolio-icon">
                        <a
                           class="image-popup-two glightbox d-flex align-items-center justify-content-center"
                           href="{{$work->img}}"
                           >
                        <i class="lni lni-zoom-in"></i>
                        </a>
                     </div>
                     <div class="portfolio-text">
                        <h4 class="portfolio-title">
                           <a href="javascript:void(0)">{{$work->brand_name}}</a>
                        </h4>
                        <p class="text">
                           {{$work->brand_description}}
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- single portfolio -->
         </div>
         @endforeach
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
</x-app>