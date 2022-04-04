import React, { Component, useEffect, useRef } from 'react'
import emailjs from '@emailjs/browser'
import axios from 'axios';

import Fade from 'react-reveal/Fade';

class ContactUs extends React.Component {
    // const form = useRef()

    // const sendEmail = (e) => {
    //     e.preventDefault()

    //     emailjs.sendForm('YOUR_SERVICE_ID', 'YOUR_TEMPLATE_ID', form.current, 'YOUR_USER_ID')
    //     .then((result) => {
    //         console.log(result.text);
    //     }, (error) => {
    //         console.log(error.text)
    //     });
    // }

    constructor(props)
        {
        super(props);
        this.addFormData = this.addFormData.bind(this);
    }
    // Mail Form Submission
    addFormData(evt)
        {
            evt.preventDefault();
            const fd = new FormData();
            fd.append('myUsername', this.refs.myUsername.value);
            fd.append('myEmail', this.refs.myEmail.value);
            fd.append('textquery', this.refs.textquery.value);
            
            axios.post('http://localhost/laravel8/public/api/send/email', fd).then(res=>{        
                this.myFormRef.reset();
                //Success Message in Sweetalert modal
                console.log('Email sent');            
            }
            );
        }
    render(){
        return(
            <>
                <section id="contact" className="contact">
    
                <div className="container aos-init aos-animate" data-aos="fade-up">
    
                <header className="section-header">
                    <h2 className='white'>Contact</h2>
                    <p className='white'>Contactez nous</p>
                </header>
    
                <div className="row gy-4">
    
                    <div className="col-lg-6">
                    <form className="php-email-form" ref={(el) => this.myFormRef = el}>
                        <div className="row gy-4">
    
                        <div className="col-md-6">
                            <input type="text" className="form-control" placeholder="Votre nom"  id="Username" ref="myUsername" required="" />
                        </div>
    
                        <div className="col-md-6 ">
                            <input id="Email" aria-describedby="emailHelp" placeholder="Votre Adrèsse mail" ref="myEmail" />
                        </div>
    
                        <div className="col-md-12">
                            <input type="text" className="form-control" name="user_phonenumber" placeholder="Numero de téléphone" required="" />
                        </div>
    
                        <div className="col-md-12">
                            <textarea className="form-control" name="message" rows="6" placeholder="Méssage" required=""></textarea>
                        </div>
    
                        <div className="col-md-12 text-center">
                            <div className="loading">Loading</div>
                            <div className="error-message"></div>
                            <div className="sent-message">Your message has been sent. Thank you!</div>
    
                            <button type="submit" value="Send">Envoyer un méssage</button>
                        </div>
    
                        </div>
                    </form>
    
                    </div>
    
                </div>
    
                </div>
    
                </section>
            </>
        )
    }
    
}

export default ContactUs