<?php

namespace App\Policies;

use App\Models\Secret;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SecretPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Secret $secret): bool
    {
        return $user->getKey() === $secret->user_id;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Secret $secret): bool
    {
        return $user->getKey() === $secret->user_id;
    }

    public function delete(User $user, Secret $secret): bool
    {
        return $user->getKey() === $secret->user_id;
    }

    public function restore(User $user, Secret $secret): bool
    {
        return $user->getKey() === $secret->user_id;
    }

    public function forceDelete(User $user, Secret $secret): bool
    {
        return $user->getKey() === $secret->user_id;
    }
}
