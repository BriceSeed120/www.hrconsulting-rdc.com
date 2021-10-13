import React from 'react'

import GoogleApiWrapper from '../Atoms/Map'
import Contact from '../Atoms/Contact'
import { faDiceFive } from '@fortawesome/free-solid-svg-icons'

const ContactUs = () =>{
    return(
        <>
            <div className='section' id="contact">
            <h2 className='mt-10 section-titel'><center><span>Contact </span>Us</center></h2>
                <div className="container">
                    <div className="row gy-5">
                        <div className="col-xs-12 gy-5 col-md-6 content-fluid">
                            {/* <div className="container-fluid map"> */}
                            <GoogleApiWrapper className='rounded img-fluid'/>
                            {/* </div> */}
                        </div>
                        <div className="col-xs-12 gy-5 col-md-6 content-fluid">
                            <Contact />
                        </div>
                    </div>
                </div>
            </div>
        </>
    )
}

export default ContactUs