<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;



class AuthController extends Controller
{
    // public function login(Request $request) : Response
    // {
    //     $credentials = $request->only('email','password');

    //     if(Auth::attempt($credentials)){
    //         return response(Auth::user(), 200);
    //     }

    //     abort(401);
    // }

    // public function logout(){
    //     Auth::logout();
    //     return response(null,200);
    // }

    public function register(Request $request){
        $validator = Validator::make($request->all(),[
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password'
        ]);

        if($validator->fails()){
            $response = [
                'success' => false,
                'message' => $validator->errors()
            ];
            return response()->json($response, 400);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        $success['token'] = $user->createToken('MyApp')->plainTextToken;
        $success['name'] = $user->name;

        $response = [
            'success' => true,
            'data' => $success,
            'message' => 'User registered successfully'
        ];

        return response()->json($response, 200);

    }

    public function login(Request $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')->plainTextToken;
            $success['name'] = $user->name;
        
            $data = 'success fool';
            $output = $data;
            if (is_array($output))
                $output = implode(',', $output);
        
            // echo "<script>console.log('Debug Objects: " . $output . "' );</script>";




        $response = [
            'success' => true,
            'data' => $success,
            'message' => 'User login successfully'
        ];
        return response()->json($response, 200);
        }else{
            $response = [
                'success' => false,
                'message' => 'Unauthorised'
            ];
            return response()->json($response);
        }
    }
}
