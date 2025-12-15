<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ChangePasswordController extends Controller
{
    public function changePasswordAdmin(Request $request) {
        return view('admin.change-password');
    }

    public function changePasswordProg(Request $request) {
        return view('admin.departments.programming.change-password');
    }

    public function changePasswordCyber(Request $request) {
        return view('admin.departments.cyber-security.change-password');

    }

    public function changePasswordGraphics(Request $request) {
        return view('admin.departments.graphics-design.change-password');

    }

    public function changePasswordUser(Request $request) {
        return view('user.change-password');

    }

    public function updatePassword(Request $request)
{
    $request->validate([
        'current_password' => ['required'],
        'new_password' => ['required', 'min:8', 'confirmed'],
    ], [
        'new_password.confirmed' => 'New password confirmation does not match.',
    ]);

    $userId = auth()->user()->id;
    $user = User::findOrFail($userId);

    if (!Hash::check($request->current_password, $user->password)) {
        throw ValidationException::withMessages([
            'current_password' => ['Current password is incorrect.'],
        ]);
    }

    // Prevent reusing the same password
    if (Hash::check($request->new_password, $user->password)) {
        throw ValidationException::withMessages([
            'new_password' => ['New password must be different from current password.'],
        ]);
    }

    $user->update([
        'password' => Hash::make($request->new_password),
    ]);

    return back()->with('success', 'Password changed successfully.');
}

}
