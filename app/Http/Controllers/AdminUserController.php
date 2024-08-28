<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\Messages;
use App\Models\Packages;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::all();
        $contactus = ContactUs::all();
        $messages = messages::all();
        $deletedMessages = messages::onlyTrashed()->get();
        $deletedUsers = User::onlyTrashed()->get();
        return view('admin.adminProfile', compact('contactus', 'users', 'messages', 'deletedMessages', 'deletedUsers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.createUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validator = $request->validate([
            'name' => 'required|string',
            'userName' => 'required|string|min:11|max:11|unique', // Ensure userName is exactly 11 characters long and unique
            'password' => 'string',
        ]);
        if ($validator->fails()) {
            $validator->errors()->add('validator', 'شماره تماس وارد شده صحیح نمی باشد، لطفا مجدد امتحان کنید!');
            return Redirect::back()->withErrors($validator);
        }


        $input = $request->all();
        try {
            User::create(
                [
                    'name' => $input['name'],
                    'userName' => $input['userName'],
                    'password' => $input['userName'],
                ]
            );
            Session::flash('success', 'کاربر با موفقیت ایجاد شد');
        } catch (\Exception $e) {
            $errorMessage = 'این نام کاربری قبلا استفاده شده است، لطفا نام کاربری دیگری انتخاب کنید.';

            Session::flash('error', $errorMessage);
            return redirect()->back();
        }
        return redirect(route('admin.index') . '#userManagement');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $deactiveUser = User::find($id);
        $deactiveUser->delete();
        Session::flash('success', 'با موفقیت حذف شد. ');
        return redirect()->route('admin.index') . '#userManagement';
    }

    public function restore(string $id)
    {
        $restoreUser = User::withTrashed()->findOrFail($id);
        $restoreUser->restore();
        Session::flash('success', 'با موفقیت بازگردانی شد. ');
        return redirect()->back();

    }
}
