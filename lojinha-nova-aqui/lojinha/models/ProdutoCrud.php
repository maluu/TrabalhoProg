<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 24/04/18
 * Time: 15:51
 */

class ProdutoCrud
{
    public function getProduto($id){

            $this->conexao = DBConnection::getConexao;

            $sql = "select * from produto where id_produto =".$id;

            $resultado = $this->conexao->query($sql);

            $produto = $resultado->fetch(PDO::FETCH_ASSSOC);

            $objetoProd = new Produto($produto['nome_produto'], $produto['descricao_produto'], $produto['foto_produto'], $produto['id_categoria'], $produto['preco_produto']);

            return $objetoProd;


    }


    public function getProdutos(){

            $this->conexao = DBConnection::getConexao;

            $sql = "select * from produto";

            $resultado = $this->conexao->query($sql);

            $produtos = $resultado->fetchAll(PDO::FETCH_ASSOC);

            $listaprodutos = [];

            foreach($produtos as $produto){

                $objetoProduto = new Produto($produto['nome_produto'], $produto['descricao_produto'], $produto['foto_produto'], $produto['id_categoria'], $produto['preco_produto'], $produto['id_produto']);

                $listaprodutos[] = $objetoProduto;
        }
                return $listaprodutos;
    }

    public function insertProduto(Produto $prod){

        $this->conexao = DBConnection::getConexao();

        $sql = "insert into produto (id_produto, nome_produto, descricao_produto, foto_produto, id_categoria, preco_produto) values ('".$prod->getId()."','".$prod->getNome()."','".$prod->getDescricao()."','".$prod->getFoto()."','".$prod->getIdCategoria()."','".$prod->getPreco()."')";

            try{
                $this->conexao->exec($sql);

            } catch (PDOException $e){
                return $e->getMessage();
            }
    }

}