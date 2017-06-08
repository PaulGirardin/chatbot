<?php
require_once('bootstrap.php');

$idq = 1;

if (isset($_GET['idq'])) {
	$idq = $_GET['idq'];
}

$questionRepo = $em->getRepository('\Question');
$question = $questionRepo->find($idq);
$subQuestions = $questionRepo->findByQuestionOrigine($idq);

require_once('view.php');