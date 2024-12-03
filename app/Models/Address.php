<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return \Database\Factories\AddressFactory::new();
    }

    protected $table = 'mst_address';

    protected $fillable = [
        'address',
        'city_id',
        'city_name',
        'state_name',
        'state_id',
        'country_id',
        'country_name',
        'created_by',
        'updated_by',
    ];

    /**
     * Relationship with Clients
     */
    public function clients()
    {
        return $this->hasMany(Client::class, 'mst_address_id');
    }
}
