import React from 'react'

import amsLogo from "../../../Images/1x/HarvestAMS.png"
import dataLogo from "../../../Images/1x/HarvestData.png"
import crmLogo from "../../../Images/1x/HarvestCRM.png"
import payLogo from "../../../Images/1x/HarvestPayLogo.png"
import emsLogo from "../../../Images/1x/HarvestEMS.png"

import { Navbar, Container, Nav, NavDropdown} from 'react-bootstrap'
import { BrowserRouter as Router , Route, Switch, Link } from 'react-router-dom'

import HarvestData from '../Pages/HarvestData'
import HarvestCRM from '../Pages/HarvestCRM'
import HarvestAMS from '../Pages/HarvestAMS'

import Fade from 'react-reveal/Fade'


const Products = () =>{
    return (
        <div>
            <section className='section' id="products">
                <div className="container">
                <h2 className='section-title'><center><span>Our </span>Products</center></h2>
                {/* <p className="products-text text-center text-muted">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit quibusdam voluptatem dolorum reprehenderit nisi adipisci veritatis id sequi! Quod quas dolore dolor, id dolorem maxime quasi tempore asperiores commodi est.
                </p> */}
                <div className="row">
                    <Fade bottom>
                        <div className="col-md-4 gy-5 d-flex ">
                            <div className="card p-pard text-center product-card shadow-sm">
                            <img className="card-img-top img-fluid img-fluid" src={payLogo} alt="" srcSet="" />

                                <div className="card-body">
                                    <div className="card-text product-text text-center text-muted">
                                        Improve the efficiency of 
                                        Human Resources departments within
                                        of your business by outsourcing 
                                        and automating your payroll system.
                                    </div>
                                    <div className="card-footer">

                                        <Link to="/products/harvestpay">
                                            <button type="button" className="btn btn-product mt-3 rounded-pill">Know More</button>
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="col-md-4 gy-5 d-flex ">
                            <div className="card p-pard text-center product-card shadow-sm">
                                <img className="card-img-top img-fluid img-fluid" src={dataLogo} alt="" srcSet="" />
                                <div className="card-body">
                                    <div className="card-text product-text text-center text-muted">
                                    The best recruiting methodologies 
                                    depend not only on databases
                                    and technology.
                                    </div >
                                        <div className="card-footer">
                                            <Link to="/products/harvestdata">
                                                <button type="button" className="btn btn-product mt-3 rounded-pill">Know More</button>
                                            </Link>

                                        </div>
                                        
                                    </div>
                            </div>
                        </div>

                        <div className="col-md-4 gy-5 d-flex ">
                            <div className="card p-pard text-center product-card shadow-sm">
                                <img className="card-img-top img-fluid" src={amsLogo} alt="" srcSet="" />
                                <div className="card-body">
                                    <div className="card-text product-text text-center text-muted">
                                    Keeping control over employee time
                                    is essential to minimize employee 
                                    downtime in the business.
                                    </div>
                                    <div className="card-footer">

                                    <Link to="/products/harvestams">
                                        <button type="button" className="btn btn-product mt-3 rounded-pill">Know More</button>
                                    </Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </Fade>
                </div>
                <div className="row">
                    <Fade bottom>
                        <div className="col-md-4 gy-5 d-flex ">
                            <div className="card p-pard text-center product-card shadow-sm">
                                <img className="card-img-top img-fluid" src={crmLogo} alt="" srcSet="" />
                                <div className="card-body">
                                    <div className="card-text product-text text-center text-muted">
                                    Manage sales and customer 
                                    relationships online and in real time 
                                    thanks to our secure and reliable platform.
                                    </div>
                                        <div className="card-footer">

                                        <Link to="/products/harvestcrm">
                                            <button type="button" className="btn btn-product mt-3 rounded-pill">Know More</button>
                                        </Link> 
                                        </div>
                                    </div>
                            </div> 
                        </div>

                        <div className="col-md-4 gy-5 d-flex ">
                            <div className="card p-pard text-center product-card shadow-sm">
                                <img className="card-img-top img-fluid" src={emsLogo} alt="" srcSet="" />

                                    <div className="card-body">
                                        <div className="card-text product-text text-center text-muted">
                                            Harvest EMIS
                                        </div>
                                        <div className="card-text product-text text-center text-muted">
                                            Manage all the business processes of your education system, from admission to tuition management in all its details.
                                        </div>
                                        <div className="card-footer">
                                            <Link to="/products/harvestemis">
                                                <button type="button" className="btn btn-product mt-3 rounded-pill">Know More</button>
                                            </Link> 
                                        </div>
                                    </div>
                            </div> 
                        </div>
                    </Fade>
                </div>
            </div>

                
            </section>
        </div>
    )
}

export default Products