<?php

namespace App\Http\Controllers\Admin;

use App\Models\Answer;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $answers = Answer::where('user_id', auth()->user()->id)->get();
        
        return view('admin.answer.listAnswer', compact('answers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'description' => 'required'
        ]);

        $data = $request->only([
            'title', 'user_id', 'type', 'description'
        ]);

        Answer::create($data);
        
        $comment = Comment::find($request->input('comment_id'));
        $comment->status = '1';
        $comment->save();
        return redirect()->route('comments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
        return view('admin.answer.showAnswer', compact('answer'));
    }

    public function shows($answer, $id_comment)
    {
        $answr = Answer::find($answer);
        return view('admin.answer.oldAnswer', compact('answr', 'id_comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
        $answer->delete();
        Session::flash('status', 'ok');
        return redirect()->route('comments.index');
    }

    public function delete_answer($answer, $id_comment)
    {
        $comment = Comment::find($id_comment);
        $comment->status = '0';
        $comment->save();
        $row = Answer::find($answer);
        return redirect()->route('comments.index');
    }

    public function deleteShowAnswer(Answer $answer)
    {
        $answer->delete();
        return redirect()->route("answers.index");
    }
}
