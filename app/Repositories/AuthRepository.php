<?php
namespace App\Repositories;

use App\Models\User;
use App\Repositories\impl\BaseInterface;
use Illuminate\Auth\Events\Registered;

class AuthRepository extends BaseRepository implements BaseInterface
{

    public function getModel()
    {
        // TODO: Implement getModel() method.
        return User::class;
    }

    public function createUser($data)
    {
        $this->model::create($data);
        event(new Registered($data));

        return response()->json(
            [
                'message'=>'User Registered',
                'status' => 201
            ]
        );
    }
}
