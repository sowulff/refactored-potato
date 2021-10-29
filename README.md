INSERT MANDATORY GIF

# My Smoothie Website

A PHP-assignment in which I've created a recipe website for smoothies. 
Go visit my website on http://sowulff.com/refactored-potato/index.php !

# Installation

Clone or fork the project.
Navigate to the root of this directory in your terminal of choice.
Start a localhost server from your command line.
"php -S localhost:8000"
Launch the website with your localhost server in your preferred browser.

# Code Review

Code review written by [Christopher Michael](https://github.com/chrs-m).

1. `header.php:40-42` - For readability and consistency, try not to mix captial letters on headings/links.
2. `footer.php` - File exist but is not included anywhere?
3. `data.php` - Since 'recipe' is the same everywhere, it could have been made into a variable. Also, you might want to use capital letter on the names and ingredients.
4. `form.php:4-14` - No need for HTML emmet when you have the header.php required.
5. `index.php:8-18` - See as above, _No need for HTML emmet_.
6. `recipe.php:8-18` - See as above, _No need for HTML emmet_.
7. `random.php:8-18` - See as above, _No need for HTML emmet_.
8. `recipe.php` - Variables could be moved into its own file like '_varibles.php_'.
9. `shuffle.php` - Could probably be named _functions.php_ since that's whats in it. That would make it easier in future if you would want to add more functions to your project.
10. `random.php` - Isn't this page meant to be using your function "getRandomRecipe" from `shuffle.php`? Now you are doing the same thing, but without the function.

_Nitpicking:_

-   Images names could have the same naming scheme for consistency.
-   Images is missing ALT-text.
-   The word 'want' is misspelled in `form.php:18`
-   The sentence "from what you have home" is missing a 'at' between 'have' and 'home.

> #### _All in all, you have done a great work with your first assignment! 👍🏼👌🏼 Fun implementation with a smoothie generator 😊_

# Testers

Tested by the following people:

1. Jane Doe
2. John Doe
