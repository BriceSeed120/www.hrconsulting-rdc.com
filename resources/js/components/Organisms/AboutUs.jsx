import React from 'react'
import {Container, Row, Col} from 'react-bootstrap'
import ReactPlayer from 'react-player'

import Fade from 'react-reveal/Fade';

const AboutUs = (props) =>{
    return (
        <>
            <div className='section' id='about'>
                <div className="container seed-section ">
                    {/* <center>
                        <h1 className='justify-self-center'>About Us</h1>
                    </center> */}
                    <div className="row">
                        <Fade bottom>
                            <div className="col-xs-12 col-md-6 content-fluid">
                                <ReactPlayer className='rounded img-fluid max-width: 100%' playing={false} controls={true} url="https://www.youtube.com/watch?v=wqgh7QFn-H4"></ReactPlayer>
                            </div>
                        </Fade>
                        <Fade bottom>
                            <div className="col-xs-12 col-md-6">
                                <div className="about-text">
                                    <h2 className='section-title'>About <span>Us</span></h2>
                                    {/* <p className="wellcome-seed">
                                    Welcome to Seed120 Software Solutions Limited </p> */}
                                    <p>
                                        <strong><span className="seedWord">Seed120 Ltd.</span></strong> is an international <strong className="seedWord">IT Business Solutions and Consultancy firm</strong> headquartered in<strong><span className="seedGreen"> Lemesos, Cyprus</span></strong>. 

                                        Established in 2020, <strong><span className="seedGreen"> Seed120 Ltd.</span></strong> provides global services to its clients through its offices in <strong><span>Cyprus, Cameroon</span></strong> and <strong><span>Gabon</span></strong>. 

                                        <span> Seed120 Ltd.</span> has strategic business partnerships with many leading and key players in the <strong><span>technology industry</span></strong>. 
                                    </p>
                                    <p>
                                        We have a strong and enthusiastic development team made up of young engineers who have vast experience on <strong><span>software development, apps development and games development</span></strong> to name but a few. 
                                        We lay emphasis on <strong>Research and Development </strong> and we delve for innovation in all our products before launching them in the market.                                 </p>
                                </div>
                            </div>
                        </Fade>
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