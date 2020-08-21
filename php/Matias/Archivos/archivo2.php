<?php
namespace prueba\ejemplo;
include 'archivo1.php';

const PRUEBA = 'archivo2';
function prueba() {}
class prueba
{
    static function staticmethod() {}
}

/* Unqualified name */
prueba(); // resuelve a function prueba\ejemplo\prueba
prueba::staticmethod(); // resuelve a clase prueba\ejemplo\prueba, method staticmethod
echo PRUEBA; // resuelve a constante prueba\ejemplo\PRUEBA

/* Qualified name */
subnamespace\prueba(); // resuelve a function prueba\ejemplo\subnamespace\prueba
subnamespace\prueba::staticmethod(); // resuelve a clase prueba\ejemplo\subnamespace\prueba

echo subnamespace\PRUEBA; // resuelve a constante prueba\ejemplo\subnamespace\PRUEBA

/* Fully qualified name */
\prueba\ejemplo\prueba(); // resuelve a function prueba\ejemplo\prueba
\prueba\ejemplo\prueba::staticmethod(); // resuelve a clase prueba\ejemplo\prueba, method staticmethod
echo \prueba\ejemplo\PRUEBA; // resuelve a constante prueba\ejemplo\PRUEBA
?>
