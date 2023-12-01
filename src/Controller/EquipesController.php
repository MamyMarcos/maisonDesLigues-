<?php

namespace App\Controller;

class EquipesController extends AppController {

    public function index() {
        //On  récupére  tous  les  championnats  et  on  les  stocke  dans $mesChampionnats
        $mesEquipes = $this->Equipes->find('all')->contain(['Clubs', 'Championnats']);
        
        //Envoie  à  la  vue  le contenu de $mesChampionnats dans $mesChampionnats qui sera utiliseable
        $this->set(compact('mesEquipes'));
    }

    public function add() {
        $leNewEquipe = $this->Equipes->newEmptyEntity();
        $clubs = $this->Equipes->Clubs->find('list', [
            'keyField' => 'id',
            'valueField' => 'nom_club']);
        $championnats = $this->Equipes->Championnats->find('list', [
            'keyField' => 'id',
            'valueField' => 'nom_championnat']);
        if ($this->request->is('post')) {
            $leNewEquipe = $this->Equipes->patchEntity($leNewEquipe, $this->request->getData());
            if ($this->Equipes->save($leNewEquipe)) {
                $this->Flash->success(__("Le club a été sauvegardé."));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__("Impossible d'ajouter votre equipe."));
            }
        }
        $this->set(compact('leNewEquipe'));
        $this->set(compact('clubs'));
        $this->set(compact('championnats'));
    }

    public function view($id = null) {
        try {
            //On  récupére  le championnat à partir de l'id et  on  le  stocke  dans $championnat
            $championnat = $this->Championnats->get($id, ['contain' => ['Categories', 'Divisions', 'TypeChampionnats']]);
        } catch (\Exception $e) {
            if ($id == null) {
                $this->Flash->error(__("L'action view doit être appelé avec un identifiant"));
            } else {
                $this->Flash->error(__("La championnat {0} n'existe pas", $id));
            }
            return $this->redirect(['action' => 'index']);
        }
        //Envoie  à  la  vue  le contenu de $championnat dans $championnat qui sera utiliseable
        $this->set(compact('championnat'));
    }

    public function edit($id = null) {
        try {
            //On récupère la championnat à modifier
            $leChampionnat = $this->Championnats->get($id);
            $categories = $this->Championnats->Categories->find('list', [
                'keyField' => 'id',
                'valueField' => 'nom_categorie']);
            $divisions = $this->Championnats->Divisions->find('list', [
                'keyField' => 'id',
                'valueField' => 'nom']);
            $types = $this->Championnats->TypeChampionnats->find('list', [
                'keyField' => 'id',
                'valueField' => 'nom_type']);
        } catch (\Exception $e) {
            if ($id == null) {
                $this->Flash->error(__("L'action edit doit être appelé avec un identifiant"));
            } else {
                $this->Flash->error(__("La championnat {0} n'existe pas", $id));
            }
            return $this->redirect(['action' => 'index']);
        }
        if ($this->request->is(['post', 'put'])) {
            $this->Championnats->patchEntity($leChampionnat, $this->request->getData());
            if ($this->Championnats->save($leChampionnat)) {
                $this->Flash->success(__('Votre championnat a été mis à jour.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Impossible de mettre à jour votre championnat.'));
            }
        }
        $this->set(compact('leChampionnat'));
        $this->set(compact('categories'));
        $this->set(compact('divisions'));
        $this->set(compact('types'));
    }

    public function delete($id = null) {
        try {
            $this->request->allowMethod(['post', 'delete']);
            $leChampionnat = $this->Championnats->get($id);
            if ($this->Championnats->delete($leChampionnat)) {
                $this->Flash->success(__("La championnat {0} d'id {1} à bien été supprimé ", $leChampionnat->nom_championnat, $id));
            } else {
                $this->Flash->error(__("Vous ne pouvez pas supprimer ce championnat"));
            }
            return $this->redirect(['action' => 'index']);
        } catch (\Exception $e) {
            $this->Flash->error(__("Vous ne pouvez pas effectuer cette action"));
            return $this->redirect(['action' => 'index']);
        }
    }
    
    public function pdf() {
        //On  récupére  tous  les  championnats  et  on  les  stocke  dans $mesChampionnats
        $mesChampionnats = $this->Championnats->find('all')->contain(['Categories', 'Divisions', 'TypeChampionnats']);
        
        $this->viewBuilder()->setClassName('CakePdf.Pdf');
        $this->viewBuilder()->setOption(
            'pdfConfig',
            [
                'orientation' => 'portrait',
                'filename' => 'Championnats_'. date('d_m_Y'). '.pdf',
                'download' => true
            ]
        );

        //Envoie  à  la  vue  le contenu de $mesChampionnats dans $mesChampionnats qui sera utiliseable
        $this->set(compact('mesChampionnats'));
    }

}