<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class EquipesTable extends Table {

    public function initialize(array $config): void {
        $this->addBehavior('Timestamp');
        $this->belongsTo('Clubs')
                ->setForeignKey('club_id')
                ->setJoinType('INNER');
        $this->belongsTo('Championnats')
                ->setForeignKey('Championnat_id')
                ->setJoinType('INNER');
               
    }

    public function validationDefault(Validator $validator): Validator {
        $message = ["Le nom doit obligatoirement être renseigné.",
            "Le club doit obligatoirement être renseigné.",
            "Le championnat doit obligatoirement être renseigné."];
        $validator
                ->notEmptyString('nom_equipe', $message[0])
                ->maxLength('nom_equipe', 255)
                ->notEmpty('club_id', $message[1])
                ->notEmpty('championnat_id', $message[2]);
               

        return $validator;
    }

}
