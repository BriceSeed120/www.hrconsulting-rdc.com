import React, { Component } from 'react'
import {Carousel} from 'react-bootstrap';
import Fade from 'react-reveal/Fade';
// import {SlideImage1, SlideImage2, SlideImage3} from '../../../Images'
import {Animated} from "react-animated-css";
import SlideImage1 from '../../../Images/SlideImage1.png'
import SlideImage2 from '../../../Images/SlideImage2.png'
import SlideImage3 from '../../../Images/SlideImage3.png'

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
                            <h1 className='carousel-title-seed'>SEED120</h1>
                        </Fade>
                        <Fade bottom>
                            <p>Where we make your simple easy business processes</p>
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
                            <h1 className='carousel-title'>SECOND TITLE</h1>
                        </Fade>
                        <Fade bottom>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat repellat nulla odit, error suscipit maxime numquam perspiciatis fugit minus vero quo. Minus laborum ullam, animi cumque itaque eaque rerum voluptatum.</p>
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
                            <h1 className='carousel-title'>SECOND TITLE</h1>
                        </Fade>
                        <Fade bottom>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat repellat nulla odit, error suscipit maxime numquam perspiciatis fugit minus vero quo. Minus laborum ullam, animi cumque itaque eaque rerum voluptatum.</p>
                        </Fade>
                    </div>
                </Carousel.Item>
            </Carousel>
        </div>
    )
}
export default Caroussel