<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{
    /**
     * Create User
     * @param Request $request
     * @return JsonResponse
     */
    public function createUser(Request $request)
    {
        try {
            //Validated
            $validateUser = Validator::make($request->all(),
                [
                    'name' => 'required',
                    'lastname' => 'required',
                    'email' => 'required|email',
                    'password' => 'nullable',
                ]);

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            $user = User::create([
                'name' => $request->name,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            $token = $user->createToken("API TOKEN")->plainTextToken;
            $user->token = $token;

            $user->save();


            return response()->json([
                'status' => true,
                'message' => 'User Created Successfully',

            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Login The User
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request): JsonResponse
    {
        if (Auth::attempt($request->only(['email', 'password']))) {
            $user = Auth::user();

            $token = $user->createToken("API TOKEN")->plainTextToken;
            $user->token = $token;
            $user->save();

        } else {
            return response()->json([
                'status' => false,
                'message' => 'Email & Password does not match with our record.',
            ], 401);
        }


        return response()->json([
            'status' => false,
            'message' => 'Email & Password does not match with our record.',
            'user' => $user
        ], 401);

    }
}
//    public function login(Request $request): JsonResponse
//    {
//        if (Auth::attempt($request->only(['email', 'password']))) {
//            $user = Auth::user();
//            $token = $user->createToken("API TOKEN")->plainTextToken;
//            $user->token = $token;
//            $user->save();
//
//            return response()->json([
//                'status' => true,
//                'message' => 'User Logged In Successfully',
//                'user' => $user,
//            ], 200);
//        }
//
//        return response()->json([
//            'status' => false,
//            'message' => 'Email & Password does not match with our record.',
//        ], 401);
//    }
//
//}
