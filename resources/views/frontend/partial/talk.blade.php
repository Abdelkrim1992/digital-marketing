 <?php $talk= App\Models\Section\Talk::find(1); ?>
      <!-- Talk area start here -->
      <section class="talk-area pt-140 pb-140 primary-bg bg-image">
        <div class="container">
          <div class="row g-4">
            <div class="col-lg-7">
              <div class="section-header">
                <h5 class="text-white wow fadeInUp"  data-wow-delay="00ms" data-wow-duration="1000ms" >{{$talk->title}}</h5>
                <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" >{{$talk->big_title}}</h2>
                <p class="para-light-color wow fadeInUp" data-wow-delay="400ms"  data-wow-duration="1000ms" >{{$talk->main_text}}</p>
                <div class="d-flex align-items-center gap-4 mt-40 wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1000ms" >
                  <a href="{{route('contact.index')}}" class="btn-one" >{{$talk->button_text}}<i class="fa-regular fa-circle-arrow-right ml-10"></i ></a>
                  </div>
              </div>
            </div>
            <div  class="col-lg-5 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms" >
              <div class="contact__form">
                <h3 class="text-capitalize mb-30 text-center">{{$talk->form_title}}</h3>
                <form action="#">
                  <input type="text" placeholder="Company Name" />
                  <div class="row g-3">
                    <div class="col-6">
                      <input type="text" placeholder="First Name*" />
                    </div>
                    <div class="col-6">
                      <input type="text" placeholder="Last Name*" />
                    </div>
                  </div>
                  <div class="row g-3">
                    <div class="col-6">
                      <input type="text" placeholder="Email Address*" />
                    </div>
                    <div class="col-6">
                      <input type="text" placeholder="Phone Number*" />
                    </div>
                  </div>
                  <textarea name="#" id="#" placeholder="Message"></textarea>
                  <button class="btn-one transition"> Submit<i class="fa-regular fa-circle-arrow-right ml-10"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Talk area end here -->