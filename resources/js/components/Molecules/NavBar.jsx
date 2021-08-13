import React, { Component } from 'react'

import { Navbar, Container, Nav, NavDropdown} from 'react-bootstrap'
import { BrowserRouter as Router , Route, Switch, Link } from 'react-router-dom'

import HarvestData from '../Pages/HarvestData'
import HarvestCRM from '../Pages/HarvestCRM'
import HarvestAMS from '../Pages/HarvestAMS'


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
                                <Nav.Link  href="#home">Home</Nav.Link>
                                <Nav.Link  href="#about" className='page-scroll'>About Us</Nav.Link>
                                <Nav.Link  href="#services" className='page-scroll'>Our Services</Nav.Link>
                                {/* <Nav.Link  href="#products" className='page-scroll'>Products</Nav.Link> */}
                                <NavDropdown href="#products" className='page-scroll' title="Our Products" id="basic-nav-dropdown">
                                    <NavDropdown.Item as={Link} to='/products/harvestams'>Harvest AMS</NavDropdown.Item>
                                    <NavDropdown.Item as={Link} to='/products/harvestdata' key="1">Harvest Data</NavDropdown.Item>
                                    <NavDropdown.Item as={Link} to='/products/harvestcrm'>Harvest CRM</NavDropdown.Item>
                                    {/* <NavDropdown.Divider /> */}
                                    {/* <NavDropdown.Item href="#action/3.4">Separated link</NavDropdown.Item> */}
                                </NavDropdown>
                                <Nav.Link  href="#team" className='page-scroll'>Our Team</Nav.Link>
                                <Nav.Link  href="#contact" className='page-scroll'>Contact Us</Nav.Link>
                            </Nav>
                        </Navbar.Collapse>
                    </Container>
                </Navbar>
            </div>
        ) 
    
}

export default NavBar