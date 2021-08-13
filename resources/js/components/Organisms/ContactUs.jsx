import React from 'react'

import Map from '../Atoms/Map'
import Contact from '../Atoms/Contact'

const ContactUs = () =>{
    return(
        <>
            <section id="contact">
                <div className="container">
                    <div className="row">
                        <div className="col-xl-6">
                            {/* <Map/> */}
                        </div>
                        <div className="col-xl-6">
                            <Contact />
                        </div>
                    </div>
                </div>
            </section>
        </>
    )
}

export default ContactUs