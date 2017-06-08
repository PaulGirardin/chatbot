<?php
if (! isset($_POST['idq'])) {
	echo false;
	exit;
}

require_once('bootstrap.php');

$idq = $_POST['idq'];

$questionRepo = $em->getRepository('\Question');
$question = $questionRepo->find($idq);
$subQuestions = $questionRepo->findByQuestionOrigine($idq);

$data = ['question' => $question, 'subQuestions' => $subQuestions];

$serializer = JMS\Serializer\SerializerBuilder::create()->build();
$jsonContent = $serializer->serialize($data, 'json');
echo $jsonContent;