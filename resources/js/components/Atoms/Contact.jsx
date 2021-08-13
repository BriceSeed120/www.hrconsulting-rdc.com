import React from 'react'
import { Form, Button } from 'react-bootstrap'

import * as yup from 'yup'
import {Formik} from 'formik'

import emailjs from 'emailjs-com'

function sendEmail(e) {
    e.preventDefault()

    emailjs.sendForm('service_z9rnicp', 'template_9l46fxy', e.target, 'user_Z2HZjAI82uwKXYfvnhfXF')
      .then((result) => {
          console.log(result.text)
      }, (error) => {
          console.log(error.text)
      });
      e.target.reset()
  }


const Contact = () =>{
    
    // const validationSchema = yup.object().shape({
    //     name: yup.string(),
    //     email: yup.string(),
    //     phone: yup.string(),
    //     message: yup.string()
    // });

    // RegEx for phone number validation
    const phoneRegExp = /^(\+?\d{0,4})?\s?-?\s?(\(?\d{3}\)?)\s?-?\s?(\(?\d{3}\)?)\s?-?\s?(\(?\d{4}\)?)?$/

    // Schema for yup
    const validationSchema = yup.object().shape({   
    name: yup.string()
    .min(2, "*Names must have at least 2 characters")
    .max(100, "*Names can't be longer than 100 characters")
    .required("*Name is required"),
    email: yup.string()
    .email("*Must be a valid email address")
    .max(100, "*Email must be less than 100 characters")
    .required("*Email is required"),
    phone: yup.string()
    .matches(phoneRegExp, "*Phone number is not valid")
    .required("*Phone number required"),
    message: yup.string()
    });

    return(
        <Formik validationSchema={validationSchema} initialValues={{ name:"", email:"", phone:"", message:""}}>
        {/* Callback function containing Formik state and helpers that handle common form actions */}
        {( {values,
            errors,
            touched,
            handleChange,
            handleBlur,
            handleSubmit,
            isSubmitting }) => (
            <Form onSubmit={sendEmail} className="mx-auto">
            {console.log(values)}
            <Form.Group controlId="formName">
                <Form.Label>Name :</Form.Label>
                <Form.Control
                type="text"
                /* This name property is used to access the value of the form element via values.nameOfElement */
                name="name"
                placeholder="Full Name"
                /* Set onChange to handleChange */
                onChange={handleChange}
                /* Set onBlur to handleBlur */
                onBlur={handleBlur}
                /* Store the value of this input in values.name, make sure this is named the same as the name property on the form element */
                value={values.name}
                className={ touched.name && errors.name ? "error" : null }
                />
                {
                    touched.name && errors.name ? (
                        <div className="error-message">{errors.name}</div>
                    ): null 
                }
            </Form.Group>
            <Form.Group controlId="formEmail">
                <Form.Label>Email :</Form.Label>
                <Form.Control
                type="text"
                name="email"
                placeholder="Email"
                onChange={handleChange}
                onBlur={handleBlur}
                value={values.email}
                className={ touched.email && errors.email ? "error" : null }
                />
                {
                    touched.email && errors.email ? (
                        <div className="error-message">{errors.email}</div>
                    ): null 
                }
            </Form.Group>
            <Form.Group controlId="formPhone">
                <Form.Label>Phone :</Form.Label>
                <Form.Control
                type="text"
                name="phone"
                placeholder="Phone"
                onChange={handleChange}
                onBlur={handleBlur}
                value={values.phone}
                className={ touched.phone && errors.phone ? "error" : null }
                />
                {
                    touched.phone && errors.phone ? (
                        <div className="error-message">{errors.phone}</div>
                    ): null 
                }
            </Form.Group>
            <Form.Group controlId="formBlog">
                <Form.Label>Message</Form.Label>
                <Form.Control
                as="textarea" 
                rows={3} 
                name="message"
                placeholder="Message"
                onChange={handleChange}
                onBlur={handleBlur}
                value={values.message}
                className={ touched.message && errors.message ? "error" : null }
                />
                {
                    touched.message && errors.message ? (
                        <div className="error-message">{errors.message}</div>
                    ): null 
                }
            </Form.Group>
            <Button variant="primary" type="submit">
                Submit
            </Button>
            </Form>
        )}
      </Formik>
    )
}

export default Contact