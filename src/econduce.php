<?php
/**
*programador : Julio Cesar Valadez Castañeda 
*modulo:test econduce
*descripción: prueba de desarrollo para econduce
*fecha : 01/08/2018
*modificado por:
*fecha de modificación:
*/

/**
 * parameters int,int
 * @return array 
 */
function suma($numeros,$objetivo) 
{
    for($x = 0; $x<sizeof($numeros); $x++) {
        for ($y = $x + 1; $y < sizeof($numeros); $y++) {
            $sum = $numeros[$x]+$numeros[$y];
            if ($sum == $objetivo) {
                return array($x,$y);
            }
        }
    }
}