import React, { Component } from 'react'
import $ from 'jquery'
import logo from "../../../Images/logo.png"

import { Navbar, Container, Nav, NavDropdown} from 'react-bootstrap'
import { BrowserRouter as Router , Route, Switch, Link } from 'react-router-dom'



const NavBar = () => {
    
        return(
            <div>
                <Navbar bg="light" className='shadow-sm' fixed="top" expand="lg">
                    <Container>
                        <Navbar.Brand href="#"><img position='relative' width={130} src={logo} /></Navbar.Brand>
                        <Navbar.Toggle aria-controls="basic-navbar-nav" />
                        <Navbar.Collapse id="basic-navbar-navd" className='justify-content-end'>
                            <Nav className="me-auto">
                                <Nav.Link  href="#home">Home</Nav.Link>
                                <Nav.Link  href="#about" className='page-scroll'>A propos de nous</Nav.Link>
                                <Nav.Link  href="#services" className='page-scroll'>Nos services</Nav.Link>
                                <Nav.Link  href="#team" className='page-scroll'>Nos clients</Nav.Link>
                                <Nav.Link  href="#contact" className='page-scroll'>Nous</Nav.Link>
                            </Nav>
                        </Navbar.Collapse>
                    </Container>
                </Navbar>
            {/* <header id="header" className="header fixed-top">
                <div className="container-fluid container-xl d-flex align-items-center justify-content-between">

                <a href="index.html" className="logo d-flex align-items-center">
                    <img src="assets/img/logo.png" alt=""/>
                    <span>FlexStart</span>
                </a>

                <nav id="navbar" className="navbar">
                    <ul>
                    <li><a className="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a className="nav-link scrollto" href="#about">About</a></li>
                    <li><a className="nav-link scrollto" href="#services">Services</a></li>
                    <li><a className="nav-link scrollto" href="#portfolio">Portfolio</a></li>
                    <li><a className="nav-link scrollto" href="#team">Team</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li className="dropdown"><a href="#"><span>Drop Down</span> <i className="bi bi-chevron-down"></i></a>
                        <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li className="dropdown"><a href="#"><span>Deep Drop Down</span> <i className="bi bi-chevron-right"></i></a>
                            <ul>
                            <li><a href="#">Deep Drop Down 1</a></li>
                            <li><a href="#">Deep Drop Down 2</a></li>
                            <li><a href="#">Deep Drop Down 3</a></li>
                            <li><a href="#">Deep Drop Down 4</a></li>
                            <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li><a className="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a className="getstarted scrollto" href="#about">Get Started</a></li>
                    </ul>
                    <i className="bi bi-list mobile-nav-toggle"></i>
                </nav>

                </div>
            </header> */}
            </div>
        ) 
    
}

export default NavBar