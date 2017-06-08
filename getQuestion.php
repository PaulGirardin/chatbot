<?php
require_once('bootstrap.php');

$idq = 0;

if (isset($_POST['idq'])) {
	$idq = $_POST['idq'];
}

$questionRepo = $em->getRepository('\Question');
$question = $questionRepo->find($idq);
$subQuestions = $questionRepo->findByQuestionOrigine($idq);