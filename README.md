# Função de PHP - tihh_friendlyLink()
Função em PHP que transforma qualquer string em um Link Amigável
[![Versão](http://app.tiago.art.br/flags/version.php?path=tihhgoncalves/tihh.php.fnc.friendlyLink)](/releases.md)
[![Versão](http://app.tiago.art.br/flags/size.php?path=tihhgoncalves/tihh.php.fnc.friendlyLink)](/releases.md)

## Parâmetros
 * ```$str``` - Palavra que será convertida em Link Amigável.

### Instalação
Para utilizar esse script, utilize o seguinte comando:

```
  bower install tihh.php.fnc.friendlyLink --save
```

P.S.: Caso prefira, você pode fazer o download do projeto manualmente.

### Exemplo
```
  <?
  
  required('bower_components/tihh.php.fnc.friendlyLink/load.php');
  
  $texto - 'Olá mundo cruel';
  $tags = tihh_friendlyLink($texto);
  echo($tags); //ola-mundo-cruel
  
  ?>
```
### Autor
![logo](https://raw.githubusercontent.com/tihhgoncalves/tihh.php.fnc.getTags/master/logo.png)

Esse script de PHP foi desenvolvido por Tihh Gonçalves (tiago@tiago.art.br). 

Mais informações: www.tiago.art.br
