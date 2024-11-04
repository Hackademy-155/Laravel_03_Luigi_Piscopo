<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerProdotti extends Controller
{
    public function prodotti(){

        $prodotti= [
            ['id' => 1, 'name' => 'Iphone', 'memoria' => '250GB'],
            ['id' => 2, 'name' => 'Ipad', 'memoria' => '180GB'],
            ['id' => 3, 'name' => 'Imac', 'memoria' => '1TB'],
        ];


        return view('prodotti', ['prodotti' => $prodotti]);
    }



    public function dettaglio($id){

        $prodotti= [
            ['id' => 1, 'name' => 'Iphone', 'memoria' => '250GB'],
            ['id' => 2, 'name' => 'Ipad', 'memoria' => '180GB'],
            ['id' => 3, 'name' => 'Imac', 'memoria' => '1TB'],
        ];

        foreach($prodotti as $prodotto){
            if($prodotto['id'] == $id){
                return view('dettaglio', ['prodotto' => $prodotto]);
            }
        };

        
    }
}

