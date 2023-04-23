<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Myblog;

class myblogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }


    public function blogindex()
    {
        $today = date('Y-m-d H:i:s');
        $myblogs = $this->getMyBlogs();
        $users = User::paginate(5);
        return view('blog.blog', ['myblogs' => $myblogs, 'today' => $today, 'users' => $users]);
    }

    public function getMyBlogs()
    {
        return MyBlog::paginate(5);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $myblog = new Myblog();
        $data = ['myblog' => $myblog];
        return view('blog.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required'
        ]);
        $myblog = new Myblog();
        $myblog->title = $request->title;
        $myblog->content = $request->content;
        $myblog->save();

        return redirect(route('blogindex'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Myblog $myblog)
    {
        // 詳細画面
        $data = ['myblog' => $myblog];
        return view('blog.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Myblog $myblog)
    {
        // 編集画面
        $data = ['myblog' => $myblog];
        return view('blog.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Myblog $myblog)
    {
        // 更新処理
        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required'
        ]);

        $myblog->title = $request->title;
        $myblog->content = $request->content;
        $myblog->updated_at = now();
        $myblog->save();
        return redirect(route('show', $myblog));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Myblog $myblog)
    {
        $myblog->delete();
        return redirect(route('blogindex'));
    }
}
