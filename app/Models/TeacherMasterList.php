<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 01 Dec 2017 10:02:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TeacherMasterList
 * 
 * @property int $TeacherID
 * @property string $FirstName
 * @property string $LastName
 * @property string $BichakoName
 * @property \Carbon\Carbon $StartDate
 * @property \Carbon\Carbon $EndDate
 * @property int $IsActive
 * @property string $TeacherType
 * @property int $Phone1
 * @property int $Phone2
 * @property string $Email
 * @property string $Website
 * @property string $Bio
 * @property string $HomeLocation
 * @property string $HomeGeolocation
 * @property \Carbon\Carbon $DateAdded
 * @property \Carbon\Carbon $DateUpdated
 *
 * @package App\Models
 */
class TeacherMasterList extends Eloquent
{
	protected $table = 'Teacher_MasterList';
	protected $primaryKey = 'TeacherID';
	
	const CREATED_AT = "DateAdded";
	const UPDATED_AT = "DateUpdated";

	protected $casts = [
		'IsActive' => 'int',
		'Phone1' => 'int',
		'Phone2' => 'int'
	];

	protected $dates = [
		'StartDate',
		'EndDate',
		'DateAdded',
		'DateUpdated'
	];

	protected $fillable = [
		'FirstName',
		'LastName',
		'BichakoName',
		'StartDate',
		'EndDate',
		'IsActive',
		'TeacherType',
		'Phone1',
		'Phone2',
		'Email',
		'Website',
		'Bio',
		'HomeLocation',
		'HomeGeolocation',
		'DateAdded',
		'DateUpdated'
	];

	public function getIdAttribute()
	{
		return $this->attributes['TeacherID'];
	}

	public function getNameAttribute()
	{
		return $this->attributes['FirstName'].' '.$this->attributes['BichakoName']
				.' '.$this->attributes['LastName'];
	}

	public function getIsActiveAttribute()
	{
		return $this->attributes['IsActive'];
	}

	public function getTeacherTypeAttribute()
	{
		return $this->attributes['TeacherType'];
	}

	public function getEmailAttribute()
	{
		return $this->attributes['Email'];
	}

	public function getPhone1Attribute()
	{
		return $this->attributes['Phone1'];
	}

	public function getPhone2Attribute()
	{
		return $this->attributes['Phone2'];
	}

	public function getGeolocationAttribute()
	{
		return $this->attributes['HomeGeolocation'];
	}

	public function getLocationAttribute()
	{
		return $this->attributes['HomeLocation'];
	}

}
