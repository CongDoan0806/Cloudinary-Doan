<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class UserController extends Controller
{
    protected $UserService;

    public function __construct(UserService $UserService)
    {
        $this->UserService = $UserService;
    }

    public function uploadProfileFile(Request $request)
    {
        // Validate the request
        $data = $request->validate([
            'email' => 'required|email',
            'username' => 'required|string|max:255',
            'avatar' => 'required|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        $uploadedFileUrl = Cloudinary::upload($data['avatar']->getRealPath(), [
            'folder' => 'avatars',
            'public_id' => uniqid('avatar_'),
            'overwrite' => true,
        ])->getSecurePath();

        $data['avatar'] = $uploadedFileUrl;
        $result = $this->UserService->uploadProfileFile($data);
        return response()->json(['data' => $result, 'message' => 'File uploaded successfully'], 200);
    }
    
}