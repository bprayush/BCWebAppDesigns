<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 01 Dec 2017 10:02:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SchoolContact
 * 
 * @property int $SchoolContactID
 * @property string $FullName
 * @property string $Email
 * @property int $Phone1
 * @property string $Designation
 * @property int $SchoolID
 * @property int $Phone2
 * @property \Carbon\Carbon $CreatedTime
 * @property \Carbon\Carbon $UpdatedTime
 *
 * @package App\Models
 */
class SchoolContact extends Eloquent
{
	protected $primaryKey = 'SchoolContactID';

	const CREATED_AT = "CreatedTime";
	const UPDATED_AT = "UpdatedTime";

	protected $casts = [
		'Phone1' => 'int',
		'SchoolID' => 'int',
		'Phone2' => 'int'
	];

	protected $dates = [
		'CreatedTime',
		'UpdatedTime'
	];

	protected $fillable = [
		'FullName',
		'Email',
		'Phone1',
		'Designation',
		'SchoolID',
		'Phone2',
		'CreatedTime',
		'UpdatedTime'
	];

	public function getIdAttribute()
	{
		return $this->attributes['SchoolContactID'];
	}

	public function getFullNameAttribute()
	{
		return $this->attributes['FullName'];
	}

	public function getPhone1Attribute()
	{
		return $this->attributes['Phone1'];
	}

	public function getPhone2Attribute()
	{
		return $this->attributes['Phone1'];
	}

	public function getDesignationAttribute()
	{
		return $this->attributes['Designation'];
	}

}
