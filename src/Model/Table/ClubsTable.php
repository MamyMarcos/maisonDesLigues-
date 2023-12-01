<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ClubsTable extends Table {

    public function initialize(array $config): void {
        $this->addBehavior('Timestamp');
        $this->hasMany('Equipes');
    }

    public function validationDefault(Validator $validator): Validator {
        $message = ["Le nom doit obligatoirement être renseigné."];
        $validator
                ->notEmptyString('nom_club', $message[0])
                ->maxLength('nom_club', 255);
        return $validator;
    }

}
