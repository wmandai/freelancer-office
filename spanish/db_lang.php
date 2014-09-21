<?php

$lang['db_invalid_connection_str'] = 'No se puede determinar la configuración de la base de datos basado en la cadena de conexión que ha enviado.';
$lang['db_unable_to_connect'] = 'No se puede conectar al servidor de base de datos mediante la configuración suministrada.';
$lang['db_unable_to_select'] = 'No se pudo seleccionar la base de datos especificada: %s';
$lang['db_unable_to_create'] = 'No se puede crear la base de datos especificada: %s';
$lang['db_invalid_query'] = 'La consulta enviada no es válida.';
$lang['db_must_set_table'] = 'Debe especificar la tabla de la base de datos que se utilizará con su consulta.';
$lang['db_must_use_set'] = 'Debe utilizar el método "set" para actualizar una entrada.';
$lang['db_must_use_index'] = 'Debe especificar un índice para comparar en actualizaciones por lotes.';
$lang['db_batch_missing_index'] = 'Una o más de las filas enviadas para actualización por lotes no poseen el índice especificado.';
$lang['db_must_use_where'] = 'No se permiten actualizaciones a menos que contengan una cláusula "where".';
$lang['db_del_must_use_where'] = 'No se permiten eliminaciones a menos que contengan una cláusula "where" o "like".';
$lang['db_field_param_missing'] = 'Para obtener campos se requiere el nombre de la tabla como un parámetro.';
$lang['db_unsupported_function'] = 'Esta función no está disponible para la base de datos que está utilizando.';
$lang['db_transaction_failure'] = 'Error de transacción: Se deshizo la operación.';
$lang['db_unable_to_drop'] = 'No se puede borrar la base de datos especificada.';
$lang['db_unsuported_feature'] = 'Característica no soportada por la plataforma de base de datos que está utilizando.';
$lang['db_unsuported_compression'] = 'El formato de compresión de archivos que eligió no es soportado por su servidor.';
$lang['db_filepath_error'] = 'No se puede escribir información en la ruta de archivo enviada.';
$lang['db_invalid_cache_path'] = 'La ruta de caché enviada no es válida o escribible.';
$lang['db_table_name_required'] = 'Un nombre de tabla es requerido para esa operación.';
$lang['db_column_name_required'] = 'Un nombre de columna es requerido para esa operación.';
$lang['db_column_definition_required'] = 'Una definición de columna es requerido para esa operación.';
$lang['db_unable_to_set_charset'] = 'No se puede definir el conjunto de caracteres para la conexión del cliente: %s';
$lang['db_error_heading'] = 'Ocurrió un error en la base de datos';

/* End of file db_lang.php */
/* Location: ./system/language/english/db_lang.php */