<?php

namespace App\Observers;

use App\Models\Secret;
use Ramsey\Uuid\Uuid;

class SecretObserver
{
    public function creating(Secret $secret): void
    {
        $secret->auth_token = Uuid::uuid4()->toString();
    }

    public function deleted(Secret $secret): void
    {
    }
}
