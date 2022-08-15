<?php
/* 
El metodo get_search_form() devuelve el siguiente formulario:
  <form role="search" method="get" id="searchform" class="searchform" action="http://localhost/WordPress/perros/">
				<div>
					<label class="screen-reader-text" for="s">Buscar:</label>
					<input type="text" value="" name="s" id="s">
					<input type="submit" id="searchsubmit" value="Buscar">
				</div>
			</form> 

Si a get_search_form() le mando un false asi: get_search_form(false) el formulario me lo devuelve como string, sino como objeto
*/


printf('<aside class="item  i-b  w-30  aside">');

get_search_form();

//dynamic_sidebar(id) me retorna el sidebar con el id elegido para mostrar de los que hice en el administrador
dynamic_sidebar(1);
//Tambien puedo llamar por nombre de widget, si es que le puse uno
dynamic_sidebar('widget 2');

dynamic_sidebar('widget personalizado');

printf('</aside>');
