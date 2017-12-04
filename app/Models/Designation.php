<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 01 Dec 2017 10:02:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Designation
 * 
 * @property int $DesignationID
 * @property string $Designation
 *
 * @package App\Models
 */
class Designation extends Eloquent
{
	protected $table = 'Designation';
	protected $primaryKey = 'DesignationID';
	public $timestamps = false;

	protected $fillable = [
		'Designation'
	];

	public function getIdAttribute()
	{
		return $this->DesignationID;
	}

	public function getDesignationAttribute()
	{
		return $this->Designation;
	}
}
