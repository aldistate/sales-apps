<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientsContract extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function client() {
        return $this->belongsTo(Client::class);
    }

    public function service() {
        return $this->belongsTo(Service::class);
    }

    public function invoice() {
        return $this->hasOne(Invoice::class);
    }
}
