<?php  return array (
  'configcheck_admin' => 'Por favor, ¡Contacta con un administrador del sitio e infórmale de este mensaje!',
  'configcheck_allowtagsinpost_context_enabled' => 'Configuración de Contexto "allow_tags_in_post" Activada fuera del Contexto "mgr"',
  'configcheck_allowtagsinpost_context_enabled_msg' => 'La Configuración de Contexto "allow_tags_in_post" está habilitada para Contextos diferentes a "mgr". MODX recomienda desactivar esta configuración a no ser que se necesite permitir explícitamente a los usuarios insertar etiquetas de MODX, entidades numéricas, o scripts HTML a través de métodos POST en los formularios del sitio. Esto debería estar desactivado por defecto excepto en el contexto "mgr".',
  'configcheck_allowtagsinpost_system_enabled' => 'Configuración de Sistema "allow_tags_in_post"',
  'configcheck_allowtagsinpost_system_enabled_msg' => 'La Configuración de Sistema "allow_tags_in_post" está habilitada. MODX recomienda desactivar esta configuración a no ser que se necesite permitir explícitamente a los usuarios insertar etiquetas de MODX, entidades numéricas, o scripts HTML a través de métodos POST en los formularios del sitio. Es mejor habilitarlo a través de la Configuración del Contexto para Contextos específicos.',
  'configcheck_cache' => 'Sin derechos de escritura sobre el directorio de memoria caché',
  'configcheck_cache_msg' => 'MODX no tiene derechos de escritura sobre el directorio caché. MODX funcionará normalmente, pero las funciones de caché no funcionarán. Para resolverlo, otorgar derechos de escritura sobre el directorio "/_cache/".',
  'configcheck_configinc' => '¡El archivo de configuración no es de sólo lectura!',
  'configcheck_configinc_msg' => 'El sitio es vulnerable a hackers, que podrían vulnerar el sitio. Por favor, ¡Cambia el archivo de configuración a sólo lectura! Si no eres un administrador del sitio, por favor, contacta con uno e infórmale de este mensaje! El archivo está localizado en core/config/config.inc.php',
  'configcheck_default_msg' => 'Se encontró una advertencia desconocida. Esto es muy raro.',
  'configcheck_errorpage_unavailable' => 'Página de Error del sitio no disponible.',
  'configcheck_errorpage_unavailable_msg' => 'Esto significa que la página de Error no es accesible a través del navegador o no existe. Esto puede llevar a un bucle y colapsar el registro de errores. Asegúrate que no haya grupos de usuarios asignados a la página de error.',
  'configcheck_errorpage_unpublished' => 'La página de Error del sitio no está publicada o no existe.',
  'configcheck_errorpage_unpublished_msg' => 'Esto significa que la página de Error no es accesible públicamente. Publica la página o asegúrate de que esté asignada a un documento existente en tu árbol de recursos del sitio en el menú Sistema &gt; Configuración del Sistema.',
  'configcheck_htaccess' => 'Core folder is accessible by web',
  'configcheck_htaccess_msg' => 'MODX detected that your core folder is (partially) accessible to the public.
<strong>This is not recommended and a security risk.</strong>
If your MODX installation is running on a Apache webserver
you should at least set up the .htaccess file inside the core folder <em>[[+fileLocation]]</em>.
This can be easily done by renaming the existing ht.access example file there to .htaccess.
<p>There are other methods and webservers you may use, please read the <a href="https://rtfm.modx.com/revolution/2.x/administering-your-site/security/hardening-modx-revolution">Hardening MODX Guide</a>
for further information about securing your site.</p>
If you setup everything correctly, browsing e.g. to the <a href="[[+checkUrl]]" target="_blank">Changelog</a>
should give you a 403 (permission denied) or better a 404 (not found). If you can see the changelog
there in the browser, something is still wrong and you need to reconfigure or call an expert to solve this.',
  'configcheck_images' => 'Sin derechos de escritura sobre el directorio de imágenes',
  'configcheck_images_msg' => 'MODX no tiene derechos de escritura sobre el directorio de imágenes o no existe. ¡Las funciones del Administrador de Imágenes en el editor no funcionarán!',
  'configcheck_installer' => 'El script de instalación aún está presente',
  'configcheck_installer_msg' => 'El directorio "setup/" contiene el instalador de MODX. ¡Sólo imagina lo que podría pasar si alguien activara el instalador! Probablemente no llegue muy lejos, porque necesitará introducir los datos de acceso a la base de datos, pero es mejor prevenir y eliminar la carpeta de tu servidor.',
  'configcheck_lang_difference' => 'Número incorrecto de entradas en el archivo de idioma',
  'configcheck_lang_difference_msg' => 'El archivo de idioma configurado actualmente tiene un número diferente de entradas que el archivo de idioma por defecto. A pesar de que esto no supone necesariamente un problema, puede significar que el archivo de idioma necesita ser actualizado.',
  'configcheck_notok' => 'Uno o más detalles de configuración no están correctos: ',
  'configcheck_ok' => 'La revisión fue exitosa - sin advertencias que mostrar.',
  'configcheck_phpversion' => 'PHP version is outdated',
  'configcheck_phpversion_msg' => 'Your PHP version [[+phpversion]] is no longer maintained by the PHP developers, which means no security updates are available. It is also likely that MODX or an extra package now or in the near future will no longer support this version. Please update your environment at least to PHP [[+phprequired]] as soon as possible to secure your site.',
  'configcheck_register_globals' => '"register_globals" está activado en el archivo de configuración php.ini',
  'configcheck_register_globals_msg' => 'Esta configuración hace el sitio más vulnerable a ataques del tipo Cross Site Scripting (XSS). Si el servidor no es propio, el proveedor del servicio de alojamiento del sitio web deberá deshabilitar esta configuración.',
  'configcheck_title' => 'Prueba de Configuración',
  'configcheck_unauthorizedpage_unavailable' => 'La página de "Acceso No Autorizado" del sitio no está publicada o no existe.',
  'configcheck_unauthorizedpage_unavailable_msg' => 'Esto significa que la página de "Acceso No Autorizado" no es accesible a través del navegador o no existe. Esto puede llevar a un bucle y colapsar el registro de errores. Asegúrate de que no haya grupos de usuarios asignados a la página.',
  'configcheck_unauthorizedpage_unpublished' => 'La página de "Acceso No Autorizado" definida en la configuración del sitio no está publicada.',
  'configcheck_unauthorizedpage_unpublished_msg' => 'Esto significa que la página de "Acceso No Autorizado" no es accesible públicamente. Publica la página o asegúrate de que esté asignada a un documento existente en tu árbol de recursos del sitio en el menu Sistema &gt; Configuración del Sistema.',
  'configcheck_warning' => 'Advertencia de Configuración:',
  'configcheck_what' => '¿Qué significa esto?',
);