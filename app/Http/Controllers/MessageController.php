<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Events\MessageSent;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

    // 新しいメッセージを投稿するアクション
    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'nullable|max:20',
            'body' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // 画像のバリデーションルール
        ]);
        $message = new Message();
        $message->board_id = $id;
        $message->name = $request->name ?? '名無し君';
        $message->body = $request->body;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $path = $image->storeAs('public', $filename);
            $message->image = $filename;
        }

        $message->save(); // メッセージを保存
        $imageUrl = $message->image ? asset('storage/' . $message->image) : null; // 画像URLを取得
        event(new MessageSent($message->name, $message->body, $id, $imageUrl)); // 画像URLを渡す

        $board = Board::withCount('messages')->findOrFail($id);
        $last_page = ceil($board->messages_count / 30);
        $last_message = $board->messages()->latest()->first(); // 最新のメッセージを取得
        return redirect()->route('boards.show', ['id' => $board->id, 'page' => $last_page, 'message_id' => $last_message->id]); // 最新のメッセージのページにリダイレクト
    }



    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
