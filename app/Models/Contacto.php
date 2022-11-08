 <?php


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillabe = ['nombre','correo','mensaje'];
}
