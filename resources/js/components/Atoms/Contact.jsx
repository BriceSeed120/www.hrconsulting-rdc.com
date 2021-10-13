import React, { useEffect, useState } from "react"
import { Form, Button } from 'react-bootstrap'


import * as yup from 'yup'
import {Formik} from 'formik'

import emailjs from 'emailjs-com'

const Result = () =>{
    return(
        <p>
            Your Message has been sent successfully. We will contact you soon
        </p>
    )
}

const Contact = () =>{

    const  [result,showResult] = useState(false)
    const sendEmail = (e) => {
        e.preventDefault()

        emailjs.sendForm('service_z9rnicp', 'template_9l46fxy', e.target, 'user_Z2HZjAI82uwKXYfvnhfXF')
            .then((result) => {
                console.log(result.text)
            }, (error) => {
                console.log(error.text)
            });
            e.target.reset()
            showResult(true)
        }
    
    return(
        <>
            <Form onSubmit={sendEmail} className="mx-auto">
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
                <Button variant="primary" type="submit">
                    Submit
                </Button>
                <div className="row">
                    {
                        result ? <Result/> : null 
                    } 
                </div>
            </Form>
            {/* <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.0085590526382!2d9.69811511403147!3d4.018641948314438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x106112c9d02cb72d%3A0x4bcc69deefde8565!2sSeed120%20Software%20Solutions!5e0!3m2!1sen!2scm!4v1634127644039!5m2!1sen!2scm" width="600" height="450" style="border:0;" allowFullScreen="" loading="lazy"></iframe> */}
            </>
    )
}

export default Contact