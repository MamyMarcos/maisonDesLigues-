<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class InsertCategories extends AbstractMigration {

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function up() {
        $this->execute('INSERT INTO categories(nom_categorie, montant_indemnite, created, modified) VALUES
                (\'Plongée\',1850, now(), now()),
                (\'Bowling\',1335, now(), now()),
                (\'Football\',1963, now(), now()),
                (\'Tennis\',1541, now(), now())');
    }
    
    public function down(){
        $this->execute('DELETE FROM categories');
    }

}
