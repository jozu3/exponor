<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Laravel\Socialite\Facades\Socialite;;
use App\Models\User;
use Auth;
 
class LoginController extends Controller
{

 
    /**
     * Redirect the user to the Linkedin authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->scopes(['r_liteprofile', 'r_emailaddress'])->redirect();
    }
   
    /**
     * Obtain the user information from Linkedin.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();
        // $authUser = $this->findOrCreateUser($user, $provider);
        // Auth::login($authUser, true);
        // dd($user);
        //  echo $user->id;
        //  echo $user->name;
        //  echo $user->email;
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