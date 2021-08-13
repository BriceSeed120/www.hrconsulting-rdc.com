import React from 'react'
import {Container, Row, Col} from 'react-bootstrap'
import ReactPlayer from 'react-player'

const AboutUs = (props) =>{
    return (
        <>
            <div className='section' id='about'>
                <div className="container seed-section ">
                    {/* <center>
                        <h1 className='justify-self-center'>About Us</h1>
                    </center> */}
                    <div className="row">
                        <div className="col-xs-12 col-md-6 content-fluid">
                            <ReactPlayer className='rounded img-fluid max-width: 100%' playing={false} controls={true} url="http://www.youtube.com/watch?v=A2HFusWQIeE"></ReactPlayer>
                        </div>
                        <div className="col-xs-12 col-md-6">
                            <div className="about-text">
                                <h2 className='section-title'>About <span>Us</span></h2>
                                <p className="wellcome-seed">
                                Welcome to Seed120 Software Solutions Limited
                                </p>Seed120 is one of the fastest growing IT Solutions Company operating from Cyprus, Cameroon and Gabon. Since its inception in 2020, Seed120 system has emerged as a provider of pioneer customized IT solutions and today Seed120 takes the pride to have introduced solutions like Harvest Pay (first ever customized Payroll Solution for Cameroon and Gabon, Cyprus, UK)
                            </div>
                        </div>
                    </div>
                </div>
                {/* <Container>
                    <Row>
                        <Col sm='6'>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo sequi dignissimos officiis, obcaecati ipsum nisi, quas aspernatur nemo omnis ipsa saepe harum neque modi consequatur doloribus eaque odit veniam? Amet. of 2</Col>
                        <Col sm='6'>2 Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro similique molestias quasi ullam minima vero esse accusamus nisi debitis architecto culpa, ex odit, corrupti dolor commodi perferendis. Deleniti, nostrum debitis?</Col>
                    </Row>
                </Container> */}
            </div >
        </>
    )
}

export default AboutUs;