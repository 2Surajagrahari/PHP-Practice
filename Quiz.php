<?php
$questions = [
    [
        "question" => "What is the national animal of India?",
        "options" => ["A. Elephant", "B. Tiger", "C. Leopard", "D. Lion"],
        "answer" => "B"
    ],
    [
        "question" => "What is the national bird of India?",
        "options" => ["A. Peocock", "B. Parrot", "C. Eagle", "D. Sparrow"],
        "answer" => "A"
    ],
    [
        "question" => "What is the flower of India?",
        "options" => ["A. Rose", "B. Lotus", "C. Marigold", "D. Lily"],
        "answer" => "B"
    ],
    [
        "question" => "What is the national song of India ",
        "options" => ["A. Jan gan mann", "B. Vande Matram", "C.Aekle Chalo ", "D. Ae Watan"],
        "answer" => "B"
    ],
    [
        "question" => "Who wrote national anthem of India?",
        "options" => ["A. Rabindra nath Tagore", "B. William Shakespeare", "C. A.R.Rehman", "D.Mahatma Gandhi"],
        "answer" => "B"
    ]
];

function displayQuiz($questions) {
    echo "<form method='post'>";
    foreach ($questions as $index => $q) {
        echo "<p>" . ($index + 1) . ". " . $q['question'] . "</p>";
        foreach ($q['options'] as $option) {
            $value = substr($option, 0, 1);
            echo "<input type='radio' name='answer[$index]' value='$value'> $option<br>";
        }
    }
    echo "<br><input type='submit' name='submit' value='Submit'></form>";
}

function checkAnswers($questions) {
    $score = 0;
    if (isset($_POST['answer'])) {
        $answers = $_POST['answer'];
        foreach ($questions as $index => $q) {
            if (isset($answers[$index]) && $answers[$index] == $q['answer']) {
                $score++;
            }
        }
    }
    return $score;
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $score = checkAnswers($questions);
    echo "<h2>Your Score: $score / " . count($questions) . "</h2>";
} else {
    displayQuiz($questions);
}
?>