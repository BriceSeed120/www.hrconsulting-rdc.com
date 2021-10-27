import React, {Component, useState, useEffect} from "react";
// import {Modal, Button, Form} from 'react-bootstrap'
import { Navbar, Container, Nav, NavDropdown, Col, Row, Modal, Button, Form} from 'react-bootstrap'
import ServicesNavigation from '../Molecules/ServicesNavigation'

import Footer from '../Molecules/Footer'

import logo from '../../../Images/logo.png'
import { link } from '../../data'
import Fade from 'react-reveal/Fade';

import * as Icon from 'react-bootstrap-icons';

import { BrowserRouter, Route, Switch } from 'react-router-dom';

import HarvestCRM from '../../../Images/1x/HarvestCRM.png'
import Customer from '../../../Images/Customer.png'

import HarvestPayImage from '../../../Images/1x/HarvestPayImage.png'
import Payroll from '../../../Images/Payroll.png'

import emailjs from 'emailjs-com'

    


const HarvestPay   = () => {
    const  [result,showResult] = useState(false)
        function sendEmail  (e) {
            e.preventDefault()
    
            emailjs.sendForm('service_z9rnicp', 'template_e9wrj1b', e.target, 'user_Z2HZjAI82uwKXYfvnhfXF')
                .then((result) => {
                    console.log(result.text)
                }, (error) => {
                    console.log(error.text)
                });
                e.target.reset()
                showResult(true)
        }
        window.scrollTo(0, 0)
    
    return(
        
        <div>
            <ServicesNavigation />
            <section id="hero" className='hero d-flex align-items-center'>
                <Container>
                    <Row>
                        <Col lg={6}>
                            {/* <!-- Modal --> */}
                            <div className="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div className="modal-dialog" role="document">
                                <div className="modal-content">
                                <div className="modal-header">
                                    <h5 className="modal-title" id="exampleModalLabel">Ask for Demo</h5>
                                    <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div className="modal-body">
                                <Form onSubmit={sendEmail} className="mx-auto">
                                {/* <Form  className="mx-auto"> */}
                                    <Form.Group controlId="formName">
                                        <Form.Label>Name :</Form.Label>
                                        <Form.Control
                                        type="text"
                                        name="from_name"
                                        placeholder="Full Name"
                                        className=""
                                        />
                                    </Form.Group>
                                    <Form.Group controlId="formEmail">
                                        <Form.Label>Email :</Form.Label>
                                        <Form.Control
                                        type="text"
                                        name="email"
                                        placeholder="Email"
                                        className=""
                                        />
                                    </Form.Group>
                                    <Form.Group controlId="formPhone">
                                        <Form.Label>Phone :</Form.Label>
                                        <Form.Control
                                        type="text"
                                        name="phone"
                                        placeholder="Phone"
                                        className=""
                                        />
                                    
                                    </Form.Group>
                                    <Form.Group controlId="formBlog">
                                        <Form.Label>Message</Form.Label>
                                        <Form.Control
                                        as="textarea" 
                                        rows={3} 
                                        name="message"
                                        placeholder="Message"
                                        className=""
                                        />
                                    </Form.Group>
                                    <div className="modal-footer">
                                        <button type="submit" className="btn btn-primary">Purchase now</button>
                                    </div>  
                                </Form>
                                </div>
                                
                                </div>
                            </div>
                            </div>
                            
                            <Fade>
                                <h1 className='product-title'>Manage Easily Your Payroll</h1>
                                <h2 className="text-muted">
                                    Harvest Payroll system take care of Taxation rules and maintain the tax deduction by own.
                                </h2>
                                <div className="div">
                                    <div className="text-lg-start">
                                        <a className='btn-get-started btn scrollto d-inline-flex align-items-center justify-content-center align-self-center' data-toggle="modal" data-target="#exampleModal">
                                            <span>Ask For Demo</span>
                                            <Icon.ArrowRight className="icon ml-3" />
                                        </a>
                                    </div>
                                </div>                            
                            </Fade>
                        </Col>
                        <Col lg={6}> 
                            <Fade>
                                <div className="hero-img">
                                    <img className='img-fluid' src={HarvestPayImage} />  
                                </div>
                            </Fade>
                        </Col>
                    </Row>
                </Container>
            </section>
            <section id='about' className='about'>
                <div className="container">
                    <div className="row gx-0">
                        <div className="col-lg-6 d-flex flex-column justify-content-center">
                            <div className="conta">
                                {/* <h3>What is Harvest Data ?</h3> */}
                                <h2>WHAT IS HARVEST PAY ?</h2>
                                <p>
                                    First ever customized Payroll Solution for Cameroon, Gabon, Ivory Coast and DRC. "Harvest-Pay" is a tool that helps companies can improve the efficiency of the human resource departments. It provides an option that generates salaries automatically every month. "Harvest-Pay" Software is also equipped an attendance management system which tracks employee attendance leading to payroll and pay slip generation for every employee in the organization. Harvest Pay has the capabilities to generate pay slips both English and French language.
                                </p>
                            </div>
                        </div>
                        <div className="col-lg-6 d-flex align-items-center aos-init aos-animate" data-aos="zoom-out" >
                            <img src={Payroll} className="img-fluid" alt=""/>
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
                        <Icon.GearWideConnected className="icon iconSerice ml-3" />
                        <h3>Attendance</h3>
                        <p>
                            Our payroll software is compatible with all kind of biometric device, we will configure your existing biometric device to run with the software. System automatically calculates the overtime, early out, late coming, public holiday, leave parameters.
                        </p>
                        </div>
                    </div>

                    <div className="col-lg-4 aos-init aos-animate" >
                        <div className="service-box blue">
                        <Icon.CalculatorFill className="icon iconSerice ml-3" />
                        <h3>Allowance / Deduction</h3>
                        <p>We have developed this feature as much configurable (pre-set all the taxable, sociable, pensionable) as possible. Fully configurable, set on which allowance is calculated, in FCFA or percentage, allocation period and to whom to allocate.
                        </p>
                        </div>
                    </div>

                    <div className="col-lg-4 aos-init aos-animate" >
                        <div className="service-box blue">
                        <Icon.ReceiptCutoff className="icon iconSerice ml-3" />
                        <h3>Taxation</h3>
                        <p>Most tough job for any accountant of industry is to maintain tax account of each employee. Our system will just keep you free from maintaining tax account of the employee. Income tax will be deducted from the employee salary as per respective salary slab of the employee after all deduction and income.
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
    


export default HarvestPay