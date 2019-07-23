<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//classe per salvare img
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

//classe per costruire img
use App\UserPicture;
use App\User;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $user = Auth::user();
        return view('home', compact('user'));
    }

    public function store(Request $request)
    {

      $dati = $request->all();
      //dd($dati);
      // $id = Auth::id();
      //dd($id);
      $img = Storage::put('upload_img', $dati['img']);
      $new_image = new UserPicture();
      $new_image->path = $img;
      $new_image->user_id = Auth::id(); // la classe Auth accede ai dati dell'utente loggato
      $new_image->save();

      return redirect()->route('user.home');
    }

}
