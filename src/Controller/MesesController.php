<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Meses Controller
 *
 * @property \App\Model\Table\MesesTable $Meses
 *
 * @method \App\Model\Entity\Mese[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MesesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $meses = $this->paginate($this->Meses);

        $this->set(compact('meses'));
    }

    /**
     * View method
     *
     * @param string|null $id Mese id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mese = $this->Meses->get($id, [
            'contain' => []
        ]);

        $this->set('mese', $mese);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mese = $this->Meses->newEntity();
        if ($this->request->is('post')) {
            $mese = $this->Meses->patchEntity($mese, $this->request->getData());
            if ($this->Meses->save($mese)) {
                $this->Flash->success(__('The mese has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mese could not be saved. Please, try again.'));
        }
        $this->set(compact('mese'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mese id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mese = $this->Meses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mese = $this->Meses->patchEntity($mese, $this->request->getData());
            if ($this->Meses->save($mese)) {
                $this->Flash->success(__('The mese has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mese could not be saved. Please, try again.'));
        }
        $this->set(compact('mese'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mese id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mese = $this->Meses->get($id);
        if ($this->Meses->delete($mese)) {
            $this->Flash->success(__('The mese has been deleted.'));
        } else {
            $this->Flash->error(__('The mese could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
