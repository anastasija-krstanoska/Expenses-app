<?php

namespace App\Http\Controllers\Api;

use App\Http\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\UserResource;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $users = User::all();
        return UserResource::collection($users);
    }

//    public function store(Request $request): JsonResponse
//    {
//        $validator = Validator::make($request->all(), [
//            'name' => 'required',
//            'lastname' => 'required',
//            'email' => 'required|email',
//            'password' => 'nullable',
//        ]);
//
//        if ($validator->fails()) {
//            return response()->json(['message' => 'Incorrect data.'], 404);
//        }
//
//        if ($request->input('id')) {
//            $user = User::find($request->input('id'));
//        } else {
//            $user = new User;
//        }
//        $user->name = $request->input('name');
//        $user->lastname = $request->input('lastname');
//        $user->email = $request->input('email');
//        $user->password = Hash::make($request->input('password'));
//        $user->save();
//
//        return \response()->json(['message' => 'User added.'], 201);
//    }
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make(request()->all(), [
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'password' => 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Incorrect data.'], 400);
        }

        $userData = [
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
        ];

        // Check if password is provided before hashing
        if ($request->filled('password')) {
            $userData['password'] = Hash::make($request->input('password'));
        }

        $userId = $request->input('id');
        $user = $userId ? User::find($userId) : new User;

        if (!$user) {
            return response()->json(['message' => 'User not found.'], 404);
        }

        $user->fill($userData);
        $user->save();

        return response()->json(['message' => 'User added.'], 201);
    }

    public function show($id): JsonResponse
    {
        $user = User::find($id);
        if (!empty($user)) {
            return \response()->json($user);
        } else {
            return response()->json([
                "message" => 'User not found'
            ], 404);
        }
    }


    public function destroy($id): JsonResponse
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();

            return response()->json([
                "message" => 'User deleted'
            ], 200);
        } else {
            return response()->json([
                "message" => 'User not found'
            ], 404);
        }
    }

}
