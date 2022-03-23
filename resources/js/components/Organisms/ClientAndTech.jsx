import React from 'react'
// import { Swiper, SwiperSlide } from 'swiper'
// import 'swiper/css';
import Technologies from '../Atoms/Technologies'
import Clients from '../Atoms/Clients'



import HsdLogo from "../../../Images/Client Logo/hsd.png"
// import RecruitmentLogo from "../../../Images/1x/RecruitmentLogo.png"
import ElanRdc from "../../../Images/Client Logo/Elan-rdc.png"
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
                        <div className="swiper-wrapper align-items-center">
                            <div className="swiper-slide"><img src={ElanRdc} className="img-fluid" alt="" /></div>
                            <div className="swiper-slide"><img src={ElanRdc} className="img-fluid" alt="" /></div>
                            <div className="swiper-slide"><img src={ElanRdc} className="img-fluid" alt="" /></div>
                            <div className="swiper-slide"><img src={ElanRdc} className="img-fluid" alt="" /></div>
                            <div className="swiper-slide"><img src={ElanRdc} className="img-fluid" alt="" /></div>
                            <div className="swiper-slide"><img src={ElanRdc} className="img-fluid" alt="" /></div>
                            <div className="swiper-slide"><img src={ElanRdc} className="img-fluid" alt="" /></div>
                            <div className="swiper-slide"><img src={ElanRdc} className="img-fluid" alt="" /></div>
                        </div>
                        <div className="swiper-pagination"></div>
                        </div>
                    </div>
                </section>
        </>
    )
}

export default ClientAndTech