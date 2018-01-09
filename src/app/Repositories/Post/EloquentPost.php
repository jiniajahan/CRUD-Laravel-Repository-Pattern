<?php

use App\Post;

/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 09-Jan-18
 * Time: 10:13 PM
 */

class EloquentPost implements PostRepository
{
    /**
     * @var Post
     */
    private $model;


    /**
     * EloquentPost constructor.
     * @param Post $model
     */
    public function __construct(Post $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->paginate(5);
    }

    public function getById($id)
    {
        return $this->model->findById($id);
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function store(Request $request,$id)
    {
        $this->validate(\request(),[
                'title'=>'required|min:3',
                'body'=>'required|min:10'

            ]);

        Post::create([
            'user_id'=> auth()->id(),
            'title' =>request('title'),
            'body' =>request('body'),
        ]);
        return $this->model->save(array());
    }

    public function update($id, array $attributes)
    {
        $post = $this->model->findOrFail($id);
        $post->update($attributes);
        return $post;
    }

    public function delete($id)
    {
        $this->getById($id)->delete;
        return true;
    }
}