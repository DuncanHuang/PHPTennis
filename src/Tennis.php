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

    /**
     * @param $score1
     * @param $score2
     *
     * @return string
     */
    public function getResult($score1, $score2)
    {
        $score_diff = $score1 - $score2;  // 分數相差

        // 平手
        if ($score_diff == 0) {
            if ($score1 <= 2) {
                // 未尚達到 Deuce
                return $this->score_maping[$score1] . ' All';
            } else {
                // Deuce
                return 'Deuce';
            }
        }

        // Deuce 以後
        if ($score1 >= 3 && $score2 >= 3) {
            // Win
            if (abs($score_diff) == 2) {
                if ($score_diff > 0) {
                    // 正數為 Play 1 Win
                    return sprintf('%s Win', $this->player1_name);
                } else {
                    // 負數為 Play 2 Win
                    return sprintf('%s Win', $this->player2_name);
                }
            }

            if ($score1 > $score2) {
                return sprintf('%s Adv', $this->player1_name);
            } else {
                return sprintf('%s Adv', $this->player2_name);
            }
        }

        if ($score1 == 4 || $score2 == 4) {
            if ($score_diff > 0) {
                return sprintf('%s Win', $this->player1_name);
            } else {
                return sprintf('%s Win', $this->player2_name);
            }
        }

        $this->result1 = $this->score_maping[$score1];
        $this->result2 = $this->score_maping[$score2];

        return sprintf('%s %s', $this->result1, $this->result2);
    }
}
