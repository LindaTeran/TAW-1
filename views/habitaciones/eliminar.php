	<form action="index.php?modulo=habitaciones&accion=eliminar">
		<h3>Eliminar Habitación</h3>
		<hr>
    
    <input type="hidden" name="id" id="id" value="">
    <button type="submit">Confirmar</button>
    <?php header("Location: index.php?modulo=habitaciones");?>

	</form>
