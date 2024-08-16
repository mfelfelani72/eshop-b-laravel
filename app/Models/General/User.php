<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        // 'role',
        'status',
    ];

    public function getUser ($id = null){

        $query = User::select(
            'users.id',
            'users.name as username',
            'users.email',
            'users.role',
            'users.status',
        )
            ->where('status', 'enable');

        if ($id) {
            $query->where('id', $id);
        }

        $data = $query->get()->toArray();
        // dd($data);
        return $data;

    }

}
