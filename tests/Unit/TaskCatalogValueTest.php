<?php

namespace Tests\Unit;

use App\Models\TaskCatalog;
use App\Models\TaskCatalogValue;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskCatalogValueTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function belongs_to_a_task_catalog()
    {
        $taskCatalogValue = create(TaskCatalogValue::class);

        $this->assertInstanceOf(TaskCatalog::class, $taskCatalogValue->task_catalog);
        $this->assertInstanceOf(TaskCatalog::class, $taskCatalogValue->taskCatalog()->first());
    }
}
