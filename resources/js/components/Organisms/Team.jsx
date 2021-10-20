import React from 'react'
import * as Icon from 'react-bootstrap-icons';
import { ArrowRight, Twitter,  } from 'react-bootstrap-icons';
import image1 from '../../../Images/Team/1x/Hubert.png'
import image2 from '../../../Images/Team/1x/Salouck.png'
import image3 from '../../../Images/Team/1x/Sumon.png'
import image8 from '../../../Images/Team/1x/Marcial.png'
import image4 from '../../../Images/Team/1x/AbrarO.png'
import image5 from '../../../Images/Team/1x/ReazO.png'
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
                                    Chief Executive Officer (CEO), Seed120 Ltd.
                                </p>
                                {/* <a className='member-links' href="https://twitter.com/"><Icon.Twitter className="icon" color="#09b6b0" /></a> */}
                                <a className='member-links' href="https://www.linkedin.com/in/hubert-nana-a1b9aa55/" target="_blank"><Icon.Linkedin className="icon ml-3" color="#09b6b0" /></a>
                                {/* <a className="member-email" href="mailto:hubert.nana@seed120.com">hubert.nana@seed120.com</a> */}
                            </div>
                        </div>  
                        <div className="member-text row ml-2">
                            <a className="member-email" href="mailto:hubert.nana@seed120.com" target="_blank">hubert.nana@seed120.com</a>
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
                                Chief Financial Officer (CFO) , Seed120 Software Ltd.
                                </p>
                                {/* <a href="https://twitter.com/"><Icon.Twitter className="icon" color="#09b6b0" /></a> */}
                                <a href=" https://www.linkedin.com/in/salouck-bambang-8b16b336/" target="_blank"><Icon.Linkedin className="icon ml-3" color="#09b6b0" /></a>
                            </div>
                        </div>  
                        
                        <div className="member-text row ml-2">
                        <a className="member-email" href="mailto:salouck.bambang@seed120.com " target="_blank">salouck.bambang@seed120.com </a>
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
                                    Chief Information Officer (CIO), Seed120 Ltd.
                                </p>
                                {/* <a href="https://twitter.com/"><Icon.Twitter className="icon" color="#09b6b0" /></a> */}
                                <a href="https://www.linkedin.com/in/marcial-tchatchoua-8723674/" target="_blank"><Icon.Linkedin className="icon ml-3" color="#09b6b0" /></a>
                            </div>
                        </div>  
                        <div className="member-text row ml-2">
                        <a className="member-email" href="mailto:marcial.tchatchoua@seed120.com " target="_blank">marcial.tchatchoua@seed120.com </a>
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
                                <h5 className='mt-6'>MMohammad Nur Alam  </h5>
                                <p className="text-muted member-post">
                                    Chief Technology Officer (CTO), <br/>
                                    Seed120 Ltd.
                                </p>
                                {/* <a href="https://twitter.com/"><Icon.Twitter className="icon" color="#09b6b0" /></a> */}
                                <a href="https://www.linkedin.com/in/sumon1216/" target="_blank"><Icon.Linkedin className="icon ml-3" color="#09b6b0" /></a>
                            </div>
                        </div>  
                        <div className="member-text row ml-2">
                        <a className="member-email" href="mailto:na.sumon@seed120.com" target="_blank">na.sumon@seed120.com</a>
                        </div>
                    </div>

                    <div className="col-md-4 member-box  ">
                        <div className="row ">
                            <div className="col-md-4">
                                <img src={image4} className="img-fluid rounded-start" width="120px" height='120px'/>
                            </div>  
                            <div className="col-md-8 mt-2">
                                <h5 className='mt-6'>QUAZI RUHUL ABRAR</h5>
                                <p className="text-muted member-post">
                                    Business Development Manager(BDM), 
                                    Seed120 Ltd.
                                </p>
                                {/* <a href="https://twitter.com/"><Icon.Twitter className="icon" color="#09b6b0" /></a> */}
                                <a href=" https://www.linkedin.com/in/abrar806/" target="_blank"><Icon.Linkedin className="icon ml-3" color="#09b6b0" /></a>
                            </div>
                        </div>  
                        
                        <div className="member-text row ml-2">
                        <a className="member-email" href="mailto:abrar.ruhul@seed120.com" target="_blank">abrar.ruhul@seed120.com</a>
                        </div>
                    </div>

                    <div className="col-md-4 member-box ">
                        <div className="row ">
                            <div className="col-md-4">
                                <img src={image5} className="img-fluid rounded-start" width="120px" height='120px'/>
                            </div>  
                            <div className="col-md-8 mt-2">
                                <h5 className='mt-6'>Reaz Hossain</h5>
                                <p className="text-muted member-post">
                                    Software Engineer, Seed120 Ltd.
                                </p>
                                {/* <a href="https://twitter.com/"><Icon.Twitter className="icon" color="#09b6b0" /></a> */}
                                <a href=" https://www.linkedin.com/in/reaz-hossain-42b736144/" target="_blank"><Icon.Linkedin className="icon ml-3" color="#09b6b0" /></a>
                            </div>
                        </div>  
                        <div className="member-text row ml-2">
                        <a className="member-email" href="mailto:reaz.hossain@seed120.com " target="_blank">reaz.hossain@seed120.com </a>
                        </div>
                    </div>
                </div>
                <div className="row top-buffer mx-md-n5">
                    <div className="col-md-4 member-box">
                        <div className="row">
                            <div className="col-md-4">
                                <img src={image7} className="img-fluid rounded-start"/>
                            </div>  
                            <div className="col-md-6 mt-2">
                                <h5 className='mt-6'>Michelle BIDIAS</h5>
                                <p className="text-muted member-post">
                                    Sales Representative, Seed120 Ltd.
                                </p>
                                {/* <a className='member-links' href="https://twitter.com/"><Icon.Twitter className="icon" color="#09b6b0" /></a> */}
                                <a className='member-links' href="https://www.linkedin.com/in/hubert-nana-a1b9aa55/" target="_blank"><Icon.Linkedin className="icon ml-3" color="#09b6b0" /></a>
                                {/* <a className="member-email" href="mailto:hubert.nana@seed120.com">hubert.nana@seed120.com</a> */}
                            </div>
                        </div>  
                        <div className="member-text row ml-2">
                            <a className="member-email" href="mailto:michelle.zintchem@seed120.com" target="_blank">michelle.zintchem@seed120.com</a>
                        </div>
                    </div>

                    <div className="col-md-4 member-box  ">
                        <div className="row ">
                            <div className="col-md-4">
                                <img src={image6} className="img-fluid rounded-start"/>
                            </div>  
                            <div className="col-md-8 mt-2">
                                <h5 className='mt-6'>Simon Brice MELONG</h5>
                                <p className="text-muted member-post">
                                    Web & Graphic Designer, Seed120 Ltd.
                                </p>
                                {/* <a href="https://twitter.com/"><Icon.Twitter className="icon" color="#09b6b0" /></a> */}
                                <a href="https://www.linkedin.com/in/brice-melong-503443175/" target="_blank"><Icon.Linkedin className="icon ml-3" color="#09b6b0" /></a>
                            </div>
                        </div>  
                        
                        <div className="member-text row ml-2">
                        <a className="member-email" href="nde.brice@seed120.com" target="_blank">nde.brice@seed120.com</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    )
}

export default Team