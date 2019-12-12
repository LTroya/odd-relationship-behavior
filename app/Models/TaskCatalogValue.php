<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskCatalogValue extends Model
{
    /**
     * Method to load as relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function taskCatalog()
    {
        return $this->belongsTo(TaskCatalog::class);
    }

    /**
     * Odd behavior with this model name. Laravel doesn't recognized
     * if camelCase method exists only.
     *
     * This method is to load the relationship as attribute
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function task_catalog()
    {
        return $this->belongsTo(TaskCatalog::class);
    }
}
