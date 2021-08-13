import React from 'react'

import amsLogo from "../../../Images/1x/amsLogo.png"
import dataLogo from "../../../Images/1x/dataLogo.png"
import crmLogo from "../../../Images/1x/crmLogo.png"


const Products = () =>{
    return (
        <div>
            <section className='section' id="products">
                <div className="container">
                <h2 className='section-title'><center><span>Our </span>Products</center></h2>
                <p className="products-text text-center text-muted">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit quibusdam voluptatem dolorum reprehenderit nisi adipisci veritatis id sequi! Quod quas dolore dolor, id dolorem maxime quasi tempore asperiores commodi est.
                </p>
                <div className="row">
                    <div className="col-md-4 gy-5">
                        <div className="card text-center product-card shadow-sm">
                            <img className="card-img-top" src={amsLogo} alt="" srcSet="" />
                            <div className="card-body">
                                {/* <h5 className="card-title">Harvest AMS</h5> */}
                                <div className="card-text text-center text-muted">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, ratione et. Esse cumque aspernatur error sed, sunt assumenda minima odit vero cum totam, nam maiores iste voluptate eum harum earum.
                                </div>
                                <button type="button" className="btn btn-product mt-3 rounded-pill">Know More</button>
                            </div>
                        </div>
                    </div>

                    <div className="col-md-4 gy-5">
                        <div className="card text-center product-card shadow-sm">
                            <img className="card-img-top" src={crmLogo} alt="" srcSet="" />
                            <div className="card-body">
                                {/* <h5 className="card-title">Harvest CRM</h5> */}
                                <div className="card-text text-center text-muted">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex et ducimus adipisci corrupti distinctio dolor aspernatur a soluta maxime! Esse fugit, provident magnam doloremque sint repellendus quidem perspiciatis nulla ducimus.
                                </div>
                                <button type="button" className="btn btn-product mt-3 rounded-pill">Know More</button>
                            </div>
                        </div>
                    </div>

                    <div className="col-md-4 gy-5">
                        <div className="card text-center product-card shadow-sm">
                            <img className="card-img-top" src={dataLogo} alt="" srcSet="" />
                            <div className="card-body">
                                {/* <h5 className="card-title">Harvest Data</h5> */}
                                <div className="card-text text-center text-muted">
                                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid eaque eveniet, odio dolores blanditiis saepe qui, sit vitae ut, unde veniam praesentium eius repellendus rem soluta dolorum numquam magnam obcaecati?
                                </div>
                                <button type="button" className="btn btn-product mt-3 rounded-pill">Know More</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
                </div>
            </section>
        </div>
    )
}

export default Products