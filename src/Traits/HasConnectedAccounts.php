<?php

namespace ChrisReedIO\Socialment\Traits;

use ChrisReedIO\Socialment\Models\ConnectedAccount;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasConnectedAccounts
{
    public function connectedAccounts(): HasMany
    {
        return $this->hasMany(config('socialment.models.connected_account', ConnectedAccount::class));
    }
}
