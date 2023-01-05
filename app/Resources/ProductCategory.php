<?php 

namespace App\Resources;

use App\Models\ProductCategory as ModelsProductCategory;
use RestapiLaravel\Fields\Store\TextField;

class ProductCategory{

	public $model = ModelsProductCategory::class;

	public function getFields(){
		return [
            TextField::make('name')->setRules('required')
        ];
	}

}