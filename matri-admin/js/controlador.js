$("#btn-guardar").click(function(){
	$("#loading").fadeIn(50);
	var parametros =`codigoCarrera=${$("#codigoCarrera").val()}&codigoCentroEstudio=${$("#codigoCentroEstudio").val()}&nombreCarrera=${$("#nombreCarrera").val()}&codigoFacultad=${$("#codigoFacultad").val()}&codigoDepartamento=${$("#codigoDepartamento").val()}&CantidadAsignaturas=${$("#CantidadAsignaturas").val()}&CantidadUv=${$("#CantidadUv").val()}&Grado=${$("#Grado").val()}`;

	console.log("El cliente envía esta información: "+parametros);

	
		}
	);
