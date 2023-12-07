<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'res'=>true,
            'users'=>'Okey',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newPassword = bcrypt($request['password']);
        try{
            $user = User::create([
                'name' =>$request['name'],
                'email'=>$request['email'],
                'password' => $newPassword = bcrypt($request['password']),
                
            ]);
            return response()->json([
                'res' => true,
                'user' => $user
            ]);
        }catch(exeption $e){
            return response()->json([
                'res'=>$e
            ]);
        }
    }



    public function loguearse(Request $request){
        $email =$request['email'];
        $user =User::where('email',$email)->first();
            if($user){
                if($user && Hash::check($request['password'],$user->password)){

                    return response()->json([
                        'res' => true,
                        'user' => $user,
                    ]);

                    
                }
                return response()->json([
                    'res' => false,
                    'mensaje' => "Credenciales erroneos",
                ]);

            }else{
                return respose()->json([
                    'res'=>false,
                    'mensaje'=>'Usuario no existe',
                ]);
            }
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
