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
                            <h3>Tests psychométriques en ligne</h3>
                            <p>
                                Nous commercialisons les tests psychométriques en ligne de Central Test qui analysent de manière scientifique la personnalité, les aptitudes et les connaissances professionnelles des individus aussi bien dans le cadre du recrutement que de la mobilité professionnelle interne au sein des entreprises. Les résultats de ces tests sont fournis en temps réel sous forme des rapports détaillés et commentés avec des graphiques.
                            </p>
                        </div>
                    </div>

                    <div className="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div className="service-box green">
                            <img src={HrSpecificTask} className="img-fluid icon"/>
                            <h3>Les bilans des compétences</h3>
                            <p>Nous organisons, à la demande, des bilans de compétences du personnel et nous proposons les formations requises pour renforcer les capacités des employés..</p>
                        </div>
                    </div>
                    
                    <div className="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div className="service-box green">
                            <img src={EmployeeManagement} className="img-fluid icon"/>
                            <h3>Les solutions numériques liées à la gestion de la paie</h3>
                            <p>A travers nos partenaires internationaux spécialisés dans la gestion numérique des Ressources Humaines, nous proposons des solutions liées à la gestion de la paie qui sont adaptées aux besoins et spécificités des entreprises.</p>
                        </div>
                    </div>

                    <div className="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div className="service-box green">
                            <img src={Recruitment} className="img-fluid icon"/>
                            <h3>Tests de connaissance IT</h3>
                            <p>
                            Nous commercialisons les tests psychométriques en ligne évaluant les connaissances IT des candidats.
                            </p>
                        </div>
                    </div>

                    <div className="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div className="service-box green">
                            <img src={OnlineEvaluation} className="img-fluid icon"/>
                            <h3>Les évaluations des performances</h3>
                            <p>Nous organisons, à la demande, les évaluations des performances du capital humain des entreprises.</p>
                        </div>
                    </div>

                    <div className="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div className="service-box green">
                            <img src={OnlineEvaluation} className="img-fluid icon"/>
                            <h3>La gestion des talents</h3>
                            <p>Nous accompagnons les entreprises dans la conception et la mise en œuvre des politiques et procédures de gestion des talents de leurs ressources humaines.</p>
                        </div>
                    </div>

                </div>

                </div>

            </section>
         </>
     )
 }

 export default Services