<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

# Models
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|integer|min:1',
        ]);

        $id = $request->input('id'); 
        $user = User::find($id); 

        if (!$user) {
            return response()->json(['message' => 'User not found', 'status' => 404], 404);
        }

        return view('users.index', ['user' => $user]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|regex:/^[a-zA-Z\s]+$/',
                // 'phone_code' => 'required|regex:/^\+[0-9]+$/',
                'phone_number' => 'required|regex:/^\d{10}$/',
                'email' => 'required|email:rds,dns',
                'password' => [
                    'required',
                    'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/',
                    'confirmed',
                ],  
            ],
            [
                'email.dns' => 'Email format is not valid',
                'email.rds' => 'Email format is not valid',
                'password.regex' => 'The password must contain at least one lowercase letter, one uppercase letter, one number, one special character, and be 8 or more characters in length',
                'password.confirmed' => 'Password and password confirmation does not matched',
            ]);
        
      
            // User::insert([
            //     'name' => $request->name,
            //     'user_type' => 'customer',
            //     'phone_code' => $request->phone_code,
            //     'is_verified' => 0,
            //     'contact' => $request->phone_number,
            //     'email' => $request->email,
            //     'password' => Hash::make($request->password),
            // ]);

            return response()->json(['message' => 'Registered successfully', "status" => 200], 200);
           
        } catch (ValidationException $e) {
            $errors = $e->errors();
            $old_values = [
                'name' => $request->name,
                'phone_code' => $request->phone_code,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'password' => $request->password,
            ];
            
            return view('signup', ['errorResponse' => $errors],['old_values' => ($request)]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|regex:/^[a-zA-Z\s]+$/',
                // 'phone_code' => 'required|regex:/^\+[0-9]+$/',
                'phone_number' => 'required|regex:/^\d{10}$/|unique:users,phone_number,' . $id,
                'email' => 'required|email|unique:users,email,' . $id,
                'password' => [
                    'nullable',
                    'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/',
                    'confirmed',
                ],
            ], [
                'email.unique' => 'Email address is already in use.',
                'password.regex' => 'The password must contain at least one lowercase letter, one uppercase letter, one number, one special character, and be 8 or more characters in length.',
                'password.confirmed' => 'Password and password confirmation do not match.',
            ]);
    
            $user = User::find($id);
    
            if (!$user) {
                return response()->json(['message' => 'User not found', 'status' => 404], 404);
            }
    
            $user->update([
                'name' => $request->name,
                'phone_code' => $request->phone_code,
                'contact' => $request->phone_number,
                'email' => $request->email,
                'password' => $request->password ? Hash::make($request->password) : $user->password,
                // Add other fields as needed
            ]);
    
            return response()->json(['message' => 'User updated successfully', 'status' => 200], 200);
        } catch (ValidationException $e) {
            $errors = $e->errors();
            $old_values = [
                'name' => $request->name,
                'phone_code' => $request->phone_code,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'password' => $request->password,
            ];
            
            return view('signup', ['errorResponse' => $errors],['old_values' => ($request)]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $user = User::find($id);
    
            if (!$user) {
                return response()->json(['message' => 'User not found', 'status' => 404], 404);
            }
    
            $user->delete();
    
            return response()->json(['message' => 'User deleted successfully', 'status' => 200], 200);
        } catch (\Exception $e) {
            \Log::error($e);
    
            return response()->json(['error' => 'Internal Server Error', 'status' => 500], 500);
        }
    }
}
