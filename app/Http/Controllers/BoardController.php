<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class BoardController extends Controller
{
    // 一覧画面を表示するアクション
    public function index()
    {
        $boards = Board::orderBy('created_at', 'asc')->paginate(10);
        return view('boards.index', ['boards' => $boards]);
    }


    public function create()
    {
        $board = new Board();
        $data = ['board' => $board];
        return view('boards.create', $data);
    }

    // 詳細画面を表示するアクション
    public function show($id)
    {
        $board = Board::findOrFail($id);
        $messages = Message::where('board_id', $board->id)->paginate(30);
        return view('boards.show', compact('board', 'messages'));
    }

    // 新規投稿を処理するアクション
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'name' => 'max:20',
            'body' => 'required'
        ]);
        $board = new Board();
        $board->title = $request->title;
        $board->name = $request->name ?? '名無し君';
        $board->body = $request->body;
        $board->save();

        return redirect()->route('boards.show', ['id' => $board->id]);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Board $board)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Board $board)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Board $board)
    {
        //
    }
}
