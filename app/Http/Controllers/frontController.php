<?php
 namespace App\Http\Controllers;
 use Illuminate\Support\Facades\Auth;
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Session;
 use Illuminate\Support\Facades\Validator;
 Use DB;
 Use Str; 
 Use Hash;

class frontController extends Controller
{
   

   public function myprofile(Request $request)
   {
       // code...
    return view('my-profile');
   }

   public function update_profile(Request $request)
   {
       // code...
    $rules = [

        'fullname'=>'required|string',
        
        
 


    ];

    //validate input

     $validator = Validator::make($request->all(),$rules);
        if($validator->fails())
        {
            return back()->withInput()->withErrors($validator);
        }
        else
        {

            $data = $request->Input();

            if($request->hasFile('profile_pic'))
            {
                //echo$data['profile_pic'];

                //begin file upload
                $file = $request->file('profile_pic');
                $old_name = $file->getClientOriginalName();
                $filter = preg_replace('/[^A-Za-z0-9.\-]/', '', ($old_name));
                $new_name = Str::random(10).$filter;
                $pic = $new_name;
                $destination = 'public/avatars/';
                $file->move($destination,$pic);
            }

            else

            {
                $pic = $data['pic_profile'];

            }

            $fullname = $data['fullname'];

            $update_profile = DB::update('update users set name=?, avatar=? where id=?',[$fullname,$pic,(Auth::user()->id)]);

            if($update_profile)
            {
                Session::put('message','Profile Update Complete');
                return back();
            }
            else
            {
                echo$pic;
               // return back()->withErrors('Ugh! Something went wrong...');
            }



        }




   }








public function update_password(Request $request)
{
    // code...
    $rules = [

        'password'=>'required|string',
        'newpassword'=>'required|string',
        'confirmpassword'=>'required|string',
        
        
 


    ];

    //validate input

     $validator = Validator::make($request->all(),$rules);
        if($validator->fails())
        {
            return back()->withInput()->withErrors($validator);
        }
        else
        {
//begin verification

            $data = $request->Input();
            $oldpass = $data['password'];
            $new_pass = $data['newpassword'];
            $c_password = $data['confirmpassword'];

            if($c_password !== $new_pass )
            {
                return back()->withErrors('New Passwords Do Not Match');
            }
            else
            {

                $saved_password = Auth::user()->password;

                if(password_verify($oldpass, $saved_password))
                {
                    $save_new_pass = Hash::make($new_pass);
                    $user_id = Auth::user()->id;
                    $save_n_pass = DB::update('update users set password=? where id=?',[$save_new_pass,$user_id]);
                    if($save_n_pass)
                    {
                        Session::put('message','Password Updated Successfully');
                        return back();
                    }
                    else
                    {
                        return back()->withErrors('Ugh! Something Went Wrong');
                    }
                }
                else
                {
                    return back()->withErrors('Invalid Old Password');
                }

            }

        }


}
















public function users(Request $request)
{
    // code...
    return view('users');
}


}
