<?php

        require_once ('../models/ProdutoCrud.php');


        if (ISSET($_GET['action'])){
            $action = $_GET['action'];

        } else{
            $action = 'index';
        }



        switch ($action){
            case 'index';
                $crud = new ProdutoCrud();
                $produtos = $crud->getProdutos();
                include '../view/produto/index.php';
                break;

        }
