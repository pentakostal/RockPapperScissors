<?php
class Game
{
    public function evaluate(object $playerOne, object $playerTwo): string
    {
        if (get_class($playerOne) == get_class($playerTwo)) {
            $answer = "Draw";
        } elseif ($playerOne->beats[0] == get_class($playerTwo) || $playerOne->beats[1] == get_class($playerTwo)) {
            $answer = "Player wins";
        } else {
            $answer = "Computer wins";
        }
        return $answer;
    }
}

class Rock
{
    public array $beats = ["Scissors", "Lizard"];

    public function get(): string
    {
        return "Rock";
    }
}

class Paper
{
    public array $beats = ["Rock", "Spocks"];

    public function get(): string
    {
        return "Paper";
    }
}

class Scissors
{
    public array $beats = ["Paper", "Lizard"];

    public function get(): string
    {
        return "Scissors";
    }
}

class Lizard
{
    public array $beats = ["Spocks", "Paper"];

    public function get(): string
    {
        return "Lizard";
    }
}

class Spocks
{
    public array $beats = ["Scissors", "Rock"];

    public function get(): string
    {
        return "Spocks";
    }
}

//Set up the game
$game = new Game();
$elements = [
    $rock = new Rock(),
    $paper = new Paper(),
    $scissors = new Scissors(),
    $lizard = new Lizard(),
    $spocks = new Spocks()
];

$i = 1;
foreach ($elements as $element) {
    echo "$i " . $element->get() . PHP_EOL;
    $i++;
}
$player = (int) (readline("Choose : ->") - 1);
$computer = rand(0, 4);

echo "Player choice " . $elements[$player]->get() . PHP_EOL;
echo "Computer choice " . $elements[$computer]->get() . PHP_EOL;
echo $game->evaluate($elements[$player] , $elements[$computer]) . PHP_EOL;
