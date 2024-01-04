<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RModel extends Model
{
    use HasFactory;

    protected $primarykey = 'id';
    public $timestemps = true; //Created_at e update_at
    public $incremeting = true;
    protected $fillable = []; 

    public function beforeSave()
    {
        return true;
    }
    public function save(array $options = [])
    {
        try{

            return parent::save($options);
        }catch(\Exception $e)
        {
            throw new \Exception($e->getMessage());
        }
    }
}
