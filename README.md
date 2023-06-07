# Book_Information_App
This is the initial commit to a BookStore app, where I have only shown CRUD steps using Laravel 10.

Later on, I will be adding some other features as I would be implementing Vue.js on the front end, and the final application will have these features:

- Exposing an endpoint with some data containing a list of book information on the homepage. I will display 6/8
records of data having the name of the book, author name & price.
- Exposing an endpoint with some data containing a list of book information on another page. I will display 6/8
records of data having the name of the author, books count & total price.
ex- table head: Author Name, Total Books, Total Price
table data: Shajib, 5, 500.
#note (5 books and eache book price is 100 tk)
- Users can register from HomePage with Unique Email. Other attributes are FirstName, Last Name & Password.
- After Successful registration User can log in with a valid Email address & Password.
- After Successful login User should be redirected to the application's Home Page.
- After Each login User should get a token (expired time 5 min) and a refresh token. When token time expires, the system should give another token & refresh token to the user depending on the previous refresh token. In this case, the User should not get logged out although token time expires.
- When the user logs out both the token and refresh token are expired.
