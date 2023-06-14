/// <reference types="cypress" />

describe('Profile Setting', () => {
    it('Admin Can See Page Profile Setting', () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get(':nth-child(2) > .form-control').type("admin@gmail.com");
        cy.get(':nth-child(3) > .form-control').type("admin");
        cy.get('.btn').click();
        cy.get('#sidebar-menu').click();
        cy.get('#profile').click();
        cy.get('.text-right').should("have.text", "Profile Settings");
        cy.get(':nth-child(2) > .col-md-12 > .labels').should("have.text", "username");
        cy.get(':nth-child(3) > .col-md-12 > .labels').should("have.text", "nomor telepon");
        cy.get(':nth-child(1) > :nth-child(4) > .col-md-12 > .labels').should("have.text", "Email ID");
        cy.get(':nth-child(1) > :nth-child(5) > .col-md-12 > .labels').should("have.text", "alamat");
    })
    it('Admin Can Edit Data Profile', () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get(':nth-child(2) > .form-control').type("admin@gmail.com");
        cy.get(':nth-child(3) > .form-control').type("admin");
        cy.get('.btn').click();
        cy.get('#sidebar-menu').click();
        cy.get('#profile').click();
        cy.get('.text-right').should("have.text", "Profile Settings");
        cy.get(':nth-child(2) > .col-md-12 > .labels').should("have.text", "username");
        cy.get(':nth-child(3) > .col-md-12 > .labels').should("have.text", "nomor telepon");
        cy.get(':nth-child(1) > :nth-child(4) > .col-md-12 > .labels').should("have.text", "Email ID");
        cy.get(':nth-child(1) > :nth-child(5) > .col-md-12 > .labels').should("have.text", "alamat");

        cy.get('[data-target=".bd-example-modal-lg"]').click();
        cy.get('form > :nth-child(4) > .col-md-12 > .form-control').clear().type("Admin");
        cy.get('form > :nth-child(5) > .col-md-12 > .form-control').clear().type("admin@gmail.com");
        cy.get(':nth-child(6) > .col-md-12 > .form-control').clear().type("081234567899");
        cy.get(':nth-child(7) > .col-md-12 > .form-control').clear().type("Tadukan Raga");
        cy.get('.mt-4 > .btn').click();
    })
})
