<?php

namespace App\Model\Table;

use Cake\ORM\Table;

use Cake\Validation\Validator;

class ChampionnatsTable extends Table {
    
    public function initialize(array $config): void {
        $this->addBehavior('Timestamp');
        $this->belongsTo('Categories')
         ->setForeignKey('category_id')
            ->setJoinType('INNER');
        $this->belongsTo('Divisions')
         ->setForeignKey('division_id') 
            ->setJoinType('INNER');
        $this->belongsTo('TypeChampionnats')
         ->setForeignKey('type_championnat_id') 
            ->setJoinType('INNER');
         $this->hasMany('Equipes');
    }
  
    public function validationDefault(Validator $validator) : Validator {
        $message = ["Le nom doit obligatoirement être renseigné.",
                    "La catégorie doit obligatoirement être renseigné.",
                    "La division doit obligatoirement être renseigné.",
                    "Le type doit obligatoirement être renseigné."];
        $validator
                ->notEmptyString('nom_championnat',$message[0])
                ->maxLength('nom_championnat', 255)
                ->notEmpty('category_id', $message[1])
                ->notEmpty('division_id', $message[2])
                ->notEmpty('type_championnat_id', $message[3]);

        return $validator;
    }
    
}
