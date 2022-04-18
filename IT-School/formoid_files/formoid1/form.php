<?php

define('EMAIL_FOR_REPORTS', 'hard.deev13@gmail.com');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-red.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-red.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-solid-red" style="background-color:#1A2223;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2></h2></div>
	<div class="element-name<?php frmd_add_class("name"); ?>"><label class="title"></label><span class="nameFirst"><input placeholder=" Prénom" type="text" size="8" name="name[first]" /><span class="icon-place"></span></span><span class="nameLast"><input placeholder=" Nom" type="text" size="14" name="name[last]" /><span class="icon-place"></span></span></div>
	<div class="element-phone<?php frmd_add_class("phone"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="tel" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}" maxlength="24" name="phone" placeholder="Numéro de Téléphone" value=""/><span class="icon-place"></span></div></div>
	<div class="element-email<?php frmd_add_class("email"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="email" name="email" value="" placeholder="Email"/><span class="icon-place"></span></div></div>
	<div class="element-select<?php frmd_add_class("select"); ?>"><label class="title"></label><div class="item-cont"><div class="large"><span><select name="select" >

		<option value="Etudiant">Etudiant</option>
		<option value="Salarié">Salarié</option>
		<option value="Chercheur d'Emploi">Chercheur d'Emploi</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-checkbox<?php frmd_add_class("checkbox"); ?>"><label class="title">Formation en Bureautique Souhaité:</label>		<div class="column column2"><label><input type="checkbox" name="checkbox[]" value="WORD"/ ><span>WORD</span></label><label><input type="checkbox" name="checkbox[]" value="ACCESS"/ ><span>ACCESS</span></label></div><span class="clearfix"></span>
		<div class="column column2"><label><input type="checkbox" name="checkbox[]" value="EXCEL"/ ><span>EXCEL</span></label><label><input type="checkbox" name="checkbox[]" value="POWERPOINT"/ ><span>POWERPOINT</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-select<?php frmd_add_class("select1"); ?>"><label class="title"></label><div class="item-cont"><div class="large"><span><select name="select1" >

		<option value="Débutant">Débutant</option>
		<option value="Initial">Initial</option>
		<option value="Avancé">Avancé</option></select><i></i><span class="icon-place"></span></span></div></div></div>
<div class="submit"><input type="submit" value="Valider"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-red.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>