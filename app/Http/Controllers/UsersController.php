<?php

namespace App\Http\Controllers;

date_default_timezone_set('Asia/Kolkata');

use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;


class UsersController extends Controller
{
    public function users(Request $request)
    {
        $data = DB::table('users')
            ->get();

        Log::info($data);

        return view('userList', ['users' => $data]);
    }

    public function userDelete(Request $request)
    {
        $data = DB::table('users')
            ->where('id', $request->id)
            ->delete();

        return back()
            ->with('success', ' slected user deleted successfully .');
    }

    public function detailUser(Request $request)
    {
        $data = DB::table('users')
            ->where('id', $request->id)
            ->get();

        return view('userDetail', ['users' => $data]);
    }

    public function editUser(Request $request)
    {
        $data = DB::table('users')
            ->where('id', $request->id)
            ->get();

        return view('editUser', ['users' => $data]);
    }

    public function updateUser(Request $request)
    {
        Log::info($request->all());

        $request->validate([
            'name' => 'string|required',
            'email' => 'email|required',
        ]);

        DB::table('users')
            ->where('id', $request->id)
            ->update([
                "name" => $request->name,
                "email" => $request->email,
                "updated_at" => Carbon::now(),
            ]);


        return redirect('userList')
            ->with('success', ' user data update successfully .');
    }
}
