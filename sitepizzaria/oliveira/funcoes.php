<?php
function listarRegistroDoisParametro($tabela, $campos, $ativo, $param, $idparam)
{
    $conn = conectar();
    try {
        if (is_numeric($idparam)) {
            $conn->beginTransaction();
            $sqlLista = $conn->prepare("SELECT $campos FROM $tabela WHERE ativo = ? AND $param = ?");
            $sqlLista->bindValue(1, $ativo, PDO::PARAM_INT);
            $sqlLista->bindValue(2, $idparam, PDO::PARAM_STR);
            $sqlLista->execute();
            if ($sqlLista->rowCount() > 0) {
                return $sqlLista->fetchAll(PDO::FETCH_OBJ);
            } else {
                return 'Vazio';
            };
        } else {
            return 'Variável Não é aceita!';
        }
    } catch
    (PDOException $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
    };
}







function listarTodosRegistros($tabela, $campos, $ativo){
    $conn = conectar();
    try {
        $sqlLista = $conn->prepare("SELECT $campos FROM $tabela WHERE ativo = '$ativo' ");
        $sqlLista->execute();
        if ($sqlLista->rowCount() > 0) {
            return $sqlLista->fetchAll(PDO::FETCH_OBJ);
        } else {
            return 'Vazio';
        };
    }catch
    (PDOException $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
    };
}