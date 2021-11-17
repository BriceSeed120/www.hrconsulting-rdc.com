import React, { Component, useEffect } from 'react'
import whiteLogo from '../../../Images/whiteLogo.png'
import * as Icon from 'react-bootstrap-icons'
import { BrowserRouter as Router , Route, Switch, Link } from 'react-router-dom'
import ReactGA from 'react-ga'



function Footer(){

    useEffect(()=>{
        ReactGA.initialize('G-P90JNRPQ0F')

        ReactGA.pageview('/')
    }, [])

        return(
            <div>
                <footer id="footer" className="footer">
                    <div className="footer-top">
                        <div className="container">
                            <div className="row gy-4">
                                <div className="col-lg-5 col-md-12 footer-info">
                                    <img src={whiteLogo} className="image-fluid" width="150" />
                                    <p>Where we make your simple and easy business processes</p>
                                    <div className="social-links mt-3">
                                        <a className="facebook" target="_blank" href="https://www.facebook.com/seed120ltd"><Icon.Facebook className="icon social-icon" /></a> 
                                        <a className="twitter" target="_blank" href="https://mobile.twitter.com/Seed120L"><Icon.Twitter className="icon ml-3 social-icon" /></a>
                                        <a className="linkedin" target="_blank" href="https://www.linkedin.com/company/seed120-ltd/"><Icon.Linkedin className="icon ml-3 social-icon" /></a>
                                    </div>
                                    <p><strong>Phone:</strong> +237 6 94 80 85 09<br/></p>
                                    <p className='footer-email'><strong>Email:</strong><a className='footer-email' href="mailto:sales@seed120.com"> sales@seed120.com</a><br/></p>
                                </div>
                                <div className="col-lg-2 col-6 footer-links">
                                    <h4>Useful Links</h4>
                                    <ul>
                                        <li><i className="bi bi-chevron-right"></i> <a href="#home">Home</a></li>
                                        <li><i className="bi bi-chevron-right"></i> <a href="#about">About us</a></li>
                                        <li><i className="bi bi-chevron-right"></i> <a href="#services">Services</a></li>
                                        {/* <li><i className="bi bi-chevron-right"></i> <a href="#team"></a></li> */}
                                        {/* <li><i className="bi bi-chevron-right"></i> <a href="#contactus">Privacy policy</a></li> */}
                                    </ul>
                                </div>
                                <div className="col-lg-2 col-6 footer-links">
                                    <h4>Our Products</h4>
                                    <ul>
                                        <li><Link to='/products/harvestpayroll' className="a">Havest Payroll</Link></li>
                                        <li> <Link to='/products/harvestdata' className="a">Harvest Data</Link></li>
                                        <li><Link to='/products/harvestams' className="a">Havest AMS</Link></li>
                                        <li> <Link to='/products/harvestcrm' className="a">Harvest CRM</Link></li>
                                        <li> <Link to='/products/harvestemis' className="a">Harvest EMIS</Link></li>
                                    </ul>
                                </div>
                                <div className="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                                    <h4>Contact Us</h4>
                                    <p>
                                    62B Leoforos Spyrou Kyprianou
                                    Ayios Petros kai Pavlos,Lemesos, Cyprus-3076
                                    </p>
                                    <p>
                                        2367 Avenue Gen. De GAULLE Bonapriso, ancien aéroport. BP 3948, Douala Cameroun
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        ) 
    }


export default Footer