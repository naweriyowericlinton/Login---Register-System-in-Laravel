@include('layouts.header')

<div class="container">
  

    <div style="margin-left: 5%; margin-top: 5%;" class="card shadow p-3 mb-5 bg-white rounded border-0">

      <h4 class="text-center">Hi There!</h4>

      <div class="card-body border-0">
        <p class="text-center">
          <em class="display-5">I'm Naweri.</em>
          <br>
          <br>
          Welcome To A World Of Infinite <strong>Possibilities</strong><br>
          Please Register Your Self Or Login To Get Started

          <center>
            <br><br>
            <button class="btn btn-default shadow p-3" data-toggle="modal" data-target="#loginModal"> Login</button>

            &nbsp;&nbsp;
            <button class="btn btn-default shadow p-3" data-toggle="modal" data-target="#registerModal"> Create An Account </button>

          </center>
        </p>
      </div>
    </div>
  

</div>




@include('layouts.footer');