<?php

namespace App\Http\Controllers;
use Response;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Models\UserCountry;
class CountryController extends Controller
{
    public function index(){
        // $user = User::with('contact')->first();
        // // return $user->all();
        // return $user->contact;


        // $user = Contact::with('user')->first();
        // // return $user->all();
        // return $user->user;


        // $user = User::with('contact','posts')->find(1);
        // return $user->toArray();


        // $post = Post::with('user')->first();
        // return $post->toArray();

        //many to many 
        
        $countries = Country::all();
        $user = User::with('countries')->first();
        $user->countries()->attach($countries);
        //dd($user);
        return Response::json($user);
     


    }
}
