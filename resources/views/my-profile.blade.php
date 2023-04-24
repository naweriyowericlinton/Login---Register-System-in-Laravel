@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
     
<div class=" justify-content-center">
       @if ($errors->any())
  <div class="alert col-sm-12 alert-block alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>
        {{$error}}
      </li>
      @endforeach
    </ul>
   </div>
  @endif
  @if(session()->get('message'))
  <div class="alert alert-block col-sm-12 alert-success" role="alert">
    <strong>Success: </strong>
    {{session()->get('message')}}
  </div>
  <?php Session::remove('message');?>
  @endif 
  
<div class="card border-0 shadow-lg">
          
    <div class="row">
<div class="col-md-8 card border-0 shadow-sm">
    <br>
   <center>
<div class="card shadow-sm border-0" style="height:150px; width:150px; border-radius:100%; overflow: hidden;">
@if((Auth::user()->avatar)=='null')

@else

<img src="public/avatars/{!! (Auth::user()->avatar) !!}" width="100%" class="img-fluid" style="object-fit: cover;">

@endif    
</div>
<br>
   </center>
                             
 <form action="update-profile.html" method="post" enctype="multipart/form-data">
      @csrf
        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Avatar</label>
                          <div class="col-sm-10">
                            <input type="file" name="profile_pic" class="form-control">
                            <input type="hidden" name="pic_profile" value="{!! Auth::user()->avatar !!}">
                          </div>
                        </div>


                                <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Your Name</label>
                          <div class="col-sm-10">
                            <input type="text" value="{!! Auth::user()->name !!}" name="fullname" class="form-control">
                          </div>
                        </div>
<center>
    
    <button type="submit" class="btn btn-default shadow-sm p-3 mb-3 bg-white rounded rounded-pill">&nbsp;&nbsp;Update Profile&nbsp;&nbsp;</button>

</center> 

 </form>

    <br><br>
</div>

<div class="col-md-4 card border-0 shadow-sm">
    
    <br><br>

 <form action="update-password.html" method="post">
     @csrf
                                <div class="form-group row">
                          
                          <div class="col-sm-12">
                            <label>Old Password</label>
                            <input type="password" placeholder="Old Password" name="password" class="form-control">
                          </div>
                        </div>




                                <div class="form-group row">
                          
                          <div class="col-sm-12">
                            <label>New Password</label>
                            <input type="password" placeholder="New Password" name="newpassword" class="form-control">
                          </div>
                        </div>




                                <div class="form-group row">
                          
                          <div class="col-sm-12">
                            <label>Confirm New Password</label>
                            <input type="password" placeholder="Confirm New Password" name="confirmpassword" class="form-control">
                          </div>
                        </div>

                        <center>
    
    <button type="submit" class="btn btn-default shadow-sm p-3 mb-3 bg-white rounded rounded-pill">&nbsp;&nbsp;Update Password&nbsp;&nbsp;</button>

</center> 


 </form>

    <br><br>
</div>

</div>

</div>

</div>









    </div>
</div>
@endsection
