<?php
namespace Users\Controller;

use Users\Controller\AppController;

/**
 * Property Controller
 *
 *
 * @method \Users\Model\Entity\Property[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PropertyController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */

    public function search()
    {
        $search = $this->request->getQuery('q');
		$property = $this->Property->find()
        ->where([
            'location like' => '%'.$search.'%'
        ]);
        $this->set('property',$property);
        $this->set('search',$search);
	}

    public function index()
    {
        $property = $this->paginate($this->Property);

        $this->set(compact('property'));
    }

    /**
     * View method
     *
     * @param string|null $id Property id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $property = $this->Property->get($id, [
            'contain' => [],
        ]);

        $this->set('property', $property);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */

    private function uploadImage($properties)
    {
        $file = $this->getRequest()->getData('file');
        //$dirSperator = in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1']) ? '\\' : '/';
        // $dirSperator = '..\plugins\ShowProducts\webroot';
        if (!empty($file['name'])) {
            $ext = substr(strtolower(strrchr($file['name'], '.')), 1);
            $arr_ext = array('jpg', 'jpeg', 'gif', 'png');
            // $mainFolder = 'pro';
            // $imgPath = sprintf('%s', $dirSperator);
            $uploadPath = "img/";
        
            if (in_array($ext, $arr_ext)) {
                // if (!is_dir(WWW_ROOT .  sprintf('img%s%s', $dirSperator, $mainFolder))) {
                //     mkdir(WWW_ROOT . sprintf('img%s%s', $dirSperator, $mainFolder));
                // }
                // if (!is_dir(WWW_ROOT . $uploadPath)) {
                //     mkdir(WWW_ROOT . $uploadPath);
                // }
                $result = move_uploaded_file($file['tmp_name'], WWW_ROOT . $uploadPath . $file['name']);
                //print_r($result);exit;
                // Save file address to DB
                $properties->image = $file['name'];
                
                $this->Property->save($properties);
                $response = [
                    'message' => $file['name'],
                ];
                
            } else {
                $response = ['status' => false, 'message' => 'Selected extension not allowed.'];
            }
        } else {
            $response = ['status' => true];
        }
        return $response;
    }
    public function add()
    {
        $properties = $this->Property->newEntity();
        if ($this->request->is('post')) {
            $result = $this->uploadImage($properties);
            $properties = $this->Property->patchEntity($properties, $this->request->getData());
            if ($this->Property->save($properties)) {
                $this->Flash->success(__('The property has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The property could not be saved. Please, try again.'));
        }
        $this->set(compact('properties'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Property id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $property = $this->Property->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $property = $this->Property->patchEntity($property, $this->request->getData());
            if ($this->Property->save($property)) {
                $this->Flash->success(__('The property has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The property could not be saved. Please, try again.'));
        }
        $this->set(compact('property'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Property id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $property = $this->Property->get($id);
        if ($this->Property->delete($property)) {
            $this->Flash->success(__('The property has been deleted.'));
        } else {
            $this->Flash->error(__('The property could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
