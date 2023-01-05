<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_true_is_true()
    {
        $this->assertTrue(true);
    }

    public function test_resourcce_service_fields(){

        $fields = [
            'name' => 'field'
        ];
        
        $model = \App\Models\Product::class;

        $resource = new \RestapiLaravel\Services\ResourceService($model, $fields);
        $got_fields = $resource->getFields();

        $this->assertEquals($fields, $got_fields);

    }
}
