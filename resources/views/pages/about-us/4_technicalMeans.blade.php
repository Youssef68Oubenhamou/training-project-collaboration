<x-app :clients="$clients" :contacts='$contacts'>
    <style>
        .list-of-technical>.col-sm>ul>li{
            list-style-type: square;
        }

        .list-of-technical>.col-sm>ul>li::marker{
            font-size: 18px;
            color: #214b82
        }
    </style>
    <section>
        <div class="container">
            <div class="d-flex justify-content-center align-items-center py-5" style="flex-direction: column">
                  <div class="w-75">
                     <h2 class="action-title pb-4 font-weight-bold text-center">
                        TECHNICAL MEANS
                     </h2>
                     <div class="d-flex justify-content-center align-items-center">
                        <div class="row p-4 border border-2 rounded list-of-technical">
                          <div class="col-sm">
                            <ul class="d-flex gap-2" style="flex-direction: column">
                                <li>Printing machine</li>
                                <li>Plasma Metal Cutting</li>
                                <li>CAO</li>
                                <li>Menuiserie</li>
                                <li>Lettrage PVC, plexiglass
                                    et métallique</li>
                            </ul>
                          </div>
                          <div class="col-sm">
                            <ul class="d-flex gap-2" style="flex-direction: column">
                                <li>Thermoforming machine</li>
                                <li>CNC</li>
                                <li>Peinture poudre epoxy</li>
                                <li>Menuiserie aluminium</li>
                                <li>Vernis relief</li>
                            </ul>
                          </div>
                          <div class="col-sm">
                            <ul class="d-flex gap-2" style="flex-direction: column">
                                <li>Laser cutting</li>
                                <li>Construction métallique</li>
                                <li>Peinture acrylique</li>
                                <li>Tabletterie plexiglass</li>
                                <li>Laminage et contre collage</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="w-75 text-center d-flex justify-content-center align-items-center mt-5" style="flex-direction: column">
                    <h2 class="action-title pb-4 font-weight-bold text-center">
                        OUR MACHINERY
                     </h2>
                    <div class="d-flex justify-content-center align-items-center flex-wrap gap-4 w-100">
                        <div class="card w-25" style="width: 280px !important;border: none;">
                            <img src="{{asset('imgs/machine_1.jpg')}}" class="card-img-top" alt="Fissure in Sandstone"/>
                            <div class="card-body">
                                <b style="color: #214b82 !important;" class="card-title">PLASMA METAL CUTTING</b>
                                <p class="card-text mt-2">Sheet metal, aluminum sheets, black plates</p>
                            </div>
                        </div>
                        <div class="card w-25" style="width: 280px !important;border: none;">
                            <img src="{{asset('imgs/machine_2.jpg')}}" class="card-img-top" alt="Fissure in Sandstone"/>
                            <div class="card-body">
                                <b style="color: #214b82 !important;" class="card-title">LASER</b>
                                <p class="card-text mt-2">Plexiglass, PET, PVC, PS and wood cutting and engraving</p>
                            </div>
                        </div>
                        <div class="card w-25" style="width: 280px !important;border: none;">
                            <img src="{{asset('imgs/machine_3.jpg')}}" class="card-img-top" alt="Fissure in Sandstone"/>
                            <div class="card-body">
                                <b style="color: #214b82 !important;" class="card-title">CNC</b>
                                <p class="card-text mt-2">Wood cutting, Forex, Aluminum and Alucobond</p>
                            </div>
                        </div>
                        <div class="card w-25" style="width: 280px !important;border: none;">
                            <img src="{{asset('imgs/machine_4.jpg')}}" class="card-img-top" alt="Fissure in Sandstone"/>
                            <div class="card-body">
                                <b style="color: #214b82 !important;" class="card-title">PRINTING MACHINE</b>
                                <p class="card-text mt-2">Vinyl printing, tarpaulin, PVC</p>
                            </div>
                        </div>
                        <div class="card w-25" style="width: 280px !important;border: none;">
                            <img src="{{asset('imgs/machine_5.jpg')}}" class="card-img-top" alt="Fissure in Sandstone"/>
                            <div class="card-body">
                                <b style="color: #214b82 !important;" class="card-title">THEROFORMING MACHINE</b>
                                <p class="card-text mt-2">PS, PET, PVC, PMMA</p>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
            <hr>
            <!-- row -->
         </div>
    </section>
</x-app>