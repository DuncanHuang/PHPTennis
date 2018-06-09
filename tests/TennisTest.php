<?php
require __DIR__ . '/../src/Tennis.php';

use PHPUnit\Framework\TestCase;

final class TennisTest extends TestCase
{
    /**
     * @test
     * @dataProvider scoreProvider
     *
     * @param $player1_name
     * @param $player2_name
     * @param $player1
     * @param $player2
     * @param $expected
     */
    public function it_should_get_tennis_score($player1_name, $player2_name, $score1, $score2, $expected)
    {
        // Arrange
        $game = new Tennis($player1_name, $player2_name);

        // Act
        $actual = $game->getScore($score1, $score2);

        // Assert
        $this->assertEquals($expected, $actual);
    }

    public function scoreProvider()
    {
        return [
            ['Joey', 'Tom', 0, 0, 'Love All'],
            ['Joey', 'Tom', 1, 0, 'Fifteen Love'],
            ['Joey', 'Tom', 2, 0, 'Thirty Love'],
            ['Joey', 'Tom', 3, 0, 'Forty Love'],
            ['Joey', 'Tom', 0, 1, 'Love Fifteen'],
            ['Joey', 'Tom', 0, 2, 'Love Thirty'],
            ['Joey', 'Tom', 1, 1, 'Fifteen All'],
            ['Joey', 'Tom', 2, 2, 'Thirty All'],
            ['Joey', 'Tom', 3, 3, 'Deuce'],
            ['Joey', 'Tom', 4, 4, 'Deuce'],
            ['Joey', 'Tom', 10, 10, 'Deuce'],
            ['Joey', 'Tom', 4, 3, 'Joey Adv'],
            ['Joey', 'Tom', 3, 4, 'Tom Adv'],
        ];
    }

}
