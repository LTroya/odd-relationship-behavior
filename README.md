# Odd relationship behavior

This is a odd behavior with the `TaskCatalog` and `TaskCatalogValue`
models. The framework doesn't recognize their snake case invocation.

There is two test that show this case:

**tests/Unit/TaskCatalogTest.php**

```
/** @test */
public function belongs_to_a_task_catalog_type()
{
    $taskCatalog = create(TaskCatalog::class);

    $this->assertInstanceOf(TaskCatalogType::class, $taskCatalog->task_catalog_type);
    $this->assertInstanceOf(TaskCatalogType::class, $taskCatalog->taskCatalogType()->first());
}
```

And **tests/Unit/TaskCatalogValue.php**

```
/** @test */
public function belongs_to_a_task_catalog()
{
    $taskCatalogValue = create(TaskCatalogValue::class);

    $this->assertInstanceOf(TaskCatalog::class, $taskCatalogValue->task_catalog);
    $this->assertInstanceOf(TaskCatalog::class, $taskCatalogValue->taskCatalog()->first());
}
```

This test passes. But if comments the follow relationships on their models, the
tests fails.

**app/Models/TaskCatalog.php**
```
public function task_catalog_type()
{
    return $this->belongsTo(TaskCatalogType::class);
}
```

and **app/Models/TaskCatalogValue.php**

```
public function task_catalog()
{
    return $this->belongsTo(TaskCatalog::class);
}
```

Still looking the answer why this is happening :persevere:
