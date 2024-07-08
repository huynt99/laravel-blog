<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;


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

    public function show(User $user)
    {
        return view('panel.user.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('panel.user.edit', compact('user'));
    }

    public function update(ProfileRequest $request, User $user)
    {
        $user->updateProfile($request, $user->id);
        return redirect()->back()->with('success', __("Update profile $user->name successfully"));

    }

    public function destroy(User $user)
    {
        try {
            $name = $user->name;
            $user->delete();
            return redirect()->back()->with('success', "Delete user $name successfully");
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->with('error', 'Can not delete this User');
        }

    }
}