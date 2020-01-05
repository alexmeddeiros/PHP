<?php 
/**
 * As sessoes servem parar armezenar informacoes de serao utilizadas em varias painas.
 * Geralmente se utiliza sessoes para criar carrinhos de compras, sistemas de login, 
 * esses tipos dde coisas.
 * 
 * Sempre é necessário inniciar a sessão com: session_start();
 * 
 */
 
// iniciando a sesssão
session_start();

// Cria as sessoes 
$_SESSION['cor'] 	= 'Verde';
$_SESSION['Carro']	= 'Porsche';	

echo $_SESSION['cor']."<br>".$_SESSION['Carro']."<br>".session_id();


