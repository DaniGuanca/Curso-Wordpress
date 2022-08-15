<?php
$sidebar = '<aside class="item  i-b  w-30  aside">%s</aside>';

/* 
El metodo get_search_form() devuelve el siguiente formulario:
  <form role="search" method="get" id="searchform" class="searchform" action="http://localhost/WordPress/perros/">
				<div>
					<label class="screen-reader-text" for="s">Buscar:</label>
					<input type="text" value="" name="s" id="s">
					<input type="submit" id="searchsubmit" value="Buscar">
				</div>
			</form> 

Si a get_search_form() le mando un false asi: get_search_form(false) el formulario me lo devuelve como string
*/



printf($sidebar, get_search_form(false));
