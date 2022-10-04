<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Models\Movie;

class CommentController extends Controller
{
    public function store(CreateCommentRequest $request, $id)
    {
        Movie::find($id)->addComment($request->validated['body']);
        return redirect()->back();
    }
}

