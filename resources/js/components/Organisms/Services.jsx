import React from 'react'
import LineIcon from 'react-lineicons'

import OnlineEvaluation from "../../../Images/online-evalution.png"
import Recruitment from "../../../Images/recruitment.png"
import EmployeeManagement from "../../../Images/employee-management-icon.png"
import HrSpecificTask from "../../../Images/hr-task-force-icon.png"
import Fade from 'react-reveal/Fade';

 const Services = (props) => {
     return(
         <> 
            <section id="services" className="services">

                <div className="container" data-aos="fade-up">

                <header className="section-header">
                    <h2>Nos services</h2>
                    <p>Nous sommes un Bureau-conseils de gestion des ressources humaines qui offre aux entreprises les solutions RH suivantes</p>
                </header>

                <div className="row gy-4">

                    <div className="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div className="service-box green">
                            <img src={OnlineEvaluation} className="img-fluid icon"/>
                            <h3>Online evaluation of employees</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Euismod suspendisse ut tellus scelerisque amet vel neque. Ornare mi commodo egestas nisi.</p>
                        </div>
                    </div>

                    <div className="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div className="service-box green">
                            <img src={Recruitment} className="img-fluid icon"/>
                            <h3>Recruitment</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Euismod suspendisse ut tellus scelerisque amet vel neque. Ornare mi commodo egestas nisi.</p>
                        </div>
                    </div>

                    <div className="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div className="service-box green">
                            <img src={EmployeeManagement} className="img-fluid icon"/>
                            <h3> Employee Relations Management</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Euismod suspendisse ut tellus scelerisque amet vel neque. Ornare mi commodo egestas nisi.</p>
                        </div>
                    </div>

                    <div className="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div className="service-box green">
                            <img src={HrSpecificTask} className="img-fluid icon"/>
                            <h3>HR specific Task Management</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Euismod suspendisse ut tellus scelerisque amet vel neque. Ornare mi commodo egestas nisi.</p>
                        </div>
                    </div>

                    <div className="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div className="service-box green">
                            <img src={OnlineEvaluation} className="img-fluid icon"/>
                            <h3>Online evaluation of employees</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Euismod suspendisse ut tellus scelerisque amet vel neque. Ornare mi commodo egestas nisi.</p>
                        </div>
                    </div>

                    <div className="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div className="service-box green">
                            <img src={OnlineEvaluation} className="img-fluid icon"/>
                            <h3>Online evaluation of employees</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Euismod suspendisse ut tellus scelerisque amet vel neque. Ornare mi commodo egestas nisi.</p>
                        </div>
                    </div>

                </div>

                </div>

            </section>
         </>
     )
 }

 export default Services