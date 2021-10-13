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
                                {/* <p className="wellcome-seed">
                                Welcome to Seed120 Software Solutions Limited </p> */}
                                <p>Seed120 Ltd is an international IT Business Solutions and Consultancy firm headquartered in Lemesos, Cyprus. Established in 2020, Seed120 provides global services to its clients through its offices in Cyprus, Cameroon and Gabon. Seed120 has strategic business partnerships with many leading and key players in the technology industry.</p>
                                <p>We have a strong and enthusiastic development team made up of young engineers who have vast experience in software development, apps development and games development to name but a few. We lay emphasis on Research and Development and we delve for innovation in all our products before launching them in the market.</p>
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