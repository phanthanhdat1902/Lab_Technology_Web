<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of product
 *
 * @author dat.pt173001
 */
class Product extends VanillaModel {

    var $hasOne = array('Category' => 'Category');
    var $hasManyAndBelongsToMany = array('Tag' => 'Tag');

}
