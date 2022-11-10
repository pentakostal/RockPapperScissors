<?php
class Game
{
    public function evaluate(object $playerOne, object $playerTwo): string
    {
        if (get_class($playerOne) == get_class($playerTwo)) {
            $answer = "Draw";
        } elseif ($playerOne->beats == get_class($playerTwo)) {
            $answer = "Player wins";
        } else {
            $answer = "Computer wins";
        }
        return $answer;
    }
}

class Rock
{
    public string $beats = "Scissors";
}

class Paper
{
    public string $beats = "Rock";
}

class Scissors
{
    public string $beats = "Paper";
}

//Set up the game
$game = new Game();
$elements = [
    $rock = new Rock(),
    $paper = new Paper(),
    $scissors = new Scissors()
];
$player = (int) readline("Choose: ->");
$computer = rand(0, 2);
var_dump($player);
var_dump($computer);
echo $game->evaluate($elements[$player] , $elements[$computer]) . PHP_EOL;
