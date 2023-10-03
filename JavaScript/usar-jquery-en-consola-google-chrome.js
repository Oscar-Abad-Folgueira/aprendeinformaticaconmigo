/**
 * @snippet       JavaScript: Utilizar jQuery en la consola de Google Chrome
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.aprendeinformaticaconmigo.com/desarrollo/javascript/utilizar-jquery-en-la-consola-de-google-chrome/
 */

var jq = document.createElement('script');
jq.src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js";
document.getElementsByTagName('head')[0].appendChild(jq);
// ... give time for script to load, then type (or see below for non wait option)
jQuery.noConflict();