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
                <center>
                <p className=" text-muted section-title">
                    Seed120, technological solutions for everything!
                </p>
                </center>
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
                                    <p className="services-text text-muted section-title">
                                        <strong>Software solutions: </strong>We develop <strong><span>modern 
                                        solutions</span></strong> where you  need them most. 
                                        {/* We have Office Management, Sales Management. Customer Management, Bill management, Education Management and many more system inhouse developed. */}
                                    </p>
                                    
                                    <p className="services-text text-muted section-title">
                                        <strong>Web portal solutions: </strong>We are continually 
                                        innovating in web and mobile development <strong><span>technologies</span></strong>.
                                    </p>

                                    <p className="services-text text-muted section-title">
                                        <strong>Mobile Applications: </strong>
                                        We innovate on mobile <strong><span>platforms</span></strong> in order to always offer the best experiences.                                    
                                    </p>

                                    {/* <p className="services-text text-muted section-title">
                                        <strong>E-commerce: </strong>
                                        <strong><span>We Seed120</span></strong> rich and compatible ecommerce experiences pivoted around your business model and your target market.
                                    </p> */}
                                    
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
                                    <p className="services-text text-muted section-title">
                                        Develop tailor-made solutions.
                                    </p>
                                    <p className="services-text text-muted section-title">
                                        Develop the precise profile of requirements.
                                    </p>
                                    <p className="services-text text-muted section-title">
                                        Define the specifications together with you.
                                    </p>
                                    <p className="services-text text-muted section-title">
                                    A detailed planning stage, our engineering and design specialists create a prototype.
                                    </p>
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
                                    <p className="services-text text-muted section-title">
                                    We provide <strong><span>consultancy services</span></strong> to finance institutions, health care sector, government sector and the manufacturing sector. 

                                    We pay full attention to customers, whether it concerns a Five-page web site or a fully-fledged ERP to be designed. We also take pride in the fact that customers right from inception have continuously added to our client list. 

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div className="row services-row gy-5">
                    {/* <div className="col-md-4">
                        <div className="service rounded card">
                            <div className="card">
                                <div className="card-image">
                                    <img className="img-responsive" src={serviceImage3} height='130' width="400" />
                                    <span className="card-title">Cyber security system</span>
                                </div>

                                <div className="card-content">
                                    <p className="services-text text-muted section-title">
                                        <strong><span>Seed120</span></strong> offers a wide range of <strong><span>cloud support</span></strong> <strong><span>cyber security</span></strong>and services to fit your business applications. 
                                    </p>
                                    <p className="services-text text-muted section-title">
                                        Microsoft for Azure cloud support.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> */}
                    <div className="col-md-4">
                        <div className="service rounded  card">
                            {/* <img src={serviceImage1} alt="" className="service-image" />
                            
                            <p className='service-title'>Education/Training</p>
                            <p className='service-text mt-2 text-muted'>Seed120 Ltd in association with HSD human resource Solution Ltd. and offer in-house training of its consultants and new recruits on cutting edge Business Analysis, Professional Project Management, Database Administration and Network Administration tools that are being directly used on the job.</p> */}
                            <div className="card">
                                <div className="card-image">
                                <img className="img-responsive" src={serviceImage3} height='130' width="400" />
                                <span className="card-title">Cyber security system</span>
                                </div>

                                <div className="card-content">
                                    <p className="services-text text-muted section-title">
                                        <strong><span>Seed120</span></strong> offers a wide range of <strong><span>cloud support</span></strong> <strong><span>cyber security</span></strong>and services to fit your business applications. 
                                    </p>
                                    <p className="services-text text-muted section-title">
                                        Microsoft for Azure cloud support.
                                    </p>
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
                                    <p className="services-text text-muted section-title">
                                        <strong><span>Seed120</span></strong> in association with <strong><span>HSD human resource Solution</span></strong> and offer in-house training of its consultants and new recruits on cutting <strong><span>edge Business Analysis, Professional Project Management, Database Administration and Network Administration tools</span></strong> that are being directly used on the job. 
                                    </p>
                                    <p className="services-text text-muted section-title">
                                        The impact of such training is high performance of these consultants and new recruits in their respective areas of training. 
                                    </p>
                                    <p className="services-text text-muted section-title">
                                        <strong><span>Seed120</span></strong> therefore will lay special emphasis on training and develop it as a core service to its clients.
                                    </p>
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
                                    <p className="services-text text-muted section-title">
                                        <strong><span>Outsourcing</span></strong> allows the <strong><span>organization to focus more on its core business areas.</span></strong>
                                    </p>
                                    <p className="services-text text-muted section-title">
                                        <strong><span>Seed120 Ltd</span></strong> does not only provide industry-specific solutions but also dedicates personnel to organizations with technical skills to manage and process back-office transactions.
                                    </p>
                                    <p className="services-text text-muted section-title">
                                        From clients’ perspective this <strong>modus operandi cuts off cost of acquiring and maintaining technical staff</strong> thus allowing the organisation to focus on their core business activities
                                    </p>
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