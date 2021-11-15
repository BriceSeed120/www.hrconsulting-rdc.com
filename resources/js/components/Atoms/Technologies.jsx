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



import image1 from "../../../Images/techlogo/1x/html.png"
import image2 from "../../../Images/techlogo/1x/css.png"
import image3 from "../../../Images/techlogo/1x/javascript.png"
import image4 from "../../../Images/techlogo/1x/bootstrap.png"
import image5 from "../../../Images/techlogo/1x/vuejs.png"
import image6 from "../../../Images/techlogo/1x/reactjs.png"
import image7 from "../../../Images/techlogo/1x/angular.png"
import image8 from "../../../Images/techlogo/1x/electron.png"
import image9 from "../../../Images/techlogo/1x/laravel.png"
import image10 from "../../../Images/techlogo/1x/reactnative.png"
import image11 from "../../../Images/techlogo/1x/flutter.png"
import image12 from "../../../Images/techlogo/1x/android.png"
import image13 from "../../../Images/techlogo/1x/swiftjs.png"
import image14 from "../../../Images/techlogo/1x/nodejs.png"
import image15 from "../../../Images/techlogo/1x/mongodb.png"
import image16 from "../../../Images/techlogo/1x/mysql.png"
import image17 from "../../../Images/techlogo/1x/sqlserver.png"
import image18 from "../../../Images/techlogo/1x/couchbase.png"
import image19 from "../../../Images/techlogo/1x/sqlserver.png"
import image20 from "../../../Images/techlogo/1x/elastic.png"
import image21 from "../../../Images/techlogo/1x/googlecloud.png"
import image22 from "../../../Images/techlogo/1x/aws.png"

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
        <section className=''>
          <div className="container section ">
            <h2 className='section-titel'><center>Technologies <span>We Use</span></center></h2>
              {/* <AliceCarousel
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
              </AliceCarousel> */}

              <div className="row gy-5">
                <div className="col-md-2 techimage-container">
                  <img className='img-fluid techimage' src={image1} alt="image1" />
                </div>
                <div className="col-md-2 techimage-container">
                  <img className='img-fluid techimage' src={image2} alt="image2" />
                </div>
                <div className="col-md-2 techimage-container">
                  <img className='img-fluid techimage' src={image3} alt="image3" />
                </div>
                <div className="col-md-2 techimage-container">
                  <img className='img-fluid techimage' src={image4} alt="image4" />
                </div>
                <div className="col-md-2 techimage-container">
                  <img className='img-fluid techimage' src={image5} alt="image5" />
                </div>
                <div className="col-md-2 techimage-container">
                  <img className='img-fluid techimage' src={image6} alt="image6" />
                </div>
              </div>
              {/* <br /> */}
              <div className="row">
                <div className="col-md-2 techimage-container">
                  <img className='img-fluid techimage' src={image7} alt="image7" />
                </div>
                <div className="col-md-2 techimage-container">
                  <img className='img-fluid techimage' src={image8} alt="image8" />
                </div>
                <div className="col-md-2 techimage-container">
                  <img className='img-fluid techimage' src={image9} alt="image9" />
                </div>
                <div className="col-md-2 techimage-container">
                  <img className='img-fluid techimage' src={image10} alt="image10" />
                </div>
                <div className="col-md-2 techimage-container">
                  <img className='img-fluid techimage' src={image11} alt="image11" />
                </div>
                <div className="col-md-2 techimage-container">
                  <img className='img-fluid techimage' src={image12} alt="image12" />
                </div>
              </div>
              <div className="row">
                <div className="col-md-2 techimage-container">
                  <img className='img-fluid techimage' src={image13} alt="image13" />
                </div>
                <div className="col-md-2 techimage-container">
                  <img className='img-fluid techimage' src={image14} alt="image14" />
                </div>
                <div className="col-md-2 techimage-container">
                  <img className='img-fluid techimage' src={image15} alt="image15" />
                </div>
                <div className="col-md-2 techimage-container">
                  <img className='img-fluid techimage' src={image16} alt="image16" />
                </div>
                <div className="col-md-2 techimage-container">
                  <img className='img-fluid techimage' src={image17} alt="image17" />
                </div>
                <div className="col-md-2 techimage-container">
                  <img className='img-fluid techimage' src={image18} alt="image18" />
                </div>
              </div>
              <div className="row">
                <div className="col-md-2 techimage-container">
                  <img className='img-fluid techimage' src={image19} alt="image19" />
                </div>
                <div className="col-md-2 techimage-container">
                  <img className='img-fluid techimage' src={image20} alt="image20" />
                </div>
                <div className="col-md-2 techimage-container">
                  <img className='img-fluid techimage' src={image21} alt="image21" />
                </div>
                <div className="col-md-2 techimage-container">
                  <img className='img-fluid techimage' src={image22} alt="image22" />
                </div>
              </div>
          </div>
        </section>
           
        </>
    )
    }
}

export default Technologies