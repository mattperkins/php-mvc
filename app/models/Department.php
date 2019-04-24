<?php 

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
  protected $guarded = [];

  // only allow name field to be populated
  // protected $fillable = ["name"];

  public function subjects()
  {
    // relationship between deparments and subjects
    return $this->hasMany(Subject::class);
  }
}