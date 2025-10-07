<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminApprovalController extends Controller
{
    public function approve($token)
    {
        $user = User::where('approval_token', $token)->first();

        if (! $user) {
            return view('pages.admin.superAdminFinal', [
                'status' => 'error',
                'message' => 'Invalid or expired approval link.',
            ]);
        }

        $user->update([
            'status' => 'approved',
            'approval_token' => null,
        ]);

        return view('pages.admin.superAdminFinal', [
            'status' => 'success',
            'message' => 'Admin approved successfully!',
        ]);
    }
}
