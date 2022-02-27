<?php

namespace App\Http\Controllers;

use App\Illust;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class IllustController extends Controller
{
    public function top(Illust $illust)
    {
        return view('illusts/top')->with(['illusts' => $illust->getPaginateByLimit()]);
    }
    
    public function show(Illust $illust)
    {
        return view('illusts/show')->with(['illust' => $illust]);
    }
    
    public function profile(Illust $users)
    {
        return view('illusts/profile')->with(['profile' => $users]);
    }
    
    public function store(PostRequest $request, Illust $illust)
    {
        $input = $request['illust'];
        $illust->fill($input)->save();
        return redirect('/illusts/' . $illust->id);
    }
    
    public function edit(Illust $illust)
    {
        return view('illusts/edit')->with(['illust' => $illust]);
    }
    
    public function update(PostRequest $request, Illust $illust)
    {
        $input_post = $request['illust'];
        $illust->fill($input_post)->save();

        return redirect('/ilusts/' . $illust->id);
    }
    
    public function delete(Illust $illust)
    {
        $illust->delete();
        return redirect('/');
    }
}