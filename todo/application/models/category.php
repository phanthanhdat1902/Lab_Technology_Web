<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of category
 *
 * @author dat.pt173001
 */
class Category extends VanillaModel {

    var $hasMany = array('Product' => 'Product');
    var $hasOne = array('Parent' => 'Category');

}
