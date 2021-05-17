<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of productscontroller
 *
 * @author dat.pt173001
 */
class ProductsController {
    
    function page($pageNumber = 1) {
        $this->Product->setPage($pageNumber);
        $this->Product->setLimit('10');
        $products = $this->Product->search();
        $totalPages = $this->Product->totalPages();
        $this->set('totalPages', $totalPages);
        $this->set('products', $products);
        $this->set('currentPageNumber', $pageNumber);
    }

    function findProducts($categoryId = null, $categoryName = null) {
        $this->Product->where('category_id', $categoryId);
        $this->Product->orderBy('name');
        return $this->Product->search();
    }

}
