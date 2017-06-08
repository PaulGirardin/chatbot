<?php
require_once('bootstrap.php');

$q = 'wtf';
$c = 'wtf';
$idq = 1;

$question = new Question;
$question->setQuestion($q);
$question->setContent($c);
$question->setQuestionOrigine($idq);

$em->persist($question);
$em->flush();

require_once('viewAdmin.php');