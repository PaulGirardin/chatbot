<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chatbot</title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div id="lol">
		<p id="bot-question"><?= $question->getContent(); ?></p>
		<ul id="list">
			<?php foreach($subQuestions as $sq): ?>
				<li class="question" id="<?= $sq->getId() ?>"><?= $sq->getQuestion() ?></li>
			<?php endforeach; ?>
		</ul>
	</div>

	<script type="text/javascript">
		$(document).ready(function () {
			$('.question').on('click', function () {
				$.ajax({
					method: 'POST',
					url: "getQuestion.php",
					data: {idq: $(this).attr('id')},
					success: function (result) {
						console.log(result);
						$('#bot-question').html(result.question);
						$('#list').html('');
						// result.subQuestions.each(function() {

						// });
					}
				});
			});
		});
	</script>
</body>
</html>