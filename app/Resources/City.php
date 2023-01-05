<?php 

namespace App\Resources;

use App\Models\City as ModelsCity;
use RestapiLaravel\Fields\Store\TextField;

class City{

	public $model = ModelsCity::class;

	public function getFields(){
		return [
            TextField::make('name')
            	->setRules('required')
            	->setMessage('required','Toldirilishi shart')
        ];
	}

}