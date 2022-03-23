import React, {Component} from 'react'
import NavBar from '../Molecules/NavBar'
import Hero from '../Organisms/Hero'
import Container from 'react-bootstrap'

class Header extends Component {
    render (){
        return (
            <div className=''>
                    <NavBar />
                    <Hero />
            </div>
        )
    }
}

export default Header