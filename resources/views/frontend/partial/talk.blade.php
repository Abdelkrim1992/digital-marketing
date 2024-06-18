<?php $all_services = App\Models\Service::all(); ?>

<!-- Talk area start here -->
<section class="talk-area pt-140 pb-140 primary-bg bg-image mt-5" data-background="{{ asset('frontend/images/bg/talk-bg.png') }}">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-7">
                <div class="section-header">
                    <h5 class="text-white wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms">Get started with us</h5>
                    <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                        Start Conversation to
                        <span class="light-underline">Auva</span> Your Business
                    </h2>
                    <p class="para-light-color wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                        Schedule a free consultation with our experts. Uncover opportunities <br />
                        and take the first step towards digital success
                    </p>
                    <div class="d-flex align-items-center gap-4 mt-40 wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <a href="https://wa.me/message/FBO52GTDTUCCE1" class="btn-one">Let’s Talk<i class="fa-regular fa-circle-arrow-right ml-10"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
                <div class="contact__form">
                    <h3 class="text-capitalize mb-30 text-center">Get a free consultation</h3>
                    <div id="formMessage" style="display:none;" class="alert alert-success"></div>
                    <form id="form" action="{{ route('reservation') }}" method="POST">
                        @csrf
                        <input type="text" id="client_name" name="client_name" placeholder="Your Name*" required />
                        <div class="row g-3">
                            <div class="col-6">
                                <input type="text" id="client_email" name="client_email" placeholder="Your Email*" required />
                            </div>
                            <div class="col-6">
                                <input type="text" id="client_phone" name="client_phone" placeholder="Your Phone*" required />
                            </div>
                        </div>
                        <div class="row g-3 ">
                            <div class="form-control mb-20">
                                <select type="text" name="choosed_service" id="choosed_service" required>
                                    @foreach ($all_services as $row)
                                    <option value="{{ $row->service_title }}">{{ $row->service_title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <textarea name="message" id="message" placeholder="Message" class="form-control mb-3" required></textarea>
                        <button type="submit" class="btn-one transition">Submit <i class="fa-regular fa-circle-arrow-right ml-10"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Talk area end here -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#form').on('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            $.ajax({
                url: "{{ route('reservation') }}",
                method: 'POST',
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response); // Log success response
                    $('#formMessage').text(response.message).show(); // Show the success message
                    $('#form')[0].reset(); // Optionally reset the form
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText); // Log the detailed error response
                    $('#formMessage').text('An error occurred. Please try again.').show(); // Show error message
                }
            });
        });
    });
</script>
