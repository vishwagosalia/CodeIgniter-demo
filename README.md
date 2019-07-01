# MyCodeigniter

Created a simple form for hands-on practice and understand the concepts of CODEIGNITER. This project is a basic prototype on how the CI works
and how the data can be passed between model view controller.
Initially start a local server as PHP is as server side language. Execution starts with index.php file in views folder. And 'myfirstform' controller initiates the form and handles the data from view to controller. 
'Index.php' View fetches the form data and controller 'myfirstform' validates the fields and loads the model and stores the data in database.
database name = user, table name = users. Enter the remaining database details in config\database.php file for integrating database to our project.
Ternary operators are used to preload the data when 'edit' button is pressed. 
Client side and server side validations have been applied in controller.
