<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class productBindModel extends Model
{
    use Notifiable;
    protected $table = 'product_details';
    protected $primary = 'itemcode';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

      protected $fillable = [
        'itemcode',
        'itemname',
        'rate'
    ]; 

}
