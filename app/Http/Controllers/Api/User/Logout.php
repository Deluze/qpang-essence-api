<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Resources\Api\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class Logout
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \App\Http\Resources\Api\UserResource
     */
    public function __invoke(Request $request)
    {
        /** @var User $user */
        $user = $request->user();

        $user->tokens()->update(['revoked' => true]);

        return response()->noContent(200);
    }
}
