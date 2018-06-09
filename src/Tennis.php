<?php

class Tennis
{
    private $player1_name;
    private $player2_name;
    private $score_maping = array(
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    );
    private $result1;
    private $result2;

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
        if ($score1 == $score2 && $score1 <= 2) {
            return $this->score_maping[$score1] . ' All';
        }

        $this->result1 = $this->score_maping[$score1];
        $this->result2 = $this->score_maping[$score2];

        return sprintf('%s %s', $this->result1, $this->result2);
    }
}
