<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

use function PHPUnit\Framework\isNull;

class UserController extends Controller
{
    public function index(){

        return view('laravel-examples.user-profile.edit');
    }

    public function update()
    {
        $user = request()->user();
        
        request()->validate([
            'email' => 'required|email|unique:users,email,'.$user->id,
            'phone' => 'required|max:10',
            'picture' => 'mimes:jpg,jpeg,png,bmp,tiff |max:4096',
            'location' => 'required',
            'name'=>'required',
        ]);

        $attributes = request()->all();

        if (env('IS_DEMO') && in_array($user->id, [1, 2, 3])){
            
            if(auth()->user()->email == request()->email){
                
                if (request()->file('picture')) {
                    $currentAvatar = auth()->user()->picture;
        
                    if($currentAvatar !== 'profile/avatar.jpg' && $currentAvatar !== 'profile/avatar2.jpg' && $currentAvatar !== 'profile/avatar3.jpg' && !empty($currentAvatar)){
        
                        unlink(storage_path('app/public/'.$currentAvatar));
                        $path = request()->picture->store('profile', 'public');
                        $attributes['picture'] = "$path";
                    }
                    else{
        
                        $path = request()->picture->store('profile', 'public');
                        $attributes['picture'] = "$path";
                    }
        
                }else{
                    unset($attributes['picture']);
                }

                auth()->user()->update($attributes);
                return back()->withStatus('Profile successfully updated.');
            }
            
            return back()->with('demo', "You are in a demo version, you can't change the default user email." );
        };


        if (request()->file('picture')) {
            $currentAvatar = auth()->user()->picture;

            if($currentAvatar !== 'profile/avatar.jpg' && $currentAvatar !== 'profile/avatar2.jpg' && $currentAvatar !== 'profile/avatar3.jpg' && !empty($currentAvatar)){

                unlink(storage_path('app/public/'.$currentAvatar));
                $path = request()->picture->store('profile', 'public');
                $attributes['picture'] = "$path";
            }
            else{

                $path = request()->picture->store('profile', 'public');
                $attributes['picture'] = "$path";
            }

        }else{
            unset($attributes['picture']);
        }

        auth()->user()->update($attributes);

        return back()->withStatus('Profile successfully updated.');
    }

    public function passwordUpdate(){

        request()->validate([ 
            'old_password' => 'required',
            'password' => 'required|min:7|confirmed',
        ]);

        if (env('IS_DEMO') && in_array(auth()->user()->id, [1, 2, 3])){

            return back()->with('demo', "You are in a demo version, you can't change the default user password." );
        }
        
        $hashedPassword = auth()->user()->password;

        if (Hash::check(request()->old_password , $hashedPassword)) {
            if (!Hash::check(request()->password , $hashedPassword))
            {
                $users = User::findorFail(auth()->user()->id);
                $users->password = request()->password;
                $users->save();
                return back()->with(['success'=>'Password successfully updated.']);
            }
            else{
                return back()->with(['error' =>"New password can not be the old password!"]);
            } 
        }
        else{
            return back()->with(['error' =>"Old password doesn't match"]);
        }
    }
}
