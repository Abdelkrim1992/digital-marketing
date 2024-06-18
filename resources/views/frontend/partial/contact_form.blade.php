    <!-- Contact area start here -->
        <section class="contact-area pb-140">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="contact__map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122897.88733150701!2d-48.09324971503908!3d-15.721541570017282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3d18df9ae275%3A0x738470e469754a24!2sBras%C3%ADlia%20-%20Brasilia%2C%20Federal%20District%2C%20Brazil!5e0!3m2!1sen!2sbd!4v1703471804969!5m2!1sen!2sbd"
                                width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="contact__form">
                            <h2 class="text-capitalize mb-10">Get Free</h2>
                            <p class="mb-30">Our team would love to hear from you. Write your <br> message to us!</p>
                   
                    <div id="formMessage" style="display:none;" class="alert alert-success"></div>
                        <form id="form" action="{{ route('reservation') }}" method="POST" >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="text" id="client_name" name="client_name" placeholder="Your Name*" required />
                            <div class="row g-3">
                                <div class="col-6">
                                    <input type="text" id="client_email" name="client_email"  placeholder="Your Email*" required />
                                </div>
                                <div class="col-6">
                                    <input type="text" id="client_phone" name="client_phone" placeholder="Your Phone*" required/>
                                </div>
                            </div>
                            <div class="row g-3 ">
                                <div class="form-control mb-20">
                                    <select name="choosed_service" id="choosed_service" required>
                                            <option >Select Service</option>
                                            @foreach ($service as $service)
                                            <option value="{{ $service->service_title }}">{{ $service->service_title }}</option>
                                            @endforeach
                                   </select>
                                </div>
                            </div>
                            <textarea name="message" id="message" placeholder="Message" class="form-control mb-3" required ></textarea>
                            <button type="submit" class="btn-one transition">Submit <i class="fa-regular fa-circle-arrow-right ml-10"></i></button>
                        </form>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact area end here -->


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
