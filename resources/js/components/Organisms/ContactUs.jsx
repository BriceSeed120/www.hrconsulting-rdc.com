import React from 'react'

import GoogleApiWrapper from '../Atoms/Map'
import Contact from '../Atoms/Contact'
import { faDiceFive } from '@fortawesome/free-solid-svg-icons'

import Fade from 'react-reveal/Fade';

const ContactUs = () =>{
    return(
        <>
            {/* <div className='section' id="contact">
            <h2 className='mt-10 section-titel'><center><span>Contact </span>Us</center></h2>
                <div className="container">
                    <div className="row services-row gy-5">
                            <div className="col-md-6 content-fluid map">
                                <GoogleApiWrapper className='rounded img-fluid'/>
                            </div>
                            <div className="col-md-6 content-fluid">
                                <Contact />
                            </div>
                    </div>
                </div>
            </div> */}
            <section id="contact" className="contact" style ={ { backgroundImage: "url('../../../Images/Group 29.jpg')" } }>

            <div className="container aos-init aos-animate" data-aos="fade-up">

            <header className="section-header">
                <h2>Contact</h2>
                <p>Contactez nous</p>
            </header>

            <div className="row gy-4">

                {/* <div className="col-lg-6">e
                    <div className="row gy-4">
                        <div className="col-md-6">
                        <div className="info-box">
                            <i className="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <p>A108 Adam Street,<br/>New York, NY 535022</p>
                        </div>
                        </div>
                        <div className="col-md-6">
                        <div className="info-box">
                            <i className="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 55<br/>+1 6678 254445 41</p>
                        </div>
                        </div>
                        <div className="col-md-6">
                        <div className="info-box">
                            <i className="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p>info@example.com<br/>contact@example.com</p>
                        </div>
                        </div>
                        <div className="col-md-6">
                        <div className="info-box">
                            <i className="bi bi-clock"></i>
                            <h3>Open Hours</h3>
                            <p>Monday - Friday<br/>9:00AM - 05:00PM</p>
                        </div>
                        </div>
                    </div>
                </div> */}

                <div className="col-lg-6">
                <form className="php-email-form">
                    <div className="row gy-4">

                    <div className="col-md-6">
                        <input type="text" name="name" className="form-control" placeholder="Votre nom" required="" />
                    </div>

                    <div className="col-md-6 ">
                        <input type="email" className="form-control" name="email" placeholder="Votre adresse mail" required="" />
                    </div>

                    <div className="col-md-12">
                        <input type="text" className="form-control" name="subject" placeholder="Sujet" required="" />
                    </div>

                    <div className="col-md-12">
                        <textarea className="form-control" name="message" rows="6" placeholder="Méssage" required=""></textarea>
                    </div>

                    <div className="col-md-12 text-center">
                        <div className="loading">Loading</div>
                        <div className="error-message"></div>
                        <div className="sent-message">Your message has been sent. Thank you!</div>

                        <button type="submit">Envoyer un méssage</button>
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

export default ContactUs