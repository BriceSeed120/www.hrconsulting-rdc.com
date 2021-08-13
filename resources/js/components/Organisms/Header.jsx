import React, {Component} from 'react'
import NavBar from '../Molecules/NavBar'
import Caroussel from '../Atoms/Caroussel';
import Container from 'react-bootstrap'

class Header extends Component {
    render (){
        return (
            <div className=''>
                {/* <Container fluid> */}
                    <NavBar />
                    <Caroussel />
                {/* </Container> */}
            </div>
        )
    }
}

export default Header