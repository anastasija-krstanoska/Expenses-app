<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{

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
                return view('backend.auth.register'); //404
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


            return view('backend.auth.register');

        } catch (\Throwable $th) {
            return view('backend.auth.register');  //500
        }
    }


    public function login(Request $request)
    {
        if (Auth::attempt($request->only(['email', 'password']))) {
            $user = Auth::user();

            $token = $user->createToken("API TOKEN")->plainTextToken;
            $user->token = $token;
            $user->save();

        } else {
            return view('backend.auth.login'); //401
        }


        return view('backend.auth.login');

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
