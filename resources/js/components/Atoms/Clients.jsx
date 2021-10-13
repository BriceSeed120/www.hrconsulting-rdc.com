import React from 'react'

import image1 from '../../../Images/Team/1x/Hubert.png'
import HsdLogo from "../../../Images/1x/HsdLogo.png"
import RecruitmentLogo from "../../../Images/1x/RecruitmentLogo.png"
// import avisLogo from "../../../Images/1x/avis.png"
// import BluewireLogo from "../../../Images/ClientLogo/Bluewire.png"
// import eccLogo from "../../../Images/ClientLogo/ecc.png"
// import EtikaLogo from "../../../Images/ClientLogo/Etika.png"
// import NeshelyLogo from "../../../Images/ClientLogo/Neshely.png"
// import MaarebLogo from "../../../Images/ClientLogo/Maareb.png"
// import ParadigmLogo from "../../../Images/ClientLogo/Paradigm.png"

const Client = () => {
    return(
        <>
            <div className='section'>
                <h2 className='section-titel'><center><span>Our</span> Clients </center></h2>

                {/* <div className="row no-gutters section clients-wrap clearfix">

                    <div className="col-lg-3 col-md-4 col-xs-6">
                        <div className="client-logo aos-init aos-animate" data-aos="zoom-in">
                            <img src={HsdLogo} className="img-fluid" alt="" />
                        </div>
                    </div>

                    <div className="col-lg-3 col-md-4 col-xs-6">
                        <div className="client-logo aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                            <img src={RecruitmentLogo} className="img-fluid" alt="" />
                        </div>
                    </div>

                    <div className="col-lg-3 col-md-4 col-xs-6">
                        <div className="client-logo aos-init aos-animate" data-aos="zoom-in" data-aos-delay="150">
                            <img src={HsdLogo} className="img-fluid" alt="" />
                        </div>
                    </div>

                    <div className="col-lg-3 col-md-4 col-xs-6">
                        <div className="client-logo aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                            <img src={RecruitmentLogo} className="img-fluid" alt="" />
                        </div>
                    </div>

                    <div className="col-lg-3 col-md-4 col-xs-6">
                        <div className="client-logo aos-init aos-animate" data-aos="zoom-in" data-aos-delay="250">
                            <img src={HsdLogo} className="img-fluid" alt="" />
                        </div>
                    </div>

                    <div className="col-lg-3 col-md-4 col-xs-6">
                        <div className="client-logo aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
                            <img src={RecruitmentLogo} className="img-fluid" alt="" />
                        </div>
                    </div>

                    <div className="col-lg-3 col-md-4 col-xs-6">
                        <div className="client-logo aos-init aos-animate" data-aos="zoom-in" data-aos-delay="350">
                            <img src={HsdLogo} className="img-fluid" alt="" />
                        </div>
                    </div>

                    <div className="col-lg-3 col-md-4 col-xs-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="400">
                        <div className="client-logo">
                            <img src={RecruitmentLogo} className="img-fluid" alt="" />
                        </div>
                    </div>

                </div> */}

                <div className="wrap">
                    <ul className="clients">
                        <li><a href=""><img src="https://www.kallman.com/sites/default/files/u20/RAF.svg" alt="UAE" /></a></li>
                        <li><a href=""><img src="https://webslides.tv/static/images/logos/airbnb.svg" alt="Airbnb" /></a></li>
                        <li><a href=""><img src="https://webslides.tv/static/images/logos/apple.svg" alt="Apple" /></a></li>
                        <li><a href=""><img src="https://webslides.tv/static/images/logos/microsoft.svg" alt="Microsoft" /></a></li>
                    </ul>
                </div>
            </div>
        </>
    )
}

export default Client