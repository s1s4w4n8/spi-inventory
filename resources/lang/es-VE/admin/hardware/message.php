<?php

return [

    'undeployable' 		=> '<strong>Warning: </strong> This asset has been marked as currently undeployable. If this status has changed, please update the asset status.',
    'does_not_exist' 	=> 'El activo no existe.',
    'does_not_exist_var'=> 'Activo con placa :asset_tag no encontrado.',
    'no_tag' 	        => 'No se ha proporcionado ninguna placa de activo.',
    'does_not_exist_or_not_requestable' => 'Ese activo no existe o no es solicitable.',
    'assoc_users'	 	=> 'Actualmente este activo está asignado a un usuario y no puede ser eliminado. Por favor, primero devuelva o recupere el activo y vuelva a intentarlo. ',
    'warning_audit_date_mismatch' 	=> 'La próxima fecha de auditoría de este activo (:next_audit_date) es anterior a la última fecha de auditoría (:last_audit_date). Por favor, actualice la próxima fecha de auditoría.',

    'create' => [
        'error'   		=> 'El activo no fue creado, por favor, inténtelo de nuevo. :(',
        'success' 		=> 'Activo creado con éxito. :)',
        'success_linked' => 'Activo con placa :tag creado con éxito. <strong><a href=":link" style="color: white;">Haga clic aquí para ver</a></strong>.',
    ],

    'update' => [
        'error'   			=> 'El activo no pudo ser actualizado, por favor inténtelo de nuevo',
        'success' 			=> 'Activo actualizado con éxito.',
        'encrypted_warning' => 'El activo se actualizó correctamente, pero los campos personalizados cifrados no lo hicieron debido a los permisos',
        'nothing_updated'	=>  'Ningún campo fue seleccionado, así que nada se actualizó.',
        'no_assets_selected'  =>  'Ningún activo fue seleccionado, por lo que no se actualizó nada.',
        'assets_do_not_exist_or_are_invalid' => 'Los activos seleccionados no se pueden actualizar.',
    ],

    'restore' => [
        'error'   		=> 'El activo no fue restaurado, por favor inténtelo nuevamente',
        'success' 		=> 'Activo restaurado correctamente.',
        'bulk_success' 		=> 'Activo restaurado correctamente.',
        'nothing_updated'   => 'No se seleccionaron activos, por lo que no se restauró nada.', 
    ],

    'audit' => [
        'error'   		=> 'Auditoría de activos fallida: :error ',
        'success' 		=> 'Audoría de activo registrada con éxito.',
    ],


    'deletefile' => [
        'error'   => 'Archivo no eliminado. Por favor inténtelo nuevamente.',
        'success' => 'Archivo borrado con éxito.',
    ],

    'upload' => [
        'error'   => 'Archivo(s) no cargado(s). Por favor, inténtelo nuevamente.',
        'success' => 'Archivo(s) cargado(s) exitosamente.',
        'nofiles' => 'No seleccionó ningún archivo para ser cargado, o el archivo que está tratando de cargar es demasiado grande',
        'invalidfiles' => 'Uno o más de sus archivos son demasiado grandes o son de un tipo de archivo que no está permitido. Los tipos de archivo permitidos son png, gif, jpg, doc, docx, pdf y txt.',
    ],

    'import' => [
        'import_button'         => 'Process Import',
        'error'                 => 'Algunos de los elementos no se importaron correctamente.',
        'errorDetail'           => 'Lo siguientes elementos no se importaron debido a errores.',
        'success'               => 'Su archivo ha sido importado',
        'file_delete_success'   => 'Su archivo se ha eliminado correctamente',
        'file_delete_error'      => 'El archivo no se pudo eliminar',
        'file_missing' => 'Falta el archivo seleccionado',
        'header_row_has_malformed_characters' => 'Uno o más atributos en la fila del encabezado contienen caracteres UTF-8 mal formados',
        'content_row_has_malformed_characters' => 'Uno o más atributos en la primera fila de contenido contienen caracteres UTF-8 mal formados',
    ],


    'delete' => [
        'confirm'   	=> '¿Está seguro de que desea eliminar este activo?',
        'error'   		=> 'Hubo un problema al eliminar el activo. Por favor, inténtelo de nuevo.',
        'nothing_updated'   => 'Ningún activo se seleccionó, así que nada fue borrado.',
        'success' 		=> 'El activo fue borrado con éxito.',
    ],

    'checkout' => [
        'error'   		=> 'El activo no fue asignado, por favor inténtelo de nuevo',
        'success' 		=> 'Equipo asignado correctamente.',
        'user_does_not_exist' => 'Este usuario no es correcto. Por favor, inténtelo de nuevo.',
        'not_available' => '¡Ese equipo no está disponible para ser asignado!',
        'no_assets_selected' => 'Debes seleccionar al menos un activo de la lista',
    ],

    'checkin' => [
        'error'   		=> 'El activo no se pudo ingresar, por favor inténtelo de nuevo',
        'success' 		=> 'El activo fue ingresado exitosamente.',
        'user_does_not_exist' => 'Este usuario no es correcto. Por favor, inténtelo de nuevo.',
        'already_checked_in'  => 'El equipo ya ha sido recibido.',

    ],

    'requests' => [
        'error'   		=> 'El activo no pudo ser solicitado, por favor inténtelo de nuevo',
        'success' 		=> 'Activo solicitado correctamente.',
        'canceled'      => 'La solicitud de asignación fue cancelada de forma exitosa',
    ],

];
