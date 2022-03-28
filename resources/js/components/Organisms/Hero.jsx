import React, {Component} from 'react'
import heroimage from "../../../Images/heroimage.png"
import TypeAnimation from 'react-type-animation'

class Hero extends Component {
    render (){
        return (
            <div>
                <section id="hero" className="hero d-flex align-items-center">

                    <div className="container">
                    <div className="row">
                        <div className="col-lg-6 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up" className="aos-init aos-animate">La passion pour vos solutions "RH"</h1>
                        <TypeAnimation
                            cursor={true}
                            sequence={[
                            'Recruitment  ',
                            1000,
                            'Online Evaluations of employees',
                            1000,
                            'Employee Relations Management',
                            1000,
                            'Global HR Management Online Counseling ',
                            1000,
                            'HR Specific Task Force',
                            1000,
                            ]}
                            wrapper="h2"
                            repeat={Infinity}
                        />
                        {/* <h2>
                        Recruitment (Selection of candidates using "Central Test" online tests) / Online Evaluations of employees / Employee Relations Management / Global HR Management Online Counseling / HR Specific Task Force
                        </h2> */}
                        <div data-aos="fade-up" data-aos-delay="600" className="aos-init aos-animate">
                            <div className="text-center text-lg-start">
                            <a href="#about" className="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Nous contacter</span>
                                <i className="bi bi-arrow-right"></i>
                            </a>
                            </div>
                        </div>
                        </div>
                        <div className="col-lg-6 hero-img aos-init aos-animate" data-aos="zoom-out" data-aos-delay="200">
                        <img src={heroimage} className="img-fluid" alt=""/>
                        </div>
                    </div>
                    </div>

                </section>
            </div>
        )
    }
}

export default Hero