<?php

class DoctorsController extends AppController {
    public function index()
    {
        $doctorList = $this->Doctor->find('all');
        $this->set('doctors', $doctorList);
    }

    public function add()
    {
        //add a doctor to the list
        if($this->request->is('post')){
            if($this->Doctor->save($this->request->data)){
                $this->Session->setFlash('Successfully inserted');
            }
        }
    }
}