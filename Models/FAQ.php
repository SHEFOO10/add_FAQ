<?php

namespace App\Models;

use Aquadic\AddFAQ\Traits\Boots\HasCache;
use Aquadic\AddFAQ\Traits\Boots\HasSortable;
use Aquadic\AddFAQ\Traits\HasTranslatableWithJsonEscape;
use Aquadic\AddFAQ\Traits\Scopes\HasActiveScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;


/**
 * @method static Builder active(bool $isActive = true)
 * @method static Builder inActive()
 * @method static Builder ordered()
 */
class FAQ extends Model implements Sortable
{
    protected $table = 'faqs';

    //    use ActivityLogsAll;
    use HasActiveScope;

    //    use HasSEO;
    use HasCache;
    use HasFactory;
    use HasSortable;
    use HasTranslatableWithJsonEscape;

    /**
     * Translation Fields using Spatie\Translatable
     *
     * @var string[]
     */
    public $translatable = [
        'question',
        'answer',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'question',
        'answer',

        'is_active',
        'order_column',
    ];
}
