<?
/**
 * Função em PHP transforma qualquer string numa URL de link amigável
 *
 *
 * Versão: 1.0.0
 *
 * @param $str
 * @return string
 */
function tihh_friendlyLink($texto)
{
  $texto = trim($texto);

  //Tira acentos
  $comAcento = array('O','à','á','â','ã','ä','å','ç','è','é','ê','ë','ì','í','î','ï','ñ','ò','ó','ô','õ','ö','ù','ü','ú','ÿ','À','Á','Â','Ã','Ä','Å','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ñ','Ò','Ó','Ô','Õ','Ö','O','Ù','Ü','Ú','Ÿ','&', 'ª', 'º', '%');
  $semAcento = array('o','a','a','a','a','a','a','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','u','u','u','y','A','A','A','A','A','A','C','E','E','E','E','I','I','I','I','N','O','O','O','O','O','0','U','U','U','Y','e', 'a', 'o', 'perc');
  $texto = str_replace($comAcento, $semAcento, $texto);
  //Anula alguns acaracters
  $texto = str_replace(array('?', '!', ':', ';', '~', '`', '´', '{', '}', '[', ']', '/', '\\', ',', '(', ')', '"', '\'', '#'), '', $texto);
  //Substitui espaços
  $texto = str_replace(' ', '-', $texto);
  //Eleminia ífens duplicados
  $texto = str_replace('--', '-', $texto);
  //Passa pra minúsculo
  $texto = strtolower($texto);

  return $texto;
}
?>