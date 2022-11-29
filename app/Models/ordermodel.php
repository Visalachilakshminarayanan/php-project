<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class ordermodel extends Model
{
    use Notifiable;
    protected $table = 'order_details';
    //protected $table1 = 'product_details';
    protected $primary_key = 'orderno';
   // protected $primary = 'itemcode';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'orderno',
        'itemcode',
        'custname',
        'contactno',
        'emailid',
        'deliveraddress',
        'qty',
        'rate',
        'totalprice'
    ]; 

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

}

