<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;


class UserController extends Controller
{
    const PANEL_SETTING = [
        'paginate' => [
            'user' => 10,
            'post' => 10
        ],

        'image_path' => [
            'avatar' => 'panel/img/',
            'post_image' => 'panel/posts/',
        ],

        'word_length' => 200,
    ];

    public function index(Request $request)
    {
        $user = User::query();
        if ($request->has('search') && !is_null($request->get('search'))) {
            $user = User::query()
                ->whereLike('first_name', $request->get('search'))
                ->whereLike('last_name', $request->get('search'))
                ->whereLike('username', $request->get('search'))
                ->whereLike('email', $request->get('search'));
        }
        $users = $user->paginate(self::PANEL_SETTING['paginate']['user']);

        return view('panel.user.index', compact('users'));
    }

}
