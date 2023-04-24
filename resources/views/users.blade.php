@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
     
<div class=" justify-content-center">
      
  
<div class="card border-0 shadow-lg">
          
    <div class="row">
 <br><br>
<?php
$ct_uz = DB::table('users')->count();
?>
@if($ct_uz>0)
<?php
$ft_uz=DB::select('select * from users order by id desc');
?>
@foreach($ft_uz as $user)
<div class="card h-100 shadow-sm border-0 col-md-3">

<br>
 <center class="shadow-sm border-0 ">
<div class="card shadow-lg border-0" style="height:100px; width:100px; border-radius:100%; overflow: hidden;">
@if(($user->avatar)=='null')

@else

<img src="public/avatars/{!! ($user->avatar) !!}" width="100%" class="img-fluid" style="object-fit: cover;">

@endif    
</div>
<br>
<div class="card justify-content-center shadow-sm border-0">
    <a href="javascript:;"><small class="text-semi-bold"><em>{!! ($user->email) !!}</em></small></a>
    <br>
<strong class="text-capitalize h5">{!! $user->name !!}</strong>

</div>
   </center>
<br>


</div>
@endforeach

@endif





</div>

</div>

</div>









    </div>
</div>
@endsection
