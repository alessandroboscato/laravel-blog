Hello Mr Anderson,

Would you like the Red Pill or the Blue Pill?

To SSH into server:

`ssh -i "~/.ssh/id_rsa" forge@13.54.83.71`

`cd /home/forge/test.2mm.io`

`php artisan` commands will work here.

composer and npm is already installed and avaliable to re-ran if needed.

Saving any files on this computer / vscode will autosave onto the server.

Your database connection should already be set up in table plus.

GitHub UI is installed as well.

Your Tasks:
1. Create new github branch called `feature/YOUR-NAME`
2. Create a `posts` and `comments` table in the database using `php artisan migrate` commands. NOTE: you will have to download the folder to Visual Studio Code to get the files from the artisan commands.
3. Add a foreign key in `comments` table called `post_id`. NOTE: add extra columns like `title` or `description` for trinity points. 
4. Create an eloquent model for both post and comments and establish a relationship.
5. Manually add in some dummy data into the `comments` and `posts` tables in tableplus.
6. Create a route and controller to list all the posts. ie. `{url}/posts`
7. Create a route and use the same controller to show 1 post and show the attached comments. ie. `{url}/posts/{post_id}`
8. Git commit and push your code.
9. Create a pull request on github.

Well done Mr Anderson. 

Welcome to the Matrix.
