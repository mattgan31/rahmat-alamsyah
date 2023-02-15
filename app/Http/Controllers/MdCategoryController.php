<?php

namespace App\Http\Controllers;

use App\Models\MdCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MdCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = MdCategory::all();
        error_log($data);
        return view('admin.md_category', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "category_name" => "required",
            "api" => "required",
        ]);

        $data = MdCategory::create([
            'category_name' => $request->post('category_name'),
            'api' => $request->post('api'),
        ]);
        if ($data->save()) {
            return redirect()->route('md_category.index')->with('success', 'Add Category has successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(MdCategory $mdCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MdCategory $mdCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MdCategory $mdCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MdCategory $mdCategory)
    {
        //
    }
}
