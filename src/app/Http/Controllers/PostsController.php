<?php

namespace App\Http\Controllers;

use App\Exceptions\RequestException;
use App\Post;
use Illuminate\Http\Request;

use \PostRepository ;

class PostsController extends Controller
{
    /**
     * @var PostRepository
     */
    private $postRepository;

    /**
     * PostsController constructor.
     * @param PostRepository $postRepository
     */
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index(){

        try {

            $posts = $this->postRepository->getAll();

//            dd($posts);
            return view('posts.index',[ 'posts' => $posts]);

        } catch (\Exception $e) {
            throw $e;
        }

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){

//        $this->postRepository->create(array);
        return view('posts.create');
    }

    public function show($id){

        $post = $this->postRepository->getById($id);

        return view('posts.show',[ 'post' => $post]);

    }

    public function store(Request $request)
    {

        try {

            $this->validate(\request(),[
                'title'=>'required|min:3',
                'body'=>'required|min:10'

            ]);

            Post::create([
                'user_id'=> auth()->id(),
                'title' =>request('title'),
                'body' =>request('body'),
            ]);

            return redirect('/posts');

        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function destroy($id){
        try {

            $this->authorize('update',$id);
            $this->postRepository->delete($id);

            return redirect('/posts');

        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function edit($id)
    {
        try {
            $post=$this->postRepository->edit($id);

            return view('posts.edit', compact('post'));

        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function update($id, Request $request,Post $post){
        try{

            $post = Post::FindorFail($id);

            $this->validate(\request(),[
                'title'=>'required|min:3',
                'body'=>'required|min:10'

            ]);

            $post->update($request->all());
            return redirect('/posts');

        }catch (\Exception $e) {
            throw $e;
        }
    }
}


