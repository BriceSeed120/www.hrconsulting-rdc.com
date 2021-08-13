import React, { Component } from 'react'
import whiteLogo from '../../../Images/whiteLogo.png'
import * as Icon from 'react-bootstrap-icons'
import { BrowserRouter as Router , Route, Switch, Link } from 'react-router-dom'

const Footer = () => {
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
                                        <a className="facebook" href=""><Icon.Facebook className="icon ml-3 social-icon" /></a> 
                                        <a className="twitter" href=""><Icon.Twitter className="icon ml-3 social-icon" /></a>
                                        <a className="linkedin" href=""><Icon.Linkedin className="icon ml-3 social-icon" /></a>
                                    </div>
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
                                        <li><Link to='/products/harvestams' className="a">Havest AMS</Link></li>
                                        <li> <Link to='/products/harvestams' className="a">Harvest Data</Link></li>
                                        <li> <Link to='/products/harvestams' className="a">Harvest CRM</Link></li>
                                    </ul>
                                </div>
                                <div className="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                                    <h4>Contact Us</h4>
                                    <p>
                                    85 Avenue de l'Indépendance - Bonapriso, Douala, B.P: 3948 <br/>
                                    Douala, Cameroon<br/>
                                    <br/>
                                    <strong>Phone:</strong> +237 6 58 58 30 23<br/>
                                    <strong>Email:</strong>info@seed120.com<br/>
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