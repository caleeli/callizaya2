<?php
// Example JSON string (This should be loaded from a file or external source in a real scenario)
$v = $_GET['v'] ?? 8;
$json = file_get_contents(__DIR__ . '/test' . $v . '.json');
$test = json_decode($json, true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $answers = $_POST['answers'];
    $questions = $_POST['questions'];
} else {
    // Get 20 random questions
    $questions = array_keys($test);
    shuffle($questions);
    $questions = array_slice($questions, 0, 20);
}
if ($_REQUEST['questions']) {
    $questions = explode(',', $_REQUEST['questions']);
} else {
    // Get 20 random questions
    $questions = array_keys($test);
    shuffle($questions);
    $questions = array_slice($questions, 0, 20);
}

// Get tests from the selected questions
$test = array_intersect_key($test, array_flip($questions));
$test = array_values($test);

$totalScore = 0;
$hasAnswers = isset($answers);
if ($hasAnswers) {
    foreach ($test as $index => $question) {
        if (array_key_exists('o', $question)) {
            $correctAnswers = is_array($question['a']) ? $question['a'] : [$question['a']];
            $userAnswers = (array) ($answers[$index] ?? []);
            $isCorrect = count(array_intersect($correctAnswers, $userAnswers)) === count($correctAnswers);
        } else {
            $isCorrect = strtolower(trim($answers[$index])) == strtolower(trim($question['a']));
        }
        if ($isCorrect) {
            $totalScore++;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Test</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-8">
    <form method="POST" action="">
        <?php if ($hasAnswers): ?>
        <div class="bg-white p-4 shadow rounded mb-4">
            <p class="text-lg font-semibold">Your score: <?= $totalScore ?>/<?= count($test) ?></p>
        </div>
        <?php endif; ?>
        <input name="questions" type="hidden" value="<?=htmlentities(implode(',', $questions))?>">
        <?php foreach ($test as $index => $question): ?>
        <div class="mb-4 p-4 bg-white shadow rounded">
            <p class="text-lg font-semibold">
                <?= $index + 1 ?>.
                <?= $question['q'] ?>
                <?php if (array_key_exists('q_es', $question)): ?>
                <a href="#" title="<?= htmlentities($question['q_es']) ?>">💡</a>
                <?php endif; ?>
            </p>
            <?php if (array_key_exists('o', $question)): ?>
            <!-- Handling multi-choice or single-choice questions -->
            <?php foreach ($question['o'] as $key => $option): ?>
            <label class="block mt-2">
                <?php $isCorrect = is_array($question['a']) ? in_array($key, $question['a']) : $question['a'] == $key;
                $userAnswer = isset($answers[$index]) && in_array($key, (array) $answers[$index]);
                $bgColor = isset($answers) ? ($isCorrect ? 'bg-green-200' : ($userAnswer ? 'bg-red-200' : 'bg-white')) : 'bg-white';
                ?>
                <input
                    type="<?= is_array($question['a']) ? 'checkbox' : 'radio' ?>"
                    name="answers[<?= $index ?>]<?= is_array($question['a']) ? '[]' : '' ?>"
                    value="<?= $key ?>" class="mr-2"
                    <?= isset($answers[$index]) && in_array($key, (array) $answers[$index]) ? 'checked' : '' ?>
                <?= isset($answers) ? 'disabled' : '' ?>>
                <span
                    class="<?= $bgColor ?> p-1 rounded"><?= $option ?></span>
            </label>
            <?php endforeach; ?>
            <?php else: ?>
            <!-- Handling text input questions -->
            <input type="text" name="answers[<?= $index ?>]"
                value="<?= $answers[$index] ?? '' ?>"
                class="mt-2 p-2 border rounded w-full <?= isset($answers) ? (strtolower(trim($answers[$index])) == strtolower(trim($question['a'])) ? 'bg-green-200' : 'bg-red-200') : '' ?>"
                <?= isset($answers) ? 'disabled' : '' ?>>
            <small><?= isset($answers) ? $question['a'] : '' ?></small>
            <?php endif; ?>
            <!-- Display the reference that explains the answer -->
            <?php if (isset($answers)): ?>
            <div class="mt-2">
                <?php if (array_key_exists('r', $question)): ?>
                <p class="text-sm">
                    <i><?= $question['r'] ?></i>
                </p>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
        <?php if (!isset($answers)): ?>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Submit</button>
        <?php else: ?>
        <a href="?" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Try again</a>
        <?php endif; ?>
    </form>
</body>

</html>