<?php

namespace App\Model\Table;

use Cake\ORM\Table;

use Cake\Validation\Validator;

class CategoriesTable extends Table {
    
    public function initialize(array $config): void {
        $this->addBehavior('Timestamp');
        $this->hasMany('Championnats');
    }
    
    public function validationDefault(Validator $validator) : Validator {
        $message = ["Le nom doit obligatoirement être renseigné.", "Le montant doit obligatoirement être renseigné."];
        $validator
                ->notEmptyString('nom_categorie',$message[0])
                ->maxLength('nom_categorie', 255)
                ->notEmptyString('montant_indemnite', $message[1]);

        return $validator;
    }
    
}
