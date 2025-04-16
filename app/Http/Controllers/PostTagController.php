<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostTagRequest;
use App\Http\Resources\PostTagResource;
use App\Models\PostTag;

class PostTagController extends Controller
{
    public function index()
    {
        return PostTagResource::collection(PostTag::all());
    }

    public function store(PostTagRequest $request)
    {
        return new PostTagResource(PostTag::create($request->validated()));
    }

    public function show(PostTag $postTag)
    {
        return new PostTagResource($postTag);
    }

    public function update(PostTagRequest $request, PostTag $postTag)
    {
        $postTag->update($request->validated());

        return new PostTagResource($postTag);
    }

    public function destroy(PostTag $postTag)
    {
        $postTag->delete();

        return response()->json();
    }
}
