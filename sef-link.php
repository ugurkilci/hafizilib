<?php

// Türkçe karakter gibi özel karakterleri linklere göre uyumlu haline getirilir.

function permalink($str, $options = array())
{
  $str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());
  $defaults = array(
      'delimiter' => '-',
      'limit' => null,
      'lowercase' => true,
      'replacements' => array(),
      'transliterate' => true
  );
