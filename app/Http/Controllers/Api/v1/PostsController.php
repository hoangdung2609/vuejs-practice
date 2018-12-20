<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Http\Resources\Post as PostResource;


class PostsController extends Controller
{
    public function getPosts(Request $request)
    {
        $limit = $request->input('limit', 10);
        $offset = $request->input('offset', 0);

        $posts = Post::with('user')->orderBy('created_at');

        $totalPost = $posts->count();
        $posts = $posts->offset($offset)->limit($limit)->get();

        $resource = PostResource::collection($posts);

        return response([
            'status' => 1,
            'message' => 'Success',
            'data' => [
                'total_post' => $totalPost,
                'data' => $resource
            ]
        ]);
    }
}
