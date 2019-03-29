# dkmarc

This class is designed to encapsulate a MARC record, in a structured way
it is a base class to be extended by other classes.
	
My intention is that this should be a good base utility class to 
encapsulate raw marc records.  The class can then be extended
by other programmers.

So, all it should do is 
a) take the MARC record in (in whatever format)
i) 		Detect what form it is in
ii)		Clean it up
iii) 	Break it up into an easily accessible array

... thus creating a data object, which can easily be got at by
other functions

I would be interested to know whether you use this class in any of your work.  

David Kane, 2010.
dkane@wit.ie
http://library.wit.ie/

## Usage



This is the sort of array that is generated in PHP which can then be programatically accessed ...

```php
Array
 	(
 	    [0] => Array
 	        (
 	            [0] => 006
 	            [1] => Array
 	                (
 	                    [0] => notfunny
 	                )
 	            [2] => Array
 	                (
 	                    [0] => nosubfields
 	                    [1] => 92nam  22002055a 4500array1
 	                ) 
 	        ) 
 	    [11] => Array
 	        (
 	            [0] => 650
 	            [1] => Array
 	                (
 	                    [0] =>  
 	                    [1] =>  
 	                    [2] => 0
 	                    [3] =>  
 	                )
 	            [2] => Array
 	                (
 	                    [0] => $a
 	                    [1] =>  Engineering 
 	                    [2] => $x
 	                    [3] =>  Study and teaching (Higher) 
 	                    [4] => $z
 	                    [5] =>  Great Britain 
 	                    [6] => $x
 	                    [7] =>  Guidebooks.
 	                )
 	        )
 	)
```