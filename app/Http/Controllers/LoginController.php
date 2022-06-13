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
   
    /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     * @param  $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */
    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('driver_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        return User::create([
            'name'     => $user->name,
            'email'    => $user->email,
            'driver' => $provider,
            'driver_id' => $user->id
        ]);
    }
}