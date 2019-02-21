<?php



//This script identifies a word as given by the user and then heighlights it.
//It's built purely in PHP and can be implemented using Javascript.



function highlight($text, $words) {
    preg_match_all('~\w+~', $words, $m);
    if(!$m)
        return $text;
    $re = '~\\b(' . implode('|', $m[0]) . ')\\b~';
    return preg_replace($re, '<b>$0</b>', $text);
}

$text = '
Love is patient, love is kind. It does not envy, it does not boast, it is not proud. It is not rude, it is not self-seeking, it is not easily angered, it keeps no record of wrongs. Love does not delight in evil but rejoices with the truth. It always protects, always trusts, always hopes, always perseveres. 1 Corinthians 13:4-7
In the beginning was the Word, and the Word was with God, and the Word was God. He was with God in the beginning. Through Him all things were made; without him nothing was made that has been made. In him was life, and that life was the light of men. The light shines in the darkness, but the darkness has not understood it. 

';

$words = 'the it';

print highlight($text, $words);

?>