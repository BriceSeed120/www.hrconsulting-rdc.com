// import React, {Component, useState, useEffect} from "react";
// // import {Modal, Button, Form} from 'react-bootstrap'
// import { Navbar, Container, Nav, NavDropdown, Col, Row, Modal, Button, Form} from 'react-bootstrap'
// import ServicesNavigation from '../Molecules/ServicesNavigation'

// import Footer from '../Molecules/Footer'

// // import { Navbar, Container, Nav, NavDropdown, Col, Row} from 'react-bootstrap'
// import logo from '../../../Images/logo.png'
// import { link } from '../../data'
// import Fade from 'react-reveal/Fade';

// import * as Icon from 'react-bootstrap-icons';

// import { BrowserRouter, Route, Switch } from 'react-router-dom';

// import HarvestCRMImage from '../../../Images/1x/HarvestCRM.png'
// import Customer from '../../../Images/Customer.png'

// import emailjs from 'emailjs-com'

// const HarvestCRM = () => {
//     window.scrollTo(0, 0)
//     // const  [result,showResult] = useState(false)
//         function sendEmail  (e) {
//             e.preventDefault()

//             emailjs.sendForm('service_z9rnicp', 'template_e9wrj1b', e.target, 'user_Z2HZjAI82uwKXYfvnhfXF')
//                 .then((result) => {
//                     console.log(result.text)
//                 }, (error) => {
//                     console.log(error.text)
//                 });
//                 e.target.reset()
//                 showResult(true)
//         }
    
//     return(
        
//         <div>
//             <ServicesNavigation />
//             <section id="hero" className='hero d-flex align-items-center'>
//                 <Container>
//                     <Row>
//                         <Col lg={6}>
//                             {/* <!-- Modal --> */}
//                             <div className="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
//                             <div className="modal-dialog" role="document">
//                                 <div className="modal-content">
//                                 <div className="modal-header">
//                                     <h5 className="modal-title" id="exampleModalLabel">Ask for Demo</h5>
//                                     <button type="button" className="close" data-dismiss="modal" aria-label="Close">
//                                     <span aria-hidden="true">&times;</span>
//                                     </button>
//                                 </div>
//                                 <div className="modal-body">
//                                 <Form onSubmit={sendEmail} className="mx-auto">
//                                 {/* <Form  className="mx-auto"> */}
//                                     <Form.Group controlId="formName">
//                                         <Form.Label>Name :</Form.Label>
//                                         <Form.Control
//                                         type="text"
//                                         name="from_name"
//                                         placeholder="Full Name"
//                                         className=""
//                                         />
//                                     </Form.Group>
//                                     <Form.Group controlId="formEmail">
//                                         <Form.Label>Email :</Form.Label>
//                                         <Form.Control
//                                         type="text"
//                                         name="email"
//                                         placeholder="Email"
//                                         className=""
//                                         />
//                                     </Form.Group>
//                                     <Form.Group controlId="formPhone">
//                                         <Form.Label>Phone :</Form.Label>
//                                         <Form.Control
//                                         type="text"
//                                         name="phone"
//                                         placeholder="Phone"
//                                         className=""
//                                         />
                                    
//                                     </Form.Group>
//                                     <Form.Group controlId="formBlog">
//                                         <Form.Label>Message</Form.Label>
//                                         <Form.Control
//                                         as="textarea" 
//                                         rows={3} 
//                                         name="message"
//                                         placeholder="Message"
//                                         className=""
//                                         />
//                                     </Form.Group>
//                                     <div className="modal-footer">
//                                         <button type="submit" className="btn btn-primary">Purchase now</button>
//                                     </div>  
//                                 </Form>
//                                 </div>
                                
//                                 </div>
//                             </div>
//                             </div>
                            
