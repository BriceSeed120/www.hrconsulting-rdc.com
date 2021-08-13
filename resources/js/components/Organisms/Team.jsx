import React from 'react'
import * as Icon from 'react-bootstrap-icons';
import { ArrowRight, Twitter,  } from 'react-bootstrap-icons';
import image1 from '../../../Images/Team/1x/Hubert.png'
import image2 from '../../../Images/Team/1x/Salouck.png'
import image3 from '../../../Images/Team/1x/Sumon.png'
import image8 from '../../../Images/Team/1x/Marcial.png'
import image4 from '../../../Images/Team/1x/Abrar.png'
import image5 from '../../../Images/Team/1x/Reaz.png'
import image6 from '../../../Images/Team/1x/Dora.png'
import image7 from '../../../Images/Team/1x/Brice.png'

const Team = () => {
    return(
        <div>
            <section id='team' className='container section'>
                <h2 className='mt-10 section-titel'><center><span>Our </span>Team</center></h2>
                <div className="row top-buffer mx-md-n5">
                    <div className="col-md-4 member-box">
                        <div className="row">
                            <div className="col-md-4">
                                <img src={image1} className="img-fluid rounded-start"/>
                            </div>  
                            <div className="col-md-6 mt-2">
                                <h5 className='mt-6'>Hubert NANA</h5>
                                <p className="text-muted member-post">
                                    CEO, Seed120 Ltd.
                                </p>
                                <a href="https://twitter.com/"><Icon.Twitter className="icon" color="#09b6b0" /></a>
                                <a href="https://www.linkedin.com/"><Icon.Linkedin className="icon ml-3" color="#09b6b0" /></a>
                            </div>
                        </div>  
                        <div className="member-text row ml-2">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi quas iure ut ex, expedita rerum explicabo, dolorum quidem.
                        </div>
                    </div>

                    <div className="col-md-4 member-box  ">
                        <div className="row ">
                            <div className="col-md-4">
                                <img src={image2} className="img-fluid rounded-start"/>
                            </div>  
                            <div className="col-md-8 mt-2">
                                <h5 className='mt-6'>Salouck BAMBANG</h5>
                                <p className="text-muted member-post">
                                    FCO , Seed120 Software Ltd.
                                </p>
                                <a href="https://twitter.com/"><Icon.Twitter className="icon" color="#09b6b0" /></a>
                                <a href="https://www.linkedin.com/"><Icon.Linkedin className="icon ml-3" color="#09b6b0" /></a>
                            </div>
                        </div>  
                        
                        <div className="member-text row ml-2">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi quas iure ut ex, expedita rerum explicabo, dolorum quidem.
                        </div>
                    </div>

                    <div className="col-md-4 member-box ">
                        <div className="row ">
                            <div className="col-md-4">
                                <img src={image8} className="img-fluid rounded-start"/>
                            </div>  
                            <div className="col-md-8 mt-2">
                                <h5 className='mt-6'>Marcial TCHATCHOUA</h5>
                                <p className="text-muted member-post">
                                    Chief Information Officer (CIO), Seed120
                                </p>
                                <a href="https://twitter.com/"><Icon.Twitter className="icon" color="#09b6b0" /></a>
                                <a href="https://www.linkedin.com/"><Icon.Linkedin className="icon ml-3" color="#09b6b0" /></a>
                            </div>
                        </div>  
                        <div className="member-text row ml-2">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi quas iure ut ex, expedita rerum explicabo, dolorum quidem.
                        </div>
                    </div>
                </div>

                <div className="row top-buffer mx-md-n5">
                    <div className="col-md-4 member-box">
                        <div className="row">
                            <div className="col-md-4">
                                <img src={image3} className="img-fluid rounded-start"/>
                            </div>  
                            <div className="col-md-8 mt-2">
                                <h5 className='mt-6'>Nur Alam Sumon</h5>
                                <p className="text-muted member-post">
                                    Chief Technology Officer (CTO), Seed120 Software Ltd.
                                </p>
                                <a href="https://twitter.com/"><Icon.Twitter className="icon" color="#09b6b0" /></a>
                                <a href="https://www.linkedin.com/"><Icon.Linkedin className="icon ml-3" color="#09b6b0" /></a>
                            </div>
                        </div>  
                        <div className="member-text row ml-2">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi quas iure ut ex, expedita rerum explicabo, dolorum quidem.
                        </div>
                    </div>

                    <div className="col-md-4 member-box  ">
                        <div className="row ">
                            <div className="col-md-4">
                                <img src={image4} className="img-fluid rounded-start"/>
                            </div>  
                            <div className="col-md-8 mt-2">
                                <h5 className='mt-6'>QUAZI RUHUL ABRAR</h5>
                                <p className="text-muted member-post">
                                    Business Development Manager(BDM), 
                                    Seed120 Software Ltd.
                                </p>
                                <a href="https://twitter.com/"><Icon.Twitter className="icon" color="#09b6b0" /></a>
                                <a href="https://www.linkedin.com/"><Icon.Linkedin className="icon ml-3" color="#09b6b0" /></a>
                            </div>
                        </div>  
                        
                        <div className="member-text row ml-2">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi quas iure ut ex, expedita rerum explicabo, dolorum quidem.
                        </div>
                    </div>

                    <div className="col-md-4 member-box ">
                        <div className="row ">
                            <div className="col-md-4">
                                <img src={image5} className="img-fluid rounded-start"/>
                            </div>  
                            <div className="col-md-8 mt-2">
                                <h5 className='mt-6'>Reaz Hossain</h5>
                                <p className="text-muted member-post">
                                    Software Engineer, Seed120 Software Ltd.
                                </p>
                                <a href="https://twitter.com/"><Icon.Twitter className="icon" color="#09b6b0" /></a>
                                <a href="https://www.linkedin.com/"><Icon.Linkedin className="icon ml-3" color="#09b6b0" /></a>
                            </div>
                        </div>  
                        <div className="member-text row ml-2">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi quas iure ut ex, expedita rerum explicabo, dolorum quidem.
                        </div>
                    </div>
                </div>
            </section>
        </div>
    )
}

export default Team