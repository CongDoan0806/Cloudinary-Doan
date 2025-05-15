<?php
namespace App\Repositories;

use App\Models\User;
use Carbon\Carbon;

class UserRepository{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }
public function uploadProfileFile($request)
{
    return $this->model->create([
        'username' => $request['username'],
        'email' => $request['email'],
        'avatar' => $request['avatar'],
    ]);
}

}
