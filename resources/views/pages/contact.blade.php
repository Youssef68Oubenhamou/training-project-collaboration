<link rel="stylesheet" href="{{asset('css/pages/contact.css')}}" />
<x-app>
<!--====== CONTACT ONE PART START ======-->
<section class="contact-area">
   <div class="container">
      <div class="row">
         <div class="col-xl-7 col-lg-8">
            <div class="section-title mt-45">
               <h3 class="title">Get in touch</h3>
            </div>
            <div class="contact-form form-style-four mt-15">
               <form method="POST" action="{{route('contact.submit')}}">

                  @csrf

                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-input mt-15">
                           <label>Full Name</label>
                           <div class="input-items default">
                              <i class="lni lni-user"></i>
                              <input type="text" name="name" placeholder="Type here" />
                           </div>
                        </div>
                        <!-- form input -->
                     </div>
                     <div class="col-md-6">
                        <div class="form-input mt-15">
                           <label>Email Address</label>
                           <div class="input-items default">
                              <i class="lni lni-envelope"></i>
                              <input type="text" name="email" placeholder="Type here" />
                           </div>
                        </div>
                        <!-- form input -->
                     </div>
                     <div class="col-md-6">
                        <div class="form-input mt-15">
                           <label>Phone Number</label>
                           <div class="input-items default">
                              <i class="lni lni-phone"></i>
                              <input type="text" name="phone" placeholder="Type here" />
                           </div>
                        </div>
                        <!-- form input -->
                     </div>
                     <div class="col-md-6">
                        <div class="form-input mt-15">
                           <label>Subject</label>
                           <div class="input-items default">
                              <i class="lni lni-bubble"></i>
                              <input type="text" name="sub" placeholder="Type here" />
                           </div>
                        </div>
                        <!-- form input -->
                        <!-- form input -->
                     </div>
                     <div class="col-md-12">
                        <div class="form-input mt-15">
                           <label>Company</label>
                           <div class="input-items default">
                              <i class='bx bx-building-house'></i>
                              <input type="text" name="company" placeholder="Type here" />
                           </div>
                        </div>
                        <!-- form input -->
                     </div>
                     <div class="col-md-12">
                        <div class="form-input mt-15">
                           <label>Your Message</label>
                           <div class="input-items default">
                              <i class="lni lni-pencil-alt"></i>
                              <textarea
                                 placeholder="Type your message here"
                                 name="message"
                              ></textarea>
                           </div>
                        </div>
                        <!-- form input -->
                     </div>
                     <div class="col-md-12">
                        <div class="single-form mt-15">
                           <div class="input-form rounded-buttons">
                              <button
                                 class="btn primary-btn rounded-full"
                                 type="submit"
                              >
                              SEND MESSAGE
                              </button>
                           </div>
                        </div>
                        <!-- single form -->
                     </div>
                  </div>
                  <!-- row -->
               </form>
             </div>
             <!-- contact form -->
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 offset-xl-1">
             <div class="section-title mt-5">
                <h3 class="title">Contact Information</h3>
             </div>
             <div class="contact-info">
                <ul class="info">
                   <li>
                      <div class="single-info">
                         <div class="info-icon">
                            <i class="lni lni-map-marker"></i>
                         </div>
                         <div class="info-content">
                            <p class="text">
                              {{ $contact->address }}
                            </p>
                         </div>
                      </div>
                      <!-- single info -->
                   </li>
                   <li>
                     <div class="single-info">
                        <div class="info-icon">
                           <i class="lni lni-envelope"></i>
                        </div>
                        <div class="info-content">
                           <p class="text">{{ $contact->email }}</p>
                        </div>
                     </div>
                     <!-- single info -->
                  </li>
                   <li>
                      <div class="single-info">
                         <div class="info-icon">
                            <i class="lni lni-phone"></i>
                         </div>
                         <div class="info-content">
                            <p class="text">{{ $contact->mobile }}</p>
                         </div>
                      </div>
                      <!-- single info -->
                   </li>
                   <li>
                      <div class="single-info">
                         <div class="info-icon">
                            <i class="lni lni-phone-set"></i>
                         </div>
                         <div class="info-content">
                            <p class="text">{{ $contact->fix_1 }}</p>
                         </div>
                      </div>
                      <!-- single info -->
                   </li>
                   <li>
                      <div class="single-info">
                         <div class="info-icon">
                            <i class="lni lni-phone-set"></i>
                         </div>
                         <div class="info-content">
                            <p class="text">{{ $contact->fix_2 }}</p>
                         </div>
                      </div>
                      <!-- single info -->
                   </li>
                   <li>
                      <div class="single-info">
                         <div class="info-icon">
                            <i class="lni lni-phone-set"></i>
                         </div>
                         <div class="info-content">
                            <p class="text">{{ $contact->fix_3 }}</p>
                         </div>
                      </div>
                      <!-- single info -->
                   </li>
                   <li>
                      <div class="single-info">
                         <div class="info-icon">
                            <i class="lni lni-phone-set"></i>
                         </div>
                         <div class="info-content">
                            <p class="text">{{ $contact->fax }}</p>
                         </div>
                      </div>
                      <!-- single info -->
                   </li>
                </ul>
                <ul class="social mt-5">
                   <li>
                      <a href="https://www.facebook.com/conceptplv" target="_blank" class="d-flex align-items-center justify-content-center">
                      <i class="lni lni-facebook-filled"></i>
                      </a>
                   </li>
                   <li>
                      <a href="https://www.instagram.com/conceptplv" target="_blank" class="d-flex align-items-center justify-content-center">
                      <i class="lni lni-instagram-original"></i>
                      </a>
                   </li>
                   <li>
                      <a href="https://www.linkedin.com/company/concept-plv-maroc/" target="_blank" class="d-flex align-items-center justify-content-center">
                      <i class="lni lni-linkedin-original"></i>
                      </a>
                   </li>
                </ul>
             </div>
             <!-- contact-info -->
          </div>
       </div>
       <!-- row -->
    </div>
    <!-- container -->
 </section>
 <!--====== CONTACT ONE PART ENDS ======-->
</x-app>