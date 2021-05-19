<?php
    class UsersController extends AppController {
        public function beforeFilter() {
            parent::beforeFilter();
            $this->Auth->allow('add');
        }

        public function login() {
            $this->User->set($this->request->data);
            if ($this->request->is('post')) {
            	if ($this->User->validates()){
            		if ($this->Auth->login()) {
						$this->redirect(array('action' => '../Posts/index'));
					} else {
						$this->Flash->error('Invalid username or password, try again');
					}
            	}
            }
        }

        public function logout() {
            $this->redirect($this->Auth->logout());
        }

        public function index() {
            $this->User->recursive = 0;
            $this->set('users', $this->paginate());
        }

        public function view($id = null) {
            if (!$this->User->exists($id)) {
                throw new NotFoundException('Invalid user');
            }
            $this->set('user', $this->User->findById($id));
        }

        public function add() {
            if ($this->request->is('post')) {
            	if($this->User->validates()){
            		$this->User->create();
					if ($this->User->save($this->request->data)) {
						$this->Flash->success('The user has been saved');
						$this->redirect(array('action' => '../Posts/index'));
					} else {
						$this->Flash->error('The user could not be saved. Please, try again.');
					}
            	}
            }
        }

        public function edit($id = null) {
            $this->User->id = $id;
            if (!$this->User->exists()) {
                throw new NotFoundException('Invalid user');
            }
            if ($this->request->is('post') || $this->request->is('put')) {
                if ($this->User->save($this->request->data)) {
                    $this->Flash->success('The user has been saved');
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Flash->error('The user could not be saved. Please, try again.');
                }
            } else {
                $this->request->data = $this->User->findById($id);
                unset($this->request->data['User']['password']);
            }
        }

        public function delete($id = null) {
            if (!$this->request->is('post')) {
                throw new MethodNotAllowedException();
            }
            $this->User->id = $id;
            if (!$this->User->exists()) {
                throw new NotFoundException('Invalid user');
            }
            if ($this->User->delete()) {
                $this->Flash->success('User deleted');
                $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error('User was not deleted');
            $this->redirect(array('action' => 'index'));
        }
    }
?>
