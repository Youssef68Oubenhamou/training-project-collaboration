<x-app :clients="$clients" :contacts='$contacts'>
    <section>
        <div class="container">
            <div class="d-flex justify-content-center align-items-center py-5" style="flex-direction: column">
                  <div class="w-75 text-center">
                     <h2 class="action-title pb-4 font-weight-bold">
                        OUR STRENGTHS
                     </h2>
                     @if (count($assets)==0)
                        <p class="tetx-lg pt-2">NULL</p>
                     @else
                        @foreach ($assets as $asset)
                        <p class="text-lg pt-2">{{$asset->desc}}</p>
                        @endforeach
                     @endif
                  </div>
                  <div class="w-75 text-center d-flex justify-content-center align-items-center mt-5" style="flex-direction: column">
                    <img src="{{asset('imgs/our_strengths.png')}}" width="100%">
                  </div>
            </div>
            <hr>
            <!-- row -->
         </div>
    </section>
</x-app>