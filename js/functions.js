/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function abrePagina(div,pagina,post){
    $.post(pagina,{post:post},function(data){$('#'+div).html(data)});
}

