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
               @foreach ($categories as $category )
                  <button data-filter="{{$category->categorie_name}}" class="active">{{$category->categorie_name}}</button>
               @endforeach
            </div>
            <!-- portfolio menu -->
         </div>
      </div>
      <!-- row -->
      <div class="row grid">
         @foreach($works as $work)
         <div class="col-lg-4 col-sm-6" data-filter="{{$work->categorie->categorie_name}}">
            <div class="portfolio-style-one text-center">
               <div class="portfolio-image">
                  <img
                     src="{{$work->img}}"
                     alt="image"
                     />
               </div>
               <div class="portfolio-overlay">
                  <div class="portfolio-content">
                        <h4 class="text-center text-white">
                           {{ $work->brand_name }}
                        </h4>
                     <div class="actions">
                        <ul class="d-flex gap-3">
                           <li>
                              <a class="btn btn-success" href="{{ route('works.edit' , $work->id) }}" >Edit</a>
                           </li>
                           <li>
                              <form method="POST" action="{{ route('works.destroy' , $work->id) }}">
                                 @csrf
                                 @method('delete')
                                 <button class="btn btn-danger delete-btn">Delete</button>
                              </form>
                           </li>
                        </ul>
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

</x-admin-dashboard>

<script src="{{asset('js/delete-confirmation.js')}}"></script>