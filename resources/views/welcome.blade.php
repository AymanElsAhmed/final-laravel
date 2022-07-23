@extends('layouts.app')

@section('styles')
    <style>
         .image-aboutus-banner {
    background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url("about.webp");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: #fff;
    padding-top: 110px;
    padding-bottom:110px;
 }
 
  .image-aboutus-sm-banner {
    background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url("about.webp");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: #fff;
    padding-top: 30px;
    padding-bottom:30px;
 }
.lg-text {
    font-size:52px;
    font-weight: 600;
    text-transform: none;
    color:#fff;
}
.image-aboutus-para {
    color:#fff;
}


    </style>
    @endsection

    @section('content')

    <div class="image-aboutus-banner mb-3"style="margin-top:70px">
        <div class="container">
         <div class="row">
             <div class="col-md-12">
              <h1 class="lg-text">About Us</h1>
              <p class="image-aboutus-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
         </div>
     </div>
     </div>
        
<!-- slider -->

<div class="content mt-3">
  <div class="container">
  <div class="row justify-content-center">
<div id="carouselExampleControls" class="carousel slide mb-3 w-50 "  data-bs-ride="carousel">
  <h2 class="text-primary mt-3">Start Journey With Us :</h2>

  <div class="carousel-inner ">
    <div class="carousel-item ">
      <img src="{{ asset('homepage') . '/slide3.webp'}}" class="d-block w-100 " alt="...">
    </div>
    <div class="carousel-item active">

      <img src="{{ asset('homepage') . '/slide2.webp'}}" class="d-block w-100 " alt="...">
    </div>
    <div class="carousel-item ">
      <img src="{{ asset('homepage') . '/slide1.webp' }}" class="d-block w-100" alt="...">
    </div>
   

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
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
        <h2 class="mb-3 text-primary">Contact Us</h2>
        <form class="border-right pr-5 mb-5" method="post" id="contactForm" name="contactForm" novalidate="novalidate">
        <div class="row">
        <div class="col-md-6 form-group">
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">     <i class="fa-solid fa-user"></i>
                </span>
                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required    placeholder= " First name">
                <div class="invalid-feedback">
                  
                </div>
              </div>
        </div>
        <div class="col-md-6 form-group">
        <input type="text" class="form-control" name="lname" id="lname" placeholder="Last name">
        </div>
        </div>
        <div class="row">
        <div class="col-md-12 form-group mt-1">
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fa-solid fa-envelope"></i>
                </span>
                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required    placeholder= " Email">
                <div class="invalid-feedback">
                  
                </div>
              </div>  
       </div>
        <div class="row">
            <div class="col-md-12 form-group mt-1">
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend"> <i class="fa-solid fa-circle-chevron-down"></i>
                    </span>
                    <select class="form-control">   
                        <option> select User type</option>
                        <option>Vendor</option>
                        <option>Delivery</option>
                        <option>Other</option>
                      </select>                    <div class="invalid-feedback">
                      
                    </div>
                  </div>  

          </div>
          
          </div>
        </div>
        <div class="row">
        <div class="col-md-12 form-group mt-1">
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fa-solid fa-comment-dots"></i>
                </span>
                <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message"></textarea>
                <div class="invalid-feedback">
                  
                </div>
              </div>  
        </div>
        </div>
        <div class="row">
        <div class="col-md-12">
        <input type="submit" value="Send Message" class="btn btn-primary rounded-3 py-2 px-4 mt-2">
        <span class="submitting"></span>
        </div>
        </div>
        </form>
        <div id="form-message-warning mt-4"></div>
        <div id="form-message-success">
        Your message was sent, thank you!
        </div>
        </div>
        <div class="col-lg-4 ml-auto">
        <!-- <h3 class="mb-4 text-primary">Let's talk about everything.</h3> -->
        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil deleniti itaque similique magni. Magni, laboriosam perferendis maxime!</p>
        <p><a href="#">Read more</a></p> -->
        <img class="w-100" src="{{ asset('homepage') . '/contact.webp'}}" alt="contact">
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>


     <section>
        <!-- Footer -->
        <footer class="text-center text-white" style="background-color: #0a4275;">
          <div class="container p-4 pb-0">
            <section class="">
              <p class="d-flex justify-content-center align-items-center">
                <span class="me-3">Register for free</span>
                <a href="/register" class="btn btn-outline-light btn-rounded">
                  Sign up!
                </a>
              </p>
            </section>
          </div>
      
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white" href="">web site name</a>
          </div>
        </footer>
      </section>
    
    

  
@endsection