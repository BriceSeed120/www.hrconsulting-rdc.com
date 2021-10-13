import React from 'react'
import Technologies from '../Atoms/Technologies'
import Clients from '../Atoms/Clients'


import HsdLogo from "../../../Images/1x/HsdLogo.png"
// import RecruitmentLogo from "../../../Images/1x/RecruitmentLogo.png"
import avisLogo from "../../../Images/Client Logo/avis.png"
import BluewireLogo from "../../../Images/Client Logo/Bluewire.png"
import eccLogo from "../../../Images/Client Logo/ecc.png"
import EtikaLogo from "../../../Images/Client Logo/Etika.png"
import NeshelyLogo from "../../../Images/Client Logo/Neshely.png"
import MaarebLogo from "../../../Images/Client Logo/Maareb.png"
import ParadigmLogo from "../../../Images/Client Logo/Paradigm.png"

const ClientAndTech = () =>{
    return(
        <>
            <section id="clients">


                {/* Technologies Used  */}

                <Technologies />


                {/* Client sub-section */}
                <div id='' className='section'>
                    
                    <div className='client-section'>
                        <h2 className='section-titel tech-title'><center><span>Our</span> Client </center></h2>
                        <div className="wrap">
                    <ul className="clients">
                        {/* <li><a href=""><img src={RecruitmentLogo} alt="HSD Human Resource" /></a></li> */}
                        <li><a href=""><img src={HsdLogo} /></a></li>
                        <li><a href=""><img src={avisLogo} alt="Avis" /></a></li>
                        <li><a href=""><img src={BluewireLogo} alt="Bluewire" /></a></li>
                        <li><a href=""><img src={eccLogo} alt="ECC" /></a></li>
                        <li><a href=""><img src={EtikaLogo} /></a></li>
                        <li><a href=""><img src={NeshelyLogo} alt="Avis" /></a></li>
                        <li><a href=""><img src={MaarebLogo} alt="Bluewire" /></a></li>
                        <li><a href=""><img src={ParadigmLogo} alt="ECC" /></a></li>
                    </ul>
                    <ul className="clients">
                        {/* <li><a href=""><img src={RecruitmentLogo} alt="HSD Human Resource" /></a></li> */}
                        {/* <li><a href=""><img src={EtikaLogo} /></a></li>
                        <li><a href=""><img src={NeshelyLogo} alt="Avis" /></a></li>
                        <li><a href=""><img src={MaarebLogo} alt="Bluewire" /></a></li>
                        <li><a href=""><img src={ParadigmLogo} alt="ECC" /></a></li> */}
                    </ul>
                    </div>
                    </div>
                </div>
                </section>
        </>
    )
}

export default ClientAndTech