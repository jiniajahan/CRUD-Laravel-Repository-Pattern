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

    public function store(Request $request,$id)
    {

        try {

            $this->postRepository->store($id);

            return redirect('/posts');

        } catch (\Exception $e) {
            throw $e;
        }
    }
}


