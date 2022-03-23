import React from 'react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faBrain, faChartLine, faCheckCircle, faComment, faMicrochip, faMoneyBillWave, faPaintBrush } from '@fortawesome/free-solid-svg-icons'

import aboutussubject from '../../../Images/aboutussubject.png'
import Fade from 'react-reveal/Fade'

const AboutUs = (props) =>{
    return (
        <>
            <section id="counts" className="counts">
                <div className="container aos-init aos-animate" data-aos="fade-up">

                    <div className="row gy-4">

                    <div className="col-lg-4 col-md-6 d-flex">
                        <div className="count-box">
                        <FontAwesomeIcon icon={faComment} className='i'/>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="0" className="purecounter">Tests psychométriques en ligne destinés au recrutement</span>
                            {/* <p>Happy Clients</p> */}
                        </div>
                        </div>
                    </div>

                    <div className="col-lg-4 col-md-6 d-flex">
                        <div className="count-box">
                        <FontAwesomeIcon icon={faMicrochip} className='i'/>
                        {/* <i className="bi bi-journal-richtext" style="color: #ee6c20;"></i> */}
                        <div>
                            <span className="purecounter">Tests de connaissance en IT</span>
                            {/* <p>Projects</p> */}
                        </div>
                        </div>
                    </div>

                    <div className="col-lg-4 col-md-6 d-flex">
                        <div className="count-box">
                        <FontAwesomeIcon icon={faMoneyBillWave} className='i'/>
                        <div>
                            <span className="purecounter">Les solutions numériques liées à la gestion de la paie</span>
                            {/* <p>Hours Of Support</p> */}
                        </div>
                        </div>
                    </div>

                    <div className="col-lg-4 col-md-6 d-flex">
                        <div className="count-box">
                        <FontAwesomeIcon icon={faChartLine} className='i'/>                        <div>
                        <span className="purecounter">Les bilans des compétences</span>
                        
                        </div>
                        </div>
                    </div>

                    <div className="col-lg-4 col-md-6 d-flex">
                        <div className="count-box">
                        <FontAwesomeIcon icon={faBrain} className='i'/>
                        <div>
                            <span className="purecounter">Les évaluations des performances</span>
                            
                        </div>
                        </div>
                    </div>
                    <div className="col-lg-4 col-md-6 d-flex">
                        
                        <div className="count-box">
                        <FontAwesomeIcon icon={faPaintBrush} className='i'/>
                        <div>
                            <span className="purecounter">La gestion des talents.</span>                            
                        </div>
                        </div>
                    </div>

                    </div>

                </div>
            </section>
            <section id="about" className="about">
                <div className="container"><div className="row">
                    <div className="col-lg-6 aos-init aos-animate"> 
                    <img src={aboutussubject} className="img-fluid" alt="" />
                </div>
                <div className="col-lg-6 d-flex flex-column justify-contents-center">
                    <div className="content pt-4 pt-lg-0">
                        <h3>Notre mission</h3>
                        <p className="fst-italic"> 
                        &quot;A l&#39;ère où la transformation numérique s&#39;impose comme norme de survie économique à toute entreprise
                        évoluant dans un environnement concurrentiel, HR Consulting-Rdc accompagne les professionnels
                        des Ressources Humaines dans le choix et l&#39;acquisition des outils numériques adaptés à leurs besoins
                        spécifiques en vue de garantir une gestion optimale de leur capital humain&quot;.
                        </p>
                        <h3>Notre vision</h3>
                        <p className="fst-italic"> 
                        <p className="fst-italic"> 
                        &quot;A travers les services que nous proposons, notre ambition est d&#39;aider les professionnels des RessourcesHumaines
                        </p>
                        </p>
                        <ul>
                        <li><FontAwesomeIcon icon={faCheckCircle} className='ii'/>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><FontAwesomeIcon icon={faCheckCircle} className='ii'/> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                        <li><FontAwesomeIcon icon={faCheckCircle} className='ii'/> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperd</li>
                        </ul>
                        <p> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate tera noden carma palorp mades tera.</p>
                    </div>
                </div>
            </div>
            </div>
            </section>
        </>
    )
}

export default AboutUs;