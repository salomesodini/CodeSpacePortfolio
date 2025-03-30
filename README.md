# MKTimeWebsite
🕒 A website for MK Time - a growing E-Commerce business, based in Edinburgh, that sells Swiss watches. 
<br>
<br>
💻 The website has been created as a portfolio piece at the end of the Software Development Bootcamp - Codespace within Edinburgh College.
<br>
# The brief:
<br>
The brief asked us to create a website for MK TIME, a growing e-commerce business, that sells Swiss watches designed and producted in Edinburgh. They offer their customers high-quality products, with an excellent refund and repair policy. 
<br>
<br>
📚 As a portfolio piece at the end of the bootcamp, we were asked to create an e-commerce at least:
<br>
<br>
<ol>
  <li>A landing page</li>
  <li>A product page</li>
  <li>A registration page (with a form)</li>
  <li>A login page (with a form)</li>
  <li>A protected product page that only registered users could see</li>
  <li>A cart or a basket where registered users could put the products they wanted</li>
  <li>A checkout page</li>
  <li>A logout page</li>
</ol>
<br>
I had already the front-end of this ecommerce, as it was the project I made during the introductory course before starting the actual bootcamp. Back then, I created my landing page, using the Bootstrap Framework. It was a lot of fun and easier than I expected! I am really grateful for the Bootstrap Framework, as - a beginner - I managed to get together a decent website relatively quickly! With the help of Bootstrap, I created the structure of my page in HTML, and I used CSS for the styling - my favourite part 🖌️
<br>
<br>
From the strcture of my landing page, which has a main title, a navbar and a bottom bar, I created all the rest: my product page (I did only the men collection as an example) and my forms. I used Bootstrap again to create the forms - registration and login, as requested by the brief, but I also made a refund form. I also added an Under Construction page, as I did not want to have sections going nowhere! And it is a remind for me to keep working on this project. 
<br>
<br>
During the bootcamp, I finally added my back-end. We were asked to use PHP, a programming language I was not familiar with before. My first step was creating a SQL database were I could store information about my registered users, then I added the back-end to my registration form using PHP. During the process, I slightly simplified my registration form, as I realised that some of the voices were not needed developing the backend. Once I managed to do that, I had to make sure that the users could login into the website. It took a few attempts, and I found incredibily useful adding to my php file "debugging code", so I could see where the issue was, if there was any. Once registered users are successfully logged in, they are redirected to the "protected product page" - the same of the product page, but with the possibility to see the prices of the products and add them to the basket, or remove them. To make that work, I had to create a second SQL database, where I stored the unique product id, the product name, the description, the image and the price.
<br>
<br>
🛒 When I created the basket, I realised that - regardless of the logged users - the products in the basket were the same for everyone. It made me realise I did not work properly with my sessions and that, probably, I needed more database: I created another two SQL databases, orders and orders_content, to help me to manage different purchaises of different customers. Once they have completed their shopping, users are redirected to the "protected product page", in case they want more. 
<br>
<br>
The navbar changes, if users are logged in: they do not see anymore the registration or the login button. Instead, if they wish to logout and restart the session, they can do so from the red "logout" button there. Once they logout, they are redirected to the login form, in case they want to go back in and keep shopping. 🎁
<br>
<br>
Lastly, I used Cypress to make sure that my registration form and my login form were working: we passed the test! 🥳
Even though I had to go back to my code & give my login and register buttons a unique id, as Cypress did originally not understand which button had to press to do the test - each page has also a "search" button in the navbar, but at the moment it is only front-end and it is not working. Definitely it was a good learning experience for me, as I never tested anything before.
<br>
<br>
🍀 I hope you liked this project, and I hope that MK Time customers will be happy too!
<br>
<br>
💬 If you have any feedback, advice, or you want to share something with me, please get in touch: salo.sodini@gmail.com
