<?php

namespace App\Http\Controllers\Api;

use App\Http\Controller;
 use App\Http\Resources\ExpenseResource;

use App\Models\Expense;
 use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::all();
        return ExpenseResource::collection($expenses);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'name' => 'required',
            'price' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Incorrect data.'], 404);
        }

        if ($request->input('id')) {
            $expense = Expense::find($request->input('id'));
        } else {
            $expense = new Expense;
        }
        $expense->name =        $request->input('name');
        $expense->price =       $request->input('price');
        $expense->user_id =     $request->input('user_id');
        $expense->category_id = $request->input('category_id');
        $expense->save();

        return \response()->json(['message' => 'Expense added.'], 201);
    }

    public function show($id)
    {
        $expense = Expense::find($id);
        if (!empty($expense)) {
            return \response()->json($expense);
        } else {
            return response()->json([
                "message" => 'Expense not found'
            ], 404);
        }
    }


    public function destroy($id): JsonResponse
    {
        $expense = Expense::find($id);
        if ($expense) {
            $expense->delete();

            return response()->json([
                "message" => 'Expense deleted'
            ], 200);
        } else {
            return response()->json([
                "message" => 'Expense not found'
            ], 404);
        }
    }

}
