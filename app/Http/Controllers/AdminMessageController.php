<?php

namespace App\Http\Controllers;

use App\Models\messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.createMessage');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $messageInput = $request->all();
        messages::create(
            [
                'time' => $messageInput['time'],
                'title' => $messageInput['title'],
                'body' => $messageInput['body'],
            ]
        );
        Session::flash('success', 'پیام جدید با موفقیت ایجاد شد.');
        return redirect(route('admin.index') . '#messageManagement');
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
        $input = messages::find($id);
        $input->delete();
        Session::flash('success', 'با موفقیت حذف شد. ');
        return redirect()->route('admin.index').'#messageManagement';
    }

    public function restore(string $id)
    {
        $restoreInputs = messages::withTrashed()->findOrFail($id);
        $restoreInputs->restore();
        Session::flash('success', 'کاربر با موفقیت بازگردانده شد.');
        return redirect()->back();
    }
}
