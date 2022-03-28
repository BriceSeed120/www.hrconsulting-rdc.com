import React from 'react'

import ElanRdc from "../../../Images/Client Logo/Elan-rdc.png"
import Perenco from "../../../Images/Client Logo/perenco.png"
import Arjaan from "../../../Images/Client Logo/arjaan.png"
import CongoAirWays from "../../../Images/Client Logo/congoairways.png"
const ClientAndTech = () =>{
    return(
        <>
                <section id="clients" className="clients">
                    <div className="container" data-aos="fade-up">

                        <header className="section-header">
                        <h2>Nos clients</h2>
                        <p>Temporibus omnis officia</p>
                        </header>

                        <div className="clients-slider swiper">
                            <div className="row swiper-wrapper gx-5 d-flex justify-content-center align-items-center">
                                <div className="col-3 swiper-slide justify-content-center"><img src={ElanRdc} className="img-fluid" alt="" /></div>
                                <div className="col-3 swiper-slide justify-content-center"><img src={Perenco} className="img-fluid" alt="" /></div>
                                <div className="col-3 swiper-slide justify-content-center"><img src={Arjaan} className="img-fluid" alt="" /></div>
                                <div className="col-3 swiper-slide justify-content-center"><img src={CongoAirWays} className="img-fluid" alt="" /></div>
                                {/* <div className="col-2 swiper-slide justify-content-center"><img src={ElanRdc} className="img-fluid" alt="" /></div>
                                <div className="col-2 swiper-slide justify-content-center"><img src={ElanRdc} className="img-fluid" alt="" /></div>
                                <div className="col-2 swiper-slide justify-content-center"><img src={ElanRdc} className="img-fluid" alt="" /></div>
                                <div className="col-2 swiper-slide justify-content-center"><img src={ElanRdc} className="img-fluid" alt="" /></div> */}
                            </div>
                        <div className="swiper-pagination"></div>
                        </div>
                    </div>
                </section>
        </>
    )
}

export default ClientAndTech