Lösung für Coding Challenge für SPRING Axel Springer Digital News Media GmbH & Co. KG

Aufgabenstellung:

# Wordpress Coding - Challenge
"Books"

Wordpress Plugin "Books"

* Preparation
    * create a dockerfile which creates a WordPress image
    * create a docker-compose file that will be used to build the image
    * use the docker-compose file to run the image
    * the wordpress can be reached via 127.0.0.1:8181
    * the wordpress setup process can be done manually

* Post Type
    *  create a custom post type book
        *  you can create a book
        *  you can edit a book
        *  you can delete a book
        *  you can search for a book
        * suported/displayed fields are: title, editor, author
* Plugin Import Books
    * create a menu item import under the parent Books menu item (Books -> Import)
    * a json file can be imported via an upload field
        * If valid JSON is uploaded, iterate through the JSON and insert or update a book posts as appropriate
        * Display how many books were added and updated
    * create a menu item export under the parent Books menu item
        * export all books as json


* Frontend
    * Display a list of all Books
    * Display a single Book
