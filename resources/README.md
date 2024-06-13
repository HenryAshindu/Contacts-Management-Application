This is a Contact Management System for Kazi Mtaani Applicants with Photo Upload option.

Required Software
1. Visual studio/ any code editor of your choice
2. Xammp(Recommended) or any local server application of your choice.
3. Web Browser. firefox(Recommended) or any web browser of your choice.

Required Hardware
1. Laptpop.
2. Internet. For loading bootstrap style sheet. This is however not compulsory as the project can still perform the major CRUD operations and function fully even without internet connection.  

Procedure.
- It Contains a mysql database (contacts.sql).
- The grouping functionality is by Gender whereby the contacts are grouped based on the gender selected during form filling and submission.
- The view used for the project is a blade template with the Home,Create,Edit and Layout(contains code for head tags for all other pages for which they extend to) blade view templates.

To run the Project,
1. open xxamp control panel and start the Apache and mySQL services.
2. run the admin tab on xammp under the mySQL section.
3. Configure the database by importing the database file (contacts.sql). on the code editor terminal, run the database migration by typing the command php artisan migrate.
- Ensure to check the .env file to make sure the database name corresponds to 'contacts' as imported in the php my admin database.
4. Using Visual Studio or any other code editor of your choice, run the project in the terminal by running the command php artsian serve.
5. Using any browser of your choice, Firefox(Recommended), search localhost:8000/ and press on enter. This will load the landing page.
6. You can create new user contacts by clicking the link 'Create a new contact' where users will be required to fill in their names,gender,contact/phine number and also upload a passport image of themseleves.
This procedure is also to be followed during Edit of User contacts.
- The uploaded images are saved in the public folder under 'images'.
7. It has the EDIT and DELETE functionalties for manipulating of data stored.
8. The Routes are named for easy implementation in the ContactController and form methods.

