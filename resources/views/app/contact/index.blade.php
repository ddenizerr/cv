@extends('welcome')

@section('content')
    <div class="my-2">
        <h1 class="font-cinzel index-title"> Contact </h1>
    </div>

    <p class="text-onyx p-2">
        Please feel free to contact me for any questions, suggestions or just to enlighten me about anything. It is
        always nice to hear from other humans.
    </p>
    <div class="row p-3">
        <!-- Image -->
        <div class="col-lg-4 col-md-4  col-sm-2 d-none d-xs-block d-sm-block contact-form-image text-onyx">
            <img class="contact-me-image" src="/images/postbox.jpg" alt="">
        </div>
        <!-- Image  -->

        <!-- Contact Form -->
        <div class="col-lg-8 col-md-8 col-sm-10 d-flex align-items-center">



            <!-- Contact Form -->
            <form action="{{ route('contact.send-mail') }}" method="POST">
                @csrf
                <div>
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
                <div class="row d-flex align-items-stretch">
                    <div class="p-1">
                        <div class="input-group">
                            <span class="input-group-text bg-onyx d-flex justify-content-center" id="basic-addon1"
                                  style="width: 3rem"><i class="fa-regular fa-user text-white"></i></span>
                            <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Username"
                                   aria-describedby="basic-addon1" required>
                        </div>
                    </div>
                    <div class="p-1">
                        <div class="input-group">
                            <span class="input-group-text bg-onyx d-flex justify-content-center" id="basic-addon1"
                                  style="width: 3rem"><i class="fa-regular fa-envelope text-white"></i></span>
                            <input type="text" class="form-control" name="email" placeholder="Email Address"
                                   aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                    </div>
                    <div class="p-1">
                        <div class="input-group">
                            <span class="input-group-text bg-onyx d-flex justify-content-center" id="basic-addon1"
                                  style="width: 3rem"><i class="fa-regular fa-message text-white"></i></span>
                            <textarea class="form-control" name="message" id="exampleFormControlTextarea1"
                                      rows="10" required></textarea>
                        </div>
                    </div>
                    <div class="p-1 d-flex justify-content-end">
                        <button type="submit" id="contact-submit" class="btn btn-submit bg-onyx text-white about-me-submit w-100">
                            <span class="button-text" id="save"><i class="fa-regular fa-paper-plane"></i></span>
                        </button>
                    </div>
                </div>
            </form>
            <!-- Contact Form End -->
        </div>
    </div>
@endsection
