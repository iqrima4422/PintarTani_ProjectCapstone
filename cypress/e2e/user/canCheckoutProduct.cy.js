/// <reference types="cypress" />

describe('canCheckoutProduct', () => {
    it('User Can Login', () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get(':nth-child(2) > .form-control').type("user@gmail.com");
        cy.get(':nth-child(3) > .form-control').type("12345678");
        cy.get('.btn').click();
    })
    it('User Can Add Product to Cart', () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get(':nth-child(2) > .form-control').type("user@gmail.com");
        cy.get(':nth-child(3) > .form-control').type("12345678");
        cy.get('.btn').click();
        cy.get('.navbar-nav > [href="http://127.0.0.1:8000/gallery"]').click();
        cy.get('.display-3').should("have.text", "Produk Penjualan");
        cy.get('.breadcrumb > :nth-child(1) > a').should("have.text", "Beranda");
        cy.get('.active').should("have.text", "Produk");
        cy.get(':nth-child(2) > .featured__item > .featured__item__text > .btn-holder > .btn').click();
    })
    it('User Can Remove Produk from Cart', () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get(':nth-child(2) > .form-control').type("user@gmail.com");
        cy.get(':nth-child(3) > .form-control').type("12345678");
        cy.get('.btn').click();
        cy.get('.navbar-nav > [href="http://127.0.0.1:8000/gallery"]').click();
        cy.get('.display-3').should("have.text", "Produk Penjualan");
        cy.get('.breadcrumb > :nth-child(1) > a').should("have.text", "Beranda");
        cy.get('.active').should("have.text", "Produk");
        cy.get(':nth-child(2) > .featured__item > .featured__item__text > .btn-holder > .btn').click();
        cy.visit("http://127.0.0.1:8000/cart");
        cy.get('.actions > .btn').click();
    })
    it('User Can Checkout a Product', () => {
        cy.visit("http://127.0.0.1:8000/login");
        cy.get(':nth-child(2) > .form-control').type("user@gmail.com");
        cy.get(':nth-child(3) > .form-control').type("12345678");
        cy.get('.btn').click();
        cy.get('.navbar-nav > [href="http://127.0.0.1:8000/gallery"]').click();
        cy.get('.display-3').should("have.text", "Produk Penjualan");
        cy.get('.breadcrumb > :nth-child(1) > a').should("have.text", "Beranda");
        cy.get('.active').should("have.text", "Produk");
        cy.get(':nth-child(2) > .featured__item > .featured__item__text > .btn-holder > .btn').click();
        cy.visit("http://127.0.0.1:8000/cart");
        cy.get('thead > tr > :nth-child(1)').should("have.text", "Gambar");
        cy.get('thead > tr > :nth-child(2)').should("have.text", "Nama Produk");
        cy.get('thead > tr > :nth-child(3)').should("have.text", "Harga");
        cy.get('thead > tr > :nth-child(4)').should("have.text", "Quantity");
        cy.get('thead > tr > :nth-child(5)').should("have.text", "Total");
        cy.get('thead > tr > :nth-child(6)').should("have.text", "Action");
        cy.get('.btn-success').click();
        cy.get('.site-btn').click();
    })
})
