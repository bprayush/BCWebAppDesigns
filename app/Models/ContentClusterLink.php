<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 01 Dec 2017 10:02:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ContentClusterLink
 * 
 * @property int $CCLID
 * @property int $CMID
 * @property int $CID
 *
 * @package App\Models
 */
class ContentClusterLink extends Eloquent
{
	protected $table = 'ContentClusterLink';
	protected $primaryKey = 'CCLID';
	public $timestamps = false;

	protected $casts = [
		'CMID' => 'int',
		'CID' => 'int'
	];

	protected $fillable = [
		'CMID',
		'CID'
	];

	public function getIdAttribute()
	{
		return $this->CCLID;
	}

	public function getClusterIdAttribute()
	{
		return $this->CMID;
	}

	public function getContentIdAttribute()
	{
		return $this->CID;
	}
}
