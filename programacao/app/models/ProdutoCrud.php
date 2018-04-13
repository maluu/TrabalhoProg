<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 13/04/18
 * Time: 14:08
 */

class ProdutoCrud
{
    private $conexao;

    public function _construct()
    {


        $this->conexao = DBConnection::getConexao();
    }


    public function getProduto(int $id)
    {

        $sql = 'select * from produto where id_produto' . $id;
        $result = $this->conexao->query($sql);

        $produto = $result->fetch(PDO::FETCH_ASSOC);

        $objprod = new Produto($produto['id_produto'], $produto['nome_produto'], $produto['descricao_produto']);

        return $objprod;

    }


    public function getProdutos()
    {

        $sql = "*SELECT * FROM produto";

        $result = $this->conexao->query($sql);

        $produtos = $result->fetchAll(PDO::FETCH_ASSOC);


        foreach ($produtos as $produto) {

            $id = $produto['id_produto'];
            $nome = $produto['nome_produto'];
            $descricao = $produto['descricao_produto'];

            $obj = new Produto($id, $nome, $descricao);
            $listaProduto[] = $obj;

            return $listaProduto;

        }

    }

    public function insertProduto(Produto $prod)
    {

        $this->conexao = DBConnection::getConexao();

        $sql = "insert into produto(nome_produto, descricao_produto) values ('".$prod->getNome()."',''" .$prod->getDescricao()."')\"";


        try {
            $this->conexao->exec($sql);
        }catch (PDOException $a){
            
        }

    }











































}








