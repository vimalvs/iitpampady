<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $messages = Message::orderBy('id', 'DESC')->get();
        Message::where('is_new', 1)->update(['is_new' => 0]);
        return view('admin.messages', compact('messages'));
    }

    public function view($id)
    {
        $message = Message::find($id);
        Message::where('id', $id)->update(['is_viewed' => 1]);
        return view('admin.message-view', compact('message'));
    }

    public function destroy($id)
    {
        $message = Message::find($id);
        $message->delete();
        return redirect(route('message.index'));
    }


}
