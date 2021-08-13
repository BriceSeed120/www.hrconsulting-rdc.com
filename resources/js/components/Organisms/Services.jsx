import React from 'react'
import LineIcon from 'react-lineicons'

import servicesImage from "../../../Images/servicesImage.jpeg"
import serviceImage1 from "../../../Images/1x/ITsolutions.png"
import serviceImage2 from "../../../Images/1x/WebDev.png"
import serviceImage3 from "../../../Images/1x/CyberSecurity.png"
import serviceImage4 from "../../../Images/1x/Consulting.png"

const services = [
    {
        id:1,
        serviceName: 'IT/ITES/ICT Solution',
        description:''
    },
    {
        id:2,
        serviceName: 'Custom Software Development',
        description:''
    },
    {
        id:3,
        serviceName: 'Wep Application',
        description:''
    },
    {
        id:4,
        serviceName: 'Mobile Application',
        description:''
    },
    {
        id:5,
        serviceName: 'Digital Marketing',
        description:''
    },
    {
        id:6,
        serviceName: 'Process Automation & Cyber Security',
        description:''
    },

]
 const Services = (props) => {
     return(
         <> 
            <section id='services' className='container section'>
                <h2 className='mt-10 section-titel'><center><span>Our </span>Services</center></h2>
                <p className="services-text text-muted section-title">
                    Seed120 Ltd is an international IT Business Solutions and Consultancy firm headquartered in Lemesos, Cyprus. Established in 2020, Seed120 provides global services to its clients through its offices in Cyprus, Cameroon and Gabon. Seed120 has strategic business partnerships with many leading and key players in the technology industry.
                </p>
                <div className="row services-row gy-5">
                    <div className="col-md-4">
                        <div className="service rounded  col-md-offset-2 card">
                            <img src={serviceImage1} alt="" className="service-image" />
                            
                            <p className='service-title'>ICT/IT/ITES SERVICES</p>
                            <p className='service-text text-muted'>We develop modern solutions where you need them most.</p>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="service rounded  card">
                            <img src={serviceImage1} alt="" className="service-image" />
                            
                            <p className='service-title'>ICT/IT/ITES SERVICES</p>
                            <p className='service-text text-muted'>We develop modern solutions where you need them most.</p>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="service rounded   card">
                            <img src={serviceImage1} alt="" className="service-image" />
                            
                            <p className='service-title'>ICT/IT/ITES SERVICES</p>
                            <p className='service-text text-muted'>We develop modern solutions where you need them most.</p>
                        </div>
                    </div>
                </div>

                <div className="row services-row gy-5">
                    <div className="col-md-4 d-flex">
                        <div className="service rounded  col-md-offset-2 card">
                            <img src={serviceImage1} alt="" className="service-image align-middle" />
                            
                            <p className='service-title'>ICT/IT/ITES SERVICES</p>
                            <p className='service-text text-muted'>We develop modern solutions where you need them most.</p>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="service rounded  card">
                            <img src={serviceImage1} alt="" className="service-image" />
                            
                            <p className='service-title'>ICT/IT/ITES SERVICES</p>
                            <p className='service-text text-muted'>We develop modern solutions where you need them most.</p>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="service rounded   card">
                            <img src={serviceImage1} alt="" className="service-image" />
                            
                            <p className='service-title'>ICT/IT/ITES SERVICES</p>
                            <p className='service-text text-muted'>We develop modern solutions where you need them most.</p>
                        </div>
                    </div>
                    
                </div>
                {/* <div className="row services-row">
                    <div className="col-md-6">
                        <img src={servicesImage} className='rounded img-fluid max-width: 100%' />
                    </div>
                    <div className="col-md-6 justify-content-center">
                        <div className="row">
                            <div className="service rounded col-md-6 col-md-offset-2 card">
                                <img src={serviceImage1} alt="" className="service-image" />
                                
                                <p className='service-title'>ICT/IT/ITES SERVICES</p>
                                <p>We develop modern solutions where you need them most.</p>
                            </div>
                            <div className="service rounded col-md-6 col-md-offset-2 card">
                                <img src={serviceImage2} alt="" className="service-image" />
                                <p className='service-title'>Web Application Development</p>
                                <p>We develop modern solutions whe  re you need them most.</p>
                            </div>
                        </div>
                        <div className="row">
                        <div className="service rounded col-md-6 col-md-offset-2 card">
                                <img src={serviceImage3} alt="" className="service-image" />
                                <p className='service-title'> CYBER SECURITY </p>
                                <p>We ensure the security of your web media.</p>
                            </div>
                            <div className="service rounded col-md-6 col-md-offset-2 card">
                                <img src={serviceImage4} alt="" className="service-image" />
                                <p className='service-title'>ICT/IT/ITES SERVICES</p>
                                <p>We provide our 
                                strategic advice 
                                for better management 
                                of your human resources 
                                and customers.
                                </p>
                            </div>
                        </div>
                    </div>
                </div> */}
            </section>
         </>
     )
 }

 export default Services