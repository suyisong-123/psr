<?php

/*
psr-1开发规范
1.Files MUST use only <?php and <?= tags.
2.Files MUST use only UTF-8 without BOM for PHP code.
3.Files SHOULD either declare symbols (classes, functions, constants, etc.) or cause side-effects (e.g. generate output, change .ini settings, etc.) but SHOULD NOT do both.
4.Namespaces and classes MUST follow an “autoloading” PSR: [PSR-0, PSR-4].
5.Class names MUST be declared in StudlyCaps.
6.Class constants MUST be declared in all upper case with underscore separators.
7.Method names MUST be declared in camelCase.

*/


/*
2.File
*/

// side effect: change ini settings
ini_set("error_reporting", E_ALL);

// side effect: loads a file
include "file.php";

// side effect: generates output
echo "<html>\n";


//declare symbols
// declaration
function foo()
{
    // function body
}

// conditional declaration is *not* a side effect
if (! function_exists('bar')) {
    function bar()
    {
        // function body
    }
}


/*
3.Namespace and Class Names
*/
// PHP 5.3 and later:
namespace Vendor\Model;

class Foo
{

}


// PHP 5.2.x and earlier: no namespace
class Vendor_Model_Foo
{
}


/*
4. Class Constants, Properties, and Methods
Method names MUST be declared in camelCase().
*/
namespace Vendor\Model;

class Foo
{
    const VERSION = '1.0';
    const DATE_APPROVED = '2012-06-01'; //CONSTANT:upper with undersocre

    public $StudlyCaps = 1;
    $camelCase = 2;
    $under_socre = 3;	//三种变量的写法!
}


