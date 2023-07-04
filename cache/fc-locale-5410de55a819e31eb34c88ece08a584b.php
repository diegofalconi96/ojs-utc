<?php return array (
  'plugins.importexport.medra.displayName' => 'Módulo de exportación/registro de mEDRA',
  'plugins.importexport.medra.description' => 'Exportar metadatos de un número, un artículo y una galerada en formato Onix para DOI (O4DOI) y registrar los DOI en la agencia de registro mEDRA.',
  'plugins.importexport.medra.intro' => '
		Si desea registrar los DOI con mEDRA, siga las instrucciones de <a href="http://www.medra.org/en/guide.htm" target="_blank">Página de inicio de mEDRA</a> para recibir un nombre de usuario/a y una contraseña. En caso de no poseer su propio nombre de usuario/a y contraseña, podrá exportar en formato XML mEDRA (Onix para DOI) pero no podrá registrar su DOI en mEDRA dentro de OJS. Tenga en cuenta que la contraseña se guardará como texto sin formato, es decir sin cifrar, debido a los requisitos del servicio de registro mEDRA.
	',
  'plugins.importexport.medra.settings.form.description' => 'Configure el módulo de exportación mEDRA:',
  'plugins.importexport.medra.settings.form.username' => 'Nombre de usuario/a',
  'plugins.importexport.medra.settings.form.usernameRequired' => 'Introduzca su nombre de usuario mEDRA. El nombre de usuario/a no puede contener dos puntos.',
  'plugins.importexport.medra.settings.form.registrantName' => 'Nombre de la institución registrada en mEDRA',
  'plugins.importexport.medra.settings.form.registrantNameRequired' => 'Introduzca la institución registrada en mEDRA.',
  'plugins.importexport.medra.settings.form.fromFields' => 'Persona de contacto en caso de que mEDRA realice consultas técnicas:',
  'plugins.importexport.medra.settings.form.fromCompany' => 'Institución',
  'plugins.importexport.medra.settings.form.fromCompanyRequired' => 'Introduzca la institución técnicamente responsable de la exportación del DOI (p. ej. la institución que hospeda el servidor web).',
  'plugins.importexport.medra.settings.form.fromName' => 'Persona de contacto',
  'plugins.importexport.medra.settings.form.fromNameRequired' => 'Introduzca una persona técnica de contacto.',
  'plugins.importexport.medra.settings.form.fromEmail' => 'Correo electrónico',
  'plugins.importexport.medra.settings.form.fromEmailRequired' => 'Introduzca un correo electrónico de contacto técnico válido.',
  'plugins.importexport.medra.settings.form.publicationCountry' => 'Elija el país que aparecerá como \'país de publicación\' en mEDRA.',
  'plugins.importexport.medra.settings.form.exportIssuesAs' => 'Elija si desea exportar los números como <a href="http://www.medra.org/en/metadata_td.htm" target="_blank">\'obras\' o \'manifestaciones\'</a>.',
  'plugins.importexport.medra.settings.form.work' => 'Obra',
  'plugins.importexport.medra.settings.form.manifestation' => 'Manifestación',
  'plugins.importexport.medra.workOrProduct' => 'Nota: Los DOI asignados a los artículos se exportarán a mEDRA como <a href="http://www.medra.org/en/metadata_td.htm" target="_blank">\'obras\'</a>. Los DOI asignados a las galeradas se exportarán como <a href="http://www.medra.org/en/metadata_td.htm" target="_blank">\'manifestación\'</a>.',
  'plugins.importexport.medra.cliUsage' => 'Uso:
{$scriptName} {$pluginName} export [xmlFileName] [journal_path] {issues|articles|galleys} objectId1 [objectId2] ...
{$scriptName} {$pluginName} register [journal_path] {issues|articles|galleys} objectId1 [objectId2] ...
',
  'plugins.importexport.medra.settings.form.exportIssuesAs.label' => 'Los números se exportan como',
  'plugins.importexport.medra.settings.form.automaticRegistration.description' => 'OJS registrará automáticamente los DOI en mEDRA. Tenga en cuenta que este proceso puede llevar un poco de tiempo tras la publicación (p. ej., en función de la configuración cron). Puede comprobar todos los DOI que no se han registrado.',
  'plugins.importexport.medra.settings.form.testMode.description' => 'Utilice la API de prueba mEDRA (entorno de prueba) para registrar los DOI. No olvide desactivar esta opción en la versión de producción.',
  'plugins.importexport.medra.senderTask.name' => 'Tarea de registro automático de mEDRA',
); ?>