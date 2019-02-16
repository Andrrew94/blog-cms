# blog-cms
A basic vanilla PHP CMS for adding / editing / deleting pages and content

In order for you to use this project, you need to download/clone the repository into your **/xampp/htdocs/** folder.
</br>
You need to have **mysql** installed, to be able to access http://localhost/phpmyadmin and create a new database named **cms** with the following fields : 
 * id (Autoincrement)
 * label (Varchar)
 * title (Varchar)
 * body (Text)
 * slug (varchar)
 * created (Date)
 * updated (Date)

Once everything is set in mysql, you can access **localhost/cms** at first there will be a message saying *Sorry, no pages at the moment*, in order for you to be able to access the admin panel to insert new pages, you need to navigate to **localhost/cms/admin** , this route is protected via **.htaccess**.
</br>
I created a username and password for testing purposes, they are the following :
  * username : admin
  * password : admin

Once logged into the admin panel, you will be able to insert new pages, edit the pages and also delete them.
</br>
Down below there is a quick preview of the project structure.

