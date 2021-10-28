import React from 'react'

import GoogleApiWrapper from '../Atoms/Map'
import Contact from '../Atoms/Contact'
import { faDiceFive } from '@fortawesome/free-solid-svg-icons'

import Fade from 'react-reveal/Fade';

const ContactUs = () =>{
    return(
        <>
            <div className='section' id="contact">
            <h2 className='mt-10 section-titel'><center><span>Contact </span>Us</center></h2>
                <div className="container">
                    <div className="row services-row gy-5">
                        <Fade left>
                            <div className="col-md-6 content-fluid map">
                                {/* <div className="container-fluid map"> */}
                                <GoogleApiWrapper className='rounded img-fluid'/>
                                {/* </div> */}
                            </div>
                        </Fade>
                        <Fade right>
                            <div className="col-md-6 content-fluid">
                                <Contact />
                            </div>
                        </Fade>
                    </div>
                </div>
            </div>
        </>
    )
}

export default ContactUs