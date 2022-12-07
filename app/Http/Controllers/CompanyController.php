<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Company;

class CompanyController extends Controller
{
    public function register(Request $request){
        // $validator = Validator::make($request->all(),[
        //     'CompanyName' => 'required',
        //     // 'lastName' => 'required',
        //     // 'email' => 'required|email',
        //     'password' => 'required',
        //     'c_password' => 'required|same:password'
        // ]);

        // if($validator->fails()){
        //     $response = [
        //         'success' => false,
        //         'message' => $validator->errors()
        //     ];
        //     return response()->json($response, 400);
        // }

        // $input = $request->all();
        // $input['password'] = bcrypt($input['password']);
        // $user = Company::create($input);

        // $success['token'] = $user->createToken('MyApp')->plainTextToken;
        // $success['name'] = $user->name;

        // $response = [
        //     'success' => true,
        //     'data' => $success,
        //     'message' => 'Company registered successfully'
        // ];

        // return response()->json($response, 200);
            $response = "TEST";
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
            'message' => 'Company login successfully'
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
