<footer class="float-start w-100">
    <div class="container">
      <div class="row row-cols-1 row-cols-lg-5 gy-4 g-lg-5">
         <div class="col">
           <div class="logos-details">
              <a href="#" class="logos">
                 <img alt="log" src="{{asset('images/logo-uni-white.png')}}"/>
              </a>
              <p class="mt-3"> Contrary to popular belief, Lorem Ipsum is not simply random text.
                 It has roots in a piece of classical</p>
              <div class="mt-3 calis d-flex align-items-center">
                <i class="ri-phone-line"></i>
                 <h5 class="text-white ms-3"> <small class="mb-1 d-block"> PHONE </small>
                  180-2546254
                </h5>
              </div>
           </div>
         </div>
         <div class="col d-lg-grid justify-content-center">
            <h5 class="text-white"> Explore </h5>
            <ul class="mt-0">
               <li>
                <a href="#"> Home </a>
               </li>
               <li>
                <a href="#"> About </a>
               </li>
               <li>
                <a href="#"> Directory </a>
               </li>
               <li>
                <a href="#"> Contact </a>
               </li>
            </ul>
         </div>

         <div class="col">
            <h5 class="text-white"> Top Categories </h5>
            <ul class="mt-4">
              <li>
                <a href="#"> Finance </a>
              </li>
              <li>
                <a href="#"> Health </a>
              </li>
              <li>
                <a href="#"> Web script </a>
              </li>
              <li>
                <a href="#"> Sports </a>
              </li>
            </ul>
         </div>

         <div class="col">
            <h5 class="text-white"> Top Projects </h5>
            <ul class="mt-4">
              <li>
                <a href="#"> Finance Internship </a>
              </li>
              <li>
                <a href="#"> UpSkill Finance </a>
              </li>
              <li>
                <a href="#"> Nullam nec est non </a>
              </li>
              <li>
                <a href="#"> Sed semper metus </a>
              </li>
            </ul>
          </div>

          <div class="col">
            <h5 class="text-white"> Important Links </h5>
            <ul class="mt-4">
              <li>
                <a href="#"> Help Desk </a>
              </li>
              <li>
                <a href="#"> Refund and Returns Policy </a>
              </li>
              <li>
                <a href="#"> Terms of Services </a>
              </li>
            </ul>
          </div>

      </div>
      <hr class="mt-5"/>
      <div class="d-flex align-items-center justify-content-between">
          <p> © 2024 Uniprojecttaro.com. All rights reserved. </p>
          <div class="i-list">
              <ul class="d-flex align-items-center">
                 <li>
                   <a href="#"> <i class="ri-facebook-fill"></i> </a>
                 </li>
                 <li class="mx-3">
                  <a href="#"> <i class="ri-instagram-line"></i> </a>
                 </li>
                 <li>
                  <a href="#"> <i class="ri-twitter-x-fill"></i> </a>
                 </li>
              </ul>
          </div>
      </div>
    </div>
  </footer>



  <div class="modal fade login-div-modal" id="loginModal">
    <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
       <div class="modal-header">

       </div>
       <div class="modal-body">

            <form id="loginForm" method="POST">
              @csrf
             <div id="login-td-div" class="com-div-md">

               <h5 class="mb-3 text-center"> Login </h5>
               <button type="button" class="close" data-bs-dismiss="modal">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                   <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                 </svg>
               </button>
               <div class="login-modal-pn">
                
               <div class="mt-3 cm-select-login">

                 <div id="error-message" class="alert alert-danger" style="display: none;"></div>
                 <div class="country-dp">

                   <input type="email" name="email" class="form-control" placeholder="Username Or Email" required />
                 </div>
                 <div class="phone-div">

                     <input type="password" name="password" class="form-control" placeholder="Password" required />
                 </div>


               </div>



               <button type="submit" name="submit" class="btn continue-bn">  SIGN IN </button>
             </div>

             <p class="mt-3 text-center">
               <a data-bs-toggle="modal" class="regster-bn" data-bs-target="#lostpsModal" data-bs-dismiss="modal"> Lost Password ? </a>  </p>


               <p class="mt-3 text-center"> Do not have an account?
                 <a data-bs-toggle="modal" class="regster-bn" data-bs-target="#registerModal" data-bs-dismiss="modal"> Register </a>  </p>
             </div>
          </form>

       </div>

     </div>
    </div>
    </div>

    <div class="modal fade login-div-modal" id="registerModal">
    <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
       <div class="modal-body">
         <form action="{{ route('register.store') }}" method="POST">
           @csrf
             <div class="com-div-md">

               <h5 class="mb-3 text-center"> Free Register </h5>
               <button type="button" class="close" data-bs-dismiss="modal">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                   <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                 </svg>
               </button>
               <div class="login-modal-pn">

               <div class="mt-0 cm-select-login">
                 <div class="country-dp">

                   <input type="text" name="name" class="form-control" placeholder="Full Name" required />
                 </div>
                 <div class="phone-div">

                     <input type="email" name="email" class="form-control" placeholder="Email or Phone Number" required />
                 </div>
                 <div class="phone-div">

                   <input type="password" id="password" name="password" class="form-control" placeholder="Create Password" required />
                 </div>
                 <div class="phone-div">

                   <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm Password" required />
                   <div id="passwordMismatch" class="text-danger" style="display: none;">Passwords do not match</div>
                 </div>

                 <div class="mt-3 ml-3 forget2 d-flex justify-content-between">
                   <input type="checkbox" class="form-check-input" id="exampleCheck1">
                     <label class="form-check-label" for="exampleCheck1"> By clicking Register, you agree to our
                       Terms of Use
                       and
                       Cookie Policy</label>
                 </div>

               </div>



               <button type="submit" name="submit" class="mt-3 btn continue-bn"> Register </button>
             </div>

               <p class="mt-3 text-center"> Do not have an account?
                 <a data-bs-toggle="modal" class="regster-bn" data-bs-target="#loginModal" data-bs-dismiss="modal"> Login </a>  </p>
             </div>
         </form>
       </div>

     </div>
    </div>
  </div>


  <script src="{{asset('js/bootstrap.bundle.min.js')}}" ></script>
  <script src="{{asset('js/jquery.min.js')}}" ></script>
  <script src="{{asset('js/custom.js')}}" ></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>

  <script>
    $(document).ready(function() {
        $('#password_confirmation').on('input', function() {
            var password = $('#password').val();
            var passwordConfirm = $(this).val();

            if (password !== passwordConfirm) {
                $('#passwordMismatch').show();
            } else {
                $('#passwordMismatch').hide();
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#loginForm').on('submit', function(e) {
            e.preventDefault(); 

           
            $('#error-message').hide().empty();

            // Get form data
            var formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: '{{ route("login") }}', // Your login route
                data: formData,
                success: function(response) {
                 
                    window.location.href = '{{ route("directory") }}'; 
                },
                error: function(xhr) {
                    // Handle validation errors
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            $('#error-message').append('<div>' + value[0] + '</div>');
                        });
                        $('#error-message').show(); 
                    } else {
                        $('#error-message').append('<div>Something went wrong. Please try again later.</div>');
                        $('#error-message').show();
                    }
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        // Automatically check the checkbox when the page loads
        $('#exampleCheck1').prop('checked', true);
    });
</script>


  </body>
  </html>
