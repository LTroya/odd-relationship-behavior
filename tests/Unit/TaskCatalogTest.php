<?php

namespace Tests\Unit;

use App\Models\TaskCatalog;
use App\Models\TaskCatalogType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskCatalogTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function belongs_to_a_task_catalog_type()
    {
        $taskCatalog = create(TaskCatalog::class);

        $this->assertInstanceOf(TaskCatalogType::class, $taskCatalog->task_catalog_type);
        $this->assertInstanceOf(TaskCatalogType::class, $taskCatalog->taskCatalogType()->first());
    }
}
