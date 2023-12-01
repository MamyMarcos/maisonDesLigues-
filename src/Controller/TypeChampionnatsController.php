<?php

namespace App\Controller;

use App\Controller\AppController;

class TypeChampionnatsController extends AppController {

    public function index() {
        //On  récupére  tous  les  type de championnats  et  on  les  stocke  dans $mesTypeChampionnats
        $mesTypeChampionnats = $this->TypeChampionnats->find()->all();
        $this->set(compact('mesTypeChampionnats'));  //Envoie  à  la  vue  le contenu de $mesTypeChampionnats dans $rep qui sera utiliseable
    }

    public function add() {
        $leNewType = $this->TypeChampionnats->newEmptyEntity();
        if ($this->request->is('post')) {
            $leType = $this->TypeChampionnats->patchEntity($leNewType, $this->request->getData());
            if ($this->TypeChampionnats->save($leNewType)) {
                $this->Flash->success(__("La type de championnat a été sauvegardé."));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__("Impossible d'ajouter votre type de championnat."));
            }
        }
        $this->set(compact('leNewType'));
    }

    public function view($id = null) {
        try {
            //On  récupére  le type de championnat à partir de l'id et  on  le  stocke  dans $type
            $type = $this->TypeChampionnats->get($id);
        } catch (\Exception $e) {
            if ($id == null) {
                $this->Flash->error(__("L'action view doit être appelé avec un identifiant"));
            } else {
                $this->Flash->error(__("La type de championnat {0} n'existe pas", $id));
            }
            return $this->redirect(['action' => 'index']);
        }
        //Envoie  à  la  vue  le contenu de $type dans $type qui sera utiliseable
        $this->set(compact('type'));
    }

    public function edit($id = null) {
        try {
            //On récupère la type de championnat à modifier
            $leType = $this->TypeChampionnats->get($id);
        } catch (\Exception $e) {
            if ($id == null) {
                $this->Flash->error(__("L'action edit doit être appelé avec un identifiant"));
            } else {
                $this->Flash->error(__("La type de championnat {0} n'existe pas", $id));
            }
            return $this->redirect(['action' => 'index']);
        }
        if ($this->request->is(['post', 'put'])) {
            $this->TypeChampionnats->patchEntity($leType, $this->request->getData());
            if ($this->TypeChampionnats->save($leType)) {
                $this->Flash->success(__('Votre type de championnat a été mis à jour.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Impossible de mettre à jour votre type de championnat.'));
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set(compact('leType'));
    }

    public function delete($id = null) {
        try {
            $this->request->allowMethod(['post', 'delete']);
            $leType = $this->TypeChampionnats->get($id);
            if ($this->TypeChampionnats->delete($leType)) {
                $this->Flash->success(__("Le type de chmapionnat {0} d'id {1} à bien été supprimé ", $leType->nom_type, $id));
            } else {
                $this->Flash->error(__("Vous ne pouvez pas supprimer ce type de chmapionnat car elle est utilisé ailleurs"));
            }
            return $this->redirect(['action' => 'index']);
        } catch (\Exception $e) {
            $this->Flash->error(__("Vous ne pouvez pas effectuer cette action"));
            return $this->redirect(['action' => 'index']);
        }
    }

}
