import React, { Component } from 'react'
import SmoothScroll from 'smooth-scroll'

import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faArrowUp } from '@fortawesome/free-solid-svg-icons'


import $ from 'jquery'

import { BrowserRouter as Router, Route, Switch } from 'react-router-dom'

import Header from  '../Organisms/Header'
import AboutUs from '../Organisms/AboutUs'
import Services from '../Organisms/Services'
import Products from '../Organisms/Products'
import Team from '../Organisms/Team'
import ClientAndTech from '../Organisms/ClientAndTech'
import ContactUs from '../Organisms/ContactUs'
import Footer from '../Molecules/Footer'

export const scroll = new SmoothScroll('a[href*="#"]', {
    speed: 1000,
    speedAsDuration: true,
})

class Home extends Component {

    componentDidMount (){
        console.log($(".hero"))
    }

    render(){
        return (
            <div>
                <Header />
                <AboutUs/>
                <Services />
                {/* <Products /> */}
                {/* <Team/> */}
                <ClientAndTech />
                <ContactUs/>
                <Footer/> 
                <a href="#" className="back-to-top d-flex align-items-center justify-content-center active"><FontAwesomeIcon icon={faArrowUp} className='i white'/></a>
            </div>
        )
    }   

}

export default Home