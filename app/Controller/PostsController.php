<?php
    class PostsController extends AppController {
        public $helpers = array('Html','Form');
        public $name = 'Posts';

        function index() {
            $search = $this->request->data('Properties.Search');
            $filter = $this->request->data('Properties.Filter');
            if($filter == NULL){
                $conditions = array("OR" => array("Post.title ILIKE" => '%'.$search.'%', "Post.body ILIKE" => '%'.$search.'%'));
                $this->set('posts', $this->Post->find('all', compact('conditions')));
            } else {
                $conditions = array("OR" => array("Post.title ILIKE" => '%'.$search.'%', "Post.body ILIKE" => '%'.$search.'%'), "AND" => array("Post.status" => $filter));
                $this->set('posts', $this->Post->find('all', compact('conditions')));
            }
        }

        public function view($id = null) {
            $this->set('post', $this->Post->findById($id));
        }

        public function add() {
            if ($this->request->is('post')) {
                $this->request->data['Post']['user_id'] = $this->Auth->user('id');
                if ($this->Post->save($this->request->data)) {
                    $this->Flash->success('Your post has been saved.');
                    $this->redirect(array('action' => 'index'));
                }
            }
        }

        function edit($id = null) {
            $this->Post->id = $id;
            if ($this->request->is('get')) {
                $this->request->data = $this->Post->findById($id);
            } else {
                if ($this->Post->save($this->request->data)) {
                    $this->Flash->success('Your post has been updated.');
                    $this->redirect(array('action' => 'index'));
                }
            }
        }

        function delete($id) {
            if ($this->Post->delete($id)) {
                $this->Flash->success('The post with id: ' . $id . ' has been deleted.');
                $this->redirect(array('action' => 'index'));
            }
        }

        public function isAuthorized($user) {
            if (parent::isAuthorized($user)) {
                if ($this->action === 'add') {
                    return true;
                }
                if (in_array($this->action, array('edit', 'delete'))) {
                    $postId = (int) $this->request->params['pass'][0];
                    return $this->Post->isOwnedBy($postId, $user['id']);
                }
            }
            return false;
        }
    }
?>
