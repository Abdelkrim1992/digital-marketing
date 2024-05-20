<?php $process= App\Models\Section\Process::find(1); ?>
    <!-- Process area start here -->
      <section class="process-area pt-140 pb-140">
        <div class="container">
          <div class="section-header__wrp mb-90">
            <div class="section-header">
              <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms" >
                {{$process->title}}
              </h5>
              <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" >
              {{$process->big_title}}
              </h2>
            </div>
            <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms" >
             <br> {{$process->main_text}} </br>
            </p>
          </div>
          <div class="custom-row process__wrp">
            <div class="process__line">
              <img src="{{asset('frontend/images/shape/process-line.png')}}" alt="line" />
            </div>
            <div class="process__item">
              <div class="process__icon">
                <img src="{{asset('frontend/images/icon/process-icon1.png')}}" alt="icon" />
              </div>
              <h3 class="mt-20">{{$process->first_title}}</h3>
              <p>
              {{$process->first_text}}
              </p>
            </div>
            <div class="process__item">
              <div class="process__icon">
                <img src="{{asset('frontend/images/icon/process-icon2.png')}}" alt="icon" />
              </div>
              <h3 class="mt-20">{{$process->second_title}}</h3>
              <p>
                {{$process->second_text}}
              </p>
            </div>
            <div class="process__item">
              <div class="process__icon">
                <img src="{{asset('frontend/images/icon/process-icon3.png')}}" alt="icon" />
              </div>
              <h3 class="mt-20">{{$process->thirty_title}}</h3>
              <p>
                {{$process->thirty_text}} 
              </p>
            </div>
            <div class="process__item">
              <div class="process__icon">
                <img src="{{asset('frontend/images/icon/process-icon4.png')}}" alt="icon" />
              </div>
              <h3 class="mt-20">{{$process->forty_title}}</h3>
              <p>
                {{$process->forty_text}}
              </p>
            </div>
          </div>
        </div>
      </section>
    <!-- Process area end here -->