<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        // Messagesテーブルのレコードを全権取得
        $messages = Message::all();

        // messagesというキーで、Viewへ渡す
        return view('message/index', ['messages' => $messages]);
    }

    public function store(Request $request)
    {
        // リクエストからボディを取得し、保存
        $message = new Message();
        $message->body = $request->body;
        $message->save();

        // 処理後、リダイレクト
        return redirect('/messages');
    }
}
