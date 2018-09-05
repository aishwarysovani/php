<?php
include'utility.php';
global $empty;
global $none;
global $user;
global $computer;
global $stalemate;
$empty=0;$none=0;$user=1;$computer=2;$stalemate=3;

$turn=$user;
$board=array(3,3);
$move;$winner;
echo"This is a tic-tac-toe game";
echo"You are playing against the computer!";
echo"Enter 1-9 to indicate your move";
print_board($board);
while(true) 
{
    if($turn == $user) 
    {
    echo"Your move";
    $move = -1;
    while ($move<0 || $move>9 || $board[$move/3][$move%3] != $empty)
    {
        echo"Please enter your move(0-9): ";
        $move =filternum();
    }
    }
    else
    {
    $move = computer_move($board);
    echo"Computer move: " . $move;
    }

    $board[$move/3][$move%3] = $turn;

    print_board($board);
    $winner = checkWinner($board);

    if($winner != $none)
    break;

    if($turn == $user)
    {
    $turn = $computer;
    } 
    else 
    {
    $turn = $user;
    }
}
switch($winner)
{
	case $user:
	    echo"You won!";
	    break;
	case $computer: 
	    echo"Computer won!";
	    break;
	default:
	    echo"Tie!";
	    break;
}

    
    function print_board($board) {
        echo printChar($board[0][0]);
        echo"\n |";
        echo printChar($board[0][1]);
        echo"|";
        echo printChar($board[0][2]);
        echo"\n -----";
        echo printChar($board[1][0]);
        echo"\n |";
        echo printChar($board[1][1]);
        echo"|";
        echo printChar($board[1][2]);
        echo"\n -----";
        echo printChar($board[2][0]);
        echo"\n |";
        echo printChar($board[2][1]);
        echo"|";
        echo printChar($board[2][2]);
        }

function printChar($b) {
        switch($b) {
        case 0 :
            return ' ';
        case 1:
            return 'X';
        case  2 :
            return 'O';
        }
        return ' ';
 }

 function checkWinner($board)
 {
    if(($board[0][0] == $board[0][1]) && ($board[0][1] == $board[0][2]))
    return $board[0][0];

// middle row
if(($board[1][0] == $board[1][1]) && ($board[1][1] == $board[1][2]))
    return $board[1][0];

// bottom row
if(($board[2][0] == $board[2][1]) && ($board[2][1] == $board[2][2]))
    return $board[2][0];

// Check verticals

// left column
if(($board[0][0] == $board[1][0]) && ($board[1][0] == $board[2][0]))
    return $board[0][0];

// middle column
if(($board[0][1] == $board[1][1]) && ($board[1][1] == $board[2][1]))
    return $board[0][1];

// right column
if(($board[0][2] == $board[1][2]) && ($board[1][2] == $board[2][2]))
    return $board[0][2];

// Check diagonals
// one diagonal
if(($board[0][0] == $board[1][1]) && ($board[1][1] == $board[2][2]))
    return $board[0][0];

// the other diagonal
if(($board[0][2] == $board[1][1]) && ($board[1][1] == $board[2][0]))
    return $board[0][2];

// Check if the board is full
if($board[0][0] == $empty || 
    $board[0][1] == $empty  || 
    $board[0][2] == $empty || 
    $board[1][0] ==$empty  ||
    $board[1][1] == $empty  ||
    $$board[1][2] == $empty  ||
    $board[2][0] == $empty  ||
    $board[2][1] == $empty  ||
    $board[2][2] == $empty )
     return $none;

return $stalemate;
}

function computer_move($board) {
	$move = rand(0,9);

	while($board[$move/3][$move%3] != $empty) 
	    $move = rand(0,9);

	return $move;
    }
?>