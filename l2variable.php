<?php

# variables 

$fullname = "U Kyaw Kyaw";
$job = "Developer";

echo "My name is $fullname <br/>"; # result = My name is U Kyaw Kyaw
echo 'My name is $fullname <br/>'; # result = My name is $fullname
echo "My name is ${fullname} <br/>"; # result = My name is U Kyaw Kyaw
echo 'My name is ${fullname} <br/>';# result = My name is ${fullname}

echo `My name is ${fullname} <br/>`; #result = empty (can't use `` in php)

echo "I am a {$job} <br/>";

echo "<hr/>";

echo 'He\'s my father. he\'s a $job <br/>'; # result = He's my father. he's a $job
echo "He's my father. he's a $job <br/>"; # result = He's my father. he's a Developer
echo "He's my father. he's a \${job} <br/>"; # result = He's my father. he's a ${job}
echo "He's my father. he's a \{$job} <br/>"; # result = He's my father. he's a \{Developer}
echo "He's my father. he's a {\$job} <br/>"; # result = He's my father. he's a {$job}


echo "<hr/>";

$gender = print "Female"; # result = Female
    echo "<br/>";
// $nation = echo "Burma"; # error can't echo direct at the same time variable
    echo "<hr/>";

# => Concatination .
$firstname = "Aung";
$lastname = "Kyaw Kyaw";

echo $firstname; # result = Aung
echo $lastname; # result = Kyaw Kyaw

echo "<br/>";

echo $firstname . $lastname; # result = AungKyaw Kyaw


# => comments 
#    Single Line Comment 
#        a) # 
#        b) //

#    Multi Line Comment 
    /*    line one 
        line two 
        line three */


?>
