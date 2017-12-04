<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 01 Dec 2017 10:02:29 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ContentFeedback
 * 
 * @property int $FeedBackID
 * @property int $SchoolDeliveryID
 * @property int $ContentRating
 * @property int $EngagementRating
 * @property int $ActivityRating
 * @property int $ClosureRating
 * @property string $comments
 * @property \Carbon\Carbon $DateCreated
 *
 * @package App\Models
 */
class ContentFeedback extends Eloquent
{
	protected $table = 'ContentFeedback';
	protected $primaryKey = 'FeedBackID';
	public $timestamps = false;

	const CREATED_AT = "DateCreated";

	protected $casts = [
		'SchoolDeliveryID' => 'int',
		'ContentRating' => 'int',
		'EngagementRating' => 'int',
		'ActivityRating' => 'int',
		'ClosureRating' => 'int'
	];

	protected $dates = [
		'DateCreated'
	];

	protected $fillable = [
		'SchoolDeliveryID',
		'ContentRating',
		'EngagementRating',
		'ActivityRating',
		'ClosureRating',
		'comments',
		'DateCreated'
	];
}
