<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Requests\CreateCommentRequest;

class CommentController extends Controller
{
    public function store(CreateCommentRequest $request, $id)
    {
        $validated = $request->validated();
        Movie::find($id)->addComment($validated['content']);
        return redirect()->back();
    }
}

