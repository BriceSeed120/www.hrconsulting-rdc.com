import React from 'react'

import image1 from '../../../Images/Team/1x/Hubert.png'
import HsdLogo from "../../../Images/1x/HsdLogo.png"
import RecruitmentLogo from "../../../Images/1x/RecruitmentLogo.png"
// import avisLogo from "../../../Images/1x/avis.png"
// import BluewireLogo from "../../../Images/ClientLogo/Bluewire.png"
// import eccLogo from "../../../Images/ClientLogo/ecc.png"
// import EtikaLogo from "../../../Images/ClientLogo/Etika.png"
// import NeshelyLogo from "../../../Images/ClientLogo/Neshely.png"
// import MaarebLogo from "../../../Images/ClientLogo/Maareb.png"
// import ParadigmLogo from "../../../Images/ClientLogo/Paradigm.png"
import Fade from 'react-reveal/Fade';

const Client = () => {
    return(
        <>
            <div className='section'>
                <h2 className='section-titel'><center><span>Our</span> Clients </center></h2>

                <div className="wrap">
                    <Fade bottom>
                        <ul className="clients">
                            <li><a href=""><img src="https://www.kallman.com/sites/default/files/u20/RAF.svg" alt="UAE" /></a></li>
                            <li><a href=""><img src="https://webslides.tv/static/images/logos/airbnb.svg" alt="Airbnb" /></a></li>
                            <li><a href=""><img src="https://webslides.tv/static/images/logos/apple.svg" alt="Apple" /></a></li>
                            <li><a href=""><img src="https://webslides.tv/static/images/logos/microsoft.svg" alt="Microsoft" /></a></li>
                        </ul>
                    </Fade>
                </div>
            </div>
        </>
    )
}

export default Client