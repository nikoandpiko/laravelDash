<?php
/*
 * This file is part of the laravelDash package.
 *
 * (c) Yasser Ameur El Idrissi <getspookydev@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace yal\laraveldash\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Followers extends Model
{

    protected $fillable = ['follow_id'];

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function resolveChildRouteBinding($childType, $value, $field)
    {
      // TODO: Implement resolveChildRouteBinding() method.
    }

}
