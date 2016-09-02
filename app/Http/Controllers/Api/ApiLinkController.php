<?php

namespace App\Http\Controllers\Api;;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Link;

class ApiLinkController extends Controller
{
    public function index()
    {
        return Link::all();
    }

    public function store(Request $request)
    {
        Link::create($request->all());
    }

    public function show($id)
    {
        return Link::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $link = Link::findOrFail($id);
        $link->fill($request->all());
        $link->save();
    }

    public function destroy($id)
    {
        $link = Link::findOrFail($id);
        $link->delete();
    }
}
