<?php

namespace App\Controller;

class DivisionsController extends AppController {

    public function index() {
        //On  récupére  tous  les  categories  et  on  les  stocke  dans $mesDivisions
        $mesDivisions = $this->Divisions->find()->all();

        //Envoie  à  la  vue  le contenu de $mesDivisions dans $mesDivisions qui sera utiliseable
        $this->set(compact('mesDivisions'));
    }

    public function add() {
        $laNewDivision = $this->Divisions->newEmptyEntity();
        if ($this->request->is('post')) {
            $laNewDivision = $this->Divisions->patchEntity($laNewDivision, $this->request->getData());
            if ($this->Divisions->save($laNewDivision)) {
                $this->Flash->success(__("La division a été sauvegardé."));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__("Impossible d'ajouter votre division."));
            }
        }
        $this->set(compact('laNewDivision'));
    }

    public function view($id = null) {
        try {
            //On  récupére  la categorie à partir de l'id et  on  le  stocke  dans $division
            $division = $this->Divisions->get($id);
        } catch (\Exception $e) {
            if ($id == null) {
                $this->Flash->error(__("L'action view doit être appelé avec un identifiant"));
            } else {
                $this->Flash->error(__("La division {0} n'existe pas", $id));
            }
            return $this->redirect(['action' => 'index']);
        }
        //Envoie  à  la  vue  le contenu de $mesDivisions dans $mesDivisions qui sera utiliseable
        $this->set(compact('division'));
    }

    public function edit($id = null) {
        try {
            //On récupère la division à modifier
            $laDivision = $this->Divisions->get($id);
        } catch (\Exception $e) {
            if ($id == null) {
                $this->Flash->error(__("L'action edit doit être appelé avec un identifiant"));
            } else {
                $this->Flash->error(__("La division {0} n'existe pas", $id));
            }
            return $this->redirect(['action' => 'index']);
        }
        if ($this->request->is(['post', 'put'])) {
            $this->Divisions->patchEntity($laDivision, $this->request->getData());
            if ($this->Divisions->save($laDivision)) {
                $this->Flash->success(__('Votre division a été mis à jour.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Impossible de mettre à jour votre division.'));
            }
        }
        $this->set(compact('laDivision'));
    }

    public function delete($id = null) {
        try {
            $this->request->allowMethod(['post', 'delete']);
            $leDivision = $this->Divisions->get($id);
            if ($this->Divisions->delete($leDivision)) {
                $this->Flash->success(__("La division {0} d'id {1} à bien été supprimé ", $leDivision->nom, $id));
            } else {
                $this->Flash->error(__("Vous ne pouvez pas supprimer cette division car elle est utilisé ailleurs"));
            }
            return $this->redirect(['action' => 'index']);
        } catch (\Exception $e) {
            $this->Flash->error(__("Vous ne pouvez pas effectuer cette action"));
            return $this->redirect(['action' => 'index']);
        }
    }
}
