<?php

namespace App\Http\Controllers\Posts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
    public function index(int $id): string
    {
        return "testing this is working $id";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): string
    {
        return "Im am the method that creates";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): string
    {
        return "this is the show method $id";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id): int
    {
    	$newId = $id + 50;
    	return $newId;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function contact()
	{
		$people = [
			'keith',
			'Nick',
			'Kevin',
			'Sam',
			'Sandy',
		];
		return view('common.contact', compact('people'));
	}

	/**
	 * @param int $id
	 * @param string $name
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function showPost(int $id, string $name)
	{
//		var_dump($id);
//		return view('posts.post', [
//			'id' => $id,
//		]);

		return view('posts.post', compact('id','name'));
	}
}
