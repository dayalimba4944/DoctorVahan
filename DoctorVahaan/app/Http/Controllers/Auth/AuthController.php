<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
use Tymon\JWTAuth\Facades\JWTAuth;

# Models
use App\Models\User;

class AuthController extends Controller
{
    /**
     * log-in
     */
    public function logIn(Request $request)
    {
        // return "hi";
        try {
            $validatedData = $request->validate([
                'email' => 'required|email:rds,dns',
                'password' => 'required',
            ], [
                'email.dns' => 'Email format is not valid',
                'email.rds' => 'Email format is not valid',
            ]);
    
            $user = User::where('email', $validatedData['email'])->first();
    
            if ($user) {
                if (Hash::check($request->password, $user->password)) {
                    if ($user->status == 1) {
                        $token = JWTAuth::fromUser($user);
    
                        // Update user details after successful login
                        $user->update([
                            'online' => 1,
                            'remember_token' => $token,
                        ]);
    
                        return response()->json([
                            'message' => 'Logged in successfully',
                            'token' => $token,
                            'user_details' => $user,
                            'base_url' => url('/'),
                            'status' => 200,
                        ], 200);
                    } else {
                        return response()->json([
                            'message' => "Your account is not active. Please contact support.",
                            'status' => 202,
                        ], 202);
                    }
                } else {
                    return response()->json(['message' => 'Entered password is incorrect', 'status' => 203], 203);
                }
            } else {
                return response()->json(['message' => 'Email is incorrect', 'status' => 203], 203);
            }
        } catch (ValidationException $e) {
            $errors = $e->errors();
            $old_values = [
                'email' => $request->email,
                'password' => $request->password,
            ];
            
            return view('Login', ['errorResponse' => $errors],['old_values' => ($request)]);
        }
    }


    /**
     * log-out
     */
    public function logOut()
    {
        try {
            $token = JWTAuth::getToken();
            JWTAuth::invalidate($token);
    
            // Update user details after successful logout
            $user = auth()->user();
            if ($user) {
                $user->update(['online' => 0]);
            }
    
            return response()->json(['message' => 'Logout successful', 'status' => 200], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Unable to logout', 'status' => 500], 500);
        }
    }
   

    /**
     * create otp
     */
    function generateOTP($count = 6)
    {
        return Str::random($count);
    }

        /**
     * create otp
     */
    function getQuote (Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|regex:/^[a-zA-Z\s]+$/',
                // 'phone_code' => 'required|regex:/^\+[0-9]+$/',
                'phone_number' => 'required|regex:/^\d{10}$/',
                'email' => 'required|email:rds,dns',
                'subject' => 'required',
                // 'message' => 'required',
            ],
            [
                'email.dns' => 'Email format is not valid',
                'email.rds' => 'Email format is not valid',
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
                // 'phone_code' => $request->phone_code,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'subject' => $request->subject,
            ];
            
            return view('getQuate', ['errorResponse' => $errors],['old_values' => ($request)]);
        }
    }

}
