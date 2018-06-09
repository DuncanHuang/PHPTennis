<?php

class Tennis
{
    private $player1_name;
    private $player2_name;

    /**
     * Tennis constructor.
     *
     * @param $player1_name
     * @param $player2_name
     */
    public function __construct($player1_name, $player2_name)
    {
        $this->player1_name = $player1_name;
        $this->player2_name = $player2_name;
    }

    public function getScore($score1, $score2)
    {
        if ($score1 == 0 && $score2 == 0) {
            return 'Love All';
        }

        if ($score1 == 1 && $score2 == 0) {
            return 'Fifteen Love';
        }

        if ($score1 == 2 && $score2 == 0) {
            return 'Thirty Love';
        }

        if ($score1 == 3 && $score2 == 0) {
            return 'Forty Love';
        }

        if ($score1 == 0 && $score2 == 1) {
            return 'Love Fifteen';
        }

        if ($score1 == 0 && $score2 == 2) {
            return 'Love Thirty';
        }

        if ($score1 == 1 && $score2 == 1) {
            return 'Fifteen All';
        }

        if ($score1 == 2 && $score2 == 2) {
            return 'Thirty All';
        }
    }
}
