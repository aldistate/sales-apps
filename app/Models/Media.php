<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function agent_detail() {
        return $this->hasOne(AgentDetail::class);
    }

    public function agents_contract() {
        return $this->hasOne(AgentsContract::class);
    }
}
