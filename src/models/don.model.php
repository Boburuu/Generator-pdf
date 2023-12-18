<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Don extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'postalCode',
        'city',
        'country'
    ];


}
?>
