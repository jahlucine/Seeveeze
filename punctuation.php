function punctuation($string){
//clean double space
$string = preg_replace('/\s\s+/', ' ', $string);
//clean commas
$pattern = '/\s+,/';
$replacement = ',';
$string=preg_replace($pattern, $replacement, $string);
$pattern = '/,\s{0}/';
$replacement = ', ';
$string=preg_replace($pattern, $replacement, $string);
//period
//$pattern = '/\.\s{0}([a-zA-z])/';
//$replacement = '. $1';
$string=preg_replace($pattern, $replacement, $string);
$pattern = '/\s+\./';
$replacement = '.';
$string=preg_replace($pattern, $replacement, $string);
//semicolon
$pattern = '/;\s{0}/';
$replacement = '; ';
$string=preg_replace($pattern, $replacement, $string);
$pattern = '/\s+;/';
$replacement = ';';
$string=preg_replace($pattern, $replacement, $string);
//bracketleft
$pattern = '/\s{0}\(/';
$replacement = ' (';
$string=preg_replace($pattern, $replacement, $string);
$pattern = '/\(\s+/';
$replacement = '(';
$string=preg_replace($pattern, $replacement, $string);
//bracketright
$pattern = '/\)\s{0}/';
$replacement = ') ';
$string=preg_replace($pattern, $replacement, $string);
$pattern = '/\s+\)/';
$replacement = ')';
$string=preg_replace($pattern, $replacement, $string);
//2 points
$pattern = '/[p]{0}:\s{0}/';
$replacement = ': ';
$string=preg_replace($pattern, $replacement, $string);
$pattern = '/\s+:/';
$replacement = ':';
$string=preg_replace($pattern, $replacement, $string);
return $string;
}
