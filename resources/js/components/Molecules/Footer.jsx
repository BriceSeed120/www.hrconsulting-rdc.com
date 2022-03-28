import React, { Component, useEffect } from 'react'
import ReactGA from 'react-ga'
import logo from '../../../Images/logo.png'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faFacebook } from '@fortawesome/free-solid-svg-icons'




function Footer(){

    useEffect(()=>{
        ReactGA.initialize('G-P90JNRPQ0F')

        ReactGA.pageview('/')
    }, [])

        return(
            <div>
                <footer id="footer" className="footer">
                {/* <div className="footer-newsletter">
                </div> */}

                <div className="footer-top">
                <div className="container">
                    <div className="row gy-4">
                    <div className="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" className="logo d-flex align-items-center">
                        <img src={logo} alt="" />
                        {/* <span>FlexStart</span> */}
                        </a>
                        <p>Recruitment (Selection of candidates using "Central Test" online tests) / Online Evaluations of employees / Employee Relations Management / Global HR Management Online Counseling / HR Specific Task Force</p>
                        <div className="social-links mt-3">
                        <a href="#" className="twitter"><FontAwesomeIcon icon={faFacebook} /></a>
                        <a href="#" className="facebook"><i className="bi bi-facebook"></i></a>
                        <a href="#" className="instagram"><i className="bi bi-instagram"></i></a>
                        <a href="#" className="linkedin"><i className="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div className="col-lg-2 col-6 footer-links">
                        <h4>Liens utiles</h4>
                        <ul>
                        <li><i className="bi bi-chevron-right"></i> <a href="#top">Home</a></li>
                        <li><i className="bi bi-chevron-right"></i> <a href="#about">A propos de nous</a></li>
                        <li><i className="bi bi-chevron-right"></i> <a href="#services">Nos services</a></li>
                        <li><i className="bi bi-chevron-right"></i> <a href="#contact">Nos clients</a></li>
                        </ul>
                    </div>

                    <div className="col-lg-2 col-6 footer-links">
                        <h4>Nos Services</h4>
                        <ul>
                        <li><i className="bi bi-chevron-right"></i> <a href="#services">Tests psychométriques en ligne</a></li>
                        <li><i className="bi bi-chevron-right"></i> <a href="#services">Tests de connaissance en IT</a></li>
                        <li><i className="bi bi-chevron-right"></i> <a href="#services">Les solutions numériques liées à la gestion de la paie</a></li>
                        <li><i className="bi bi-chevron-right"></i> <a href="#services">Les bilans des compétences</a></li>
                        <li><i className="bi bi-chevron-right"></i> <a href="#services">Les évaluations des performances</a></li>
                        <li><i className="bi bi-chevron-right"></i> <a href="#services">La gestion des talents</a></li>
                        </ul>
                    </div>

                    <div className="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contactez Nous</h4>
                        <p>
                        241 B, Avenue Luvua, <br/>
                        Quartier Singa-Mopepe,<br/>
                        Commune de Lingwala,<br/>
                        Ville de Kinshasa. RDC
                        <br/>
                        <strong>Phone:</strong> +243 000 000 000<br/>
                        <strong>Email:</strong> <a href="mailto:josephkalambaie@gmail.com">josephkalambaie@gmail.com</a><br/>
                        </p>

                    </div>

                    </div>
                </div>
                </div>

                <div className="container row">
                    <div className="copyright col-md-6 col-xl-4">
                        © Copyright <strong><span>HR Consulting RDC</span></strong>. All Rights Reserved
                    </div>
                    <div className="copyright col-md-6 col-xl-4">
                       Designed whit ❤ by <strong><span> <a href="http://seed120.com">Seed120</a></span></strong>
                    </div>
                </div>
                </footer>
            </div>
        ) 
    }


export default Footer