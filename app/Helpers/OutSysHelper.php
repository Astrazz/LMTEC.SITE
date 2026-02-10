<?php

function lmWord($string, $words = '400') {
    $string = strip_tags($string);
    $count = strlen($string);

    if ($count <= $words) {
        return $string;
    } else {
        $strpos = strrpos(substr($string, 0, $words), ' ');
        return substr($string, 0, $strpos);
    }
}

function setUri($string) {
    $a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
    $b = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';
    $string = utf8_decode($string);
    $string = strtr($string, utf8_decode($a), $b);
    $string = strip_tags(trim($string));
    $string = str_replace(" ", "-", $string);
    $string = str_replace(array("-----", "----", "---", "--"), "-", $string);
    return strtolower(utf8_encode($string));
}
function setUri2($string) {
    $a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
    $b = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';
    $string = utf8_decode($string);
    $string = strtr($string, utf8_decode($a), $b);
    $string = strip_tags(trim($string));
    $string = str_replace(" ", "", $string);
    $string = str_replace(array("-----", "----", "---", "--"), "", $string);
    return strtolower(utf8_encode($string));
}

function tiraMoeda($valor)
{
    $novoValor = preg_replace("/[^0-9\s]/", "", $valor);
    return $novoValor;
}

function moeda($valor) {
    $valor = number_format($valor / 100, 2, ",", ".");
    str_replace(',', '%', $valor);
    str_replace('.', ',', $valor);
    return str_replace('%', '.', $valor);
}

function formatCnpjCpf($value) {
    $CPF_LENGTH = 11;
    $cnpj_cpf = preg_replace("/\D/", '', $value);
    if (strlen($cnpj_cpf) === $CPF_LENGTH) {
        return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cnpj_cpf);
    }
    return preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "\$1.\$2.\$3/\$4-\$5", $cnpj_cpf);
}

function DiferencaPorcentagem($v1, $v2) {
    $perguntas = $v1;
    $acertos = $v2;
    return ((($perguntas - $acertos) / $perguntas) * 100);
}

function gerarCodigo($qtd) {
    $senha = "123456789";
//    $senha = "0123456789abcdefghijlmnopqrstuvxz";
    srand((double) microtime() * 1000000);
    $cod = false;
    for ($i = 0; $i < $qtd; $i++):
        $cod .= $senha[rand() % strlen($senha)];
    endfor;
    return $cod;
}

function porcentagem ($pctm, $total) {
    $valor_descontado = $total - ($total / 100 * $pctm);
    return  $total - $valor_descontado;
}

function calcularIdade($dataNascimento) {
    $dataAtual = new DateTime();
    $dataNascimento = new DateTime($dataNascimento);
    $intervalo = $dataAtual->diff($dataNascimento);
    return $intervalo->y;
  }
  
