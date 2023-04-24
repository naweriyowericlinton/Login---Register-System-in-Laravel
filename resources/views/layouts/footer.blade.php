

<!------------------login modal----------------------->
<div class="modal fade  border-0" id="loginModal" tabindex="-1" role="dialog"   aria-hidden="true">
  <div class="modal-dialog border-0" role="document">
    <div class="modal-content border-0">
      


     

<br>
<div class="container border-0 ">
  
  <form method="POST" action="{{ route('login') }}" id="login_form" >
  @csrf
  <div class="input-group">
   <input required autocomplete="off" autofill="off" autofocus class="form-control rounded-pill  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  type="email"  placeholder="Your Account Email">
   @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
    @enderror

  </div>
  <br>
   <div class="input-group">
   <input required autocomplete="off"  autofill="off" class="form-control rounded-pill  @error('password') is-invalid @enderror" name="password" type="password"  placeholder="Your Account Password">
    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
      @enderror
  </div>
  <br>
  <div class="form-check form-switch">
  <input  class="form-check-input" type="checkbox" name="remember" id="flexSwitchCheckChecked remember">
  <label class="form-check-label" for="flexSwitchCheckChecked">Stay Logged In</label>
</div>

<br>

  <div class="input-group col-lg-12">
     <button type="submit" class="btn btn-default btn-block shadow-lg p-3 mb-3 bg-white rounded rounded-pill" > &nbsp; &nbsp; &nbsp; Login  &nbsp; &nbsp; &nbsp;</button>   
  </div>

</form>

</div>


   

    </div>
  </div>
</div>
<!---------------------End Login Modal----------------------------->













<!------------------Register modal----------------------->
<div class="modal fade  border-0" id="registerModal" tabindex="-1" role="dialog"   aria-hidden="true">
  <div class="modal-dialog border-0" role="document">
    <div class="modal-content border-0">
      


     

<br>
<div class="container border-0 ">
  
  <form action="{{ route('register') }}" method="post" id="handleAjax">
  @csrf
  <div class="input-group">
   <input required autocomplete="off" id="name" autofill="off" autofocus class="form-control rounded-pill @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}"  placeholder="Your Full Name">
     @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
          @enderror
  </div>
  <br>

  <div class="input-group">
   <input required autocomplete="off" autofill="off" autofocus class="form-control rounded-pill @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" type="email"  placeholder="Your Account Email">
                                   @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
  <br>
   <div class="input-group">
   <input required autocomplete="off"  autofill="off" class="form-control rounded-pill @error('password') is-invalid @enderror" name="password" type="password"  placeholder="Your New Password Please ">
    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
  <br>
  
   <div class="input-group">
   <input required autocomplete="off"  autofill="off" class="form-control rounded-pill" type="password" name="password_confirmation"  placeholder="Please Confirm Your New Password">
  </div>
  <br>
  <div class="form-check form-switch">
  <input required class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" >
  <label class="form-check-label" for="flexSwitchCheckChecked">
    I Agree To The 
    <em>
      <a href="javascript:;" style="text-decoration: none;"> Terms Of Use </a>
    </em>
  </label>
</div>

<br>

  <div class="input-group col-lg-12">
     <button type="submit" class="btn btn-default btn-block shadow-lg p-3 mb-3 bg-white rounded rounded-pill" > &nbsp; &nbsp; &nbsp; Create Account  &nbsp; &nbsp; &nbsp;</button>   
  </div>

</form>
<br>
<div id="errors-list"></div>
</div>


   

    </div>
  </div>
</div>
<!---------------------End Register Modal----------------------------->

 


</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>