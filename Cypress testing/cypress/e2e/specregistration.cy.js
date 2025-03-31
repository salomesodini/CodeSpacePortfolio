describe('Registration Page Tests', () => {
  beforeEach(() => {
    // Go to registration page on localhost
    cy.visit('http://localhost/WWW/MrTimeWebsiteRegister.php');
  });

  it('should successfully register a new user', () => {
    // Fill out the registration form
    cy.get('input[name="username"]').type('testuser'); // User that does not exist on the system
    cy.get('input[name="email"]').type('testuser@example.com'); // Email that does not exist on the system
    cy.get('input[name="password"]').type('password123'); // any password
    
    // Submit the form
    cy.get('#registerButton').click();

    // Check for the registration successful alert 
    cy.on('window:alert', (text) => {
      expect(text).to.contains('Registration successful!');
    });

  });

  it('should show an error alert for duplicate username', () => {
    // Fill out the registration form with a username that already exists in the database
    cy.get('input[name="username"]').type('a'); // username "a"
    cy.get('input[name="email"]').type('c@gmail.com'); // corresponding email "c@gmail.com"
    cy.get('input[name="password"]').type('123'); // any password

    // Submit the form
    cy.get('#registerButton').click();

    // Check for the error alert
    cy.on('window:alert', (text) => {
      expect(text).to.contains('Error:'); // Adjust the message as needed
    });
  });
});
