@props(['clients'])
<link rel="stylesheet" href="{{asset('css/3_clientReferences.css')}}" />
<!--====== CLIENT LOGO PART START ======-->
<section class="client-logo-area client-logo-one">
   <!--======  Start Section Title Two ======-->
   <div class="section-title-two">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="content ">
                  <h2 class="title">OUR AWESOME CLIENTS</h2>
               </div>
            </div>
         </div>
      </div>
      <!-- container -->
   </div>
   <!--====== End Section Title Two ======-->
   <div class="container">
      <div class="d-flex justify-content-center gap-5 flex-wrap">
        @if (count($clients) == 0)
           <h1>NULL</h1>
         @else
            @foreach ($clients as $client)
            <div class="single-client text-center card">
               <img src="{{$client->client_logo}}" alt="{{$client->client_name}}" />
            </div>
            @endforeach
        @endif
      </div>
       <!-- row -->
    </div>
    <!-- container -->
 </section>
 <!--====== CLIENT LOGO PART ENDS ======-->