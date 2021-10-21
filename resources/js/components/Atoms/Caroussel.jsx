import React, { Component } from 'react'
import {Carousel} from 'react-bootstrap'
import Fade from 'react-reveal/Fade'
// import {SlideImage1, SlideImage2, SlideImage3} from '../../../Images'
import {Animated} from "react-animated-css"
import SlideImage1 from '../../../Images/SlideImage1.png'
import SlideImage2 from '../../../Images/SlideImage2.png'
import SlideImage3 from '../../../Images/SlideImage3.png'
import SlideImage4 from '../../../Images/mobiledev.png'
import SlideImage5 from '../../../Images/security.png'

const Caroussel = () => {
    return (
        <div>
            <Carousel id='home' fade className=''>
                <Carousel.Item>
                    <img
                    className="d-block w-100 img-lightning"
                    src={SlideImage1}
                    alt="First slide"
                    />
                    <div className="carousel-caption">
                        <Fade top>
                            <h1 className='carousel-title'>WELCOME TO</h1>
                        </Fade>
                        <Fade left>
                            <h1 className='carousel-title-seed'><title>SEED120</title></h1>
                        </Fade>
                        <Fade bottom>
                            <p> In the service of your Future !</p>
                        </Fade>
                    </div>
                </Carousel.Item>
                <Carousel.Item>
                    <img
                    className="d-block w-100 img-lightning"
                    src={SlideImage2}
                    alt="Second slide"
                    />
                    <div className="carousel-caption">

                    <Fade top>
                            <h1 className='carousel-title'>Software solution, Web portal & Customized software</h1>
                        </Fade>
                        <Fade left>
                            <h1 className='carousel-title-seed'>Development</h1>
                        </Fade>
                        {/* <Fade bottom>
                            <p>Offshore Software Development team for high-quality at affordable rate</p>
                        </Fade> */}
                        <Fade top>
                            <h1 className='carousel-title'> </h1>
                        </Fade>
                        <Fade bottom>
                            <p>Expert software development team for high-quality at affordable rates</p>
                        </Fade>
                        
                    </div>
                </Carousel.Item>
                <Carousel.Item>
                    <img
                    className="d-block w-100 img-lightning"
                    src={SlideImage4}
                    alt="Third slide"
                    />

                    <div className="carousel-caption">
                    <Fade top>
                            <h1 className='carousel-title'>E-Commerce & Mobile</h1>
                        </Fade>
                        <Fade left>
                            <h1 className='carousel-title-seed'>Application Development</h1>
                        </Fade>
                        <Fade bottom>
                            <p>We care your ideas, come true with Seed120</p>
                        </Fade>

                        <Fade top>
                            <h1 className='carousel-title'> </h1>
                        </Fade>
                        <Fade bottom>
                            <p></p>
                        </Fade>
                    </div>
                </Carousel.Item>
                <Carousel.Item>
                    <img
                    className="d-block w-100 img-lightning"
                    src={SlideImage5}
                    alt="Third slide"
                    />

                    <div className="carousel-caption">

                    <Fade top>
                            <h1 className='carousel-title'>ICT/IT/ITES Securities &</h1>
                        </Fade>
                        <Fade left>
                            <h1 className='carousel-title-seed'>Optimization</h1>
                        </Fade>
                        <Fade bottom>
                            <p>We ensure the security of your web media.</p>
                        </Fade>

                   
                    </div>
                </Carousel.Item>
                <Carousel.Item>
                    <img
                    className="d-block w-100 img-lightning"
                    src={SlideImage3}
                    alt="Third slide"
                    />

                    <div className="carousel-caption">

                    <Fade top>
                            <h1 className='carousel-title'>Education & Training </h1>
                        </Fade>
                        <Fade left>
                            <h1 className='carousel-title-seed'>Services</h1>
                        </Fade>
                        <Fade bottom>
                            <p>We are involved in training your talents to ensure a sustainable future.</p>
                        </Fade>

                   
                    </div>
                </Carousel.Item>

                




            </Carousel>
        </div>
    )
}
export default Caroussel