<?php
// Issue 1: Unused variable
$unusedVariable = "This is an unused variable.";

$var7='203>>>>>204';
// Issue 2: Unused function
function unusedFunction() {
    echo "This function is never called.";
}

// Issue 3: SQL Injection vulnerability
$userId = $_GET['user_id'];
$sql = "SELECT * FROM users WHERE id = $userId";

// Issue 4: Unescaped output
$userInput = $_POST['input_data'];
echo "User input: " . $userInput;

// Issue 5: Non-secure password handling
$password = "12345"; // This is a non-secure password storage

// Issue 6: Missing comments
function someFunction($param) {
    // No comments or documentation for this function
    return $param;
}

// Issue 7: Code duplication
function duplicateCode($a, $b) {
    return $a + $b;
}

function anotherDuplicateCode($x, $y) {
    return $x + $y;
}

// Issue 8: Long method
class Example {
    public function longMethod() {
        // A very long method with too many lines of code
        // ...
    }
}

// Issue 9: High cyclomatic complexity
function highComplexity($x, $y) {
    if ($x > 0) {
        if ($y > 0) {
            echo "Both x and y are positive.";
        } else {
            echo "Only x is positive.";
        }
    } else {
        if ($y > 0) {
            echo "Only y is positive.";
        } else {
            echo "Neither x nor y is positive.";
        }
    }
}

// Issue 10: Using outdated or deprecated functions
$timestamp = strtotime("2020-01-01"); // Using strtotime is discouraged

// Issue 11: Hardcoded credentials
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "password123";
$dbName = "my_database";

// Issue 12: Potential array out-of-bounds access
$array = [1, 2, 3];
$value = $array[3]; // Accessing an out-of-bounds index

// Issue 13: Unhandled exceptions
try {
    // Some code that may throw exceptions
} catch (Exception $e) {
    // Exception is caught but not properly handled
}

// Issue 14: Inefficient code
for ($i = 0; $i < 1000000; $i++) {
    // Some inefficient code
}

// Issue 15: Missing input validation
$userInput = $_GET['user_input'];
// No validation of user input

// Issue 16: Unescaped HTML output
$userInput = $_POST['html_input'];
echo "User input: " . $userInput;

// Issue 17: Lack of error handling
$file = fopen("non_existent_file.txt", "r");
// No error handling for file opening

// Issue 18: Code smells and anti-patterns
$flag = true;
if ($flag == true) {
    // Redundant condition
}

// Issue 19: Potential resource leaks
$resource = fopen("file.txt", "r");
// Resource not closed after use

// Issue 20: Unresolved TODO comments
// TODO: Implement this functionality

// Issue 21: No unit tests
class UnittestedClass {
    public function someMethod() {
        // No unit tests are available for this class or method
    }
}
