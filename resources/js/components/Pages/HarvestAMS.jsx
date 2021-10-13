import React from 'react'

import ServicesNavigation from '../Molecules/ServicesNavigation'
import Footer from '../Molecules/Footer'

import { Navbar, Container, Nav, NavDropdown, Col, Row} from 'react-bootstrap'
import logo from '../../../Images/logo.png'
import { link } from '../../../js/data'

import * as Icon from 'react-bootstrap-icons';
import { InlineIcon } from '@iconify/react';

import { BrowserRouter, Route, Switch } from 'react-router-dom';

import HarvestAMSImage from '../../../Images/1x/HarvestAMSImage.png'
import Attendance from '../../../Images/Attendance.png'


const HarvestData = () => {
    return(
        <div>
            {/* NavBar */}
            <ServicesNavigation />
            <section id="hero" className='hero d-flex align-items-center'>
                <Container>
                    <Row>
                        <Col lg={6}>
                            <h1 className='product-title'>Easily manage attendances</h1>
                            <h2 className="text-muted">Keep control over your Human Resources.</h2>
                            <div className="div">
                                <div className="text-lg-start">
                                    <a className='btn-get-started btn scrollto d-inline-flex align-items-center justify-content-center align-self-center' type="reset">
                                        <span>Get Started</span>
                                        <Icon.ArrowRight className="icon ml-3" />
                                    </a>
                                </div>
                            </div>
                        </Col>
                        <Col lg={6}>
                            <div className="hero-img">
                                <img className='img-fluid' src={HarvestAMSImage} />  
                            </div>
                        </Col>
                    </Row>
                </Container>
            </section>
            <section id='about' className='about'>
                <div className="container">
                    <div className="row gx-0">
                        <div className="col-lg-6 d-flex flex-column justify-content-center">
                            <div className="conta">
                                {/* <h3>What is Harvest AMS ?</h3> */}
                                <h2>WHAT IS HARVEST AMS ?</h2>
                                <p>
                                    Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
                                </p>
                                {/* <div className="text-lg-start">
                                    <a className='btn-get-started btn scrollto d-inline-flex align-items-center justify-content-center align-self-center' type="reset">
                                        <span>Get Started</span>
                                        <i className="bi bi-arrow-left"></i>
                                        <Icon.ArrowRight className="icon ml-3" />
                                    </a>
                                </div> */}
                            </div>
                        </div>
                        <div className="col-lg-6 d-flex align-items-center aos-init aos-animate" data-aos="zoom-out" >
                            <img src={Attendance} className="img-fluid" alt=""/>
                        </div>
                    </div>
                </div>
            </section>
            <section id='services'  className="services about">

                <div className="container content aos-init aos-animate">

                    <header className="section-header">
                        <center>
                            <h2>Features</h2>
                            {/* <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo reiciendis, ipsa voluptas sapiente delectus quibusdam.</p> */}
                        </center>
                    </header>

                    <div className="row gy-4">

                    <div className="col-lg-4 aos-init aos-animate" >
                        <div className="service-box blue">
                        <Icon.People className="icon iconSerice ml-3" />
                        {/* <h3>Nesciunt Mete</h3> */}
                        <p>Online overview of the downtime
                        spent on your HR
                        </p>
                        </div>
                    </div>

                    <div className="col-lg-4 aos-init aos-animate" >
                        <div className="service-box blue">
                        <Icon.Calendar className="icon iconSerice ml-3" />
                        {/* <h3>Nesciunt Mete</h3> */}
                        <p>Software linked to your invoicing 
                        system and payroll processing
                        </p>
                        </div>
                    </div>

                    <div className="col-lg-4 aos-init aos-animate" >
                        <div className="service-box blue">
                        <Icon.Gear className="icon iconSerice ml-3" />
                        {/* <h3>Nesciunt Mete</h3> */}
                        <p>Automatically detects uninformed 
                        and duplicate employees
                        </p>
                        </div>
                    </div>

                    </div>

                </div>
            </section>
            <Footer />
        </div>
    )
}

export default HarvestData