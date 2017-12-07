# Programming Exercise
## Author
Mitko Tochev
December 7th, 2017

## Requirements
- PHP 7.0.0 or higher
- PHPUnit 6.5.3 or higher

## Features
- All of the code is in the `App` namespace
- There are 3 custom exceptions that are utilized for verifying certain functionality
- There is a `App\Interfaces\Person` interface which defines the required functionality for all `Person` models
- There is a `App\Models\Person` abstract class which defines the bulk of the available functionality for any other `App\Models\People\*` classes
- There is a `App\Models\People\Employee` class which defines the Employee functionality and restrictions
- There is a `App\Models\People\Manager` class which defines the Manager functionality and restrictions
- The `tests` directory contains all of the PHPUnit tests that ensure the functionality of the rest of the classes works correctly.
You will find tests that illustrate this functionality:
    - factory design pattern creation of Employees and Managers
    - promotion of Employee to Manager
    - mass conversion of DB data into models