<?php

/**
 * States and federal territories of Uzbekistan
 * - 12 regions, 1 autonomous respublic and 1 independent city
 *
 * Source:
 * - https://en.wikipedia.org/wiki/Districts_of_Uzbekistan
 *
 * @author  ibragimov ramazon(zekr@live.com)
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['UZ'] = array(
  'TASHKENT-CITY' => 'Toshkent (city)',//add
  'TASHKENT' => 'Toshkent (region)',//add
  'ANDIJAN' => 'Andijon',//add
  'FERGANA' => 'Farg\'ona',//add
  'NAMANGAN' => 'Namangan',//add
  'SIRDARYO' => 'Sirdaryo',//add
  'JIZZAKH' => 'Jizzax',//add
  'SURXONDARYO' => 'Surxondaryo',//add
  'QASHQADARYO' => 'Qashqadaryo',//add
  'SAMARQAND' => 'Samarqand',//add
  'BUKHARA' => 'Buxoro',//add
  'NAVOIY' => 'Navoiy',//add
  'XORAZM' => 'Xorazm',//add
  'KARAKALPAKSTAN' => 'Qoraqalpog\'iston',//add
);

// Use this filter to handle the States and federal territories of Uzbekistan
$states['UZ'] = apply_filters('scpwoo_custom_states_uz', $states['UZ']);
