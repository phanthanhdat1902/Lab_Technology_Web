<?php

class CategoriesController extends Controller {

    function new() {
        $this->Category->id = $_POST['id'];
        $this->Category->name = $_POST['name'];
        $this->Category->save();
    }

    function delete($categoryId) {
        $this->Category->id = $categoryId;
        $this->Category->delete();
    }

    function view() {
        $this->Category->id = 1;
        $this->Category->showHasOne();
        $this->Category->showHasMany();
        $this->Category->showHMABTM();
        $data = $this->Category->search();
        print_r($data);
    }

//    function view($categoryId = null, $categoryName = null) {
//        $categories = performAction('products', 'findProducts', array($categoryId, $categoryName));
//    }

}
