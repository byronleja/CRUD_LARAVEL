<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /**
         * SELECT p.id, p.`title`, p.`body`, a.`name` AS author_name, c.`name` AS category FROM posts AS p
         * INNER JOIN `authors` AS a ON a.`id` = p.`author_id`
         * INNER JOIN `categories` AS c ON c.`id` = p.`category_id`
         */

        //Relacion de tablas usando inner join
       $data = Post::select(
            'posts.id',
            'posts.title',
            'posts.body',
            'a.name as autor',
            'c.name as cat'
        )
            ->join('authors as a', 'posts.author_id', '=', 'a.id')
            ->join('categories as c', 'posts.category_id', '=', 'c.id')
            ->get();

        //Relacion de tablas usando with
        
        //$data = Post::with(['autor','category'])->get();

        // Otra forma
       /* $data = DB::select("SELECT p.id, p.`title`, p.`body`, a.`name` AS autor, c.`name` AS category 
        FROM posts AS p 
        INNER JOIN `authors` AS a ON a.`id` = p.`author_id` 
        INNER JOIN `categories` AS c ON c.`id` = p.`category_id`");
        */

      //  $data = Author::with('post')->get();

        return view('reportes.index', ['posts' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
