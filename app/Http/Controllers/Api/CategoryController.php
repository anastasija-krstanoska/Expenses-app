<?php

namespace App\Http\Controllers\Api;

use App\Http\Controller;
use App\Http\Controllers\Backend;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $categories = Category::all();
        return CategoryResource::collection($categories);
    }

    public function store(Request $request): JsonResponse
    {

        $validator = Validator::make(request()->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Incorrect data.'], 404);
        }

        if ($request->input('id')) {
            $category = Category::find($request->input('id'));
        } else {
            $category = new Category;
        }
        $category->name = $request->input('name');
        $category->save();

        return \response()->json(['message' => 'Category added.'], 201);
    }

    public function show($id): JsonResponse
    {
        $category = Category::find($id);
        if (!empty($$category)) {
            return \response()->json($$category);
        } else {
            return response()->json([
                "message" => 'Category not found'
            ], 404);
        }
    }


    public function destroy($id): JsonResponse
    {
        $category = Category::find($id);

        if ($category) {
            $category->delete();

            return response()->json([
                "message" => 'Category deleted'
            ], 200);
        } else {
            return response()->json([
                "message" => 'Category not found'
            ], 404);
        }
    }

}
