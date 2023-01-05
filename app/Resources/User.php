<?php 

namespace App\Resources;

use App\Models\User as ModelsUser;
use RestapiLaravel\Fields\Store\TextField;
use RestapiLaravel\Fields\Store\EmailField;
use RestapiLaravel\Fields\Store\PasswordField;

class User{

	public $model = ModelsUser::class;

	public function getFields(){
		return [
            TextField::make('name')
            	->setRules('required')
            	->setMessage('required','Toldirilishi shart'),
            
            EmailField::make('email')
            	->setRules('required')
            	->setMessage('required','Toldirilishi shart'),

            PasswordField::make('password')
            	->setRules('required')
            	->setMessage('required','Toldirilishi shart')
        ];
	}

}