//                             <Fade>
//                                 <h1 className='product-title'>Find your Dream Job</h1>
//                                 <h2 className="text-muted">The best recruiting methodologies 
//                                     depend not only on databases
//                                     and technology, but also on connection
//                                     with people, precise match of skills 
//                                     and exact fit of culture.
//                                 </h2>
//                                 <div className="div">
//                                     <div className="text-lg-start">
//                                         <a className='btn-get-started btn scrollto d-inline-flex align-items-center justify-content-center align-self-center' data-toggle="modal" data-target="#exampleModal">
//                                             <span>Ask For Demo</span>
//                                             <Icon.ArrowRight className="icon ml-3" />
//                                         </a>
//                                     </div>
//                                 </div>                            
//                             </Fade>
//                         </Col>
//                         <Col lg={6}>
//                             <Fade>
//                                 <div className="hero-img">
//                                     <img className='img-fluid' src={imageHarvest} />  
//                                 </div>
//                             </Fade>
//                         </Col>
//                     </Row>
//                 </Container>
//             </section>
//             <section id='about' className='about'>
//                 <div className="container">
//                     <div className="row gx-0">
//                         <div className="col-lg-6 d-flex flex-column justify-content-center">
//                             <div className="conta">
//                                 {/* <h3>What is Harvest Data ?</h3> */}
//                                 <h2>What is Harvest Data ?</h2>
//                                 {/* <p>
//                                     Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
//                                 </p> */}
//                             </div>
//                         </div>
//                         <div className="col-lg-6 d-flex align-items-center aos-init aos-animate" data-aos="zoom-out" >
//                             <img src={Attendance} className="img-fluid" alt=""/>
//                         </div>
//                     </div>
//                 </div>
//             </section>
//             <section id='services'  className="services about">

//                 <div className="container content aos-init aos-animate">

//                     <header className="section-header">
//                         <center>
//                             <h2>Features</h2>
//                             {/* <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo reiciendis, ipsa voluptas sapiente delectus quibusdam.</p> */}
//                         </center>
//                     </header>

//                     <div className="row gy-4">

//                     <div className="col-lg-4 aos-init aos-animate" >
//                         <div className="service-box blue">
//                         <Icon.People className="icon iconSerice ml-3" />
//                         {/* <h3>Nesciunt Mete</h3> */}
//                         <p>
//                         Solving problems associated with
//                         traditional recruiting methods
//                         </p>
//                         </div>
//                     </div>

//                     <div className="col-lg-4 aos-init aos-animate" >
//                         <div className="service-box blue">
//                         <Icon.Calendar className="icon iconSerice ml-3" />
//                         {/* <h3>Nesciunt Mete</h3> */}
//                         <p>Easy online access on all types 
//                         of media
//                         </p>
//                         </div>
//                     </div>

//                     <div className="col-lg-4 aos-init aos-animate" >
//                         <div className="service-box blue">
//                         <Icon.Gear className="icon iconSerice ml-3" />
//                         {/* <h3>Nesciunt Mete</h3> */}
//                         <p>More than 250 000 varied CVs

//                         </p>
//                         </div>
//                     </div>

//                     </div>

//                 </div>
//             </section>
//             <Footer />
//         </div>
//     )
// }

// export default HarvestCRM
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

import imageHarvest from '../../../Images/1x/HarvestDataImage.png'
import Attendance from '../../../Images/data.jpg'

import emailjs from 'emailjs-com'

    


const HarvestData   = () => {
    window.scrollTo(0, 0)
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
                                <h1 className='product-title'>Find your Dream Job</h1>
                                <h2 className="text-muted">The best recruiting methodologies 
                                    depend not only on databases
                                    and technology, but also on connection
                                    with people, precise match of skills 
                                    and exact fit of culture.
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
                                    <img className='img-fluid' src={imageHarvest} />  
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
                                <h2>What is Harvest Data ?</h2>
                                {/* <p>
                                    Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
                                </p> */}
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
                        <p>
                        Solving problems associated with
traditional recruiting methods

                        </p>
                        </div>
                    </div>

                    <div className="col-lg-4 aos-init aos-animate" >
                        <div className="service-box blue">
                        <Icon.Calendar className="icon iconSerice ml-3" />
                        {/* <h3>Nesciunt Mete</h3> */}
                        <p>Easy online access on all types 
                        of media
                        </p>
                        </div>
                    </div>

                    <div className="col-lg-4 aos-init aos-animate" >
                        <div className="service-box blue">
                        <Icon.Gear className="icon iconSerice ml-3" />
                        {/* <h3>Nesciunt Mete</h3> */}
                        <p>More than 250 000 varied CVs

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