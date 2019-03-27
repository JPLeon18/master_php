<?php


/*
Estructura de una Cookie

setcookie("nombre", "Valor que solo puede ser texto", caducidad, ruta, dominio);

*/

// Basica
setcookie("MyCookie","Este es el valor de mi galleta");

// cokie con caducidad de 1 año
setcookie("OneYear", "Esta cookie caduca en un año",time()+(60*60*24*365));



header("location: ver_cookie");

