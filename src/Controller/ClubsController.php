<?php

namespace App\Controller;

class ClubsController extends AppController {
    
    public function index() {
        //On  récupére  tous  les  clubs et  on  les  stocke  dans $mesClubs
        $mesClubs = $this->Clubs->find()->all();

        //Envoie  à  la  vue  le contenu de $mesCategories dans $mesCategories qui sera utiliseable
        $this->set(compact('mesClubs'));
    }

    public function add() {
        $leNewClub = $this->Clubs->newEmptyEntity();
        if ($this->request->is('post')) {
            $leNewClubs = $this->Clubs->patchEntity($leNewClubs, $this->request->getData());
            if ($this->Clubs->save($leNewClub)) {
                $this->Flash->success(__("Le club a été sauvegardé."));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__("Impossible d'ajouter votre club."));
            }
        }
        $this->set(compact('leNewClub'));
    }

    public function view($id = null) {
        try {
            //On  récupére  la categorie à partir de l'id et  on  le  stocke  dans $category
            $club= $this->Clubs->get($id);
        } catch (\Exception $e) {
            if ($id == null) {
                $this->Flash->error(__("L'action view doit être appelé avec un identifiant"));
            } else {
                $this->Flash->error(__("Le club {0} n'existe pas", $id));
            }
            return $this->redirect(['action' => 'index']);
        }
        //Envoie  à  la  vue  le contenu de $mesCategories dans $mesCategories qui sera utiliseable
        $this->set(compact('club'));
    }

    public function edit($id = null) {
        try {
            //On récupère la catégorie à modifier
            $laCategorie = $this->Categories->get($id);
        } catch (\Exception $e) {
            if ($id == null) {
                $this->Flash->error(__("L'action edit doit être appelé avec un identifiant"));
            } else {
                $this->Flash->error(__("La catégorie {0} n'existe pas", $id));
            }
            return $this->redirect(['action' => 'index']);
        }
        if ($this->request->is(['post', 'put'])) {
            $this->Categories->patchEntity($laCategorie, $this->request->getData());
            if ($this->Categories->save($laCategorie)) {
                $this->Flash->success(__('Votre catégorie a été mis à jour.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Impossible de mettre à jour votre catégorie.'));
            }
        }
        $this->set(compact('laCategorie'));
    }

    public function delete($id = null) {
        try {
            $this->request->allowMethod(['post', 'delete']);
            $leCategory = $this->Categories->get($id);
            if ($this->Categories->delete($leCategory)) {
                $this->Flash->success(__("La catégorie {0} d'id {1} à bien été supprimé ", $leCategory->nom_categorie, $id));
            } else {
                $this->Flash->error(__("Vous ne pouvez pas supprimer cet catégorie car elle est utilisé ailleurs"));
            }
            return $this->redirect(['action' => 'index']);
        } catch (\Exception $e) {
            $this->Flash->error(__("Vous ne pouvez pas effectuer cette action"));
            return $this->redirect(['action' => 'index']);
        }
    }
}
