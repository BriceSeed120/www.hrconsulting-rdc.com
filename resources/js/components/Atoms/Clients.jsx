import React from 'react'

import image1 from '../../../Images/Team/1x/Hubert.png'
import HsdLogo from "../../../Images/1x/HsdLogo.png"
import RecruitmentLogo from "../../../Images/1x/RecruitmentLogo.png"

const Client = () => {
    return(
        <>
            <div className='section'>
                <h2 className='section-titel'><center><span>Our</span> Client </center></h2>

                <div className="row no-gutters section clients-wrap clearfix">

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

                </div>
            </div>
        </>
    )
}

export default Client