import React, { Component, useEffect, useRef, useState } from 'react'
import { Form, Button } from 'react-bootstrap'
import emailjs from '@emailjs/browser'
import Contact from '../Atoms/Contact';

import Fade from 'react-reveal/Fade';

const Result = () =>{
    return(
        <p>
            Your Message has been sent successfully. We will contact you soon
        </p>
    )
}

const ContactUs = () => {
    
        // const form = useRef(null)
        
        // const sendEmail = (e) => {
        //     e.preventDefault();
        
        //     emailjs.sendForm('service_l8chmyn', 'template_dkf512h', e.target, '0c2EesaOibc8opt9k')
        //         .then((result) => {
        //             console.log(result.text);
        //         }, (error) => {
        //             console.log(error.text);
        //         })
        // };
        
        const  [result,showResult] = useState(false)
        const sendEmail = (e) => {
            e.preventDefault()

            emailjs.sendForm('service_l8chmyn', 'template_dkf512h', e.target, '0c2EesaOibc8opt9k')
                .then((result) => {
                    console.log(result.text)
                }, (error) => {
                    console.log(error.text)
                });
                e.target.reset()
                showResult(true)
            }
        return(
                <section id="contact" className="contact">
    
                <div className="container aos-init aos-animate" data-aos="fade-up">
    
                <header className="section-header">
                    <h2 className='white'>Contact</h2>
                    <p className='white'>Contactez nous</p>
                </header>
    
                <div className="row gy-4">
    
                    <div className="col-lg-6">
                    {/* <form onSubmit={sendEmail} className="php-email-form">
                        <div className="row gy-4">
    
                        <div className="col-md-6">
                            <input type="text" className="form-control" id="name" name='name' placeholder="Votre nom" />
                        </div>
    
                        <div className="col-md-6 ">
                            <input id="email" name='email' className="form-control" placeholder="Votre Adrèsse mail" ref="myEmail" />
                        </div>
    
                        <div className="col-md-12">
                            <input type="text" className="form-control" id="phone" name='phone' placeholder="Votre nulero de téléphone" ref="myPhoneNumber" />
                        </div>
    
                        <div className="col-md-12">
                            <textarea className="form-control" id="textquery" name='message' placeholder="Enter Query" ref="textquery" />
                        </div>
    
                        <div className="col-md-12 text-center">
                            <div className="loading">Loading</div>
                            <div className="error-message"></div>
                            <div className="sent-message">Your message has been sent. Thank you!</div>
    
                            <button type="submit" value="Send">Envoyer un méssage</button>
                        </div>
    
                        </div>
                    </form> */}

                    <Form onSubmit={sendEmail} className="php-email-form">
                        <Form.Group controlId="formName">
                            <Form.Label></Form.Label>
                            <Form.Control
                            type="text"
                            name="from_name"
                            placeholder="Full Name"
                            className=""
                            />
                        </Form.Group>
                        <Form.Group controlId="formEmail">
                            <Form.Label></Form.Label>
                            <Form.Control
                            type="text"
                            name="from_mail"
                            placeholder="Email"
                            className=""
                            />
                        </Form.Group>
                        <Form.Group controlId="formPhone">
                            <Form.Label></Form.Label>
                            <Form.Control
                            type="text"
                            name="from_phone_number"
                            placeholder="Phone"
                            className=""
                            />
                        
                        </Form.Group>
                        <Form.Group controlId="formBlog">
                            <Form.Label></Form.Label>
                            <Form.Control
                            as="textarea" 
                            rows={3} 
                            name="message"
                            placeholder="Message"
                            className=""
                            />
                        </Form.Group>
                        <br />
                        <div className="row">
                            <div className="col">
                                <button className='btn-block' type="submit" value="Send">Envoyer un méssage</button>
                            </div>
                        </div>
                        <div className="row">
                            {
                                result ? <Result/> : null 
                            } 
                        </div>
                    </Form>
    
                    </div>
    
                </div>
    
                </div>
    
                </section>
        )
    
}

export default ContactUs