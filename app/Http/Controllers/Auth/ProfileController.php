<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

/**
 * Class ProfileController
 * @package App\Http\Controllers\Auth
 */
class ProfileController extends Controller
{

    /**
     * ProfileController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        return view('auth/profile/profile');
    }

    /**
     * @param $id
     * @return $this
     */
    public function edit($id)
    {
        $user=User::find($id);

        if ($user==null) {
            return Redirect::to('/home');
        }

        return view('auth/profile/edit')->with('id', $id);
    }
}
