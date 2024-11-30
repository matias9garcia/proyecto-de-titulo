<?php
function getReglasDeformSocio(){
    $formatoNoCompatible="El formato no es compatible";
    $debeElegirUnaOpcion="Debe elegir una opción";
    $campoRequerido="Este campo es requerido";
    //$regExNombresApellidos="^[a-zA-ZñÑáéíóúÁÉÍÓÚ/\s]+$";
    //$regExUnaPalabra='^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$';

    /**expresion regular para nombres y apellidos */
    //$regExNombresApellidos='/^[a-zA-ZñÑáéíóúÁÉÍÓÚ/\s/a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/';
    return  array(

        /**campo rut */
        array(  'field' => 'formSocio_rut',
            /**trim quita los espacios antes y despues del input ingresado
             * regex_match compara lo ingresado con la expresion regular
             */
                'rules' => 'regex_match[/^[0-9]+-[0-9kK]{1}$/]|required|trim',
                'errors'=> array(
                'required' => $campoRequerido,
                'regex_match' => $formatoNoCompatible,
            )
        ),
        /**campo nombres */
        array(  'field' => 'formSocio_nombres',
            /**trim quita los espacios antes y despues del input ingresado
             * regex_match compara lo ingresado con la expresion regular
             */
                'rules' => 'regex_match[/^[a-zA-ZñÑáéíóúÁÉÍÓÚ/\s]+$/]|trim|required',//\\s
                'errors'=> array(
                'required' => $campoRequerido,
                'regex_match' => $formatoNoCompatible,

            )
        ),
        /**campo apeliddos */
        array(  'field' => 'formSocio_apellidos',
            /**trim quita los espacios antes y despues del input ingresado
             * regex_match compara lo ingresado con la expresion regular
             */
                'rules' => 'regex_match[/^[a-zA-ZñÑáéíóúÁÉÍÓÚ/\s]+$/]|trim|required',
                'errors'=> array(
                'required' => $campoRequerido,
                'regex_match' => $formatoNoCompatible,
            )
        ),
        /**campo nacionalidad */
        array(  'field' => 'formSocio_nacionalidad',
            /**trim quita los espacios antes y despues del input ingresado
             * regex_match compara lo ingresado con la expresion regular
             */
                'rules' => 'trim|regex_match[/^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/]|required',
                'errors'=> array(
                'regex_match' => $formatoNoCompatible,
                'required' => $campoRequerido,
            )
        ),
        /**campo edad */
        array(  'field' => 'formSocio_edad',
            /**trim quita los espacios antes y despues del input ingresado
             * regex_match compara lo ingresado con la expresion regular
             */
                'rules' => 'trim|regex_match[/^[0-9]+$/]|required',
                'errors'=> array(
                'required' => $campoRequerido,
                'regex_match' => $formatoNoCompatible,
            )
        ),
        /**campo genero
         * 3 opciones
         * 
         */
        array(  'field' => 'formSocio_genero',
            /**trim quita los espacios antes y despues del input ingresado
             * regex_match compara lo ingresado con la expresion regular
             */
                'rules' => 'trim|required|regex_match[/^femenino$|^masculino$|^noResonder$/]',
                'errors'=> array(
                'required' => $campoRequerido,
                'numeric' => $formatoNoCompatible,
            )
        ),
        /**campo carrera actual */
        array(  
                'field' => 'formSocio_carreraActual',
            /**trim quita los espacios antes y despues del input ingresado
             * regex_match compara lo ingresado con la expresion regular
             */
                'rules' => 'trim|required|regex_match[/^ingCivilInf$|^ingInf$|^ingCivilCiencia$/',
                'errors'=> array(
                'required' => $campoRequerido,
                'regex_match' => $formatoNoCompatible,
            )
        ),
        
        array(  
                'field' => 'formSocio_carreraPrimeraOpcionSiNo',
            /**trim quita los espacios antes y despues del input ingresado
             * regex_match compara lo ingresado con la expresion regular
             */
                'rules' => 'trim|required|regex_match[/^Si$|^No$/]',
                'errors'=> array(
                'required' => $campoRequerido,
                'regex_match' => $formatoNoCompatible,
            )
        ),
        /**opcional 
         * input para ingresar texto 
         * 
         */
        array(  
                'field' => 'formSocio_carreraPrimeraOpcion',
            /**trim quita los espacios antes y despues del input ingresado
             * regex_match compara lo ingresado con la expresion regular
             */
                'rules' => 'trim|required|regex_match[/^[a-zA-ZñÑáéíóúÁÉÍÓÚ/\s]+$/]',
                'errors'=> array(
                'required' => $campoRequerido,
                'regex_match' => $formatoNoCompatible,
            )
        ),

        /**opciones de convivencia */
        array(  
                'field' => 'formSocio_convivencia',
            /**trim quita los espacios antes y despues del input ingresado
             * regex_match compara lo ingresado con la expresion regular
             */
                'rules' => 'trim|required|regex_match[/^familia$|^pension$|^pareja$|^solo$/]',
                'errors'=> array(
                'required' => $debeElegirUnaOpcion,
                'regex_match' => $formatoNoCompatible,
            )
        ),

        /**opciones de tiempo de traslado */
        array(  
                'field' => 'formSocio_trayecto',
            /**trim quita los espacios antes y despues del input ingresado
             * regex_match compara lo ingresado con la expresion regular
             */
                'rules' => 'trim|required|regex_match[/^menos30$|^igual30$|^mas30$|^masHora$/]',
                'errors'=> array(
                'required' => $debeElegirUnaOpcion,
                'regex_match' => $formatoNoCompatible,
            )
        ),
        /**opciones de carrera de presedencia */
        array(  
                'field' => 'formSocio_carreraDePrecedenciaSiNo',
            /**trim quita los espacios antes y despues del input ingresado
             * regex_match compara lo ingresado con la expresion regular
             */
                'rules' => 'trim|required|regex_match[/^Si$|^No$/]',
                'errors'=> array(
                'required' => $debeElegirUnaOpcion,
                'regex_match' => $formatoNoCompatible,
            )
        ),
        /**input para ingresar texto
         * nombre de la carrera de la que proviene el encuestado
         */
        array(  
                'field' => 'formSocio_carreraDePrecedenciaIngresar',
            /**trim quita los espacios antes y despues del input ingresado
             * regex_match compara lo ingresado con la expresion regular
             */
                'rules' => 'trim|required|regex_match[/^[a-zA-ZñÑáéíóúÁÉÍÓÚ/\s]+$/]',
                'errors'=> array(
                'required' => $campoRequerido,
                'regex_match' => $formatoNoCompatible,
            )
        ),

        array(  
                'field' => 'formSocio_razonParaElegirLaCarreraActual',
            /**trim quita los espacios antes y despues del input ingresado
             * regex_match compara lo ingresado con la expresion regular
             */
                'rules' => 'trim|required|regex_match[/^eleccionLibre$|^primeraPreferencia$|^tradicionFamiliar$|^descarte$|^otroMotivo$/]',
                'errors'=> array(
                'required' => $debeElegirUnaOpcion,
                'regex_match' => $formatoNoCompatible,
            )
        ),

        array(  
                'field' => 'formSocio_razonParaElegirLaCarreraActualIngresarMotivo',
            /**trim quita los espacios antes y despues del input ingresado
             * regex_match compara lo ingresado con la expresion regular
             */
                'rules' => 'trim|required|regex_match[/^[a-zA-ZñÑáéíóúÁÉÍÓÚ/\s]+$/]',
                'errors'=> array(
                'required' => $campoRequerido,
                'regex_match' => $formatoNoCompatible,
            )
        ),
        array(  
                'field' => 'formSocio_condicionMentalDiagnosticadaSiNoNose',
            /**trim quita los espacios antes y despues del input ingresado
             * regex_match compara lo ingresado con la expresion regular
             */
                'rules' => 'trim|required|regex_match[/^Si$|^No$|^Nose$|/]',
                'errors'=> array(
                'required' => $debeElegirUnaOpcion,
                'regex_match' => $formatoNoCompatible,
            )
        ),
        array(  
                'field' => 'formSocio_nombreDeCondicionMentalDiagnosticada',
            /**trim quita los espacios antes y despues del input ingresado
             * regex_match compara lo ingresado con la expresion regular
             */
                'rules' => 'trim|required|regex_match[/^[a-zA-ZñÑáéíóúÁÉÍÓÚ/\s]+$/]',
                'errors'=> array(
                'required' => $campoRequerido,
                'regex_match' => $formatoNoCompatible,
            )
        ),
        array(  
                'field' => 'formSocio_beneficioGratuidadSiNo',
            /**trim quita los espacios antes y despues del input ingresado
             * regex_match compara lo ingresado con la expresion regular
             */
                'rules' => 'trim|required|regex_match[/^Si$|^No$/]',
                'errors'=> array(
                'required' => $debeElegirUnaOpcion,
                'regex_match' => $formatoNoCompatible,
            )
        ),
    );        
}

?>