<?php

function verificarForcaDaSenha($senha) {
    $forca = 0;

    if(strlen($senha) >= 8) $forca++;
    if(preg_match('/[A-Z]/', $senha)) $forca++;
    if(preg_match('/[0-9]/', $senha)) $forca++;
    if(preg_match('/[^A-Za-z0-9]/', $senha)) $forca++;

    return $forca;
}

function verificarConfirmacaoSenha($senha, $senhaConfirmada) {
    return $senha === $senhaConfirmada;
}
