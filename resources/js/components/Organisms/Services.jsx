import React from 'react'
import LineIcon from 'react-lineicons'

import servicesImage from "../../../Images/servicesImage.jpeg"
// import serviceImage1 from "../../../Images/1x/ITsolutions.png"
// import serviceImage2 from "../../../Images/1x/WebDev.png"
// import serviceImage3 from "../../../Images/1x/CyberSecurity.png"
// import serviceImage4 from "../../../Images/1x/Consulting.png"

import serviceImage1 from "../../../Images/ICT.jpg"
import serviceImage2 from "../../../Images/Outsourcing.jpg"
import serviceImage3 from "../../../Images/Cypersecurity.jpg"
import serviceImage4 from "../../../Images/Consultancy.jpg"
import serviceImage5 from "../../../Images/Education.jpg"
import serviceImage6 from "../../../Images/softwaresolutions.jpg"

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
                    Seed120 provides global services to its clients through its offices in Cyprus, Cameroon and Gabon. 
                    Seed120 has strategic business partnerships with many leading and key players in the technology industry.
                </p>
                <div className="row services-row gy-5">
                    <div className="col-md-4">
                        <div className="service rounded  col-md-offset-2 card">
                            {/* <img src={serviceImage1} alt="" className="service-image" />
                            
                            <p className='service-title'>ICT/IT/ITES Solution & Services </p>
                            <p className='service-text mt-2 text-muted'>We develop modern solutions where you need them most.</p>
                             */}
                             <div className="card">
                                <div className="card-image">
                                    <img className="img-responsive" src={serviceImage1} height='130' width="400"/>
                                    <span className="card-title">ICT/IT/ITES Solution & Services </span>
                                </div>

                                <div className="card-content">
                                    <p className="services-text text-muted section-title">We develop modern solutions where you need them most.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="service rounded  card">
                            {/* <img src={serviceImage1} alt="" className="service-image" />
                            
                            <p className='service-title'>Education/Training</p>
                            <p className='service-text mt-2 text-muted'>Seed120 Ltd in association with HSD human resource Solution Ltd. and offer in-house training of its consultants and new recruits on cutting edge Business Analysis, Professional Project Management, Database Administration and Network Administration tools that are being directly used on the job.</p> */}
                            <div className="card">
                                <div className="card-image">
                                    <img className="img-responsive" src={serviceImage6} height='130' width="400" />
                                    <span className="card-title">Customized Software Solutions</span>
                                </div>

                                <div className="card-content">
                                    <p className="services-text text-muted section-title">Seed120 Ltd in association with HSD human resource Solution Ltd. and offer in-house training of its consultants and new recruits on cutting edge Business Analysis, Professional Project Management, Database Administration and Network Administration tools that are being directly used on the job.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div className="col-md-4">
                        <div className="service rounded   card">
                            {/* <img src={serviceImage1} alt="" className="service-image" />
                            
                            <p className='service-title'>Consultancy</p>
                            <p className='service-text mt-2 text-muted'>
                                We provide consultancy services to finance institutions, the health care sector, the government sector and the manufacturing sector. We pay full attention to customers, whether it concerns a Five-page web site or a fully-fledged ERP to be designed.
                            </p> */}
                            <div className="card">
                                <div className="card-image">
                                    <img className="img-responsive" src={serviceImage4} height='130' width="400" />
                                    <span className="card-title">Consultancy</span>
                                </div>

                                <div className="card-content">
                                    <p className="services-text text-muted section-title">We provide consultancy services to finance institutions, the health care sector, the government sector and the manufacturing sector. We pay full attention to customers, whether it concerns a Five-page web site or a fully-fledged ERP to be designed.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div className="row services-row gy-5">
                    <div className="col-md-4 d-flex">
                        <div className="service rounded card">
                            {/* <img src={serviceImage1} alt="" className="service-image" />
                            
                            <p className='service-title'>Cyber security system</p>
                            <p className='service-text mt-2 text-muted'>
                            Seed120 Ltd offers a wide range of cloud support and cyber security services to fit your business applications. Microsoft for Azure cloud support. We give you access to our AWS and Microsoft certified professionals and tools to guarantee that your infrastructure is secure and scalable.
                            </p> */}
                            <div className="card">
                                <div className="card-image">
                                    <img className="img-responsive" src={serviceImage3} height='130' width="400" />
                                    <span className="card-title">Cyber security system</span>
                                </div>

                                <div className="card-content">
                                    <p className="services-text text-muted section-title"> Seed120 Ltd offers a wide range of cloud support and cyber security services to fit your business applications. Microsoft for Azure cloud support. We give you access to our AWS and Microsoft certified professionals and tools to guarantee that your infrastructure is secure and scalable.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="service rounded  card">
                            {/* <img src={serviceImage1} alt="" className="service-image" />
                            
                            <p className='service-title'>Education/Training</p>
                            <p className='service-text mt-2 text-muted'>Seed120 Ltd in association with HSD human resource Solution Ltd. and offer in-house training of its consultants and new recruits on cutting edge Business Analysis, Professional Project Management, Database Administration and Network Administration tools that are being directly used on the job.</p> */}
                            <div className="card">
                                <div className="card-image">
                                    <img className="img-responsive" src={serviceImage5} height='130' width="400" />
                                    <span className="card-title">Education/Training</span>
                                </div>

                                <div className="card-content">
                                    <p className="services-text text-muted section-title">Seed120 Ltd in association with HSD human resource Solution Ltd. and offer in-house training of its consultants and new recruits on cutting edge Business Analysis, Professional Project Management, Database Administration and Network Administration tools that are being directly used on the job.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-4 ">
                        <div className="service rounded card">
                            {/* <img src={serviceImage1} alt="" className="service-image" />
                            <p className='service-title'>Outsourcing</p>
                            <p className='service-text mt-2 text-muted'>Seed120 Ltd does not only provide industry-specific solutions but also dedicates personnel to organizations with technical skills to manage and process back-office transactions.</p> */}
                            <div className="card">
                                <div className="card-image">
                                    <img className="img-responsive" src={serviceImage2} height='130' width="400"/>
                                    <span className="card-title">Outsourcing</span>
                                </div>

                                <div className="card-content">
                                    <p className="services-text text-muted section-title">Seed120 Ltd does not only provide industry-specific solutions but also dedicates personnel to organizations with technical skills to manage and process back-office transactions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
         </>
     )
 }

 export default Services