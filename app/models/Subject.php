<?php 

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
  // uncomment to ignore inserting timestamps
  // public $timestamps = [];
  
  // allow all rows to be populated
  protected $guarded = [];

  public function department()
  {
    // relationship between deparments and subjects
    return $this->belongTo(Departments::class);
  }
}