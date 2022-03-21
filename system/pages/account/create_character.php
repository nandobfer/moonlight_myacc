<?php
/**
 * Create character
 *
 * @package   MyAAC
 * @author    Gesior <jerzyskalski@wp.pl>
 * @author    Slawkens <slawkens@gmail.com>
 * @copyright 2019 MyAAC
 * @link      https://my-aac.org
 */
defined('MYAAC') or die('Direct access not allowed!');

$character_name = isset($_POST['name']) ? stripslashes(ucwords(strtolower($_POST['name']))) : null;
$character_sex = isset($_POST['sex']) ? (int)$_POST['sex'] : null;
$character_race = isset($_POST['race']) ? (int)$_POST['race'] : null;

$character_created = false;
$save = isset($_POST['save']) && $_POST['save'] == 1;
$errors = array();
if($save) {
	require_once LIBS . 'CreateCharacter.php';
	$createCharacter = new CreateCharacter();

	$character_created = $createCharacter->doCreate($character_name, $character_sex, $character_race, $account_logged, $errors);
}

if(count($errors) > 0) {
	$twig->display('error_box.html.twig', array('errors' => $errors));
}

if(!$character_created) {
	$twig->display('account.create_character.html.twig', array(
		'name' => $character_name,
		'sex' => $character_sex,
		'save' => $save,
		'errors' => $errors
	));
}