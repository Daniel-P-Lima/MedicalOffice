<?php
// logout.php

// Inicia a sessão
session_start();

// Remove todas as variáveis de sessão
$_SESSION = array();

// Destrói a sessão
session_destroy();

// Redireciona para a página de login ou outra página
header('Location: login.php');
exit;
?>
