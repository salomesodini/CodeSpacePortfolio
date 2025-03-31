describe('template spec', () => {
  it('passes', () => {
    cy.visit('https://example.cypress.io')
  })
})

describe('Login Page Tests', () => {
  beforeEach(() => {
    // Go the login page
    cy.visit('http://localhost/WWW/MrTimeWebsiteForm.php');
  });

  it('should log in with valid credentials', () => {
    // Enter valid username and password
    cy.get('input[name="username"]').type('arran'); // registered username
    cy.get('input[name="password"]').type('123'); // correct password
    
    // Click the login button
    cy.get('#loginButton').click();
    
    // Check if redirected to the product page
    cy.url().should('include', 'MrTimeWebsiteProductPage.php');
  });

  it('should show an alert for invalid password', () => {
    // Enter valid username and invalid password
    cy.get('input[name="username"]').type('arran'); // registered username
    cy.get('input[name="password"]').type('347'); // invalid password not present in the database
    
    // Click the login button
    cy.get('#loginButton').click();
    
    // Check for "successful registration!" alert
    cy.on('window:alert', (text) => {
      expect(text).to.equal('Invalid password.');
    });
  });

  it('should show an alert for non-existent user', () => {
    // Enter a non-existent username and any password
    cy.get('input[name="username"]').type('lolly'); // non-existent username
    cy.get('input[name="password"]').type('921'); // any password
    
    // Click the login button
    cy.get('#loginButton').click();
    
    // Check for alert
    cy.on('window:alert', (text) => {
      expect(text).to.equal('No user found.');
    });
  });
});
