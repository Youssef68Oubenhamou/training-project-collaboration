<link rel="stylesheet" href="s{{asset('css/pages/about-us/1_ourExpertise.css')}}">
<x-app>
    <!--====== CALL TO ACTION ONE PART START ======-->
   <section class="call-action-area call-action-one">
      <div class="container">
         <div class="row align-items-center call-action-content py-5">
            <div class="col-xl-6 col-lg-6">
               <div class="call-action-text">
                  <h2 class="action-title pb-4 font-weight-bold">
                     OUR EXPERTISE
                  </h2>
                  @foreach($expertises as $expertise)
                     <b style="color: #214b82 !important;">{{ $expertise->creation_infos }}</b>
                     <p class="text-lg pt-2">
                        {{ $expertise->description_infos }}
                     </p>
                  @endforeach
               </div>
            </div>
            <div class="col-xl-6 col-lg-6">
               <div class="call-action-btn rounded-buttons text-lg-end">
                  <img src="{{asset('imgs/our-expertise.png')}}" width="100%">
               </div>
            </div>
         </div>
         <hr>
         <!-- row -->
      </div>
      <!-- container -->
   </section>
 <!--====== CALL TO ACTION ONE PART ENDS ======-->
</x-app>