<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 01 Dec 2017 10:02:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ClusterMaster
 * 
 * @property int $CMID
 * @property string $ClusterName
 * @property string $TagLine
 * @property string $Description
 * @property string $ScienceTie
 * @property string $MathTie
 * @property string $LanguageTie
 * @property string $ComputerTie
 * @property string $OBTTie
 * @property string $OtherTies
 * @property \Carbon\Carbon $CreatedDate
 * @property \Carbon\Carbon $UpdatedDate
 * @property bool $IsActive
 *
 * @package App\Models
 */
class ClusterMaster extends Eloquent
{
	protected $table = 'ClusterMaster';
	protected $primaryKey = 'CMID';

	const CREATED_AT = 'CreatedDate';
	const UPDATED_AT = 'UpdatedDate';

	protected $casts = [
		'IsActive' => 'bool',
		'CreatedDate' => 'datetime',
		'UpdatedDate' => 'datetime'
	];

	protected $dates = [
		'CreatedDate',
		'UpdatedDate'
	];

	protected $fillable = [
		'ClusterName',
		'TagLine',
		'Description',
		'ScienceTie',
		'MathTie',
		'LanguageTie',
		'ComputerTie',
		'OBTTie',
		'OtherTies',
		'CreatedDate',
		'UpdatedDate',
		'IsActive'
	];

	public function getIdAttribute()
	{
		return $this->CMID;
	}

	public function getNameAttribute()
	{
		return $this->ClusterName;
	}

	public function setNameAttribute($value)
	{
		return $this->attributes['ClusterName'] = ucfirst($value);
	}

	public function setUpdatedAtAttribute($value)
	{
		return $this->attributes['UpdatedDate'] = $value;
	}

	public function getCreatedAtAttribute()
	{
		return $this->attributes['CreatedDate'];
	}

	public function getUpdatedAtAttribute()
	{
		return $this->attributes['UpdatedDate'];
	}

	public function getIsActiveAttribute()
	{
		return $this->attributes['IsActive'];
	}
}
