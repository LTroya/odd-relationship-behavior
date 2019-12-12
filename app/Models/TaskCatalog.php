<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskCatalog extends Model
{
    /**
     * Odd behavior with this model name. Laravel doesn't recognized
     * if camelCase method exists only.
     *
     * This method is to load the relationship as attribute
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function task_catalog_type()
    {
        return $this->belongsTo(TaskCatalogType::class);
    }

    /**
     * Method to load as relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function taskCatalogType()
    {
        return $this->belongsTo(TaskCatalogType::class);
    }
}
