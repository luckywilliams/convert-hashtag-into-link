# convert-hashtag-into-link
Convert Hashtag into link in OOP way.


# Table of Contents

1. index.php

- how to use code example.

2. dispaly-hastag.php

- display hashtag link by using GET mehtod.

3. src/convert-into-link.php

- main file to convert hashtag into link.


# Installation:

clone or download source files into your project.


# Usage: 

```php
//require source file
require_once("src/convert-into-link.php");

//type the string you can use get and post method here
$string = "It is #example string you can #test #more.";

// create object
$ConvertHashtags = new ConvertIntoLink;

// call the function in classs
$result = $ConvertHashtags -> Convert($string);

// print result
echo $result;
```

# Credits:

Orginal Creator : Sir Adam Khoury (PHP Teacher)

Original Project : http://www.developphp.com/video/PHP/Hashtag-System-and-Regex-PHP-Programming-Tutorial

# License:

GNU General Public License V. 3.0 or later
