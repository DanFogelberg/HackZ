INSERT MANDATORY GIF

# Project Title

Text about the project and why it exists. This would also be a great place to link the project on One.com.

# Installation

Add the installation instructions.

# Code Review
    Written by Axel Enghamre
1 - ´index.php:15-17´ Here you don’t need to open and close the php tags.
2 - ´/php/functions.php:7-9´ Using global works but better practice is to use the “use” keyword after the parameters to pass down the super variable to the lower scope.
3 - ‘General’ Due to the fact that the code is strictly typed all functions should have a return type even if they don’t return anything, use “void”.
4 - ´/php/variables.php:29-42´ For the developer it’s easier to understand what files does by their name and here is some session logic which can be put in a function in functions.
5 - ´/php/variables.php:42´ Instead of using an if statement, an inline if could be used here.

# Testers

Tested by the following people:

1. Emma Hedlund
2. Simon Lövbacka
