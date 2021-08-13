import React, { Component } from 'react'

import { Navbar, Container, Nav, NavDropdown} from 'react-bootstrap'
import { BrowserRouter as Router , Route, Switch, Link } from 'react-router-dom'

import HarvestData from '../Pages/HarvestData'


import logo from '../../../Images/logo.png'
import { link } from '../../../js/data'

const NavBar = () => {
    
        return(
            <div>
                <Navbar bg="light" className='shadow-sm' fixed="top" expand="lg">
                    <Container>
                        <Navbar.Brand href="#"><img position='relative' width={130} src={logo} /></Navbar.Brand>
                        <Navbar.Toggle aria-controls="basic-navbar-nav" />
                        <Navbar.Collapse id="basic-navbar-navd" className='justify-content-end'>
                            <Nav className="me-auto">
                                <Nav.Link  as={Link} to='/' key="1">Home</Nav.Link>
                                <Nav.Link  as={Link} to='/products/harvestdata' key="2">Harvest Data</Nav.Link>
                                <Nav.Link  as={Link} to='/products/harvestams' key="3">Harvest AMS</Nav.Link>
                                <Nav.Link as={Link} to='/products/harvestcrm' key="4">Harvest CRM</Nav.Link>
                                {/* <Nav.Link  href="#products" className='page-scroll'>Products</Nav.Link> */}
                                {/*  */}
                                {/* <Nav.Link  href="#team" className='page-scroll'>Our Team</Nav.Link>
                                <Nav.Link  href="#contact" className='page-scroll'>Contact Us</Nav.Link> */}
                            </Nav>
                        </Navbar.Collapse>
                    </Container>
                </Navbar>
            </div>
        ) 
    
}

export default NavBar