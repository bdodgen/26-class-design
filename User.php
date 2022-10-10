<!-- Our system will need its users. An user here represents a record of a user that uses the app. Therefore it will only need information that is somehow useful to it.

Decide on a good name for the class.
Create a new file with a proper name and declare the class inside.
Declare properties in the class that could describe a user object.
Write (empty) method declarations for whatever actions a user object can do or that can be done to it.
Optionally declare parameters to the declared methods. Use type declarations wherever it makes sense, especially if the parameters or return values should be objects of other classes from these exercises. -->

<?php

class User 
{
  public ?int $id = null; // user id
  public ?string $name = null; // user display name
  public ?PaymentMethod payment_method = null; // an object that won't be made for this exercisess
}