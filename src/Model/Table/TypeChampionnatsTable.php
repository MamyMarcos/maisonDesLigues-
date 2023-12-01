<?php

namespace App\Model\Table;

use Cake\ORM\Table;

use Cake\Validation\Validator;

class TypeChampionnatsTable extends Table {

    public function initialize(array $config): void {
        $this->addBehavior('Timestamp');
        $this->hasMany('Championnats');
    }

    public function validationDefault(Validator $validator): Validator {
        $message = "Le nom doit obligatoirement être renseigné.";
        $validator
                ->notEmptyString('nom_type', $message)
                ->maxLength('nom_type', 255);
        return $validator;
    }

}
