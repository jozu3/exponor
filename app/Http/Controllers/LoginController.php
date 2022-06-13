<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Laravel\Socialite\Facades\Socialite;;
use App\Models\User;
 
class LoginController extends Controller
{

 
    /**
     * Redirect the user to the Linkedin authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
   
    /**
     * Obtain the user information from Linkedin.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider);
   
        switch($provider){
            case 'google' || 'linkedin':
                $user = $user->user();
                break;
            case 'facebook':
                $user = $user->fields(['name', 'first_name', 'last_name', 'email', 'gender', 'verified'])->user();
        }

        session([
            'user' => $user,
            'driver' => $provider
        ]);
        return redirect('/');
    }
   
    public function contactos(){
        $users = User::all();

        return view('contactos', compact('users'));
    }

    public function contactosexcel(){
        
    }
}