import React, { Component } from 'react'

import Slider from "react-slick"; 

import "slick-carousel/slick/slick.css"
import "slick-carousel/slick/slick-theme.css"

import AliceCarousel from 'react-alice-carousel';
import 'react-alice-carousel/lib/alice-carousel.css';

const handleDragStart = (e) => e.preventDefault();

const items = [
  <img src="path-to-img" onDragStart={handleDragStart} />,
  <img src="path-to-img" onDragStart={handleDragStart} />,
  <img src="path-to-img" onDragStart={handleDragStart} />,
];



import image1 from "../../../Images/Tech/1x/laravel.png"
import image2 from "../../../Images/Tech/1x/java.png"
import image3 from "../../../Images/Tech/1x/javascript.png"
import image4 from "../../../Images/Tech/1x/codeigniter.png"
import image5 from "../../../Images/Tech/1x/cakephp.png"
import image6 from "../../../Images/Tech/1x/mysql.png"
import image7 from "../../../Images/Tech/1x/oracle.png"
import image8 from "../../../Images/Tech/laravel.png"

class Technologies extends Component {
    // var settings = {
    //     dots: true,
    //     infinite: true,
    //     speed: 500,
    //     slidesToShow: 5,
    //     slidesToScroll: 5,
    //     initialSlide: 0,
    //     responsive: [
    //       {
    //         breakpoint: 1024,
    //         settings: {
    //           slidesToShow: 3,
    //           slidesToScroll: 3,
    //           infinite: true,
    //           dots: true
    //         }
    //       },
    //       {
    //         breakpoint: 600,
    //         settings: {
    //           slidesToShow: 2,
    //           slidesToScroll: 2,
    //           initialSlide: 2
    //         }
    //       },
    //       {
    //         breakpoint: 480,
    //         settings: {
    //           slidesToShow: 1,
    //           slidesToScroll: 1
    //         }
    //       }
    //     ]
    //   }; 
    onSlideChange(e) {
      console.log('Item`s position during a change: ', e.item);
      console.log('Slide`s position during a change: ', e.slide);
    }
  
    onSlideChanged(e) {
      console.log('Item`s position after changes: ', e.item);
      console.log('Slide`s position after changes: ', e.slide);
    }
    render(){
      const responsive = {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1024: {
          items: 3
        }
      };
      return(
        <>
        <section>
          <div className="container section">
            <h2 className='section-titel'><center>Technologies <span>We Use</span></center></h2>
              {/* <Slider className='mt-10 sliderrr' {...settings}>
                  <div className="sliderr"><img className='img-fluid techimage' src={image1} alt="" /></div>
                  <div className="sliderr"><img className='img-fluid techimage' src={image2} alt="" /></div>
                  <div className="sliderr"><img className='img-fluid techimage' src={image3} alt="" /></div>
                  <div className="sliderr"><img className='img-fluid techimage' src={image4} alt="" /></div>
                  <div className="sliderr"><img className='img-fluid techimage' src={image5} alt="" /></div>
                  <div className="sliderr"><img className='img-fluid techimage' src={image6} alt="" /></div>
                  <div className="sliderr"><img className='img-fluid techimage' src={image7} alt="" /></div>
              </Slider>                 */}
              {/* <AliceCarousel mouseTracking items={items} /> */}
              <AliceCarousel
                duration={400}
                autoPlay={true}
                startIndex = {1}
                fadeOutAnimation={true}
                mouseDragEnabled={true}
                playButtonEnabled={true}
                responsive={responsive}
                autoPlayInterval={2000}
                autoPlayDirection="rtl"
                autoPlayActionDisabled={true}
                onSlideChange={this.onSlideChange}
                onSlideChanged={this.onSlideChanged}
              >
                <div className="sliderr"><center><img className='img-fluid ' src={image1} alt="" /></center></div>
                <div className="sliderr"><img className='img-fluid techimage' src={image2} alt="" /></div>
                <div className="sliderr"><img className='img-fluid techimage' src={image3} alt="" /></div>
                <div className="sliderr"><img className='img-fluid techimage' src={image4} alt="" /></div>
                <div className="sliderr"><img className='img-fluid techimage' src={image5} alt="" /></div>
                <div className="sliderr"><img className='img-fluid techimage' src={image6} alt="" /></div>
                <div className="sliderr"><img className='img-fluid techimage' src={image7} alt="" /></div>
              </AliceCarousel>
          </div>
        </section>
           
        </>
    )
    }
}

export default Technologies