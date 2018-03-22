<div class="container">
	<form action="<?php echo home_url(); ?>" id="search-form" method="get">
		<input type="text" name="s" id="s" class="form-control " placeholder="Buscar..." onblur="if(this.value=='')this.value='Buscar...'"
		onfocus="if(this.value=='type your search')this.value=''" />
		<input type="hidden" value="submit" />
	</form>
</div>
