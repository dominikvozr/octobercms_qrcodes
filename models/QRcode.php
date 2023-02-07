<?php namespace Dondo\Qrcodes\Models;

use Model;

/**
 * Model
 */
class QRcode extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use \Illuminate\Database\Eloquent\Concerns\HasUuids;

    protected $dates = ['deleted_at'];

    // public $incrementing = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dondo_qrcodes_qrcodes';

    public $fillable = ["id", "name", "path", "created_at", "updated_at", "deleted_at"];

    /**
     * @var array Validation rules
     */
    public $rules = [];
}
