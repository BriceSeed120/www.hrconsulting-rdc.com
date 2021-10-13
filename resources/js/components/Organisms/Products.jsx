import React from 'react'

import amsLogo from "../../../Images/1x/amsLogo.png"
import dataLogo from "../../../Images/1x/dataLogo.png"
import crmLogo from "../../../Images/1x/crmLogo.png"
import payLogo from "../../../Images/HarvestPay.png"

import { Navbar, Container, Nav, NavDropdown} from 'react-bootstrap'
import { BrowserRouter as Router , Route, Switch, Link } from 'react-router-dom'

import HarvestData from '../Pages/HarvestData'
import HarvestCRM from '../Pages/HarvestCRM'
import HarvestAMS from '../Pages/HarvestAMS'


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
                    <div className="col-md-4 gy-5">
                        <div className="card p-pard text-center product-card shadow-sm">
                            {/* <img className="card-img-top" src={payLogo} height="10px" width="10px"  alt="" srcSet="" /> */}
                            <div className="card-body">
                                {/* <h5 className="card-title">Harvest AMS</h5> */}
                                <div className="card-text product-text text-center text-muted">
                                    Improve the efficiency of 
                                    Human Resources departments within
                                    of your business by outsourcing 
                                    and automating your payroll system.
                                </div>
                                {/* <NavDropdown.Item as={Link} to='/products/harvestams'>Harvest AMS</NavDropdown.Item> */}
                                <Link to="/products/harvestams">
                                    <button type="button" className="btn btn-product mt-3 rounded-pill">Know More</button>
                                </Link>
                            </div>
                        </div>
                    </div>

                    <div className="col-md-4 gy-5">
                        <div className="card p-pard text-center product-card shadow-sm">
                            <img className="card-img-top" src={dataLogo} alt="" srcSet="" />
                            <div className="card-body">
                                {/* <h5 className="card-title">Harvest Data</h5> */} 
                                <div className="card-text product-text text-center text-muted">
                                The best recruiting methodologies 
                                depend not only on databases
                                and technology, but also on connection 
                                with people, precise match of skills 
                                and exact fit of culture.
                                 {/* The company's online career management services include online job advertisement facility, online CV bank access, online application reception and processing facility, enabling job seekers to solve many of the problems associated with traditional recruiting methods and allows them to save time and cost.       */}
                                </div>
                                    <Link to="/products/harvestdata">
                                        <button type="button" className="btn btn-product mt-3 rounded-pill">Know More</button>
                                    </Link>
                                </div>
                        </div>
                    </div>

                    <div className="col-md-4 gy-5">
                        <div className="card p-pard text-center product-card shadow-sm">
                            <img className="card-img-top" src={amsLogo} alt="" srcSet="" />
                            <div className="card-body">
                                <div className="card-text product-text text-center text-muted">
                                Keeping control over employee time
                                is essential to minimize employee 
                                downtime in the business.
                                </div>
                                <Link to="/products/harvestams">
                                    <button type="button" className="btn btn-product mt-3 rounded-pill">Know More</button>
                                </Link>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div className="row">
                <div className="col-md-4 gy-5">
                        <div className="card p-pard text-center product-card shadow-sm">
                            <img className="card-img-top" src={crmLogo} alt="" srcSet="" />
                            <div className="card-body">
                                <div className="card-text product-text text-center text-muted">
                                Manage sales and customer 
                                relationships online and in real time 
                                thanks to our secure and reliable platform.
                                </div>
                                    <Link to="/products/harvestcrm">
                                        <button type="button" className="btn btn-product mt-3 rounded-pill">Know More</button>
                                    </Link> 
                                </div>
                        </div> 
                    </div>

                    <div className="col-md-4 gy-5">
                        <div className="card p-pard text-center product-card shadow-sm">
                            {/* <img className="card-img-top" src={crmLogo} alt="" srcSet="" /> */}
                            <div className="card-body">
                                <div className="card-text product-text text-center text-muted">
                                Harvest EMIS
                                </div>
                                    <Link to="/products/harvestcrm">
                                        <button type="button" className="btn btn-product mt-3 rounded-pill">Know More</button>
                                    </Link> 
                                </div>
                        </div> 
                    </div>

                    {/* <div className="col-md-4 gy-5">
                        <div className="card p-pard text-center product-card shadow-sm">
                            <img className="card-img-top" src={dataLogo} alt="" srcSet="" />
                            <div className="card-body"> 
                                <div className="card-text product-text text-center text-muted">
                                Best recruitment methodologies do not depend only on databases and technology, but also on connecting with the people, matching the skills accurately and getting the culture fit exactly, every time. The best recruitment must have compassion, sector experience and an intuitive understanding of their role in the recruitment process. 
                                </div>
                                    <Link to="/products/harvestdata">
                                        <button type="button" className="btn btn-product mt-3 rounded-pill">Know More</button>
                                    </Link>
                                </div>
                        </div>
                    </div> */}
                    
                </div>
                </div>

                
            </section>
        </div>
    )
}

export default Products