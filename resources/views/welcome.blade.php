@extends('layouts.app')

@section('styles')
    <style>
        .image-aboutus-banner {
            /* background: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .7)), url("about.webp"); */
            /* background: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .7)); */
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            /* color: #fff; */
            /* padding-top: 110px; */
            /* padding-bottom: 110px; */
            /* padding: 110px 0; */
        }

        .image-aboutus-sm-banner {
            /* background: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .7)), url("bannel.jpeg"); */
            /* background: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .7)); */
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            /* color: #fff; */
            /* padding-top: 30px; */
            /* padding-bottom: 30px; */
            /* padding: 30px 0; */
        }

        .lg-text {
            font-size: 52px;
            font-weight: 600;
            text-transform: none;
            /* color: #fff; */
        }

        .image-aboutus-para {
            /* color: #fff; */
        }
    </style>
@endsection

@section('content')
    <div class="image-aboutus-banner my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <h1 class="lg-text">{{ __('About Us') }}</h1>
                    <p class="image-aboutus-para">
                        {{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae enim,
                                                                                                                                              accusantium beatae, ducimus earum impedit ut perferendis fuga, porro tenetur autem nisi officia et
                                                                                                                                              nam! Tempora suscipit voluptate dolores repudiandae vero ex est aperiam qui ea, pariatur cum. Quam
                                                                                                                                              debitis autem sunt praesentium delectus quis, cum numquam maxime? At incidunt error placeat aut
                                                                                                                                              quia, accusamus praesentium est iure ea labore eaque qui. Quaerat, eveniet possimus ducimus maiores
                                                                                                                                              vero accusantium facere nam molestiae aliquid animi amet eaque veniam! Quam, officiis dolorem quo
                                                                                                                                              nulla amet quasi incidunt optio nesciunt qui quos magnam totam sapiente a voluptate, cum, adipisci
                                                                                                                                              deserunt ipsa dolore nostrum!') }}
                    </p>
                </div>
                <div class="col-md-12 col-lg-6">
                    <img src=" {{ asset('homepage') . '/banner.jpeg' }}" class="img-fluid">
                </div>
            </div>
        </div>

        <!-- slider -->

        <div class="content my-3 py-5">
            <div class="container">
                <div class="row justify-content-center">
                    {{-- <div id="carouselExampleControls" class="carousel slide mb-3 w-sm-100 w-md-50 " data-bs-ride="carousel"> --}}
                    <div id="carouselExampleControls" class="carousel slide mb-3 w-auto" data-bs-ride="carousel">
                        <h2 class="text-primary mt-3">{{ __('Start Your Journey With Us:') }}</h2>

                        <div class="carousel-inner ">
                            <div class="carousel-item ">
                                <img src="{{ asset('homepage') . '/slide3.webp' }}" class="d-block w-100 " alt="...">
                            </div>
                            <div class="carousel-item active">

                                <img src="{{ asset('homepage') . '/slide2.webp' }}" class="d-block w-100 " alt="...">
                            </div>
                            <div class="carousel-item ">
                                <img src="{{ asset('homepage') . '/slide1.webp' }}" class="d-block w-100" alt="...">
                            </div>


                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">{{ __('Previous') }}</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">{{ __('Next') }}</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact -->
        <div class="content mt-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="row align-items-center">
                            <div class="col-lg-7 mb-5 mb-lg-0">
                                <h2 class="mb-3 text-primary">{{ __('Contact Us') }}</h2>
                                <form class="border-right pr-5 mb-5" method="POST" id="contactForm" name="contactForm"
                                    novalidate="novalidate">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend"> <i
                                                        class="fa-solid fa-user"></i>
                                                </span>
                                                <input type="text" class="form-control" id="validationCustomUsername"
                                                    aria-describedby="inputGroupPrepend" required placeholder=" First name">
                                                <div class="invalid-feedback">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="lname" id="lname"
                                                placeholder="Last name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group mt-1">
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend"><i
                                                        class="fa-solid fa-envelope"></i>
                                                </span>
                                                <input type="text" class="form-control" id="validationCustomUsername"
                                                    aria-describedby="inputGroupPrepend" required placeholder=" Email">
                                                <div class="invalid-feedback">

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group mt-1">
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend"> <i
                                                        class="fa-solid fa-circle-chevron-down"></i>
                                                </span>
                                                <select class="form-control">
                                                    <option hidden>{{ __('Select User type') }}</option>
                                                    <option>{{ __('Vendor') }}</option>
                                                    <option>{{ __('Delivery') }}</option>
                                                    <option>{{ __('Other') }}</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group mt-1">
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend"><i
                                                        class="fa-solid fa-comment-dots"></i>
                                                </span>
                                                <textarea class="form-control" name="message" id="message" cols="30" rows="7"
                                                    placeholder="Write your message"></textarea>
                                                <div class="invalid-feedback">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- // FIXME --}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="submit" value="Send Message"
                                                class="btn btn-primary rounded-3 py-2 px-4 mt-2">
                                            <span class="submitting"></span>
                                        </div>
                                    </div>
                                </form>
                                {{-- <div id="form-message-warning mt-4"></div> --}}
                                <div class="visually-hidden" id="form-message-success">
                                    {{ __('Your message was sent, thank you!') }}
                                </div>
                            </div>
                            <div class="col-lg-4 ml-auto">
                                <!-- <h3 class="mb-4 text-primary">Let's talk about everything.</h3> -->
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil deleniti itaque similique magni. Magni, laboriosam perferendis maxime!</p>
                                                                    <p><a href="#">Read more</a></p> -->
                                <img class="w-100" src="{{ asset('homepage') . '/contact.webp' }}" alt="contact">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="position-relative mt-5">
            <!-- Footer -->
            <footer class="text-center text-white position-absolute mb-0 w-100" style="background-color: #0a4275;">

                @guest
                    <div class="container pb-0">
                        <section class="">
                            <p class="d-flex justify-content-center align-items-center">
                                <span class="me-3">{{ __('Register for free') }}</span>
                                <a href="{{ route('register') }}" class="btn btn-outline-light btn-rounded">
                                    {{ __('Register') }}
                                </a>
                            </p>
                        </section>
                    </div>
                @else
                    <div class="container p-4 pb-0">
                        <section class="">
                            <p class="d-flex justify-content-center align-items-center">
                                {{-- {{ __('Register') }} --}}
                            </p>
                        </section>
                    </div>
                @endguest

                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2022 Copyright:
                    <a class="text-white" href="/">{{ config('app.name', 'Talabia') }}</a>
                </div>
            </footer>
        </section>
    @endsection
