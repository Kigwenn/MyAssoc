<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Films Controller
 *
 * @property \App\Model\Table\FilmsTable $Films
 *
 * @method \App\Model\Entity\Film[] paginate($object = null, array $settings = [])
 */
class FilmsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = ['contain' => ['Actors'] ];

        $films = $this->paginate($this->Films);
        $this->set(compact('films'));
        $this->set('_serialize', ['films']);
    }

    /**
     * View method
     *
     * @param string|null $id Film id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $film = $this->Films->get($id, ['Actors', 'FilmsActors'] );

        $this->set('film', $film);
        $this->set('_serialize', ['film']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $film = $this->Films->newEntity();

        if ($this->request->is('post')) {
            $film = $this->Films->patchEntity($film, $this->request->getData());

            if ($this->Films->save($film)) {
                $this->Flash->success(__('The film has been saved.'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('The film could not be saved. Please, try again.'));
        }

        $actors = $this->Films->Actors->find('list', ['limit' => 200]);

        $this->set(compact('film', 'actors'));
        $this->set('_serialize', ['film']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Film id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $film = $this->Films->get($id, [ 'contain' => [] ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $film = $this->Films->patchEntity($film, $this->request->getData());
            if ($this->Films->save($film)) {
                $this->Flash->success(__('The film has been saved.'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('The film could not be saved. Please, try again.'));
        }

        $actors = $this->Films->Actors->find('list', ['limit' => 200]);

        $this->set(compact('film', 'actors'));
        $this->set('_serialize', ['film']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Film id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $film = $this->Films->get($id);

        if ($this->Films->delete($film)) {
            $this->Flash->success(__('The film has been deleted.'));
        } else {
            $this->Flash->error(__('The film could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}