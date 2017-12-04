<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 01 Dec 2017 10:02:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SchoolMasterList
 * 
 * @property string $SchoolName
 * @property string $Geolocation
 * @property string $Location
 * @property int $PrimaryTACOE
 * @property string $SecondaryTACOE
 * @property string $HighSecondaryTACOE
 * @property bool $IsActive
 * @property \Carbon\Carbon $CreatedTime
 * @property string $UpdatedTime
 * @property int $SchoolID
 *
 * @package App\Models
 */
class SchoolMasterList extends Eloquent
{
	protected $table = 'School_MasterList';
	protected $primaryKey = 'SchoolID';
	
	const CREATED_AT = "CreatedTime";
	const UPDATED_AT = "UpdatedTime";

	protected $casts = [
		'PrimaryTACOE' => 'int',
		'IsActive' => 'bool'
	];

	protected $dates = [
		'CreatedTime'
	];

	protected $fillable = [
		'SchoolName',
		'Geolocation',
		'Location',
		'PrimaryTACOE',
		'SecondaryTACOE',
		'HighSecondaryTACOE',
		'IsActive',
		'CreatedTime',
		'UpdatedTime'
	];

	public function getIdAttribute()
	{
		return $this->attributes['SchoolID'];
	}

	public function getNameAttribute()
	{
		return $this->attributes['SchoolName'];
	}

	public function getGeoLocationAttribute()
	{
		return $this->attributes['Geolocation'];
	}

	public function getLocationAttribute()
	{
		return $this->attributes['Location'];
	}

	public function getIsActiveAttribute()
	{
		return $this->attributes['IsActive'];
	}

	public function classes()
	{
		return $this->hasMany('App\Models\SchoolClass', 'SchoolID');
	}

}
