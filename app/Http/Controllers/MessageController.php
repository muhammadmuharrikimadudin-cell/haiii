<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|min:10'
        ]);

        Message::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'status' => 'unread'
        ]);

        return back()->with('success', 'Pesan berhasil dikirim!');
    }

    public function index()
{
    $messages = Message::latest()->get();

    $unreadCount = Message::where('status', 'unread')->count();

    return view('admin.messages.index', compact('messages', 'unreadCount'));
    }   

    public function destroy($id)
    {
        Message::findOrFail($id)->delete();

        return back();
    }

       public function show($id)
    {
        $message = Message::findOrFail($id);

        $message->update([
            'status' => 'read'
    ]);

    return view('admin.messages.show', compact('message'));
    }
}